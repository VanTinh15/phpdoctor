<?php
    session_start();
    ob_start();
    
    include 'model/connectDB.php';
    include 'model/ketnoi/chuyenmuc.php';
    include 'model/ketnoi/bacsi.php';
    include 'model/ketnoi/lienhe.php';
    include 'model/ketnoi/taikhoan.php';
    include 'model/ketnoi/lich_hen.php';
    include 'model/ketnoi/benhnhan.php';
    include 'model/ketnoi/giokham.php';
    include 'model/ketnoi/benhvien.php';
    include 'model/ketnoi/chuyenkhoa.php';
    include 'model/ketnoi/baiviet.php';


    include 'view/navbar.php';
    
    
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'trangchu':
                $kqbacsi = hienthi_bacsi();
                $kqbaiviet = hienthi_baiviet();
                include 'view/header.php';
                include 'view/home.php';
                break;
            case 'gioithieu':
                
                include 'view/hienthi/about.php';
                break;
            case 'bacsi':
              
                $kqbacsi = hienthi_bacsi_benhvien();
                include 'view/hienthi/doctor.php';
                break;
            case 'baiviet':

                $kqbaiviet = hienthi_baiviet();
                include 'view/hienthi/category.php';
                break;



            case 'lienhe':
                if (isset($_SESSION['user_name']) && isset($_SESSION['email'])) {
                    $username = $_SESSION['user_name'];
                    $email = $_SESSION['email'];
                }

                if (isset($_POST['guilienhe'])) {
                    $contact_name = $_POST['contact_name'];
                    $contact_email = $_POST['contact_email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                
                    if ($contact_name && $contact_email && $subject && $message) {
                        them_lienhe($contact_name, $contact_email, $subject, $message);
                        $_SESSION['success_message'] = "Gửi liên hệ thành công!";
                    } else {
                        $_SESSION['error_message'] = "Vui lòng điền đầy đủ thông tin!";
                    }
                    header('location:index.php?act=lienhe');
                    exit();
                } 
               
                include 'view/hienthi/contact.php';
                break;
            

            case 'datlich':
                
                if (isset($_SESSION['user_name']) && isset($_SESSION['email']) && $_SESSION['user_role'] == 'patient') {
                    $username = $_SESSION['user_name'];
                    $email = $_SESSION['email'];
                    $user_id = $_SESSION['user_id'];
                }else{
                    header('location:index.php?act=dangnhap');
                    exit();
                }
                
                $kqchuyenkhoa = hienthi_chuyenkhoa();
                $kqbenhvien = hienthi_benhvien();
                $kqtaikhoan = hienthi_taikhoan();
                $kqlichhen = hienthi_lichhen();
                $kqbenhnhan = hienthi_benhnhan();
                $kqbacsi = hienthi_bacsi();
                $kqgiokham = hienthi_giokham();
                include 'view/hienthi/appointment.php';
                break;
            
            case 'datlichkham':
                
                if(isset($_POST['datlichkham']) ){
                    
                    $patient_id = $_POST['patient_id'];
                    $doctor_id = $_POST['doctor_id'];
                    $appointment_date = $_POST['appointment_date'];
                    $appointment_time = $_POST['appointment_time'];
                   
                    $created_at = date('Y-m-d');
                    $app_describe = $_POST['app_describe'];
                    $hospital_id = $_POST['hospital_id'];
                    $specializations_id = $_POST['specializations_id'];

                    them_lichhen($patient_id,$doctor_id,$appointment_date,$appointment_time,$created_at,$app_describe,$hospital_id,$specializations_id);
                    
                    $_SESSION['message']= 'Đặt lịch hẹn khám thành công!';
                    header('Location: index.php?act=datlich');
                    exit();
                }else{
                    $_SESSION['message']= 'Đặt lịch hẹn khám thành công!';
                    header('Location: index.php?act=datlich');
                    exit();
                }
 

            case 'dangnhap':
                if (isset($_POST['dang-nhap'])) {
                   
                    $email = $_POST['email'];
                    $password = $_POST['password'];
            
                    $kquser = check_use($email, $password);
                    
                    if ($kquser) {
                        $user_role = $kquser[0]['user_role'];
                        
                        if ($user_role=="doctor") {

                            $_SESSION['user_role'] = $user_role; 
                            $_SESSION['user_name'] = $kquser[0]['user_name'];
                            $_SESSION['user_id'] = $kquser[0]['user_id'];
                            $_SESSION['email'] = $kquser[0]['email'];
                            $_SESSION['doctor_id'] = $kquser[0]['doctor_id'];
                            header('location:index.php');
                            exit(); 
                            
                        } else if($user_role=="patient") {
                            $_SESSION['user_role'] = $user_role; 
                            $_SESSION['user_name'] = $kquser[0]['user_name'];
                            $_SESSION['user_id'] = $kquser[0]['user_id'];
                            $_SESSION['email'] = $kquser[0]['email'];
                            $_SESSION['patient_id'] = $kquser[0]['patient_id'];
                            header('location:index.php');
                            exit(); 
                        }else  {

                            $_SESSION['user_role'] = $user_role;
                            $_SESSION['user_name'] = $kquser[0]['user_name'];

                            $_SESSION['user_id'] = $kquser[0]['user_id'];
                            $_SESSION['email'] = $kquser[0]['email'];
                            header('location:admin/index.php');
                            exit(); 
                            
                        }
                    } else {
                        $txt_eror = 'Sai email hoặc mật khẩu!';
                    }
                }

                include 'view/hienthi/login.php';
                break;
            case 'dangky':
                include 'view/hienthi/sign_up.php';
                break;
            case 'dangky_taikhoan':
                if(isset($_POST['dangky']) ){
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $user_role =  $_POST['user_role'];

                    them_taikhoan($user_name,$password,$email,$user_role);
                    $_SESSION['message'] = "Đăng ký tài khoản thành công!";

                    header('location: index.php?act=dangky');
                    exit();
                }else{
                    $_SESSION["message"] = "Đăng ký tài khoản thất bại!";
                    header('location: index.php?act=dangky');
                    exit();
                }

            
            case 'trangthongtin':
                $bacsi = hienthi_bacsi();

                $kqpro = hienthi_taikhoan();
                $kqbenhnhan = hienthi_benhnhan();
                include 'view/hienthi/profile.php';
                break;


            case 'tranglichkham':

                $lichkham = hienthi_lichhen();
                include 'view/hienthi/lichsukham.php';
                break;
            case 'huy_lichkham';
                if(isset($_GET['appointment_id'])){
                    $id = $_GET['appointment_id'];
                    del_lichhen($id);
                }
                header('location:index.php?act=tranglichkham');
                exit();
                
            case 'huy_lichcho':
                if(isset($_GET['appointment_id'])){
                    $id = $_GET['appointment_id'];
                    huy_lichcho($id);                                   
                }
                header('location:index.php?act=trang-lichhen-bs');
             exit();
            case 'chapnhan_lichkham':
                if(isset($_GET['appointment_id'])){
                    $id = $_GET['appointment_id'];
                    chapnhan_lichkham($id);                                   
                }
                header('location:index.php?act=trang-lichhen-bs');
                exit();

            case 'trang-lichhen-bs':
               
                $lichkham = hienthi_lichhen();
                include 'view/hienthi/lich_hen_bs.php';
                break;
            case 'hienthi_danhsach_bs':
                
                $today = date('Y-m-d');
                $days = [];
                for ($i = 0; $i < 7; $i++) { 
                    $days[] = date('Y-m-d', strtotime("+$i day", strtotime($today)));
                }

                $selectedDate = isset($_GET['date']) ? $_GET['date'] : $today;
                
                $lichkham = loc_ngay_kham();
                include 'view/hienthi/danhsachkham.php';
                break;
            case 'dangxuat':
                session_unset() ;
                session_destroy();
                header('location:index.php?act=dangnhap');
                exit();
            
            default:
                include 'view/hienthi/error.php';
                break;
        }
    }else{
        include 'view/header.php';
        $kqbacsi = hienthi_bacsi();
        $kqbaiviet = hienthi_baiviet();
        include 'view/home.php';
    }

    include 'view/footer.php';
?>