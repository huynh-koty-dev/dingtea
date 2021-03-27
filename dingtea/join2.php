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
<style>
  .bs-example-modal-lg{
    background:url("images/hh3-1493052173.jpg") no-repeat;
    background-size: cover;
  }
  body{
    background:#f1ede9;
  }
</style>
</head>
<body>

<?php include('modules/nav.php'); ?>
<div class="banner">
  <img class="img-responsive" src="images/banner_join.jpg" alt="..." width="100%">
</div>
<div class="title-product">
    <p><i>Shake for Life</i></p>
    <h1><b>JOIN</b></h1>
    <p>Gia nhập cùng chúng tôi</p>
  </div>
    <nav class="navbar navbar-inverse menu-join" role="navigation">
      <div class="container">
          <ul class="nav navbar-nav">
            <li><a href="join.php">Giới thiệu về nhượng quyền </a></li>
            <li class="active"><a href="join2.php">Ưu thế tham gia nhượng quyền</a></li>
          </ul>
      </div>
    </nav>

<div class="join">
  <div class="container">
    <div class="col-md-3">
        <h3>WE MEET IN DING TEA</h3>
        <p>Chúng ta, nhờ DingTea mà hội ngộ</p>
    </div>
    <div class="col-md-6">
      <br>
      <p><b>Giới thiệu về DingTea</b></p>
      <hr>
      <ul class="list-join2">
        <li>Hình thái kinh doanh: Kinh doanh cửa hàng, đồ uống cao cấp, có quy hoạch marketing hàng năm và các chuỗi hoạt động marketing linh hoạt.</li>
        <li>Hình ảnh doanh nghiệp: Một thương hiệu quốc tế có tính cạnh tranh toàn cầu</li>
        <li>Lựa chọn nghiêm ngặt các thành phần: Lựa chọn nghiêm ngặt các nguyên liệu chất lượng cao, đạt tiêu chuẩn kiểm nghiệm quốc tế.</li>
        <li>Thái độ chuyên nghiệp: đội ngũ hùng hậu, chú trọng đến từng chi tiết, nhấn mạnh vào chất lượng và trình bày sản phẩm một cách hoàn hảo.</li>
        <li>Tuyên truyền marketing: Kinh nghiệm marketing toàn diện, tương tác truyền thông tốt và quan hệ công chúng xã hội rộng rãi.</li>
        <li>Training đào tạo: Đầy đủ các khóa học về kĩ thuật, bí kíp kinh doanh, kinh nghiệm thực tế và các khóa học quản lý vận hành.</li>
        <li>Hỗ trợ kinh doanh: Nghiên cứu các trào lưu đồ uống thịnh hành nhất, mang lại sự hỗ trợ thiết thực nhất cho các chủ đầu tư.</li>
      </ul>
    </div>
    <div class="col-md-3">
      <br>
      <p><b>Quy trình đào tạo</b></p>
      <hr>
      <ul class="list-join">
        <li>Quy trình đứng quầy, đứng bếp</li>
        <li>Quản lý quan hệ khách hàng</li>
        <li>Vận hành bảo dưỡng thiết bị</li>
        <li>Quản lý marketing cửa hàng</li>
        <li>Phương pháp tính vốn, lỗ, lãi</li>
      </ul>
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
