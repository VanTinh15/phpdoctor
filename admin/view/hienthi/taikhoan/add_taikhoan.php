<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Thêm</li>
      <li class="breadcrumb-item active">Tài khoản</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Thêm tài khoản</h5>

          <?php
            //  echo var_dump($svone);
          ?>
          <!-- General Form Elements -->
          <form action="index.php?act=add_taikhoan" method="POST" enctype="multipart/form-data">


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Tên tài khoản</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="user_name" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Mật khẩu</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name = "password" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="type" id="" name = "email" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Loại tài khoản</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "user_role" value="">
              </div>
            </div>
          

            
       
            <div class="row mb-3">
              <div class="col-sm-10">
              <td><input type="submit" class="btn btn-primary" name="themtaikhoan" value ="Thêm mới"></input></td>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    <!-- </div> -->

  </div>
</section>

</main><!-- End #main -->