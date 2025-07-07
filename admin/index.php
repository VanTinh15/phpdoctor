<?php

    session_start();
    ob_start();
    include '../phpmail/Exception.php';
    include '../phpmail/PHPMailer.php';
    include '../phpmail/SMTP.php';

    include '../phpmail/funtions.php';

    include '../model/connectDB.php';
    include '../model/ketnoi/bacsi.php';
    include '../model/ketnoi/chuyenmuc.php';
    include '../model/ketnoi/baiviet.php';
    include '../model/ketnoi/benhnhan.php';
    include '../model/ketnoi/lich_hen.php';
    include '../model/ketnoi/lienhe.php';
    include '../model/ketnoi/benhvien.php';
    include '../model/ketnoi/chuyenkhoa.php';

    include '../model/ketnoi/taikhoan.php';
    

    include 'view/header.php';
    include 'view/sidebar.php';
    

    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'trangchu':

                $kqthongke = thongke_trangthai();
                $kqlichhen = hienthi_lichhen();
                $total_patient = tong_benhnhan();
                $total_doctor = tong_bacsi();
                $total_appointments = tong_lichhen();
                include 'view/home.php';
                break;
            
            
            case 'list_bacsi':

                $kqbacsi = hienthi_bacsi();
                include 'view/hienthi/bacsi/bacsi.php';
                break;
            case 'del_bacsi':
                if(isset($_GET['doctor_id'])){
                    $id = $_GET['doctor_id'];
                    del_bacsi($id);
                }
                $kqbacsi = hienthi_bacsi();
                include 'view/hienthi/bacsi/bacsi.php';
                break;
            case 'add_bacsi':
                if(isset($_POST['thembacsi']) ){
                    $doctor_name = $_POST['doctor_name'];

                    if(isset($_FILES['image']['name']) !=""){
                        $image = $_FILES['image']['name'];
                        
                    }else{
                        $image ="";
                    }


                    $department = $_POST['department'];
                    $profile_description = $_POST['profile_description'];
                    $experience = $_POST['experience'];
                    $degree = $_POST['degree'];
                    $awards_certifications = $_POST['awards_certifications'];
                    $user_id = $_POST['user_id'];
                    $specializations_id =$_POST['specializations_id'];
                    $hospital_id =$_POST['hospital_id'];

                    them_bacsi($doctor_name,$image,$department,$profile_description,$experience,$degree,$awards_certifications,$user_id, $specializations_id,$hospital_id);

                    move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);

                   
                    header('Location: index.php?act=list_bacsi'); 
                    exit();
                }else{
                    $_SESSION['loi'] = '';
                }
                $kqtaikhoan = hienthi_taikhoan();
                $kqchuyenkhoa = hienthi_chuyenkhoa();
                $kqbenhvien = hienthi_benhvien();
                include 'view/hienthi/bacsi/add_bacsi.php';
                break;

            case 'sua_bacsi':
                if(isset($_GET['doctor_id'])){
                    $doctor_id = $_GET['doctor_id'];
                    $bsgetone = get_onebacsi($doctor_id);
                    $kqbacsi = hienthi_bacsi();
                    
                    $kqtaikhoan = hienthi_taikhoan();
                    $kqchuyenkhoa = hienthi_chuyenkhoa();
                    $kqbenhvien = hienthi_benhvien();
                    include 'view/hienthi/bacsi/update_bacsi.php';                             
                }

                if(isset($_POST['suabacsi'])){
                    $doctor_id = $_POST['doctor_id'];
                    $doctor_name = $_POST['doctor_name'];
                   

                    if(isset($_FILES['image']['name']) !=""){
                        $image = $_FILES['image']['name'];
                        
                    }else{
                        $image ="";
                    }

                    $department = $_POST['department'];
                    $profile_description = $_POST['profile_description'];
                    $experience = $_POST['experience'];
                    $degree = $_POST['degree'];
                    $awards_certifications = $_POST['awards_certifications'];
                    $user_id = $_POST['user_id'];
                    $specializations_id =$_POST['specializations_id'];
                    $hospital_id =$_POST['hospital_id'];

                    
                    
                    update_bacsi($doctor_id,$doctor_name,$image,$department,$profile_description,$experience,$degree,$awards_certifications,$user_id, $specializations_id,$hospital_id);

                    move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);
                    $kqbacsi = hienthi_bacsi();
                    
                    header('Location: index.php?act=list_bacsi');
                    exit(); 
                }
               
                break;

            
            case 'list_chuyenmuc':
                $kqchuyenmuc = hienthi_chuyenmuc();
                include 'view/hienthi/chuyenmuc.php';
                break;
            case 'xoa_chuyenmuc':
                if(isset($_GET['category_id'])){
                    $id = $_GET['category_id'];
                    del_chuyenmuc($id);
                }
                $kqchuyenmuc = hienthi_chuyenmuc();
                include 'view/hienthi/chuyenmuc.php';
                break;
            case 'add_chuyenmuc':
                if(isset($_POST['themchuyenmuc']) && ($_POST['themchuyenmuc'])){

                    if(isset($_FILES['image']['name']) !=""){
                        $image = $_FILES['image']['name'];
                        
                    }else{
                        $image ="";
                    }
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $sponsor = $_POST['sponsor'];

                    them_chuyenmuc($image,$title,$content,$sponsor);

                    move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);

                    $kqchuyenmuc = hienthi_chuyenmuc();
                    header('Location: index.php?act=list_chuyenmuc');
                    exit();
                }
                include 'view/hienthi/add_chuyenmuc.php';
                break;
            case 'sua_chuyenmuc':
                if(isset($_GET['category_id'])){
                    $id = $_GET['category_id'];
                    $cmgetone= get_onechuyenmuc($id);
                    $kqchuyenmuc = hienthi_chuyenmuc();
                    include 'view/hienthi/update_chuyenmuc.php';
                
                }
                if(isset($_POST['suachuyenmuc']) && ($_POST['suachuyenmuc'])){
                    $category_id = $_POST['category_id'];

                    if(isset($_FILES['image']['name']) !=""){
                        $image = $_FILES['image']['name'];
                        
                    }else{
                        $image ="";
                    }

                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    
                    $sponsor = $_POST['sponsor'];
                    
                    
                    update_chuyenmuc($category_id,$image,$title,$content,$sponsor);

                    move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);
                    $kqbacsi = hienthi_bacsi();
                    header('Location: index.php?act=list_chuyenmuc');
                    exit(); 
                }

                break;

           
            case 'list_baiviet':
                $kqchuyenmuc = hienthi_chuyenmuc();
                $kqbaiviet = hienthi_baiviet();
                include 'view/hienthi/baiviet.php';
                break;
            case 'xoa_baiviet':
                if(isset($_GET['article_id'])){
                    $id = $_GET['article_id'];
                    del_baiviet($id);
                }
                $kqchuyenmuc = hienthi_chuyenmuc();
                $kqbaiviet = hienthi_baiviet();
                include 'view/hienthi/baiviet.php';
                break;
            case 'add_baiviet':
                if(isset($_POST['thembaiviet']) && ($_POST['thembaiviet'])){

                    $category_id = $_POST['category_id'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];

                    if(isset($_FILES['image']['name']) !=""){
                        $image = $_FILES['image']['name'];
                        
                    }else{
                        $image ="";
                    }
                    
                    $doctor_id = $_POST['doctor_id'];

                    them_baiviet($category_id,$title,$content,$image,$doctor_id);
                    move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);

                    $kqbaiviet = hienthi_baiviet();
                    
                    header('Location: index.php?act=list_baiviet');
                    exit();
                }

                $kqbacsi = hienthi_bacsi();
                $kqchuyenmuc = hienthi_chuyenmuc();
                
                include 'view/hienthi/add_baiviet.php';
                break;

            case 'sua_baiviet':
                if(isset($_GET['article_id'])){
                    $id = $_GET['article_id'];
                    $bvgetone= get_onebaiviet($id);
                    $kqchuyenmuc = hienthi_chuyenmuc();
                    $kqbacsi = hienthi_bacsi();
                    $kqbaiviet = hienthi_baiviet();
                    
                    include 'view/hienthi/update_baiviet.php';
                
                }
                if(isset($_POST['suabaiviet']) && ($_POST['suabaiviet'])){

                    $article_id = $_POST['article_id'];
                    $category_id = $_POST['category_id'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];

                    if(isset($_FILES['image']['name']) !=""){
                        $image = $_FILES['image']['name'];
                        
                    }else{
                        $image ="";
                    }
                    
                    $doctor_id = $_POST['doctor_id'];

                    update_baiviet($article_id,$category_id,$title,$content,$image,$doctor_id);
                
                    move_uploaded_file($_FILES['image']['tmp_name'], "../admin/assets/img/".$_FILES['image']['name']);
                    $kqbacsi = hienthi_bacsi();
                    header('Location: index.php?act=list_baiviet');
                    exit(); 
                }

                break;


          
            case 'list_benhnhan':
                $kqtaikhoan = hienthi_taikhoan();
                $kqbenhnhan = hienthi_benhnhan();
                include 'view/hienthi/benhnhan/benhnhan.php';
                break;
            case 'del_benhnhan':
                if(isset($_GET['patient_id'])){
                    $id = $_GET['patient_id'];
                    del_benhnhan($id);
                }
               
                $kqbenhnhan = hienthi_benhnhan();
                include 'view/hienthi/benhnhan/benhnhan.php';
                break;
            
            case 'add_benhnhan':
                if(isset($_POST['thembenhnhan']) && ($_POST['thembenhnhan']) ){
                    $patient_name = $_POST['patient_name'];
                    $pa_address = $_POST['pa_address'];
                    $date_of_birth = $_POST['date_of_birth'];
                    $gender = $_POST['gender'];
                    $phone_number = $_POST['phone_number'];
                    $user_id = $_POST['user_id'];
                    
                    them_benhnhan($patient_name,$pa_address,$date_of_birth,$gender,$phone_number,$user_id);
                    header('location: index.php?act=list_benhnhan');
                    exit();
                }

                $kqtaikhoan = hienthi_taikhoan();
                include 'view/hienthi/benhnhan/add_benhnhan.php';
                break;
            case 'sua_benhnhan':
                if(isset($_GET['patient_id'])){
                    $id = $_GET['patient_id'];
                    $bngetone = get_benhnhan($id);
                    $kqtaikhoan = hienthi_taikhoan();
                    $kqbenhnhan = hienthi_benhnhan();

                    include 'view/hienthi/benhnhan/update_benhnhan.php';
                }
                if(isset($_POST['patient_id']) && ($_POST['patient_id'])){
                    $patient_id = $_POST['patient_id'];
                    $patient_name = $_POST['patient_name'];
                    $pa_address = $_POST['pa_address'];
                    $date_of_birth = $_POST['date_of_birth'];
                    $gender = $_POST['gender'];
                    $phone_number = $_POST['phone_number'];
                    $user_id = $_POST['user_id'];

                    update_benhnhan($patient_id,$patient_name,$pa_address,$date_of_birth,$gender,$phone_number,$user_id);
                
                    header('Location: index.php?act=list_benhnhan');
                    exit(); 
                }
                break;


      

            case 'list_lichhen':
                $kqlichhen = hienthi_lichhen();
                include 'view/hienthi/dat_lich/lich_hen.php';
                break;
            case 'del_lichhen':
                if(isset($_GET['appointment_id'])){
                    $id = $_GET['appointment_id'];
                    del_lichhen($id);
                }
                $kqbenhnhan = hienthi_benhnhan();
                $kqlichhen = hienthi_lichhen();
                include 'view/hienthi/dat_lich/lich_hen.php';
                break;
                
            case 'sua_lichhen':
                if(isset($_GET['appointment_id'])){
                    $id = $_GET['appointment_id'];
                    $lhgetone = get_lichhen($id);
                    $kqlichhen = hienthi_lichhen();
                    $kqbenhnhan = hienthi_benhnhan();
                    $kqbacsi = hienthi_bacsi();
                    $kqbenhvien = hienthi_benhvien();
                    $kqchuyenkhoa = hienthi_chuyenkhoa();
                    include 'view/hienthi/dat_lich/update_lichhen.php';

                }
                if(isset($_POST['appointment_id']) && ($_POST['appointment_id'])){
                    $appointment_id = $_POST['appointment_id'];
                    $patient_id = $_POST['patient_id'];
                    $doctor_id = $_POST['doctor_id'];
                    $appointment_date = $_POST['appointment_date'];
                    $appointment_time = $_POST['appointment_time'];
                    $appointment_status = $_POST['appointment_status'];
                    $created_at = date('Y-m-d');
                    $app_describe = $_POST['app_describe'];
                    $hospital_id = $_POST['hospital_id'];
                    $specializations_id = $_POST['specializations_id'];

                    update_lichhen($appointment_id,$patient_id,$doctor_id,$appointment_date,$appointment_time,$appointment_status,$created_at,$app_describe,$hospital_id,$specializations_id);
                
                    header('Location: index.php?act=list_lichhen');
                    exit(); 
                }
               
                break;
            // case 'add_datlich':

            //     if(isset($_POST['datlichkham']) ){
                    
            //         $patient_id = $_POST['patient_id'];
            //         $doctor_id = $_POST['doctor_id'];
            //         $appointment_date = $_POST['appointment_date'];
            //         $appointment_time = $_POST['appointment_time'];
                   
            //         $created_at = date('Y-m-d');
            //         $app_describe = $_POST['app_describe'];
            //         $hospital_id = $_POST['hospital_id'];
            //         $specializations_id = $_POST['specializations_id'];

            //         them_lichhen($patient_id,$doctor_id,$appointment_date,$appointment_time,$created_at,$app_describe,$hospital_id,$specializations_id);
                    
            //         $_SESSION['message']= 'Đặt lịch hẹn khám thành công!';
            //         header('Location: index.php?act=list_lichhen');
            //         exit();
            //     }
                
            //     include 'view/hienthi/dat_lich/themlichhen.php';
            //     break;

            
            case 'list_lienhe':               
                $kqlienhe = hienthi_lienhe();
                include 'view/hienthi/lienhe/list_lienhe.php';
                break;
            case 'xoa_lienhe':
                if(isset($_GET['contact_id'])){
                    $id = $_GET['contact_id'];
                    xoa_lienhe($id);
                }
                $kqlienhe = hienthi_lienhe();
                include 'view/hienthi/lienhe/list_lienhe.php';
                break;
            case 'phanhoi_lienhe':
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reply_message']) && isset($_POST['contact_email'])) {
                    $contactID = $_POST['contact_id'];
                    $contact_email = $_POST['contact_email'];
                    $subject = "Phản hồi từ hệ thống";
                    $message = $_POST['reply_message'];

                    update_status($contactID);
                    sendMail($contact_email, $subject, $message);
                    $_SESSION['success_message'] = "Gửi phản hồi thành công!";  
                }
                
                header('location:index.php?act=list_lienhe');
                exit();

            case 'list_taikhoan':
                $kqtaikhoan = hienthi_taikhoan();
                include 'view/hienthi/taikhoan/list_taikhoan.php';
                break;
            case 'del_taikhoan':
                if(isset($_GET['user_id'])){
                    $id = $_GET['user_id'];
                    del_taikhoan($id);
                }
                $kqtaikhoan = hienthi_taikhoan();
                include 'view/hienthi/taikhoan/list_taikhoan.php';
                break;

            case 'add_taikhoan':
                if(isset($_POST['themtaikhoan']) && ($_POST['themtaikhoan']) ){
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $user_role = $_POST['user_role'];
                                     
                    
                    them_taikhoan($user_name,$password,$email,$user_role);
                    header('location: index.php?act=list_taikhoan');
                    exit();
                }
                include 'view/hienthi/taikhoan/add_taikhoan.php';
                break;
            case 'sua_taikhoan':
                if(isset($_GET['user_id'])){
                    $id = $_GET['user_id'];
                    $tkgetone = get_taikhoan($id);
                    $kqtaikhoan = hienthi_taikhoan();
                    include 'view/hienthi/taikhoan/update_taikhoan.php';

                }
                if(isset($_POST['user_id']) && ($_POST['user_id'])){
                    $user_id = $_POST['user_id'];
                    $user_name = $_POST['user_name'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $user_role = $_POST['user_role'];
                  

                    update_taikhoan($user_id,$user_name,$password,$email,$user_role);
                
                    header('Location: index.php?act=list_taikhoan');
                    exit(); 
                }
                break;
            
            case 'thongtin':

                $kqpro = hienthi_taikhoan();
                include "view/profile.php";
                break;

            case 'dangxuat':
                session_unset();
                session_destroy();
                header('location:../index.php');

            default:
                $kqthongke = thongke_trangthai();
                $kqlichhen = hienthi_lichhen();
                $total_patient = tong_benhnhan();
                $total_doctor = tong_bacsi();
                $total_appointments = tong_lichhen();
                include 'view/home.php';

        }
    }else{
        $kqthongke = thongke_trangthai();
        $kqlichhen = hienthi_lichhen();
        $total_patient = tong_benhnhan();
        $total_doctor = tong_bacsi();
        $total_appointments = tong_lichhen();
        include 'view/home.php';
       
    }

    include 'view/footer.php';


?>