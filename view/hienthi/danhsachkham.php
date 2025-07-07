


<div class="container py-5">
    <div class="text-center mb-5">
        <h1>Danh sách lịch khám</h1>
    </div>

    <form method="GET" action="index.php" class="text-center mb-4">
        <input type="hidden" name="act" value="hienthi_danhsach_bs">
        <select name="date" onchange="this.form.submit()" class="form-control w-50 mx-auto">
            <?php foreach ($days as $day): ?>
                <option value="<?php echo $day; ?>" <?php echo ($day == $selectedDate) ? 'selected' : ''; ?>>
                    <?php echo date('d/m/Y', strtotime($day)); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>



</div>


<div class="container">
    <h3 class="text-center mb-4">Danh sách lịch hẹn ngày <?php echo date('d/m/Y', strtotime($selectedDate)); ?></h3>
    <div class="row g-4">
        <?php
      
        $filteredAppointments = [];
        foreach ($lichkham as $kqlh) {
            if ($kqlh['appointment_date'] == $selectedDate) {
                $filteredAppointments[] = $kqlh;
            }
        }

        usort($filteredAppointments, function ($a, $b) {
            return strtotime($a['appointment_time']) - strtotime($b['appointment_time']);
        });

        if (!empty($filteredAppointments)) {
            foreach ($filteredAppointments as $kqlh) {
                echo '<div class="col-lg-4 col-md-6">
                        <div class="service-item bg-light rounded h-100 p-4">
                            <h5 class="mb-3">' . $kqlh['patient_name'] . '</h5>
                            <p><strong>Giờ hẹn:</strong> ' . $kqlh['appointment_time'] . '</p>
                            <p><strong>Triệu chứng:</strong> ' . $kqlh['app_describe'] . '</p>
                            <p><strong>Chuyên khoa:</strong> ' . $kqlh['specialization_name'] . '</p>
                        </div>
                    </div>';
            }
        } else {
            echo '<p class="text-center">Không có lịch hẹn nào trong ngày này.</p>';
        }
        ?>
    </div>
</div>
