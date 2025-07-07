<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Thông tin</p>
            <h1>Quản lý lịch hẹn</h1>
        </div>
        
        <?php

        if (isset($lichkham) && !empty($lichkham)) {  
            $dangCho = [];
            $daChapNhan = []; 
            $lichDaKham = [];
          
            foreach ($lichkham as $kqlh) {
                if ($_SESSION['user_id'] == $kqlh['user_id']) {

                    if ($kqlh['appointment_status'] == "Đang chờ") {
                        $dangCho[] = $kqlh;
                    } else if ($kqlh['appointment_status'] == "Chấp nhận lịch khám") {
                        $daChapNhan[] = $kqlh;
                    } else if($kqlh['appointment_status'] == "Đã khám") {
                        $lichDaKham[] = $kqlh;
                    }
                }
            }

            function hienThiLichHen($tieuDe, $danhSach) {
                echo '<div class="mb-5">
                        <h3 class="mb-4">' . $tieuDe . '</h3>
                        <div class="row g-4">';
                if (!empty($danhSach)) {
                    foreach ($danhSach as $kqlh) {
                        echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item bg-light rounded h-100 p-5">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                        <i class="fa fa-heartbeat text-primary fs-4"></i>
                                    </div>
                                    <h4 class="mb-3">' . $kqlh['patient_name'] . '</h4>
                                    <p class="mb-2"><strong>Tên bệnh nhân:</strong> ' . $kqlh['patient_name'] . '</p>
                                    <p class="mb-2"><strong>Ngày hẹn:</strong> ' . $kqlh['appointment_date'] . '</p>
                                    <p class="mb-2"><strong>Giờ hẹn:</strong> ' . $kqlh['appointment_time'] . '</p>
                                    <p class="mb-2"><strong>Trạng thái:</strong> ' . $kqlh['appointment_status'] . '</p>
                                    <p class="mb-4"><strong>Triệu chứng:</strong> ' . $kqlh['app_describe'] . '</p>';

                        if ($kqlh['appointment_status'] == "Đang chờ") {
                            echo '<a href="index.php?act=huy_lichcho&appointment_id=' . $kqlh['appointment_id'] . '" 
                                    onclick="return confirm(\'Bạn có chắc chắn muốn huỷ lịch hẹn này không?\')" 
                                    class="btn-outline-danger btn-sm">Huỷ lịch hẹn</a>';
                            echo ' ';
                            echo '<a href="index.php?act=chapnhan_lichkham&appointment_id=' . $kqlh['appointment_id'] . '" 
                                    onclick="return confirm(\'Bạn có chắc chắn muốn chấp nhận lịch hẹn này không?\')" 
                                    class="btn-outline-primary btn-sm ">Chấp nhận</a>';
                        } else if ($kqlh['appointment_status'] == "Chấp nhận lịch khám") {
                            echo '<a class="btn-success btn-sm">Đã chấp nhận</a>';
                        }else if ($kqlh['appointment_status'] == "Đã khám"){
                            echo '<button class="btn-info btn-sm">Đã khám</button>';
                        }

                        echo '  </div>
                            </div>';
                    }
                } else {
                    echo '<p class="text-muted">Không có lịch hẹn trong mục này.</p>';
                }
                echo '    </div>
                      </div>';
            }

           
            hienThiLichHen('Lịch đang chờ', $dangCho);
            hienThiLichHen('Lịch đã chấp nhận', $daChapNhan);
           
            //hienThiLichHen('Danh sách lịch đã khám', $lichDaKham);

        } else {
            echo '<p class="text-center">Không có thông tin lịch hẹn.</p>';
        }
        ?>
    </div>
</div>
