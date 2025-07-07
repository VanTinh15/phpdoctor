
<main id="main" class="main">

<div class="pagetitle">
  <h1>Quản lý chuyên khoa</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?act=trangchu">Trang chủ</a></li>
      <li class="breadcrumb-item">Bảng</li>
      <li class="breadcrumb-item active">Chuyên khoa</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Danh sách chuyên khoa</h5>

          <!-- Table with hoverable rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Hình ảnh</th>             
                <th scope="col">Tiêu đề</th>               
                <th scope="col">Mô tả</th>            
                <th scope="col">Tài trợ</th>              
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
                //var_dump($kqbacsi);
              ?>
              <?php
                if(isset($kqchuyenmuc)&& count($kqchuyenmuc)> 0){
                  $i =1;
                  
                  foreach($kqchuyenmuc as $kq){
                  
                    echo '
                        <tr>
                            <th scope="row">'.$i++.'</th>
                           
                            
                            <td>  
                              <img src="../admin/assets/img/'.$kq['image'].'" alt="'.$kq['image'].'" style="width: 70px; height:70px">
                            </td>

                            <td>'.$kq['title'].'</td>

                            <td>'.$kq['content'].'</td>
                            <td>'.$kq['sponsor'].'</td>
                            <td>  
                                <a href="index.php?act=sua_chuyenmuc&category_id='.$kq['category_id'].'">Sửa</a> |
                                <a href="index.php?act=xoa_chuyenmuc&category_id='.$kq['category_id'].'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa chuyên khoa này không?\')">Xoá</a>
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

