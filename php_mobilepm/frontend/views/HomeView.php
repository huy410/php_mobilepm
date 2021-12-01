<!--load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php" ?>
<!-- content -->
  <div class="content" >
    <div class="cnt1" style="margin-top: 100px;">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="5000">
      <img style="object-fit: cover;" src="img/m1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=14">Redmi Note 9 Pro</a></h5>
        <p>Bản quốc tế, giá chỉ từ $239</p>
      </div>
    </div>
    <div class="carousel-item" data-interval="5000">
      <img style="object-fit: cover;" src="img/m2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=21">Oneplus 8 Pro</a></h5>
        <p>Bản quốc tế, $799</p>
      </div>
    </div>
    <div class="carousel-item" data-interval="5000">
      <img style="object-fit: cover;" src="img/m3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=31">Mi 10 Pro</a></h5>
        <p>Bản quốc tế, $699</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="height: 100%;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="height: 100%;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  <div class="cnt2" style="padding-top: 20px; ">
    <div class="item">
      <div class="iimg">
        <a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=29"><img src="img/mi10u.webp"></a>
      </div>
      <div class="ititle">
        <a href="#"><b>Mi 10 Ultra</b></a>
      </div>
    </div>
    <div class="item">
      <div class="iimg">
        <a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=30"><img src="img/k30u.webp"></a>
      </div>
      <div class="ititle">
        <a href="#"><b>K30 Ultra</b></a>
      </div>
    </div>
    <div class="item">
      <div class="iimg">
        <a href="#"><img src="img/i1.jpg"></a>
      </div>
      <div class="ititle">
        <a href="#"><b>Amafit T-rex</b></a>
      </div>
    </div>
  </div>
  <!-- cnt 3 -->
  <div class="cnt3">
    <div class="i1">
      <div class="iimg">
        <a href="#"><img src="img/i2.jpg"></a>
      </div>
      <div class="ititle">
        <a href="#"><h1>Tai Nghe W69<br>
          <span style="text-align: left;">$99</span></h1></a>
      </div>
    </div>
    <div class="i2">
      <div class="title">
        <h1 style="color: red">Khuyến Mãi HOT</h1>
      </div>
      <div class="item">
        <div class="it1">
          <div class="img">
            <a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=14"><img src="img/i3.jpg"></a>
          </div>
          <div class="title"><a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=14"><h2>Redmi Note 8 Pro</h2></a><span style="text-decoration:line-through; color: gray;">$12,000,000</span><br><span style="color: rgb(61,183,232);">$10,800,000</span><br>
            <button type="submit" class="btn btn-success font-size-12">Add to Cart</button>
          </div>
        </div>
        <div class="it1">
          <div class="img">
            <a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=25"><img src="img/p3.jpg"></a>
          </div>
          <div class="title"><a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=25"><h2>Nubia Red Magic 5G</h2></a><span style="text-decoration:line-through; color: gray;">$18,000,000</span><br><span style="color: rgb(61,183,232)">$15,300,000</span><br>
            <button type="submit" class="btn btn-success font-size-12">Add to Cart</button>
          </div>
        </div>
        <div class="it1">
          <div class="img">
            <a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=21"><img src="img/p5.jpg"></a>
          </div>
          <div class="title"><a href="http://localhost/php49/admin/frontend/index.php?controller=products&action=detail&id=21"><h2>Oneplus 8 Pro(EU)</h2></a><span style="text-decoration:line-through; color: gray;">$20,000,000</span><br><span style="color: rgb(61,183,232)">$18,000,000</span><br>
            <button type="submit" class="btn btn-success font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /cnt3 -->
  <!-- Top Sale -->
          <section id="top-sale">
            <div class="container py-5">
              <h1 class="font-rubik font-size-20">Hot Phone</h1>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                <?php 
              		$hotProducts = $this->modelHotProducts();
              	 ?>
              	 <?php foreach($hotProducts as $rows): ?>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php $rows->name; ?>" class="img-fluid"></a>
                      <div class="text-center">
                        <h6><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                        	<span style="text-decoration:line-through; color: gray;">$<?php echo number_format($rows->price); ?></span><br>
                          <span style="color: red">$<?php echo number_format($rows->price -($rows->price*$rows->discount)/100)  ?></span>
                        </div>
                        <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><button type="submit" class="btn btn-success font-size-12">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
             	<?php endforeach; ?>
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
        <!-- !Top Sale -->
        <!-- Mac sale -->
        		 <section id="top-sale">
            <div class="container py-5">
              <h1 class="font-rubik font-size-20">Hot Laptop</h1>
              <hr>
              <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                <?php 
              		$products = $this->modelListProducts(12);
              	 ?>
              	 <?php foreach($products as $rows): ?>
                  <div class="item py-2">
                    <div class="product font-rale">
                      <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php $rows->name; ?>" class="img-fluid"></a>
                      <div class="text-center">
                        <h6><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h6>
                        <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                        	<span style="text-decoration:line-through; color: gray;">$<?php echo number_format($rows->price); ?></span><br>
                          <span style="color: red">$<?php echo number_format($rows->price -($rows->price*$rows->discount)/100)  ?></span>
                        </div>
                        <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>"><button type="submit" class="btn btn-success font-size-12">Add to Cart</button></a>
                      </div>
                    </div>
                  </div>
             	<?php endforeach; ?>
                </div>
              <!-- !owl carousel -->
            </div>
          </section>
          <!-- Mac sale -->
         <!-- Blogs -->
            <section id="blogs">
              <div class="container py-4">
                <h1 class="font-rubik font-size-20">Tin Tức</h1>
                <hr>
                <div class="owl-carousel owl-theme">
                	<?php $news = $this->modelHotNews(); ?>
              		<?php foreach ($news as $rows): ?>
                  <div class="item" data-interval="1000">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                      <h5 class="card-title font-size-16"><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h5>
                      <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"><img style="height: 200px;" src="../assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name ?>" class="card-img-top"></a>
                      <p class="card-text font-size-14 text-black-50 py-1"><?php echo $rows->description; ?></p>
                      <a href="#" class="color-second text-left" style=" ">Đọc Thêm</a>
                    </div>
                  </div>
                  <?php endforeach; ?>               
                  </div>
                </div>              
            </section>
          <!-- !Blogs -->
  </div>
  <!-- /content  -->