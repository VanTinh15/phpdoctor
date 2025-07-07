<main id="main" class="main">

  <div class="pagetitle">
    <h1>Thêm lịch hẹn</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item">Thêm</li>
        <li class="breadcrumb-item active">Lịch hẹn</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Thêm lịch hẹn</h5>

          <!-- Form Thêm Lịch Hẹn -->
          <form action="index.php?act=add_datlich" method="POST" enctype="multipart/form-data">
            <!-- Chọn bệnh nhân -->
            <div class="row mb-3">
              <label for="partient_id" class="col-sm-2 col-form-label">Bệnh nhân</label>
              <div class="col-sm-10">
                <select class="form-control" id="partient_id" name="partient_id">
                  <option value="0">Chọn bệnh nhân</option>
                  <?php
                      foreach ($kqbenhnhan as $patient) {
                        echo '<option value="'.$patient['partient_id'].'">'.htmlspecialchars($patient['partient_name']).'</option>';
                      }
                  ?>
                </select>
              </div>
            </div>

            <!-- Chọn bác sĩ -->
            <div class="row mb-3">
              <label for="doctor_id" class="col-sm-2 col-form-label">Bác sĩ</label>
              <div class="col-sm-10">
                <select class="form-control" id="doctor_id" name="doctor_id">
                  <option value="0">Chọn bác sĩ</option>
                  <?php
                      foreach ($kqbacsi as $doctor) {
                        echo '<option value="'.$doctor['doctor_id'].'">'.htmlspecialchars($doctor['doctor_name']).'</option>';
                      }
                  ?>
                </select>
              </div>
            </div>

            <!-- Chọn ngày -->
            <div class="row mb-3">
              <label for="appointment_date" class="col-sm-2 col-form-label">Ngày hẹn</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
              </div>
            </div>

            <!-- Chọn giờ -->
            <div class="row mb-3">
              <label for="appointment_time" class="col-sm-2 col-form-label">Giờ hẹn</label>
              <div class="col-sm-10">
                <input type="time" class="form-control" id="appointment_time" name="appointment_time" required>
              </div>
            </div>

            <!-- Trạng thái -->
            <div class="row mb-3">
              <label for="appointment_status" class="col-sm-2 col-form-label">Trạng thái</label>
              <div class="col-sm-10">
                <select class="form-control" id="appointment_status" name="appointment_status">
                  <option value="Đang chờ xác nhận">Đang chờ</option>
                  <option value="Đã xác nhận">Chấp nhân lịch khám</option>
                  <option value="Đã hủy">Huỷ lịch khám</option>
                </select>
              </div>
            </div>

            <!-- Mô tả -->
            <div class="row mb-3">
              <label for="app_describe" class="col-sm-2 col-form-label">Mô tả</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="app_describe" name="app_describe" rows="4" placeholder="Nhập mô tả triệu chứng"></textarea>
              </div>
            </div>

            <!-- Nút gửi -->
            <div class="row mb-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="datlichkham">Thêm lịch hẹn</button>
              </div>
            </div>
          </form><!-- End Form -->

        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
