<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Đặt Lịch Khám</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Trang</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Đặt Lịch Khám</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->




<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <?php 
            if (isset($_SESSION['message'])) {
                echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
                unset($_SESSION['message']);
            }
            ?>

            <div class="col-lg-8 mx-auto wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">


                    <form action="index.php?act=datlichkham" method="POST" class="w-100">
                        <div class="row g-4">


                             <?php 
                             if (isset($user_id) && isset($kqbenhnhan)) {
                                foreach ($kqbenhnhan as $benhnhan) {
                                    if ($user_id == $benhnhan['user_id']) {
                                        echo '  <div class="col-12">
                                                    <label for="user_name" class="form-label">Họ và Tên</label>
                                                    <input type="text" id="user_name" name="user_name" class="form-control border-0"  value="'.htmlspecialchars($benhnhan['patient_name']).'" style="height: 50px;" required>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label for="phone_number" class="form-label">Số điện thoại</label>
                                                    <input type="text" id="phone_number" class="form-control border-0" name="phone_number"value="'.htmlspecialchars($benhnhan['phone_number']).'" style="height: 50px;" required>
                                                </div>';
                                        echo '<input type="hidden" class="form-control border-0" name="patient_id" style="height: 55px;" value="'.$benhnhan['patient_id'].'">';

                                    }
                                }
                            }
                             ?>
    
                    
                            <div class="col-12 col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control border-0" name="email" value="<?php echo $_SESSION['email'] ?>" style="height: 50px;" required>
                            </div>
                
                             <div class="col-12 col-sm-6">
                                <label for="hospital_id" class="form-label">Bệnh viện</label>
                                <select id="hospital_id" class="form-control border-0" name="hospital_id" onchange="showSpecializations(this.value)" style="height: 50px;" required>
                                    <option value="">Chọn bệnh viện</option>
                                    <?php
                                    if (isset($kqbenhvien)) {
                                    foreach ($kqbenhvien as $benhvien) {
                                        echo '<option value="'.$benhvien['hospital_id'].'">'.$benhvien['hospital_name'].'</option>';
                                    }
                                    }
                                    ?>
                                </select>
                            </div>
      
                            <div class="col-12 col-sm-6">
                                <label for="specializations_id" class="form-label">Chuyên khoa</label>
                                <select id="specializations_id" class="form-control border-0" name="specializations_id" onchange="showDoctors(this.value)" style="height: 50px;" required>
                                    <option value="">Chọn chuyên khoa</option>
                                    <?php
                                    if (isset($kqchuyenkhoa)) {
                                        foreach ($kqchuyenkhoa as $chuyenkhoa) {
                                            echo '<option value="'.$chuyenkhoa['specializations_id'].'">'.$chuyenkhoa['specialization_name'].'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                           
                            <div class="col-12 col-sm-6">
                                <label for="doctor_id" class="form-label">Bác sĩ</label>
                                <select id="doctor_id" class="form-control border-0" name="doctor_id" style="height: 50px;" required>
                                    <option value="">Chọn bác sĩ</option>
                                    <?php
                                    if (isset($kqbacsi)) {
                                        foreach ($kqbacsi as $bacsi) {
                                            echo '<option value="'.$bacsi['doctor_id'].'">'.$bacsi['doctor_name'].'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
   
                            <div class="col-12 col-sm-6">
                                <label for="appointment_date" class="form-label">Ngày khám</label>
                                <input type="date" id="appointment_date" class="form-control border-0" name="appointment_date" style="height: 50px;" required>
                            </div>

                            <div class="col-12 col-sm-6">
                                <label for="appointment_time" class="form-label">Giờ khám</label>
                                <select id="appointment_time" class="form-control border-0" name="appointment_time" style="height: 50px;" required>
                                    <option value="">Chọn giờ khám</option>
                                    <?php
                                    if (isset($kqgiokham)) {
                                        foreach ($kqgiokham as $giokham) {
                                            echo '<option value="'.$giokham['schedule_time'].'">'.$giokham['schedule_time'].'</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
     
                            <div class="col-12">
                                <label for="app_describe" class="form-label">Mô tả vấn đề</label>
                                <textarea id="app_describe" class="form-control border-0" rows="4" name="app_describe" placeholder="Mô tả vấn đề của bạn"></textarea>
                            </div>
      
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-2" type="submit" name="datlichkham">Đặt Lịch Khám</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
<script>
     
        function setupDateInput() {
            const dateInput = document.getElementById('appointment_date');
            
          
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');

          
            const minDate = `${yyyy}-${mm}-${dd}`;
            dateInput.setAttribute('min', minDate);

         
            dateInput.addEventListener('change', function () {
                const selectedDate = new Date(this.value);
                const day = selectedDate.getDay();

              
                if (day === 0 || day === 6) {
                    alert('Bạn không thể chọn ngày thứ 7 hoặc Chủ nhật. Vui lòng chọn ngày khác.');
                    this.value = ''; 
                }
            });
        }


        window.onload = setupDateInput;
    </script>

<script>

function showSpecializations(hospitalId) {
  if (hospitalId == "") {
    document.getElementById("specializations_id").innerHTML = "<option value=''>Chọn chuyên khoa</option>";
    
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("specializations_id").innerHTML = this.responseText;
        document.getElementById("doctor_id").innerHTML = "<option value=''>Chọn bác sĩ</option>";
      }
    };
    xmlhttp.open("GET", "../model/ketnoi/getSpecializations.php?hospital_id=" + hospitalId, true);
    xmlhttp.send();
  }
}


function showDoctors(specializationId) {
 
  var hospitalId = document.getElementById("hospital_id").value;

  if (specializationId == "" || hospitalId == "") {
    document.getElementById("doctor_id").innerHTML = "<option value=''>Chọn bác sĩ</option>";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("doctor_id").innerHTML = this.responseText;
      }
    };
    
    xmlhttp.open("GET", "../model/ketnoi/getDoctors.php?specialization_id=" + specializationId + "&hospital_id=" + hospitalId, true);
    xmlhttp.send();
  }
}

</script>