<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Sửa</li>
      <li class="breadcrumb-item active">Bài viết</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cập nhật thông tin bài viết</h5>

          <?php
            //  echo var_dump($svone);
          ?>
          <!-- General Form Elements -->
          <form action="index.php?act=sua_baiviet" method="POST" enctype="multipart/form-data">
        
            <input type="hidden" name="article_id" value="<?= $bvgetone[0]['article_id'] ?>">

            <div class="row mb-3">
                <label for="ten_khoa_hoc" class="col-sm-2 col-form-label">Tên chuyên mục</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="category_id" >
                    <option value="0">Chọn chuyên mục</option>
                    <?php
                        $id_category = $bvgetone[0]['category_id'];
                        if(isset($kqchuyenmuc)){
                            foreach ($kqchuyenmuc as $cm){
                                if($cm['category_id'] == $id_category){
                                    echo '<option value="'.$cm['category_id'].'" selected>'.$cm['title'].'</option>';
                                }else{
                                    echo '<option value="'.$cm['category_id'].'" >'.$cm['title'].'</option>';
                                }
                            }
                            
                      }

                    ?>
                    <!-- Thêm các tên khoá học khác vào đây -->
                </select>
                    
                </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Tên bài viết </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" value="<?=trim($bvgetone[0]['title'])?>">
              </div>
            </div>

            
            <!-- <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Hình ảnh</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="image" value="<?//=trim($bsgetone[0]['image'])?>">
              </div>
            </div> -->

            <div class="row mb-3" >
                <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="" name="image"  value="<?=trim($bvgetone[0]['image'])?>">

                    <?php if (!empty($bvgetone[0]['image'])): ?>
                    
                    <p>Hình ảnh hiện tại:</p>
                    <img src="../admin/assets/img/<?=$bvgetone[0]['image']?>" alt="" style="max-width: 500px; height: 250px;">
                    <?php endif; ?> 
                </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Nội dung</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name = "content" value="<?=trim($bvgetone[0]['content'])?>">
              </div>
            </div>

            <div class="row mb-3">
                <label for="ten_khoa_hoc" class="col-sm-2 col-form-label">Tên bác sĩ</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="doctor_id" >
                    <option value="0">Chọn bác sĩ</option>
                    <?php
                        $id_doctor = $bvgetone[0]['doctor_id'];
                        if(isset($kqbacsi)){
                            foreach ($kqbacsi as $bs){
                                if($bs['doctor_id'] == $id_doctor){
                                    echo '<option value="'.$bs['doctor_id'].'" selected>'.$bs['doctor_name'].'</option>';
                                }else{
                                    echo '<option value="'.$bs['doctor_id'].'" >'.$bs['doctor_name'].'</option>';
                                }
                            }
                            
                      }

                    ?>
                    <!-- Thêm các tên khoá học khác vào đây -->
                </select>
                    
                </div>
            </div>
           
       
            <div class="row mb-3">
              <div class="col-sm-10">
              <td><input type="submit" class="btn btn-primary" name="suabaiviet" value ="Cập nhật"></input></td>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    <!-- </div> -->

  </div>
</section>

</main><!-- End #main -->