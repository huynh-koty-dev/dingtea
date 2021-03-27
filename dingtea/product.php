<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sản phẩm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script>
     $(document).ready(function($){
          pos = $(".menu-top").position();
          $(window).scroll(function(){
            var posScroll = $(document).scrollTop();
            if(parseInt(posScroll)<parseInt(pos.top)){
              $(".menu-top").addClass('fixed-top');
            }else{
               $(".menu-top").addClass('fixed-top');
            }
            if(parseInt(posScroll)){
              $(".menu-top").removeClass('fixed-top');
            }
          });
});

</script>
<script> 
  function chuyentrang_menu(){
    location.href='menu_pro.php';
  }
</script>
<style>
  .bs-example-modal-lg{
    background:url("images/hh3-1493052173.jpg") no-repeat;
    background-size: cover;
  }
  body{
    background:#343434;
  }
  .btn-search{
    position:relative;
    left:270px;
    top:34px;
    
  }
</style>
</head>
<body>
  <?php include('modules/nav.php'); ?> 
<div class="banner">
  <img class="img-responsive" src="images/vnL_banner_ins_19L04_ratw2zksy2.jpg" alt="..." width="100%">
</div>
<div class="title-product">
    <p><i>Shake for Life</i></p>
    <h1>THE PRODUCT</h1>
    <p>DING TEA</p>
    <button type="button" class="btn btn-sm btn-product" onclick="return chuyentrang_menu();">Menu</button>
  </div>
 
<div class="main-product">
  
  <div class="col-md-3 col-sm-3 col-xs-12 menu-left">   
            <div class="row">
              <ul class="list-group">
              <li><a class="list-group-item" href="product.php">All</a></li>
              <?php 
              $con = mysqli_connect('localhost','root','','trasuacraloy');
              $sql="SET NAMES UTF8";
              mysqli_query($con,$sql); 
              $list_menu= "SELECT * FROM loaitrasua";
              $result2= mysqli_query($con,$list_menu);
              while($row2 = mysqli_fetch_array($result2)){
              ?>
              <li><a class="list-group-item" href="view_pro.php?id=<?php echo $row2['ma_loai_ts']; ?>"><?php echo $row2['ten_loai']; ?></a></li>
               <?php
               }
               ?> 
            </ul>
            </div>
            <div class="col-sm-12">
              <form action="search_pro.php" method="get">
                <div class="form-group">
                  <button type="submit" class="btn btn-default btn-search" name="ok"><span class="glyphicon glyphicon-search"></span></button>
                  <input type="text" class="form-control" placeholder="Search" name="search">

                </div>
               </form> 
            </div>
          </div>
         
 <div class="col-md-9 col-sm-9 col-xs-12">
  <div>
    
      <?php 
        $con = mysqli_connect('localhost','root','','trasuacraloy');
        $sql="SET NAMES UTF8";
       mysqli_query($con,$sql);
        $selectpro = 'SELECT * FROM trasua';
        $result = mysqli_query($con,$selectpro);
        while($row = mysqli_fetch_array($result)){


       ?>
    <div class="col-md-3 col-sm-6 col-xs-12 ">
      <center>
      <div class="sanpham">
          <div class="can-pro">
          <a  href="detail_pro.php?id_ts=<?php echo $row['ma_ts'] ?>"><img  class="img-responsive" src="images/<?php echo $row['hinh_anh_ts']; ?>" alt="..." width="30%"></a>
          <br>
          <h3><a  href="detail_pro.php?id_ts=<?php echo $row['ma_ts'] ?>"><?php echo $row['ten_ts']; ?></a></h3>
          </div>
      </div>
      </center>
    </div>
    
      
    
    
      
   <?php 
        }
      ?> 
  </div>
  </div>
       
</div>
<div class="footer">
  <div class="container">
    <div class="col-sm-2 col-xs-12">
      <br><br>
    <h1><a href="trang_chu.php">Craloy</a></h1>
  </div>
  <div class="col-sm-7 col-xs-12">
    <br><br>
    <h6>HÒA MÌNH VỚI CÁCH THỂ HIỆN HOÀN HẢO NHỮNG TRẢI NGHIỆM CUỘC SỐNG,<br> CỐNG HIẾN CHO THỊ TRƯỜNG NHỮNG SẢN PHẨM TUYỆT VỜI NHẤT, “CÀN <br> QUÉT” THẾ GIỚI, SHAKE FOR LIFE!</h6>
    <hr>
    <div class="row footer-mini">
      <div class="col-sm-6">
        <p>T +886-4-22530011</p>
        <p>A21F-2, No. 88, Sec. 1, Huizhong Rd., Xitun Dist.,</p>
        <p>Taichung City 407, Taiwan (R.O.C.)</p>
        <p>網頁設計‧ iBest</p>
      </div>
      <div class="col-sm-6">
        <p>E dingteaMK@dingtea.com</p>
        <p>AM8:30-PM5:30</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-xs-12">
    <br><br>
   <h4>Follow us</h4>
   <form action="" method="post">
     <input type="email" required name="sub" class="form-control" placeholder="email">
     <button style="float: right;margin-top: -34px;" class="btn btn-default" name="follow">Theo dõi</button>
   </form>
   <?php 
   if(isset($_REQUEST['follow'])){
    $email=$_POST['sub'];
    $sqlsub="INSERT INTO subscribers(email) VALUES('$email')";
    mysqli_query($con,$sqlsub);
   }
    ?>
  </div>
  </div>
</div>
</body>
</html>
