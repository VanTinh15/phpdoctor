
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Liên hệ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Trang </a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Liên hệ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
            <?php
                if (isset($_SESSION['success_message'])) {
                    echo "<div class='alert alert-success'>" . $_SESSION['success_message'] . "</div>";
                    unset($_SESSION['success_message']);
                }
                if (isset($_SESSION['error_message'])) {
                    echo "<div class='alert alert-danger'>" . $_SESSION['error_message'] . "</div>";
                    unset($_SESSION['error_message']);
                }
            ?>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Địa chỉ</p>
                            <h5 class="mb-0">Nghi Ân, Nghệ An</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Gọi cho chúng tôi</p>
                            <h5 class="mb-0">+082 515 4215</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Gửi mail cho chúng tôi</p>
                            <h5 class="mb-0">admin@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5">
                        <p class="d-inline-block border rounded-pill py-1 px-4">Liên hệ</p>
                        <h1 class="mb-4">Bạn có câu hỏi? Vui lòng liên hệ với chúng tôi!</h1>
                        
                        
                            <form  action="index.php?act=lienhe" method="POST" enctype="multipart/form-data" >
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <?php if(isset($username)): ?>
                                        <input type="text" class="form-control" name="contact_name" id="name"  value="<?php echo htmlspecialchars($username); ?>" readonly>
                                    <?php else: ?>    
                                        <input type="text" class="form-control" name="contact_name" id="name"  placeholder="Tên người gửi">
                                    <?php endif;?>
                                        <label for="name">Tên người gửi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <?php if(isset($username)): ?>
                                        <input type="email" class="form-control" name="contact_email" id="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
                                    <?php else: ?>    
                                        <input type="email" class="form-control" name="contact_email" id="email" placeholder="Tên email">
                                    <?php endif;?>    
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        <label for="subject">Tiêu đề</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Nội dung</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="guilienhe">Gửi liên hệ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30226.119002947577!2d105.66328505677303!3d18.741702123269807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139d18897be5095%3A0xefedcdb113c7a497!2zTmdoaSDDgm4sIFRwLiBWaW5oLCBOZ2jhu4cgQW4sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1730252438568!5m2!1svi!2s"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    