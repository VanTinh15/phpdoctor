
<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý bệnh nhân</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Bệnh nhân</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Danh sách bệnh nhân</h5>

          <!-- Table with hoverable rows -->
          <!-- <table class="table table-hover"> -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên bệnh nhân</th>             
                <th scope="col">Địa chỉ</th>               
                <th scope="col">Ngày sinh</th>            
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>                   
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //var_dump($kqbenhnhan);
              ?>
              <?php
                if(isset($kqbenhnhan)&& count($kqbenhnhan)> 0){
                  $i =1;
                  
                  foreach($kqbenhnhan as $kq){
                  
                    echo '
                        <tr>
                            <th scope="row">'.$i++.'</th>
                            <td>'.$kq['patient_name'].'</td>
                            
                            

                            <td>'.$kq['pa_address'].'</td>
                            <td>'.$kq['date_of_birth'].'</td>
                            <td>'.$kq['gender'].'</td>
                            <td>'.$kq['phone_number'].'</td>
                            <td>  
                                <a href="index.php?act=sua_benhnhan&patient_id='.$kq['patient_id'].'">Sửa</a> |
                                <a href="index.php?act=del_benhnhan&patient_id='.$kq['patient_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn xoá '.$kq['patient_name'].'  này không?\')">Xoá</a>
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

