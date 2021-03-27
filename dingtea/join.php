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
            <li class="active"><a href="join.php">Giới thiệu về nhượng quyền </a></li>
            <li><a href="join2.php">Ưu thế tham gia nhượng quyền</a></li>
          </ul>
      </div>
    </nav>

<div class="join">
  <div class="container">
    <div class="col-md-4">
        <h3>WE MEET IN DING TEA</h3>
        <p>Chúng ta, nhờ DingTea mà hội ngộ</p>
    </div>
    <div class="col-md-8">
      <br>
      <p><b>Giới thiệu về DingTea</b></p>
      <hr>
      <p>Nếu bạn muốn tham gia mở cửa hàng nhượng quyền, chỉ cần bạn đủ 20 tuổi, có niềm đam mê với ngành đồ uống, hoan nghênh bạn gia nhập cùng chúng tôi</p>
      <p>DingTea có một chiến lượng kinh doanh vững chắc và lợi thế thị trường mạnh mẽ, cho phép đối tác nhận quyền dẫn đầu trào lưu trên thị trường. Với giáo trình training bài bản và hoàn chỉnh, hỗ trợ hậu cần hoàn hảo, các dịch vụ hợp lý, kênh liên lạc thông suốt và làm việc trên nguyên tắc cùng có lợi, DingTea luôn khiến các đối tác nhận quyền yên tâm một cách tuyệt đối.</p>
      <br>
      <p><b>Tư cách và điều kiện nhượng quyền</b></p>
      <hr>
      <ul class="list-join">
        <li>Nam, nữ từ 20 tuổi trở lên, tư cách nhân phẩm tốt.</li>
        <li>Có triết lí kinh doanh tương đồng với chúng tôi, sẵn sàng hợp sức để tấn công và thâu tóm thị trường.</li>
        <li>Yêu thích lĩnh vực kinh doanh đồ uống.</li>
        <li>Chủ đầu tư phải đích thân tham gia đào tạo huấn luyện và học các kĩ thuật chuyên ngành.</li>
        <li>Bất luận là tự nguyện tham gia nhận quyền hay nhận quyền thứ cấp, tất cả các chủ đầu tư đều phải mua nguyên vật liệu từ Tổng bộ, để đảm bảo tính đồng nhất củathương hiệu và chất lượng của sản phẩm.</li>
      </ul>
      <br>
      <p><b>Mô hình nhượng quyền kinh doanh</b></p>
      <hr>
      <ul class="list-join">
        <li>Có sẵn mặt bằng hoặc thuê mặt bằng</li>
        <li>Điểm thành lập cửa hàng phải được thông qua đánh giá và chấp thuận của Tổng bộ.</li>
        <li>Phí nhượng quyền</li>
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
