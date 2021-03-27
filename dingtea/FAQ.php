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
  <img class="img-responsive" src="images/banner_faq.jpg" alt="..." width="100%">
</div>
<div class="title-product">
    <p><i>Shake for Life</i></p>
    <h1><b>FAQ</b></h1>
    <p>Các vấn đề thường gặp</p>
  </div>
    
<div class="FAQ"> 
    <div class="container">
      <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Q1. Nếu có bất kỳ vấn đề nào liên quan đến liên minh xuyên ngành, tôi cần gặp ai? <span class="caret"></span></a>
          </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body"><br>Đáp: Xin vui lòng gửi email trực tiếp đến dingteaMK@dingtea.com <br><br>
        Chúng tôi sẽ trả lời bạn trong thời gian sớm nhất có thể</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Q2. Nếu có bất kỳ vấn đề nào về tiêu dùng, xin hỏi tôi phải phản hồi ra sao? <span class="caret"></span></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><br>Nếu có bất kỳ vấn đề nào về tiêu dùng, quý khách có thể thông qua các kênh sau để xử lý thông tin: <br><br>
        Vào trang web của DingTea, viết câu hỏi của bạn và gửi cho chúng tôi <br><br>
        Gọi trực tiếp đến hotline 04-22530011 chuyên xử lý các vấn đề về tiêu dùng ( 8:30 AM – 5:30PM từ thứ 2 đến thứ 6)</div>
      </div>
    </div>
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
