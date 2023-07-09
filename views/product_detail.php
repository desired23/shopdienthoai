<?php include_once "header.php";
// require_once "./models/connection.php";
// require_once "./models/binh-luan.php";
?>
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
          foreach ($top10s as $top10) {
            extract($top10);
            $product_detail = "index.php?ctr=product-detail&ma_hh=" . $ma_hh;
            echo '<li>
            <div class="top-10-item">
              <img src="public/images/' . $hinh . '" alt="image" /> <a href="' . $product_detail . '">' . $ten_hh . '</a>
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
  <div class="product-detail box-right demobox">
    <?php
    extract($get_info_pro);
    ?>
    <h3><?= $ten_hh ?></h3>
    <div class="product-detail-view">
      <?php
      $image = "public/images/" . $hinh;
      // echo $image;

      ?>
      <div class="product-detail-view-img"><img src="<?= $image ?>" alt="anh loi"></div>
      <?php
      echo $mo_ta;
      ?>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#comment-box").load("views/comment/comment-form.php", {
          idpro: <?= $ma_hh ?>
        })

      });
    </script>
    <div class="comment-box" id="comment-box"></div>
    <div class="product-related">
      <h3>Sản phẩm liên quan</h3>
      <div class="product-related-item">
        <?php
        foreach ($sp_related as $sprelated) {
          extract($sprelated);
          $product_detail = "index.php?ctr=product-detail&ma_hh=" . $ma_hh;
          echo '<li><a href="' . $product_detail . '">' . $ten_hh . '</a></li>';
        }
        ?>
      </div>
    </div>
  </div>
</main>
<?php include_once "footer.php" ?>