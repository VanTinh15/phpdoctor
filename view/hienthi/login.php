    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Đăng nhập</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Đăng nhập</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<div class="container-xxl py-1">
    <div class="container">
        <div class="row g-4">

        <section class="vh-90">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form action="index.php?act=dangnhap" class="login-form" method="POST">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Đăng nhập bằng</p>
                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </button>

                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                        </button>

                        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                        <i class="fas fa-envelope"></i>
                        </button>
                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                    </div>

        
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Nhập địa chỉ Email" name="email" />
                        <label class="form-label" for="form3Example3">Địa chỉ Email</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-3">
                        <input type="text" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Nhập mật khẩu" name="password" />
                        <label class="form-label" for="form3Example4">Mật khẩu</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
  
                        <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                            Ghi nhớ
                        </label>
                        </div>
                        <a href="#!" class="text-body">Quên mật khẩu?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">

                        <?php
                        
                         if (isset($txt_eror)) {
                            echo '<p style="color: red;">'.$txt_eror.'</p>';
                        } 
                         ?>

                        <button  type="sumbit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;" name="dang-nhap">Đăng nhập</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Không có tài khoản? <a href="index.php?act=dangky" class="link-danger">Đăng ký</a></p>
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