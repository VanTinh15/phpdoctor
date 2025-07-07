    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Đăng ký</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Đăng ký</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<div class="container-xxl py-1">
    <div class="container">
        <div class="row g-4">

            <?php
                if (isset($_SESSION['message'])) {
                    echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']); 
                }   
            ?>

        <section class="vh-90">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form action="index.php?act=dangky_taikhoan" method="POST">
                    

                        <div class="divider d-flex align-items-center my-4">
                        
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" name = "user_name" id="form3Example3" class="form-control form-control-lg"
                            placeholder="Nhập tên tài khoản" />
                            <label class="form-label" for="form3Example3">Nhập tên tài khoản</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-3">
                            <input type="text" name="password" id="form3Example4" class="form-control form-control-lg"
                            placeholder="Nhập mật khẩu" />
                            <label class="form-label" for="form3Example4">Mật khẩu</label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input type="email" name="email" id="form3Example4" class="form-control form-control-lg"
                            placeholder="Nhập địa chỉ Email" />
                            <label class="form-label" for="form3Example4">Nhập Email</label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-3">
                        <label for="user_role" class="form-label">Loại tài khoản</label>
                        <select id="user_role" name="user_role" class="form-control form-control-lg">
                            <option value="patient" >Bệnh nhân</option>
                            <option value="doctor" >Bác sĩ</option>
                        </select>
                        </div>
                        
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button  type="submit" name="dangky" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Đã có tài khoản? <a href="index.php?act=dangnhap" class="link-danger">Đăng nhập</a></p>
                        </div>

                    </form>
                </div>
                </div>
            </div>
           
            </section>

        </div>
    </div>
</div>

<style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }
</style>