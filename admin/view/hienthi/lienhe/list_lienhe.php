<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý liên hệ</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Liên hệ</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Danh sách thông tin</h5>

                <?php
                    if (isset($_SESSION['success_message'])) {
                        echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
                        unset($_SESSION['success_message']);
                    }   
                ?> 


        <!-- Table with hoverable rows -->
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">STT</th>           
              <th scope="col">Tên người dùng</th>                          
              <th scope="col">Email</th>     
              <th scope="col">Chủ đề</th>    
              <th scope="col">Nội dung</th>          
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
          <?php
              if (isset($kqlienhe)) {
                  $i = 1;
                  foreach ($kqlienhe as $kq) {
                      echo '
                        <tr>
                          <th scope="row">'.$i++.'</th>
                          <td>'.$kq['contact_name'].'</td>
                          <td>'.$kq['contact_email'].'</td>
                          <td>'.$kq['subject'].'</td>
                          <td>'.$kq['message'].'</td>
                          <td>';

                      // Kiểm tra trạng thái phản hồi
                      if ($kq['replied'] == 1) {
                          echo '<span class="badge bg-danger">Đã phản hồi</span>';
                      } else {
                          echo '
                            <a class="badge bg-success" href="#" data-bs-toggle="modal" data-bs-target="#replyModal" data-id="'.$kq['contact_id'].'" data-email="'.$kq['contact_email'].'" 
                            data-name="'.$kq['contact_name'].'" data-subject="'.$kq['subject'].'" data-message="'.$kq['message'].'">Phản hồi</a> | ';
                      }
                      
                      echo '
                            <a class="badge bg-success" href="index.php?act=xoa_lienhe&contact_id='.$kq['contact_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa thông tin này không?\')">Xoá</a>
                          </td>
                        </tr>';
                  }
              }
              ?>
          </tbody>
        </table>
        <!-- End Table with hoverable rows -->

      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

<!-- Reply Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="replyModalLabel">Phản hồi liên hệ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="index.php?act=phanhoi_lienhe" method="POST">
        <div class="modal-body">
          <input type="hidden" name="contact_id" id="contact_id">
          <input type="hidden" name="contact_email" id="contact_email">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Tên người dùng:</label>
            <input type="text" class="form-control" name="contact_name" id="recipient-name" readonly>
          </div>
          <div class="mb-3">
            <label for="subject" class="col-form-label">Chủ đề:</label>
            <input type="text" class="form-control" name="subject" id="subject" readonly>
          </div>
          <div class="mb-3">
            <label for="message-content" class="col-form-label">Nội dung liên hệ:</label>
            <textarea class="form-control" id="message-content" rows="4" readonly></textarea>
          </div>
          <div class="mb-3">
            <label for="reply-message" class="col-form-label">Nội dung phản hồi:</label>
            <textarea class="form-control" name="reply_message" id="reply-message" rows="4"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
          <button type="submit" class="btn btn-primary" >Gửi phản hồi</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // JavaScript để điền thông tin vào modal khi nhấp vào "Phản hồi"
  var replyModal = document.getElementById('replyModal');
  replyModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var contactId = button.getAttribute('data-id');
    
    var contactName = button.getAttribute('data-name');
    var subject = button.getAttribute('data-subject');
    var message = button.getAttribute('data-message');
    var contactEmail = button.getAttribute('data-email');

    // Gán các giá trị vào các input trong modal
    replyModal.querySelector('#contact_id').value = contactId;
    replyModal.querySelector('#recipient-name').value = contactName;
    replyModal.querySelector('#subject').value = subject;
    replyModal.querySelector('#message-content').value = message;
    replyModal.querySelector('#contact_email').value = contactEmail;
  });
</script>
