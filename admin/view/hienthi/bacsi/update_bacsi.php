<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Sửa</li>
      <li class="breadcrumb-item active">Bác sĩ</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cập nhật thông tin bác sĩ</h5>

        <form action="index.php?act=sua_bacsi" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="doctor_id" value="<?= $bsgetone[0]['doctor_id'] ?>">

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Tên bác sĩ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="doctor_name" value="<?= trim($bsgetone[0]['doctor_name']) ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" name="image" value="<?= trim($bsgetone[0]['image']) ?>">

              <?php if (!empty($bsgetone[0]['image'])): ?>
                <p>Hình ảnh hiện tại:</p>
                <img src="../admin/assets/img/<?= $bsgetone[0]['image'] ?>" alt="" style="max-width: 500px; height: 250px;">
              <?php endif; ?>
            </div>
          </div>


          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Mô tả</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="profile_description" rows="3"><?= trim($bsgetone[0]['profile_description']) ?></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Kinh nghiệm</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="experience" value="<?= trim($bsgetone[0]['experience']) ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Bằng cấp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="degree" value="<?= trim($bsgetone[0]['degree']) ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Chứng chỉ</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="awards_certifications" value="<?= trim($bsgetone[0]['awards_certifications']) ?>">
            </div>
          </div>

     
          <div class="row mb-3">
              <label for="taikhoan" class="col-sm-2 col-form-label">Tài khoản</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="user_id" >
                  <option value="0">Chọn tài khoản</option>
                  <?php
                      $user_id = $bsgetone[0]['user_id'];
                      if(isset($kqtaikhoan)){
                          foreach ($kqtaikhoan as $tk){
                              if($tk['user_id'] == $user_id){
                                  echo '<option value="'.$tk['user_id'].'" selected>'.$tk['user_name'].'</option>';
                              }else{
                                  echo '<option value="'.$tk['user_id'].'" >'.$tk['user_name'].'</option>';
                              }
                          }
                          
                    }

                  ?>
              </select>
                  
              </div>
          </div>


          <div class="row mb-3">
              <label for="chuyenkhoa" class="col-sm-2 col-form-label">Chuyên khoa</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="specializations_id" >
                  <option value="0">Chọn chuyên khoa</option>
                  <?php
                      $specializations_id = $bsgetone[0]['specializations_id'];
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

          <div class="row mb-3">
              <label for="benhvien" class="col-sm-2 col-form-label">Bệnh viện</label>
              <div class="col-sm-10">
              <select class="form-control" id="" name="hospital_id" >
                  <option value="0">Chọn bệnh viện</option>
                  <?php
                      $hospital_id = $bsgetone[0]['hospital_id'];
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

          <div class="row mb-3">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" name="suabacsi">Cập nhật</button>
            </div>
          </div>

        </form><!-- End General Form Elements -->

      </div>
    </div>

  </div>
</section>

</main><!-- End #main -->
