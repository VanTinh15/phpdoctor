  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Bài viết</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Trang</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bài viết</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Dịch vụ</p>
                <h1>Giải pháp chăm sóc sức khoẻ</h1>
            </div>


            <div class="row g-4">

            <?php
            if (isset($kqbaiviet) && count($kqbaiviet) > 0) {
                foreach ($kqbaiviet as $kq) {
                    echo '
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                <img src="../admin/assets/img/'.$kq['image'].'" alt="lỗi" style="width: 65px; height: 65px;">
                            </div>
                            <h4 class="mb-3">'.$kq['title'].'</h4>
                            <p class="mb-4">'.$kq['content'].'</p>
                            <a class="btn" href="#" data-bs-toggle="modal" data-bs-target="#myModal" 
                               data-title="'.$kq['title'].'" 
                               data-content="'.$kq['content'].'" 
                               data-image="../admin/assets/img/'.$kq['image'].'">
                               <i class="fa fa-plus text-primary me-3"></i>Xem thêm 
                            </a>
                        </div>
                    </div>';
                }
            }
            ?>
               <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    
                        <h5 class="modal-title" id="modalTitle"> Tiêu đề dịch vụ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="modalImage" src="" alt="Hình ảnh dịch vụ" style="width:70%; height: 70%;">

                        <p id="modalContent">Nội dung dịch vụ</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
            </div>






            </div>
        </div>
    </div>
    <!-- Service End -->

  
<style>
p.mb-4 {
    display: -webkit-box;
    line-clamp: 5;                  
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = document.getElementById('myModal');
        myModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; 
            var title = button.getAttribute('data-title'); 
            var content = button.getAttribute('data-content'); 
            var image = button.getAttribute('data-image'); 

            var modalTitle = myModal.querySelector('.modal-title');
            var modalContent = myModal.querySelector('.modal-body p');
            var modalImage = myModal.querySelector('.modal-body img');

            modalTitle.textContent = title;
            modalContent.textContent = content;
            modalImage.src = image;
        });
    });
</script>


