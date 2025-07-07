
<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý đặt lịch</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Đặt lịch</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Danh sách đặt lịch</h5>

          <!-- Table with hoverable rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên bệnh nhân</th>
                <th scope="col">Ngày hẹn</th>
                <th scope="col">Giờ hẹn</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Triệu chứng</th>
                
                <th scope="col">Tên chuyên khoa</th>
                <th scope="col">Tên bệnh viện</th>

                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>

              <?php
                if(isset($kqlichhen)&& count($kqlichhen)> 0){
                  $i =1;
                  foreach($kqlichhen as $kq){
          
                      echo '
                            <tr>
                                <th scope="row">'.$i++.'</th>
                                <td>'.$kq['patient_name'].'</td>
                                <td>'.$kq['appointment_date'].'</td>
                                <td>'.$kq['appointment_time'].'</td>
                                <td>'.$kq['appointment_status'].'</td>
                                <td>'.$kq['app_describe'].'</td>
                                <td>'.$kq['specialization_name'].'</td>
                                <td>'.$kq['hospital_name'].'</td>
                                <td>
                                    <a href="index.php?act=sua_lichhen&appointment_id='.$kq['appointment_id'].'">Sửa</a> |
                                    <a href="index.php?act=del_lichhen&appointment_id='.$kq['appointment_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa lịch hẹn này không?\')">Xoá</a>
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

