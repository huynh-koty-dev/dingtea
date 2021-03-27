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
    background:#212121;
  }
</style>
</head>
<body>
    <?php include('modules/nav.php'); ?>
  
<div class="banner">
  <img class="img-responsive" src="images/banner_about.jpg" alt="..." width="100%">
</div>
<div class="title-product">
    <p><i>Shake for Life</i></p>
    <h1><b>ABOUT DING TEA</b></h1>
    <p>Về DingTea</p>
  </div>
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-6">
                  <img src="images/about1.png" alt="..." width="100%" class="img-responsive">
                </div>
                <div class="col-md-6 bg-brand">
                  <div class="can-brand">
                    <h4>ESTEEM / SERVICE / PROFESSION / CREATIVITY</h4>
                    <br>
                    <p>Chỉ cần kiên trì, nỗ lực thì sức mạnh tạo ra của Trà sẽ là vô hạn, ngoài Hồng trà và Trà sữa, bàn tay ma thuật của các nghệ sĩ lắc trà có thể tạo ra vô vàn những sản phẩm mới, với sự mới mẻ và phát triển không ngừng, khiến những đối tác nhận quyền DingTea cũng trở nên ngày càng hùng hậu.；</p>
                    <p>Từ năm 2007, người sáng lập có ý định quảng bá thương hiệu và văn hóa trà Đài Loan ra thế giới, tạo ra một dòng đồ uống độc quyền và nhấn mạnh vào việc kiên trì mang lại cho thực khách một loại đồ uống chất lượng, mới mẻ và tinh tế</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="col-md-6">
             <div class="can-brand">
              <br>
                <h3>QUALITY</h3>
                <br>
                <p><b>Kiểm soát chất lượng một cách nghiêm ngặt</b></p>
                <p>Chất lượng của đồ uống luôn được đặt vị trí tối cao, tuyệt đối không bao giờ có khái niệm “trà cách đêm”, sự tươi mới của vị trà luôn được chú trọng, quy trình thực hiện được SOP hóa, làm cho mỗi ly trà sản xuất từ công nghệ “DingTea” đều có hương vị và chất lượng thống nhất đồng đều</p>
             </div>
            </div>
            <div class="col-md-6">
                  <img src="images/about2.png" alt="..." width="100%" class="img-responsive">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-6">
                  <img src="images/about3.png" alt="..." width="100%" class="img-responsive">
                </div>
                <div class="col-md-6 bg-brand">
                  <div class="can-brand">
                    <h3>INNOVATION</h3>
                    <br>
                    <p><b>Sáng tạo độc đáo</b></p>
                    <p>Ngoài các sản phẩm phổ biến trên thị trường, chuỗi cửa hàng nhượng quyền DingTea còn cho ra mắt nhiều sản phẩm độc đáo, phù hợp thị hiếu của thực</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <div class="col-md-6">
             <div class="can-brand">
              <br>
                <h3>PROFESSIONAL</h3>
                <br>
                <p><b>Thân thiện, chuyên nghiệp</b></p>
                <p>Chuỗi cửa hàng nhượng quyền DingTea cho rằng ngoài việc yêu cầu khắt khe đối với chính bản thân, sản phẩm được tạo ra còn là sự cam kết với khách hàng, vì vậy, mỗi một nhân viên DingTea đều được trải qua quá trình rèn luyện và đào tạo hết sức quy củ, nghiêm ngặt</p>
             </div>
            </div>
            <div class="col-md-6">
                  <img src="images/about4.png" alt="..." width="100%" class="img-responsive">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-6">
                  <img src="images/about5.png" alt="..." width="100%" class="img-responsive">
                </div>
                <div class="col-md-6 bg-brand">
                  <div class="can-brand">
                    <h3>SHAKE FOR LIFE</h3>
                    <br>
                    <p><b>Hòa nhịp cuộc sống, đột phá không ngừng</b></p>
                    <p>“Điều chế từ trà tươi nguyên chất”, “Lựa chọn trà một cách nghiêm ngặt” “chất lượng gắn liền với danh dự”, kiên trì theo đuổi chất lượng hoàn hảo, chú trọng đến từng chi tiết Nội dung</p>
                  </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
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
