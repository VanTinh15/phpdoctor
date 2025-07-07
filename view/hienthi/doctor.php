       <!-- Page Header Start -->
       <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Bác sĩ</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Trang</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bác sĩ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
   
   
   <!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Bác sĩ</p>
            <h1>Danh sách bác sĩ</h1>
        </div>
        <div class="row g-4">
            <?php
                foreach($kqbacsi as $kqbs){

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

                                    <button class="btn btn-square" data-bs-toggle="modal" data-bs-target="#myModal" 
                                            data-name="'.$kqbs['doctor_name'].'" 
                                            data-department="'.$kqbs['department'].'" 
                                            data-image="../admin/assets/img/'.$kqbs['image'].'"
                                            data-hospital="'.$kqbs['hospital_name'].'" 
                                            data-profile_description="'.$kqbs['profile_description'].'" 
                                            data-experience="'.$kqbs['experience'].'" 
                                            data-degree="'.$kqbs['degree'].'" 
                                            data-awards_certifications="'.$kqbs['awards_certifications'].'">
                                        <i class="fas fa-info-circle"></i>
                                    </button>

                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex">
                            <div class="left-column" style="flex: 1; padding-right: 20px;">
                                <img id="modalImage" src="" alt="Doctor Image" style="width: 100%; height: auto;">
                                
                                
                            </div>
                            <div class="right-column" style="flex: 1; padding-left: 20px;">
                                <p id="modalName"></p>
                                <p id="modalDepartment"></p>
                                <p id="modalHospital"></p>
                                <p id="modalProfileDescription"></p>
                                <p id="modalExperience"></p>
                                <p id="modalDegree"></p>
                                <p id="modalAwardsCertifications"></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Team End -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    var myModal = document.getElementById('myModal');
    myModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; 
        var name = button.getAttribute('data-name');
        var department = button.getAttribute('data-department');
        var image = button.getAttribute('data-image');
        var hospital = button.getAttribute('data-hospital');
        var profile_description = button.getAttribute('data-profile_description');
        var experience = button.getAttribute('data-experience');
        var degree = button.getAttribute('data-degree');
        var awards_certifications = button.getAttribute('data-awards_certifications');

        var modalTitle = myModal.querySelector('.modal-title');

        var modalImage = myModal.querySelector('#modalImage');
        var modalName = myModal.querySelector('#modalName');
        var modalDepartment = myModal.querySelector('#modalDepartment');
        var modalHospital = myModal.querySelector('#modalHospital');
        var modalProfileDescription = myModal.querySelector('#modalProfileDescription');
        var modalExperience = myModal.querySelector('#modalExperience');
        var modalDegree = myModal.querySelector('#modalDegree');
        var modalAwardsCertifications = myModal.querySelector('#modalAwardsCertifications');

        modalTitle.textContent = 'Chi tiết: ' + name;
        modalImage.src = image;
        modalName.textContent = 'Tên bác sĩ: ' + name;
        modalDepartment.textContent = 'Khoa làm viêc: ' + department;
        modalHospital.textContent = 'Nơi đang làm: ' + hospital;
        modalProfileDescription.textContent = 'Thông tin: ' + profile_description;
        modalExperience.textContent = 'Kinh nghiệm: ' + experience;
        modalDegree.textContent = 'Bằng cấp: ' + degree;
        modalAwardsCertifications.textContent = 'Giải thưởng/ Chứng nhận: ' + awards_certifications;


    });
});
</script>
