
<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý bài viết</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Bài viết</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Danh sách bài viết</h5>

          <!-- Table with hoverable rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên bài viết</th>  
                
                <th scope="col">Nội dung</th>            
                <th scope="col">Hình ảnh</th>   
                <!-- <th scope="col">Lượt xem</th>               -->
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //var_dump($kqbacsi);
              ?>
              <?php
                    if (isset($kqbaiviet) && count($kqbaiviet) > 0) {
                        $i = 1;
                        foreach ($kqbaiviet as $kq) {

                            foreach ($kqchuyenmuc as $kqcm) {
                                if ($kq['category_id'] == $kqcm['category_id']) {
                                    $category_title = $kqcm['title'];
                                    break; 
                                }
                            }
                            
                            echo '
                                <tr>
                                    <th scope="row">' . $i++ . '</th>
                                    <td>' . $kq['title'] . '</td>
                                   
                                    <td>' . $kq['content'] . '</td>
                                    <td>  
                                        <img src="../admin/assets/img/' . $kq['image'] . '" alt="' . $kq['image'] . '" style="width: 60px; height:60px">
                                    </td>
                                    <td>  
                                        <a href="index.php?act=sua_baiviet&article_id=' . $kq['article_id'] . '">Sửa</a> |
                                        <a href="index.php?act=xoa_baiviet&article_id=' . $kq['article_id'] . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bài viết này không?\')">Xoá</a>
                                    </td>
                                </tr>
                            ';
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

