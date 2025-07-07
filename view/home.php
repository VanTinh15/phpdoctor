    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="img/about-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="img/about-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Giới thiệu về phòng khám</p>
                    <h1 class="mb-4">Chào mừng bạn đến với An Bình Clinic!</h1>
                    <p>Phòng khám An Bình tự hào là địa chỉ tin cậy cung cấp dịch vụ chăm sóc sức khỏe chất lượng cao. Với đội ngũ bác sĩ giàu kinh nghiệm và trang thiết bị hiện đại, chúng tôi cam kết mang đến trải nghiệm tốt nhất cho mọi bệnh nhân.</p>
                    <p class="mb-4">Sứ mệnh của chúng tôi là mang lại sự an tâm và sức khỏe cho cộng đồng. Hãy để chúng tôi đồng hành cùng bạn trong hành trình chăm sóc sức khỏe.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Đặt lịch khám nhanh chóng</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Đội ngũ bác sĩ tận tâm</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Hệ thống trang thiết bị hiện đại</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about.html">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Dịch vụ</p>
                <h1>Giải pháp chăm sóc sức khỏe</h1>
            </div>
            <div class="row g-4">
            <?php
            if (isset($kqbaiviet) && count($kqbaiviet) > 0) {
                $i = 1;
                foreach ($kqbaiviet as $kq) {
                    if($i <4){
                        echo '
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item bg-light rounded h-100 p-5">
                                <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <img src="../admin/assets/img/'.$kq['image'].'" alt="lỗi" style="width: 100px; height: 100px;">
                                </div>
                                <h4 class="mb-3">'.$kq['title'].'</h4>
                                <p class="mb-4">'.$kq['content'].'</p>
                                <a class="btn" href="index.php?act=baiviet"><i class="fa fa-plus text-primary me-3"></i>Xem thêm</a>
                            </div>
                        </div>'; 
                        $i++;
                    }
                   
                }
            }
            ?>

            </div>
        </div>
    </div>
    <!-- chuyên mục -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Tính năng nổi bật</p>
                        <h1 class="text-white mb-4">Tại sao chọn chúng tôi?</h1>
                        <p class="text-white mb-4 pb-2">Phòng khám An Bình cam kết mang đến dịch vụ chăm sóc sức khỏe chất lượng với đội ngũ bác sĩ chuyên nghiệp, hệ thống hiện đại và sự hỗ trợ tận tình.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Kinh nghiệm</p>
                                        <h5 class="text-white mb-0">Đội ngũ bác sĩ</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Chất lượng</p>
                                        <h5 class="text-white mb-0">Dịch vụ</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Tư vấn</p>
                                        <h5 class="text-white mb-0">Hiệu quả</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Hỗ trợ</p>
                                        <h5 class="text-white mb-0">24/7</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/feature.jpg" style="object-fit: cover;" alt="Hình ảnh nổi bật">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Bác sĩ</p>
                <h1>Một số bác sĩ</h1>
            </div>

            <div class="row g-4">
                <?php
                    $s = 1;
                    foreach($kqbacsi as $kqbs){
                        if($s <5){
                            echo '
                            
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    
                                <div class="team-item position-relative rounded overflow-hidden">
                                        <div class="overflow-hidden">
                                            <img class="img-fluid" src="../admin/assets/img/'.$kqbs['image'].'" alt="">
                                        </div>

                                        <div class="team-text bg-light text-center p-4">
                                            <h5>'.$kqbs['doctor_name'].'</h5>
                                            <p class="text-primary">'.$kqbs['department'].'</p>
                                            <div class="team-social text-center">
                                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                ';
                                $s++;
                        }
                    }
                    ?>
           </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Phản hồi</p>
                <h1>Ý kiến từ bệnh nhân của chúng tôi!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" alt="Ảnh bệnh nhân 1">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Dịch vụ tại phòng khám rất tốt, bác sĩ nhiệt tình và hỗ trợ tận tâm. Tôi rất hài lòng khi lựa chọn nơi đây để chăm sóc sức khỏe.</p>
                        <h5 class="mb-1">Nguyễn Thị A</h5>
                        <span class="fst-italic">Nhân viên văn phòng</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" alt="Ảnh bệnh nhân 2">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Phòng khám có cơ sở vật chất hiện đại và đội ngũ y bác sĩ giàu kinh nghiệm. Tôi sẽ tiếp tục tin tưởng sử dụng dịch vụ.</p>
                        <h5 class="mb-1">Trần Văn B</h5>
                        <span class="fst-italic">Giáo viên</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" alt="Ảnh bệnh nhân 3">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Sự tận tâm và chuyên nghiệp của phòng khám đã giúp tôi cảm thấy yên tâm hơn rất nhiều. Cảm ơn đội ngũ bác sĩ và nhân viên!</p>
                        <h5 class="mb-1">Phạm Văn C</h5>
                        <span class="fst-italic">Kinh doanh tự do</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial End -->
<style>
    p.mb-4 {
    display: -webkit-box;
    line-clamp: 5;                  
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>