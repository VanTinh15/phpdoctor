
<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý bác sĩ</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Bác sĩ</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Danh sách bác sĩ</h5>

          <!-- Table with hoverable rows -->
          <!-- <table class="table table-hover"> -->
          <table class="table datatable">
            <thead>
              <tr>
                <th >STT</th>
                <th>Tên bác sĩ</th> 
                <th >Khoa làm việc</th> 
                
                <th >Hình ảnh</th>               
                <th >Mô tả</th>            
                <th >Bệnh viện</th>              
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //var_dump($kqbacsi);
              ?>
              <?php
                if(isset($kqbacsi)&& count($kqbacsi)> 0){
                  $i =1;
                  
                  foreach($kqbacsi as $kq){
                  
                    echo '
                        <tr>
                            <th scope="row">'.$i++.'</th>
                            <td>'.$kq['doctor_name'].'</td>
                            <td>'.$kq['specialization_name'].'</td>
                           

                            <td>  
                              <img src="../admin/assets/img/'.$kq['image'].'" alt="'.$kq['image'].'" style="width: 50px; height:50px">
                            </td>

                            <td>'.$kq['profile_description'].'</td>
                            <td>'.$kq['hospital_name'].'</td>
                            <td>  
                                <a href="index.php?act=sua_bacsi&doctor_id='.$kq['doctor_id'].'">Sửa</a> |
                                <a href="index.php?act=del_bacsi&doctor_id='.$kq['doctor_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bác sĩ này không?\')">Xoá</a>
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

