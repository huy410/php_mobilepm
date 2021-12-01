<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>

<!-- content -->
        <div class="sp-cont">
                <div class="sp-nav">
                        <a href="#">Trang chủ</a>
                        <span>  /  </span>
                        <a href="#"> Điện thoại</a>
                        <span>  /  </span>
                        <a href="#"><?php echo $this->modelGetCategory($record->category_id); ?></a>
                        <span>  /  </span>
                        <span> <?php echo $record->name; ?><span>
                </div>
                <div class="sp-img"><img style="width: 90%;" src="../assets/upload/products/<?php echo $record->photo; ?>" class="img-responsive" id="large-image" itemprop="image" data-zoom-image="../assets/upload/products/<?php echo $record->photo; ?>" alt="<?php echo $record->name; ?>" /></div>
                <div class="sp-info">
                        <div class="info-title"><h1><?php echo $record->name; ?></h1></div>
                        <!-- <div>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span style="margin-left: 20px;">1 Review</span>
                                <span style="margin-left: 20px;"><a>Add your review</a></span>
                        </div> -->
                        <div class="sp-gia">
                                <span style="color: #8c8c8c; font-size: 48px;">
                                        <span style="color: red;">$ <?php echo number_format($record->price - ($record->price*$record->discount)/100); ?></span>
                                        <span style="text-decoration: line-through;">$ <?php echo number_format($record->price); ?></span>
                                </span>
                                <div style="margin-bottom: 30px;">
                                        <span style="color: green; font-size: 16px; float: right; "><i class="fas fa-check-square"></i>Còn hàng</span>
                                <span style="font-size: 16px; color: grey;float: right;margin-right: 5px; ">Mã hàng:VNOP8PR0</span>
                                        
                                </div>
                        </div>
                        <div class="sp-tt">
                                <ul>
                                        <li>6.78-inch 120Hz Fluid QHD+ AMOLED Display.</li>
                                        <li>Qualcomm Snapdragon 865 5G Soc, with Adreno 650 GPU.</li>
                                        <li>Quad Rear cameras: 48MP+48MP+8MP+5MP, a 16MP selfie camera.</li>
                                        <li>8GB/12GB DDR5 RAM, 128GB/256GB UFS 3.0 storage.</li>
                                        <li>4510mAh battery, 30W Qi Wireless Charging, 30T Warp Charge (5V/6A).</li>
                                        <li>OxygenOS 10 base on Android 10 OS.</li>
                                </ul>
                        </div>
                        <div class="sp-mau">
                                <h4><strong>*Color & Memory</strong></h4>
  <select id="a" name="a">
    <option value="1">8GB-128GB Xanh</option>
    <option value="2">8GB-256GB Đen</option>
    <option value="3">12GB-256GB Xanh</option>
    <option value="4">12GB-256GB Đen</option>
  </select>
                        </div>
                        <div class="sp-mua" style="padding-top: 20px;">
                                <a><button type="submit" class="btn btn-danger font-size-12" style="height: 100px; width: 300px; font-size: 36px; padding: 20px;">Buy Now</button></a>
                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                                <button type="submit" class="btn btn-success font-size-12" style="height: 100px; width: 300px; font-size: 36px;">Add to Cart</button></a>
                        </div>
                </div>
                <div class="nav2">
                        <div class="hang">
                                <div class="title">Sản phẩm liên quan</div>
                                <div class="cont">
                                        <ul>
                                            <?php foreach($data as $rows): ?>
                                                <li><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img style="width: 100px; height: 100px;" src="../assets/upload/products/<?php echo $rows->photo; ?>"><?php echo $rows->name; ?></a></li> 
                                            <?php endforeach; ?>                                             
                                        </ul>
                                </div>
                        </div>
                </div>
                <div class="ttct" style="padding: 15px;">
                                <h1>Thông tin chi tiết</h1>
                                <!-- <img src="img/ttct.jpg"> -->
                    <!-- Tab links -->
                    <div class="tab">
                      <button class="tablinks active" onclick="openCity(event, 'London')">Desription</button>
                      <button class="tablinks" onclick="openCity(event, 'Paris')">Content</button>
                      <button class="tablinks" onclick="openCity(event, 'Hanoi')">Review</button>
                      <button class="tablinks" onclick="openCity(event, 'Tokyo')">Submit your Review</button>
                    </div>

                    <!-- Tab content -->
                    <div id="London" class="tabcontent" style="display: block;">
                      <h3>Desription</h3>
                      <p><?php echo $record->description ; ?></p>
                    </div>

                    <div id="Paris" class="tabcontent">
                      <h3>Content</h3>
                      <p><?php echo $record->content; ?></p>
                    </div>
                    <div id="Hanoi" class="tabcontent">
                      <h3 style="text-align: left;">Review(<?php echo $reviews; ?> reviews)</h3>
                      <?php foreach ($review as $rows): ?>
      <div style="display: flex;border: 1px solid #f5f5f5;">
        <div style="width: 20%;border-right: 1px solid #f5f5f5;margin: 40px 40px;">
          <img src="img/nobody.jpg" style="width: 70px; border-radius: 50%;">
          <div style=""><?php echo $rows->name; ?></div>
          <div><?php echo $rows->email; ?></div>
        </div>
        <div style="width: 85%; margin: 20px 0px;">
          <div style="display: flex;position: relative;">
            Tilte: &nbsp;<div style="font-size: 20px;color: #01b7f2;"><?php echo $rows->title; ?></div>
            <div style="display: flex;position: absolute;right: 20px;font-size: 16px;">
              <div style="padding-right: 10px;">
                  <?php for($i =0;$i< $rows->star;$i++): ?>
                    <span class="fa fa-star checked" style="margin-top: 10px;"></span>
                  <?php endfor; ?>
                  <?php for($i=0;$i<(5- $rows->star);$i++): ?>
                    <span class="fa fa-star" style="margin-top: 10px;"></span>
                  <?php endfor; ?>
              </div>
              <div style="display: flex; margin-top: 5px;">
                <div>
                  <?php echo number_format($rows->star,1, '.', '') ?>
                </div>
                <div>
                  /5.0
                </div>
              </div>
            </div>
          </div>
          <div style="margin-top: 30px;font-size: 14px; text-align: left;"><?php echo $rows->review; ?></div>
        </div>
      </div>
    <?php endforeach; ?>


                    </div>

                    <div id="Tokyo" class="tabcontent">
                      <?php $id = isset($_GET["id"]) ? $_GET["id"] : 0; ?>
                      <form method="post" action="index.php?controller=reviews&action=writeReview&id=<?php echo $id ?>">
                      <h3></h3>
                      <p>
                            <div class="product-detail-star">
          <h2 style="font-size: 20px; float: left; margin-top: 30px;margin-left: 5%;">Your overall rating : </h2>
              <i class="fa fa-star a12" style=" margin-left: -900px; margin-top: -190px;" aria-hidden="true" onclick="one_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onclick="two_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onclick="three_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onclick="four_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onclick="five_star1()"></i>
        </div>
        <input type="text" name="star" style="position: absolute;display: none;" id="current-star">
        <style type="text/css">
          .a12{
            font-size: 40px;
            color: #9e9e9e;
            margin: 20px 10px;
          }
          .checked {
            color: orange;
          }
        </style>
        <script type="text/javascript">
           function one_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
     element[0].classList.add("checked");
     document.getElementById("current-star").value = "1";
  }
  function two_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
    for(var i=0;i<2;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "2";
  }
  function three_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
     for(var i=0;i<3;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "3";
  }
  function four_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
     for(var i=0;i<4;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "4";
  }
  function five_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
    for(var i=0;i<5;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "5";
  }
        </script>
        <div style="padding: 30px;">
        <div class="rname" style="float: left; width: 45%; text-align: left;margin-left: 3%;">Your Name<br>
        <input style="width: 95%;" type="text" name="name" placeholder="Enter your name"></div>
        <div class="rtitle" style="text-align: left;margin-left: 50px;">Title<br>
        <input style="width: 45%;" type="text" name="title" placeholder="Enter your title"></div>
        <div style="clear: both; text-align: left;margin-left: 3%;margin-top: 30px;">Your Review<br>
          <textarea style="width: 91%;height: 100px;" name="review" placeholder="Write your review..."></textarea>
          <?php if(isset($_SESSION["customer_email"])): ?>
          <input type="submit" value="SUBMIT REVIEW" style="padding:10px 100px; background-color: rgb(0, 191, 255);border: none;outline: none;color: white; margin-left: 0%;margin-top: 20px;font-size: 16px;">
        <?php else: ?>
          <input type="button" value="SUBMIT REVIEW" style="padding:10px 100px; background-color: rgb(0, 191, 255);border: none;outline: none;color: white; margin-left: 0%;font-size: 16px;" onclick="loginToReview()">
        <?php endif; ?>
        <script type="text/javascript">
          function loginToReview(){
            location.href = "index.php?controller=account&action=login";
          }
        </script>
        </div>
        </div>
                      </p>
                    </form>
                    </div>
                </div>

        </div>
        <!-- /content -->

<style type="text/css">
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<script type="text/javascript">
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>