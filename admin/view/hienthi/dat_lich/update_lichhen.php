<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item">Sửa</li>
        <li class="breadcrumb-item active">Lịch hẹn</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sửa thông tin đặt lịch</h5>

          <!-- General Form Elements -->
          <form action="index.php?act=sua_lichhen" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="appointment_id" value="<?= $lhgetone[0]['appointment_id'] ?>">

            <!-- Bệnh nhân -->

            <div class="row mb-3">
              <label for="chuyenkhoa" class="col-sm-2 col-form-label">Tên bệnh nhân</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="partient_id" >
                  <option value="0">Chọn bệnh nhân</option>
                  <?php
                      $partient_id = $lhgetone[0]['partient_id'];
                      if(isset($kqbenhnhan)){
                          foreach ($kqbenhnhan as $ck){
                              if($ck['partient_id'] == $partient_id){
                                  echo '<option value="'.$ck['partient_id'].'" selected>'.$ck['partient_name'].'</option>';
                              }else{
                                  echo '<option value="'.$ck['partient_id'].'" >'.$ck['partient_name'].'</option>';
                              }
                          }
                          
                    }

                  ?>
              </select>
                  
              </div>
          </div>

            

            <div class="row mb-3">
              <label for="chuyenkhoa" class="col-sm-2 col-form-label">Tên bác sĩ</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="doctor_id" >
                  <option value="0">Chọn bác sĩ</option>
                  <?php
                      $doctor_id = $lhgetone[0]['doctor_id'];
                      if(isset($kqbacsi)){
                          foreach ($kqbacsi as $ck){
                              if($ck['doctor_id'] == $doctor_id){
                                  echo '<option value="'.$ck['doctor_id'].'" selected>'.$ck['doctor_name'].'</option>';
                              }else{
                                  echo '<option value="'.$ck['doctor_id'].'" >'.$ck['doctor_name'].'</option>';
                              }
                          }
                          
                    }

                  ?>
              </select>
                  
              </div>
          </div>

            <!-- Ngày hẹn -->
            <div class="row mb-3">
              <label for="appointment_date" class="col-sm-2 col-form-label">Ngày hẹn</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="appointment_date" value="<?= trim($lhgetone[0]['appointment_date']) ?>" required>
              </div>
            </div>

            <!-- Thời gian -->
            <div class="row mb-3">
              <label for="appointment_time" class="col-sm-2 col-form-label">Giờ hẹn</label>
              <div class="col-sm-10">
                <input class="form-control" type="time" name="appointment_time" value="<?= trim($lhgetone[0]['appointment_time']) ?>" required>
              </div>
            </div>

            <!-- Trạng thái -->
            <div class="row mb-3">
              <label for="appointment_status" class="col-sm-2 col-form-label">Trạng thái</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="appointment_status" value="<?= trim($lhgetone[0]['appointment_status']) ?>" required>
              </div>
            </div>

            <!-- Ngày tạo -->
            <!-- <div class="row mb-3">
              <label for="created_at" class="col-sm-2 col-form-label">Ngày tạo</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="created_at" value="<?= trim($lhgetone[0]['created_at']) ?>" required>
              </div>
            </div> -->

            <!-- Mô tả -->
            <div class="row mb-3">
              <label for="app_describe" class="col-sm-2 col-form-label">Triệu chứng</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="app_describe" value="<?= trim($lhgetone[0]['app_describe']) ?>" required>
              </div>
            </div>

            <!-- Chuyên khoa -->
            <div class="row mb-3">
              <label for="chuyenkhoa" class="col-sm-2 col-form-label">Chuyên khoa</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="specializations_id" >
                  <option value="0">Chọn chuyên khoa</option>
                  <?php
                      $specializations_id = $lhgetone[0]['specializations_id'];
                      if(isset($kqchuyenkhoa)){
                          foreach ($kqchuyenkhoa as $ck){
                              if($ck['specializations_id'] == $specializations_id){
                                  echo '<option value="'.$ck['specializations_id'].'" selected>'.$ck['specialization_name'].'</option>';
                              }else{
                                  echo '<option value="'.$ck['specializations_id'].'" >'.$ck['specialization_name'].'</option>';
                              }
                          }
                          
                    }

                  ?>
              </select>
                  
              </div>
          </div>

            <!-- Bệnh viện -->
            <div class="row mb-3">
              <label for="benhvien" class="col-sm-2 col-form-label">Bệnh viện</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="hospital_id" >
                  <option value="0">Chọn bệnh viện</option>
                  <?php
                      $hospital_id = $lhgetone[0]['hospital_id'];
                      if(isset($kqbenhvien)){
                          foreach ($kqbenhvien as $bv){
                              if($bv['hospital_id'] == $hospital_id){
                                  echo '<option value="'.$bv['hospital_id'].'" selected>'.$bv['hospital_name'].'</option>';
                              }else{
                                  echo '<option value="'.$bv['hospital_id'].'" >'.$bv['hospital_name'].'</option>';
                              }
                          }
                          
                    }

                  ?>
              </select>
                  
              </div>
          </div>

            <!-- Submit button -->
            <div class="row mb-3">
              <div class="col-sm-10">
                <input type="submit" class="btn btn-primary" name="sua_lichhen" value="Cập nhật">
              </div>
            </div>

          </form><!-- End General Form Elements -->
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
