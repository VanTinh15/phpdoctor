<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
      <li class="breadcrumb-item active">Trang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

       <!-- Appointment Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card appointment-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Lọc</h6>
                </li>

                <li><a class="dropdown-item" href="#">Ngày</a></li>
                <li><a class="dropdown-item" href="#">Tháng</a></li>
                <li><a class="dropdown-item" href="#">Năm</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Số lượng lịch hẹn <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-calendar-check"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo $total_appointments; ?></h6>
                  <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">tăng</span> -->
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Appointment Card -->


       <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Lọc</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                <li><a class="dropdown-item" href="#">Tháng này</a></li>
                <li><a class="dropdown-item" href="#">Năm nay</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Bệnh nhân <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-wallet"></i>
                </div>
                <div class="ps-3">
                  <h6><?=$total_patient ;?></h6>
                  <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">tăng</span> -->
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->


       <!-- Patients Card -->
        <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">

          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Lọc</h6>
              </li>

              <li><a class="dropdown-item" href="#">Hôm nay</a></li>
              <li><a class="dropdown-item" href="#">Tháng này</a></li>
              <li><a class="dropdown-item" href="#">Năm nay</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Bác sĩ <span></span></h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-person-check"></i>
              </div>
              <div class="ps-3">
                <h6><?=$total_doctor?></h6>
                <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">giảm</span> -->
              </div>
            </div>

          </div>
        </div>

        </div><!-- End Patients Card -->




       <!-- Recent Appointments -->
        <div class="col-12">
          <div class="card recent-appointments overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Lọc</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                <li><a class="dropdown-item" href="#">Tháng này</a></li>
                <li><a class="dropdown-item" href="#">Năm nay</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Lịch hẹn gần đây <span></span></h5>

              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Bệnh nhân</th>
                  
                    <th scope="col">Bệnh viện</th>
                    <th scope="col">Ngày hẹn</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    if(isset($kqlichhen)&& count($kqlichhen)> 0){
                      $i =1;
                     
                      foreach($kqlichhen as $kq){
                       
                         if($i<6){
                          echo '
                          <tr>
                    
                              <th scope="row"><a href="#">'.$i++.'</a></th>
                              <td>'.$kq['patient_name'].'</td>
                              
                              <td>'.$kq['hospital_name'].'</td>
                              <td>'.$kq['appointment_date'].'</td>
                              <td>'.$kq['appointment_time'].'</td>
                              
                              <td><span class="">'.$kq['appointment_status'].'</span></td>
    
                          </tr>
                      ';
                         }
                          
                      }
                      
                    }
                  ?>
                  
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Appointments -->


        <!-- lịch kham -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Thống kê trạng thái lịch hẹn<span></span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Tổng số lịch hẹn</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    if(isset($kqthongke)){
                      foreach($kqthongke as $kq){
                        echo '
                              <tr>
                                <th scope="row">'.$kq['appointment_status'].'</th>
                              
                                <td class="">'.$kq['thongke'].'</td>
                              </tr>

                        ';
                      }
                    }
                  ?>
                  
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Lịch khám -->



      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

    <!-- Recent Activity -->
    <div class="card">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Lọc</h6>
          </li>

          <li><a class="dropdown-item" href="#">Hôm nay</a></li>
          <li><a class="dropdown-item" href="#">Tháng này</a></li>
          <li><a class="dropdown-item" href="#">Năm nay</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Hoạt động gần đây <span>| Hôm nay</span></h5>

        <div class="activity">

          <div class="activity-item d-flex">
            <div class="activite-label">32 phút</div>
            <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
            <div class="activity-content">
              Bệnh nhân <a href="#" class="fw-bold text-dark">Nguyễn Văn A</a> đã xác nhận lịch hẹn khám
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">56 phút</div>
            <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
            <div class="activity-content">
              Bác sĩ <a href="#" class="fw-bold text-dark">Dr. Trần Thị B</a> đã cập nhật thông tin chẩn đoán
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">2 giờ</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              Bệnh nhân <a href="#" class="fw-bold text-dark">Lê Minh C</a> đã yêu cầu thay đổi thời gian khám
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">1 ngày</div>
            <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
            <div class="activity-content">
              Cuộc hẹn với <a href="#" class="fw-bold text-dark">Bệnh nhân D</a> bị hủy
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">2 ngày</div>
            <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
            <div class="activity-content">
              Bác sĩ <a href="#" class="fw-bold text-dark">Dr. Nguyễn Văn E</a> đã xác nhận lịch khám vào ngày 06/12
            </div>
          </div><!-- End activity item-->

          <div class="activity-item d-flex">
            <div class="activite-label">4 tuần</div>
            <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
            <div class="activity-content">
              Cuộc hẹn khám với <a href="#" class="fw-bold text-dark">Bệnh nhân F</a> đã được hoàn tất
            </div>
          </div><!-- End activity item-->

        </div>

      </div>
    </div><!-- End Recent Activity -->


     

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->