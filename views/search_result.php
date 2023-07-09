<?php include_once "header.php" ?>
<main>
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
            echo '<li>
            <div class="top-10-item">
              <img src="public/images/'.$hinh.'" alt="image" /> <a href="'.$product_detail.'">'.$ten_hh.'</a>
            </div>
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
    <div class="box-right demobox show-product-cate">  
    <h3 class="box-title">Kết quả tìm kiếm cho từ khóa: <?=$key?></h3> 
     <div class="wrapper-products">
     <?php
     foreach ($hang_hoa as $sp) {
       extract($sp);
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
               <a href="'.$product_detail.'">' . $ten_hh . '</a>
               <div class="flex-bottom-product">
                 <h5>Giá: <span>' . $don_gia . '$</span></h5>
                 <button>Thêm vào giỏ hàng</button>
               </div>
             </div>';
     } ?>
   </div>
       
     </div>    
    </div>
</main>
<?php include_once "footer.php" ?>