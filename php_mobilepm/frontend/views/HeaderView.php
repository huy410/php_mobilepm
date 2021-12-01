<div class="row1" style="background: black;">
      <div class="col-xs-12 col-sm-12 col-md-12"> <span style="color: white;"><i class="fa fa-phone"></i> (09) 6996 9669</span> <span><i class="fa fa-envelope-o"  style="color: white;"></i> <a href="mailto:support@mail.com">support@mobilePM.com</a></span>
      <?php if(isset($_SESSION["customer_email"])): ?>
        <span style="margin-left: 40%;"><a href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?></a></span>&nbsp; &nbsp;<span><a href="index.php?controller=account&action=logout">Đăng xuất</a></span>
        <?php else: ?>
      <span style="margin-left: 40%;"><a href="index.php?controller=account&action=login">Đăng nhập</a></span>&nbsp; &nbsp;<span><a href="index.php?controller=account&action=register">Đăng ký</a></span> 
    <?php endif; ?>
    </div>
    
    </div>
<div class="head1">
  <a href="index.php"><div class="logo"><button type="submit" style="width: 90%;font-size: 32px; ; border-radius: 3px;animation: animate 5s linear infinite; background: linear-gradient(40deg,#008aff, #00ffe7); border: none;">Mobile PM</button></div></a>
  <style type="text/css">
    @keyframes animate{
  0%,100%{
    filter: hue-rotate(0deg);
  }
  50%{
    filter: hue-rotate(360deg);
  }
}
  </style>
  <div class="nav69">
    <ul>
      <li><a href="index.php?controller=products&action=all1"><i class="fa fa-mobile fa-1.5x" aria-hidden="true" style="color: white"></i> Điện Thoại</a>
          <?php 
              //load mvc bằng tay
              include "controllers/CategoriesController.php";
              $obj = new CategoriesController();
              $obj->index();
           ?>
      </li>
      <li><a href="index.php?controller=new"><i class="fa fa-newspaper-o fa-1.5x" style="color: white"></i>Tin tức</a>
          
          </li>
          <li><a href="#"><i class="fa fa-desktop fa-1.5x" style="color: white"></i>Bảo hành</a></li>
          <li><a href="#"><i class="fa fa-headphones fa-1.5x" style="color: white"></i>Phụ Kiện</a></li>
          <li><a href="#"><i class="fa fa-shield fa-1.5x" style="color: white"></i>Sửa Chữa</a></li>
    </ul>
  </div>
  <script type="text/javascript">
      function search(){
        var key = document.getElementById('key').value;
        //di chuyen den trang search
        location.href="index.php?controller=search&action=productName&key="+key;
      }
      //---
      function smartSearch(){
        var key = document.getElementById('key').value;
        if(key != ""){
          document.getElementById('smart-search').setAttribute("style","display:block;");
          //---
          $.ajax({
            url: "index.php?controller=search&action=smartSearch&key="+key,
            success: function( result ) {
              //alert(result);
              $( "#smart-search ul" ).empty();
              $( "#smart-search ul" ).append(result);
            }
          });
          //---
        }else{
          document.getElementById('smart-search').setAttribute("style","display:none;");
        }

      }
      //---
    </script>
  <div class="search">
    <input style="width: 100%; position: relative;" onkeyup ="smartSearch();" type="text" id="key" placeholder="Search..." class="input-control">
    <button style="background: #333333; border: none;" onclick="return search();"><i id="keyBtns" class="fa fa-search" style="color: grey;"></i></button>
    <style type="text/css">
        #smart-search ul{padding:0px; margin-top: 50px; margin:0px; z-index: 100000; list-style: none;}
        #smart-search ul li{border-bottom: 1px solid #dddddd;font-size: 12  px;}
        #smart-search{position: absolute; width: 200%; z-index: 100000; background: white; display: none; margin-top: 33px;right: 00%;text-align: left;}
        #smart-search ul li a{
          text-decoration: none;
          color: black;
        }
        #smart-search p{
          color: red;
          text-align: right;
        }
      </style>
      <script type="text/javascript">
        $("#key").keypress(function(event){
        if(event.keyCode == 13){
            $("#keyBtn").click();
        }
        }); 
      </script>
      <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
      <div id="smart-search" >
        <ul style="height: 500px; overflow: scroll; overflow-x: hidden;">
        </ul>
      </div>
  </div>
  <div class="cart"><a href="index.php?controller=cart" onclick="openNav()"><i class="fa fa-shopping-cart fa-2x fa-border" aria-hidden="true" style="color: grey;margin-left: -10px;" ></i></a></div>
</div>

    <!-- cart -->
        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <!-- Use any element to open the sidenav -->
        <script type="text/javascript">
          /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
              function openNav() {
                document.getElementById("mySidenav").style.width = "550px";                
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
              }

          /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
              function closeNav() {
                document.getElementById("mySidenav").style.width = "0";                
                document.body.style.backgroundColor = "white";
              }
        </script>

          <style type="text/css">
            body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 10;
  top: 0;
  right: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  border: 1px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
          </style>
    <!-- cart -->

 <!--  head -->

 <style type="text/css">
  .head1{float: left; display: inline; background: black;width: 100%;margin-bottom: 20px;font-weight: bold;}
  .logo{padding: 17px;width: 15%;height: 90%;margin-right: -10px;}
  .nav69{
  padding-left: 50px;
  float: left;
  width: 60%;
}
.nav69 ul{
  margin-left: -70px; 
  display: flex;
  list-style: none;
  margin-top: 30px;
}
.nav69 ul li a{
  font-size: 20px;
  color: white;
  text-decoration: none;
}
.nav69 ul li{
  margin-left: 10px !important;
  padding-left: 30px; 
  padding-right: 30px;
  transition: 1s;
  position: relative;
}
.nav69 ul li:hover{
  background: grey;
  color: white;
}
.nav69 ul li ul{
  position: absolute;
  z-index: 2;
  width: 200px;
  left: 0px;
  display: none;
  margin-top: 0px;
  margin-left: 0px;
  background: white;
  padding: 30px;
}
.nav69 ul li ul a{
  color: black;
}
.nav69 ul li:hover ul{
  display: block;
}
.nav69 ul li ul li {
  margin-left: -20px;
  padding: 0px;
}
.search{
  position: absolute;
  float: left;
  margin-top: 30px;
  margin-left: 73%;
  width: 20%;
}
.search a i{
  position: relative;
  right: -285px;
  top: -28px;
  background: transparent;
}
.cart{
  position: relative;
  float: right;
  right: 0px;
  width: 5%;
  margin-top: 20px;
}
</style>

<!-- head -->
  