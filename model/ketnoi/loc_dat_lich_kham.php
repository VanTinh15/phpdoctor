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

           
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">


                    <form action="index.php?act=datlichkham" method="POST">
                        
                    
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">

                            <?php
                            if (isset($user_id) && isset($kqbenhnhan)) {
                                foreach ($kqbenhnhan as $benhnhan) {
                                    if ($user_id == $benhnhan['user_id']) {
                                        echo '<input type="text" name="patient_name" class="form-control border-0" style="height: 55px;" 
                                                value="'.htmlspecialchars($benhnhan['patient_name']).'" readonly>';
                                        echo '</div>';
                                        echo '<div class="col-12 col-sm-6">';
                                        echo '<input type="text" class="form-control border-0" name="phone_number" style="height: 55px;" value="'.htmlspecialchars($benhnhan['phone_number']).'" readonly>';
                                        echo '</div>';
                                        
                                        echo '<input type="hidden" class="form-control border-0" name="patient_id" style="height: 55px;" value="'.$benhnhan['patient_id'].'">';

                                        break;
                                    }
                                }
                            } else {
                                echo '<input type="text" name="user_name" class="form-control border-0" placeholder="Họ và Tên" style="height: 55px;">';
                                echo '</div>';
                                echo '<div class="col-12 col-sm-6">';
                                echo '<input type="text" class="form-control border-0" style="height: 55px;" placeholder="Số điện thoại">';
                                echo '</div>';                              
                            }
                            ?>
                            
                            <div class="col-12 col-sm-6">
                                <?php if (isset($email)): ?>
                                    <input type="email" class="form-control border-0" style="height: 55px;" 
                                        value="<?php echo htmlspecialchars($email); ?>" readonly>
                                <?php else: ?>
                                    <input type="email" class="form-control border-0" style="height: 55px;" placeholder="Email của bạn">
                                <?php endif; ?>
                            </div>


                           

                            <div class="col-12 col-sm-6">
                                <select class="form-control  border-0" id="" name="doctor_id" style="height: 55px;">
                                    <option value="0">Chọn tên bác sĩ</option>
                                    <?php
                                    //var_dump($kqbacsi);

                                        if(isset($kqbacsi)){
                                            foreach ($kqbacsi as $kq){
                                            echo '<option value="'.$kq['doctor_id'].'">'.$kq['doctor_name'].'</option>';
                                            }
                                        }

                                    ?>
                                
                                </select>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="date" id="#date" data-target-input="nearest">
                                    <input type="date"
                                        class="form-control border-0 datetimepicker-input" name="appointment_date"
                                        placeholder="Chọn Ngày" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <select class="form-control  border-0" id="" name="appointment_time" style="height: 55px;">
                                    <option value="0">Chọn giờ khám</option>
                                    <?php
                                    //var_dump($kqbacsi);

                                        if(isset($kqgiokham)){
                                            foreach ($kqgiokham as $kq){
                                            echo '<option value="'.$kq['schedule_time'].'">'.$kq['schedule_time'].'</option>';
                                            }
                                        }

                                    ?>
                                
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5" name="app_describe" placeholder="Mô tả vấn đề của bạn"></textarea>
                            </div>

                            <div class="col-12">
                                <input type="hidden" class="form-control border-0" style="height: 55px;" name="appointment_status"
                                    placeholder="Trạng thái" value="Đang chờ">
                                
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="datlichkham">Đặt Lịch Khám</button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

