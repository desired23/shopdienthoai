<?php include_once "header.php"; ?>
<div class="banner demobox marb">
        <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="public/images/flip4-6tr2-sliding.png" style="width:100%">
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="public/images/dyson20.10.jpg" style="width:100%">
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="public/images/apple-week-sliding.png" style="width:100%">
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
<main class="demobox">
  <div class="box-left marr demobox">
    <div class="category demobox box-left-child marb">
      <div class="box-title">Danh mục</div>
      <ul>
        <?php
        foreach ($loai_hang as $cate) {
          extract($cate);
          $cate_link = "index.php?ctr=product&ma_loai=" . $ma_loai;
          echo '<li>
                  
                   <a href="' . $cate_link . '">' . $ten_loai . '</a>
                 
                </li>';
        }
        ?>
      </ul>
    </div>
    <div class="top-seller box-left-child marb">
      <div class="box-title">Top 10 sản phẩm bán chạy</div>
      <div class="list-top-10">
        <ul>
          <?php
          foreach ($top10s as $top10){
            extract($top10);
            $product_detail = "index.php?ctr=product-detail&ma_hh=".$ma_hh ;
            echo '<li><a href="'.$product_detail.'">
            
            <div class="top-10-item">
              <img src="public/images/'.$hinh.'" alt="image" /> <span>'.$ten_hh.'</span>
            </div>
            </a>
          </li>';
          }
          ?>
          <!-- <li>
                  <div class="top-10-item">
                    <img src="public/images/image-removebg-preview-18.png" alt="" /> <a href="#">sp1</a>
                  </div>
                </li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="box-right demobox">
    <div class="box-title marb">
      <h3>Sản phẩm mới</h3>
    </div>
    <div class="wrapper-products">
      <?php
      foreach ($hang_hoa as $sn) {
        extract($sn);
        // $image = $img_path.$hinh;
        $product_detail = "index.php?ctr=product-detail&ma_hh=".$ma_hh ;
        $imageload = "public/images/" . $hinh;
        // echo $hinh;
        echo ' <div class="box-product">
                <div class="imgxdetail">
                  <img src="' . $imageload . '" alt="hinhbiloi"/>
                  <div class="detail">
                    <h3><a href="'.$product_detail.'">Xem chi tiết</a></h3>
                  </div>
                </div>
                <div class="product-box-name"><a href="'.$product_detail.'">' . $ten_hh . '</a></div>
                <div class="flex-bottom-product">
                  <h5>Giá: <span>' . $don_gia . '$</span></h5>
                  <button class="add-cart">Thêm vào giỏ hàng</button>
                </div>
              </div>';
      } ?>
    </div>
  </div>
</main>
<?php include_once "footer.php" ?>