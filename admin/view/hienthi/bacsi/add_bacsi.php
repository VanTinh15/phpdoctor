<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Thêm</li>
      <li class="breadcrumb-item active">Bác sĩ</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
  <?php
    if (isset($_SESSION['loi'])) {
        echo '<h1>' . $_SESSION['loi'] . '</h1>';
        unset($_SESSION['loi']); // Xóa biến session sau khi hiển thị
    }
?>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Thêm thông tin bác sĩ</h5>

          <form action="index.php?act=add_bacsi" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="doctor_name" class="col-sm-2 col-form-label">Tên bác sĩ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="doctor_name" id="doctor_name" >
              </div>
            </div>

            <div class="row mb-3">
              <label for="image" class="col-sm-2 col-form-label">Hình ảnh</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="image" id="image" >
              </div>
            </div>

            <!-- <div class="row mb-3">
              <label for="department" class="col-sm-2 col-form-label">Khoa làm việc</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="department" id="department" >
              </div>
            </div> -->

            <div class="row mb-3">
              <label for="profile_description" class="col-sm-2 col-form-label">Mô tả</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="profile_description" id="profile_description" rows="3" ></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="experience" class="col-sm-2 col-form-label">Kinh nghiệm</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="experience" id="experience" >
              </div>
            </div>

            <div class="row mb-3">
              <label for="degree" class="col-sm-2 col-form-label">Bằng cấp</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="degree" id="degree" >
              </div>
            </div>

            <div class="row mb-3">
              <label for="awards_certifications" class="col-sm-2 col-form-label">Chứng chỉ</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="awards_certifications" id="awards_certifications" >
              </div>
            </div>

            <div class="row mb-3">
                <label for="user_id" class="col-sm-2 col-form-label">Người dùng</label>
                <div class="col-sm-10">
                <select class="form-control" id="user_id" name="user_id">
                    <option value="0">Chọn người dùng</option>
                    <?php
                      if(isset($kqtaikhoan)){
                        foreach ($kqtaikhoan as $tk){
                          echo '<option value="'.$tk['user_id'].'"> '.$tk['user_name'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>


            <div class="row mb-3">
                <label for="specializations_id" class="col-sm-2 col-form-label">Chuyên khoa</label>
                <div class="col-sm-10">
                <select class="form-control" id="specializations_id" name="specializations_id">
                    <option value="0">Chọn chuyên khoa</option>
                    <?php
                      if(isset($kqchuyenkhoa)){
                        foreach ($kqchuyenkhoa as $tk){
                          echo '<option value="'.$tk['specializations_id'].'"> '.$tk['specialization_name'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>

            <div class="row mb-3">
                <label for="hospital_id" class="col-sm-2 col-form-label">Bệnh viện</label>
                <div class="col-sm-10">
                <select class="form-control" id="hospital_id" name="hospital_id">
                    <option value="0">Chọn tên bệnh viện</option>
                    <?php
                      if(isset($kqbenhvien)){
                        foreach ($kqbenhvien as $tk){
                          echo '<option value="'.$tk['hospital_id'].'"> '.$tk['hospital_name'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>
            

            <div class="row mb-3">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="thembacsi">Thêm mới</button>
              </div>
            </div>
          </form><!-- End General Form Elements -->

        </div>
      </div>
  </div>
</section>

</main><!-- End #main -->
