

   
   <!-- Service Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Thông tin</p>
            <h1>Lịch sử hẹn khám</h1>
            <?php if (isset($_SESSION['patient_id'])): ?>
                <p class="text-muted">Chào mừng bạn đến với trang lịch sử hẹn khám của chúng tôi. Tại đây, bạn có thể xem và quản lý các lịch hẹn khám của mình.</p>
            <?php else: ?>
                <p class="text-muted">Vui lòng đăng nhập để xem lịch sử hẹn khám của bạn.</p>
                <p class="text-muted"><?php $_SESSION['patient_id']?></p>
            <?php endif; ?>
        </div>


        <?php 
        
        if (isset($lichkham) && !empty($lichkham)) { 

            $dangCho = [];
            $daChapNhan = [];
           

            foreach ($lichkham as $kqlh) {
                if ($_SESSION['patient_id'] == $kqlh['patient_id']) {
                    switch ($kqlh['appointment_status']) {
                        case 'Đang chờ':
                            $dangCho[] = $kqlh;
                            break;
                        case 'Huỷ lịch khám':
                            $dangCho[] = $kqlh;
                            break;
                        case 'Chấp nhận lịch khám':
                            $daChapNhan[] = $kqlh;
                            break;
                       
                    }
                }
            }

            function hienThiLichHen($danhSach, $tieuDe) {
                echo '<div class="mb-5">
                        <h3 class="mb-4">'.$tieuDe.'</h3>
                        <div class="row g-4">';
                if (!empty($danhSach)) {
                    foreach ($danhSach as $kqlh) {
                        echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item bg-light rounded h-100 p-5">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                        <i class="fa fa-heartbeat text-primary fs-4"></i>
                                    </div>
                                    <h4 class="mb-3">Lịch hẹn của bạn</h4>
                                    <p class="mb-2"><strong>Bác sĩ:</strong> '.$kqlh['doctor_name'].'</p>
                                    <p class="mb-2"><strong>Chuyên khoa:</strong> '.$kqlh['specialization_name'].'</p>
                                    <p class="mb-2"><strong>Bệnh viện:</strong> '.$kqlh['hospital_name'].'</p>
                                    <p class="mb-2"><strong>Ngày hẹn:</strong> '.$kqlh['appointment_date'].'</p>
                                    <p class="mb-2"><strong>Giờ hẹn:</strong> '.$kqlh['appointment_time'].'</p>
                                    <p class="mb-2"><strong>Triệu chứng:</strong> '.$kqlh['app_describe'].'</p>';

                        if ($kqlh['appointment_status'] == "Đang chờ" ) {
                            echo '<button class="btn-danger btn-sm" href="index.php?act=huy_lichkham&appointment_id='.$kqlh['appointment_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn huỷ lịch hẹn này không?\')">Huỷ lịch hẹn</button>';
                        }else if($kqlh['appointment_status'] == "Chấp nhận lịch khám") {
                            echo '<button class="btn-success btn-sm">Đã chấp nhận</button>';
                        }else if($kqlh['appointment_status'] == "Huỷ lịch khám") {
                            echo '<span class="btn-warning btn-sm">Lịch bị huỷ</span>';
                        }

                        echo '      </div>
                                </div>';
                    }
                } else {
                    echo '<p class="text-muted">Không có lịch hẹn trong mục này.</p>';
                }
                echo '    </div>
                      </div>';
            }


            hienThiLichHen($dangCho, 'Lịch hẹn đang chờ');
            hienThiLichHen($daChapNhan, 'Lịch hẹn đã chấp nhận');
          
        } else {
            echo '<p class="text-center">Không có thông tin lịch hẹn.</p>';
        }
        ?>
    </div>
</div>

