
<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý tài khoản</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Tài khoản</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Danh sách tài khoản</h5>

          <!-- Table with hoverable rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên tài khoản</th>             
                <th scope="col">Mật khẩu</th>               
                <th scope="col">Email</th>            
                <th scope="col">Kiểu tài khoản</th>
                                   
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //var_dump($kqbenhnhan);
              ?>
              <?php
                if(isset($kqtaikhoan)&& count($kqtaikhoan)> 0){
                  $i =1;
                  
                  foreach($kqtaikhoan as $kq){
                  
                    echo '
                        <tr>
                            <th scope="row">'.$i++.'</th>
                            <td>'.$kq['user_name'].'</td>                           

                            <td>'.$kq['password'].'</td>
                            <td>'.$kq['email'].'</td>
                            <td>'.$kq['user_role'].'</td>
                           
                            <td>  
                                <a href="index.php?act=sua_taikhoan&user_id='.$kq['user_id'].'">Sửa</a> |
                                <a href="index.php?act=del_taikhoan&user_id='.$kq['user_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn xoá '.$kq['user_name'].'  này không?\')">Xoá</a>
                            </td>
                        </tr>
                        
              ';
              
                  }

                }
              ?>
          
             
             
              
            </tbody>
          </table>
          <!-- End Table with hoverable rows -->

        </div>
    </div>
  </div>
</section>

</main><!-- End #main -->
