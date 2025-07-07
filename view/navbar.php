<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Đặt lịch khám </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

     <!-- Thêm thư viện Flatpickr qua CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
     <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body>
    
    <?php $current_page = isset($_GET['act']) ? $_GET['act'] : 'trangchu'; 
    
    ?>  

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php?act=trangchu" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php?act=trangchu" class="nav-item nav-link <?php echo $current_page == 'trangchu' ? 'active' : ''; ?>">Trang Chủ</a>
                <a href="index.php?act=gioithieu" class="nav-item nav-link <?php echo $current_page == 'gioithieu' ? 'active' : ''; ?>">Giới Thiệu</a>
                <!-- <a href="index.php?act=baiviet" class="nav-item nav-link <?php //echo $current_page == 'baiviet' ? 'active' : ''; ?>">Bài Viết</a> -->
                <a href="index.php?act=bacsi" class="nav-item nav-link <?php echo $current_page == 'bacsi' ? 'active' : ''; ?>">Bác Sĩ</a>
                <a href="index.php?act=baiviet" class="nav-item nav-link <?php echo $current_page == 'baiviet' ? 'active' : ''; ?>">Bài viết</a>

                <a href="index.php?act=lienhe" class="nav-item nav-link <?php echo $current_page == 'lienhe' ? 'active' : ''; ?>">Liên hệ</a>

                <?php
                if(isset($_SESSION['user_role'])){
                    if($_SESSION['user_role']=="doctor"){
                        echo '
                            <div class ="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bác sĩ</a>
                                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                                   
                                    <a href="index.php?act=trangthongtin" class="dropdown-item">Thông Tin</a>
                                    <a href="index.php?act=hienthi_danhsach_bs" class="dropdown-item">Danh sách khám</a>
                                    <a href="index.php?act=trang-lichhen-bs" class="dropdown-item">Lịch hẹn</a>
                                    <a href="index.php?act=dangxuat" class="dropdown-item">Đăng Xuất</a>
                                    
                                </div>
                            </div>
                        ';
                    }else{
                        echo '
                            <div class ="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bệnh nhân</a>
                                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                                    
                                    <a href="index.php?act=trangthongtin" class="dropdown-item">Thông Tin</a>
                                    <a href="index.php?act=tranglichkham" class="dropdown-item">Lịch Khám</a>
                                    <a href="index.php?act=dangxuat" class="dropdown-item">Đăng Xuất</a>
                                    
                                </div>
                            </div>
                            ';
                    } 
                }else{ ?>
                    <a href="index.php?act=dangnhap" class="nav-item nav-link <?php echo $current_page == 'dangnhap' ? 'active' : ''; ?>">Đăng nhập</a>
                <?php }?>
                
            </div>
            <a href="index.php?act=datlich" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Đặt lịch khám<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


