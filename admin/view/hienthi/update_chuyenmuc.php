<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item">Sửa</li>
      <li class="breadcrumb-item active">Chuyên khoa</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <!-- <div class="col-lg-6"> -->

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cập nhật thông tin chuyên khoa</h5>

          <?php
            //  echo var_dump($svone);
          ?>
          <!-- General Form Elements -->
          <form action="index.php?act=sua_chuyenmuc" method="POST" enctype="multipart/form-data">
        
            <input type="hidden" name="category_id" value="<?= $cmgetone[0]['category_id'] ?>">


            <div class="row mb-3" >
                <label for="formFile" class="col-sm-2 col-form-label">Hình ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image"  value="<?=trim($cmgetone[0]['image'])?>">

                    <?php if (!empty($cmgetone[0]['image'])): ?>
                    
                    <p>Hình ảnh hiện tại:</p>
                    <img src="../admin/assets/img/<?=$cmgetone[0]['image']?>" alt="" style="max-width: 500px; height: 250px;">
                    <?php endif; ?> 
                </div>
            </div>


            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Tiêu đề</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name = "title" value="<?=trim($cmgetone[0]['title'])?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Mô tả</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="" name = "content" value="<?=trim($cmgetone[0]['content'])?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label" >Tài trợ</label>
              <div class="col-sm-10">
                <input type="type" class="form-control" name = "sponsor" value="<?=trim($cmgetone[0]['sponsor'])?>">
              </div>
            </div>

       
            <div class="row mb-3">
              <div class="col-sm-10">
              <td><input type="submit" class="btn btn-primary" name="suachuyenmuc" value ="Cập nhật"></input></td>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    <!-- </div> -->

  </div>
</section>

</main><!-- End #main -->