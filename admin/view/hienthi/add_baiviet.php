<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Thêm</li>
      <li class="breadcrumb-item active">Bài viết</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Thêm thông tin bài viết</h5>

          <?php
            //  echo var_dump($svone);
          ?>
          <!-- General Form Elements -->
          <form action="index.php?act=add_baiviet" method="POST" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tên chuyên mục</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="category_id">
                    <option value="0">Chọn chuyên mục</option>
                    <?php
                      if(isset($kqchuyenmuc)){
                        foreach ($kqchuyenmuc as $cm){
                          echo '<option value="'.$cm['category_id'].'">'.$cm['title'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Hình ảnh</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="image" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Tiêu đề</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name = "title" value="">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Mô tả</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "content" value="">
              </div>
            </div>

            <div class="row mb-3">
                <label for="ten_chuyen_muc" class="col-sm-2 col-form-label">Tên bác sĩ</label>
                <div class="col-sm-10">
                <select class="form-control" id="" name="doctor_id">
                    <option value="0">Chọn bác sĩ</option>
                    <?php
                      if(isset($kqbacsi)){
                        foreach ($kqbacsi as $bs){
                          echo '<option value="'.$bs['doctor_id'].'">'.$bs['doctor_name'].'</option>';
                        }
                      }

                    ?>
                   
                </select>
                    
                </div>
            </div>
            

            
       
            <div class="row mb-3">
              <div class="col-sm-10">
              <td><input type="submit" class="btn btn-primary" name="thembaiviet" value ="Thêm mới"></input></td>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    <!-- </div> -->

  </div>
</section>

</main><!-- End #main -->