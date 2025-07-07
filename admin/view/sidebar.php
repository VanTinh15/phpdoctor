  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php?act=trangchu">
          <i class="bi bi-grid"></i>
          <span>Trang quản lý</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <?php  if(isset($_SESSION['user_role']) && ($_SESSION['user_role'] == "admin" )): ?>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-badge"></i><span>Quản lý bác sĩ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_bacsi">
              <i class="bi bi-circle"></i><span>Danh sách bác sĩ</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_bacsi">
              <i class="bi bi-circle"></i><span>Thêm bác sĩ</span>
            </a>
          </li>

   
    
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>Quản lý bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_baiviet">
              <i class="bi bi-circle"></i><span>Danh sách bài viết</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_baiviet">
              <i class="bi bi-circle"></i><span>Thêm bài viết</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-folder2"></i><span>Quản lý chuyên khoa  </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_chuyenmuc">
              <i class="bi bi-circle"></i><span>Danh sách chuyên khoa</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_chuyenmuc">
              <i class="bi bi-circle"></i><span>Thêm chuyên khoa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <!-- Quản lý lịch hẹn -->
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#appointments-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-calendar-check"></i><span>Quản lý lịch hẹn</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="appointments-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="index.php?act=list_lichhen">
                      <i class="bi bi-circle"></i><span>Danh sách lịch hẹn</span>
                  </a>
              </li>
              <!-- <li>
                  <a href="index.php?act=add_datlich">
                      <i class="bi bi-circle"></i><span>Thêm đặt lịch</span>
                  </a>
              </li> -->
          </ul>
      </li><!-- End Appointments Nav -->

      <!-- Quản lý menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-people"></i><span>Quản lý bệnh nhân</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="menu-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="index.php?act=list_benhnhan">
                      <i class="bi bi-circle"></i><span>Danh sách bệnh nhân</span>
                  </a>
              </li>
              <li>
                  <a href="index.php?act=add_benhnhan">
                      <i class="bi bi-circle"></i><span>Thêm bệnh nhân</span>
                  </a>
              </li>
          </ul>
      </li><!-- End Menu Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-envelope"></i><span>Quản lý liên hệ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_lienhe">
              <i class="bi bi-circle"></i><span>Danh sách liên hệ</span>
            </a>
          </li>
         
          
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-gear"></i><span>Quản lý tài khoản</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_taikhoan">
              <i class="bi bi-circle"></i><span>Danh sách tài khoản</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_taikhoan">
              <i class="bi bi-circle"></i><span>Thêm tài khoản</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Charts Nav -->




    

      <li class="nav-heading">Trang</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?act=thongtin">
          <i class="bi bi-person"></i>
          <span>Thông tin </span>
        </a>
      </li><!-- End Profile Page Nav -->
      <?php  elseif (isset($_SESSION['user_role']) && ($_SESSION['user_name'] == "patient")) : ?>

          <li class="nav-heading">Trang</l>

          <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?act=thongtin">
              <i class="bi bi-person"></i>
              <span>Thông tin </span>
            </a>
          </li><!-- End Profile Page Nav -->

      <?php elseif(isset($_SESSION['user_role']) && ( $_SESSION["user_name"] == "doctor")) : ?>
        
        <li class="nav-heading">Trang</l>

          <li class="nav-item">
            <a class="nav-link collapsed" href="index.php?act=thongtin">
              <i class="bi bi-person"></i>
              <span>Thông tin </span>
            </a>
          </li><!-- End Profile Page Nav -->
      <?php else:?>
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-badge"></i><span>Quản lý bác sĩ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_bacsi">
              <i class="bi bi-circle"></i><span>Danh sách bác sĩ</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_bacsi">
              <i class="bi bi-circle"></i><span>Thêm bác sĩ</span>
            </a>
          </li>

   
    
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-text"></i><span>Quản lý bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_baiviet">
              <i class="bi bi-circle"></i><span>Danh sách bài viết</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_baiviet">
              <i class="bi bi-circle"></i><span>Thêm bài viết</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-folder2"></i><span>Quản lý chuyên khoa  </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_chuyenmuc">
              <i class="bi bi-circle"></i><span>Danh sách chuyên khoa</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_chuyenmuc">
              <i class="bi bi-circle"></i><span>Thêm chuyên khoa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <!-- Quản lý lịch hẹn -->
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#appointments-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-calendar-check"></i><span>Quản lý lịch hẹn</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="appointments-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="index.php?act=list_lichhen">
                      <i class="bi bi-circle"></i><span>Danh sách lịch hẹn</span>
                  </a>
              </li>
              <!-- <li>
                  <a href="index.php?act=add_datlich">
                      <i class="bi bi-circle"></i><span>Thêm đặt lịch</span>
                  </a>
              </li> -->
          </ul>
      </li><!-- End Appointments Nav -->

    
      <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-people"></i><span>Quản lý bệnh nhân</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="menu-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                  <a href="index.php?act=list_benhnhan">
                      <i class="bi bi-circle"></i><span>Danh sách bệnh nhân</span>
                  </a>
              </li>
              <li>
                  <a href="index.php?act=add_benhnhan">
                      <i class="bi bi-circle"></i><span>Thêm bệnh nhân</span>
                  </a>
              </li>
          </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-envelope"></i><span>Quản lý liên hệ</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_lienhe">
              <i class="bi bi-circle"></i><span>Danh sách liên hệ</span>
            </a>
          </li>
         
          
        </ul>
      </li><!-- End Charts Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-gear"></i><span>Quản lý tài khoản</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?act=list_taikhoan">
              <i class="bi bi-circle"></i><span>Danh sách tài khoản</span>
            </a>
          </li>
          <li>
            <a href="index.php?act=add_taikhoan">
              <i class="bi bi-circle"></i><span>Thêm tài khoản</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Charts Nav -->




     
      <?php endif;?>


    </ul>

  </aside><!-- End Sidebar-->