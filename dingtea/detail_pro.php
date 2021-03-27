<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Craloy</title>
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
  function tang(){
    var sl = document.getElementById('soluong').value;
    if(parseInt(sl)<10){
    document.getElementById('soluong').value=parseInt(sl)+1;
      }
  } 
  function giam(){
    var sl = document.getElementById('soluong').value;
    if(parseInt(sl)>1){
    document.getElementById('soluong').value=parseInt(sl)-1;
      }
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
  class-img{
      float: left;
    }
    .col-md-6-nd{
      text-align: left;
      width: 50%;
      height: 100%;
      float: right;
      color: white;
      margin-top:40px;
      margin-bottom:50px;
    }
    .chitet img.anhchitiet{
      margin-top:40px;
      margin-bottom:60px;
    }
    .topping{
      color:black;
      height:30px;
    }
</style>
</head>
<body>
  <?php include('modules/nav.php'); ?>  
<div class="banner">
  <img class="img-responsive" src="images/vnL_banner_ins_19L04_ratw2zksy2.jpg" alt="..." width="100%">
</div>
 <div class="chitet">
  <?php 
   $con = mysqli_connect('localhost','root','','trasuacraloy');
        $sql="SET NAMES UTF8";
       mysqli_query($con,$sql);
       $sqlchitiet1='SELECT * FROM trasua WHERE ma_ts='.$_GET['id_ts'];
       $re_detail_ts=mysqli_query($con,$sqlchitiet1);
       $row_detail=mysqli_fetch_array($re_detail_ts);
      ?>
      <a style="text-decoration: none;color:#fff;margin-left:10px;margin-top:10px;" href="product.php">Quay lại</a>
  <div align="center" class="container">
  <div class="col-md-6 img">
  <img class="img-thumbnail anhchitiet" src="images/<?php echo $row_detail['hinh_anh_ts']; ?>"  width="300px" height="400px" />
</div>
<form method="post" action="orderdetails.php">
<div class="col-md-6-nd">
<table align="center">
<h1><?php echo $row_detail['ten_ts']; ?></h1>
<br>
<p style="color:limegreen;font-size:20px"><b>Giá:</b> <?php echo number_format($row_detail['gia_ts']); ?> đồng</p>
<p><?php echo $row_detail['mo_ta']; ?></p>

<tr>
<td colspan="2">
<input  style="color:black;text-align:center;width: 40px;font-weight: bold;border-radius: 10px;" type="button" onclick="giam()" value="-">
<input style="color:black;text-align:center;" type="text"  id="soluong" size="1" value="1" />
<input  style="color:black;text-align:center;width: 40px;font-weight: bold;border-radius: 10px;" type="button" onclick="tang()" value="+"></td>
</tr>
<br>
  
</table>
<br><br><br>
<br><br>
<a href="cart/addcart.php?id=<?php echo $row_detail['ma_ts']; ?>"><button type="button" class="btn btn-primary">Chọn mua</button></a>
</div>
</form>

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
