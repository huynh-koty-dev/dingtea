<?php session_start(); ?>
<!DOCTYPE html>

<html>
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
  function myFunction() { 
  document.getElementById("mp4_src").src = "images/vid.mp4";
  document.getElementById("myVideo").load();
} 
function chuyentrang_pro(){
 location.href='product.php';
}
function chuyentrang_brand(){
  location.href='about.php';
}
function chuyentrang_news(){
  location.href='latest_news.php';
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
</style>
</head>
<body>
   <?php include('nav.php'); ?>

<div class="banner">
  <video id="myVideo" class="img-responsive"  autoplay muted>
      <source id="mp4_src" src="images/vid.mp4" type="video/mp4">
  </video>
  <div class="btn-vid text-center"><span onclick="myFunction()" class="glyphicon glyphicon-play glyphicon-lg"><br>Play</span></div>
</div>
<div class="about">
    <div class="col-sm-6 ">
      <div class="about-left">
        <br><br><br><br>
        <p><i>Shake For Life</i></p>
        <br>
        <h1><b>ABOUT<br>DING TEA</b></h1>
        <br>
        <h5><b>The definition of lifestyle attitude.</b></h5><br>
        <p>Our principle is to promote our brand and Taiwanese tea <br>culture all over the world. We focus on blending fresh <br> tea, strict tea selection, exclusive and unique taste.</p>
        <br>
        <button type="button" class="btn btn-light btn-lg btn-about" onclick="return chuyentrang_brand();">VIEW MORE</button>

      </div>
    </div>
    <div class="col-sm-6">
      <div class="about-right">
        <img class="img-responsive"src="images/YYi-Che-CYu-YYt-Ya-LYt-5.jpg" alt="..." width="100%">

      </div>
    </div>
</div>
<div class="product">
  <div class="col-sm-6">
    <div class="product-left text-center">
      <br><br><br><br><br><br>
      <p><i>Shake For Life</i></p>
      <h1><b>MILK TEA</b></h1>
      <p><b>T???o ra cu???c c??ch m???ng m???i c???a DingTea</b></p>
      <img src="images/ALL_ad_title_19G23_f9muxvsa99.png" alt="..." width="50%">
      <p>?????y m???nh th????ng hi???u v?? v??n h??a tr?? ????i Loan tr??n to??n c???u,<br> ch?? tr???ng v??o c??c ti??u ch?? ?????i???u ch??? t??? tr?? t????i nguy??n <br> ch???t???, ???L???a ch???n tr?? m???t c??ch nghi??m ng???t???</p>
      <br><br><br>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="product-right text-right">
      <br>
      <p><i>Shake For Life</i></p>
      <br>
      <h1>THE PRODUCTS</h1>
      <br>
      <h4> S???N PH???M XU???T S???C DINGTEA</h4>
      <br>
      <div class="product-mini">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
          </ol>

          <div class="carousel-inner">
           
            <div class="item">
                <?php
              $con = mysqli_connect('localhost','root','','trasuacraloy');
              $sql="SET NAMES UTF8";
              mysqli_query($con,$sql);
              $sql_ts="SELECT * FROM trasua LIMIT 2";
              $re_ts=mysqli_query($con,$sql_ts);
              while($row_ts=mysqli_fetch_array($re_ts)) {
             

        ?>
             <div class="row">
               <div class="col-xs-12 col-sm-6 left">
                 <h3><?php echo $row_ts['ten_ts'] ?></h3>
                 <br><br>
                 <button type="button" class="btn btn-light btn-lg btn-about btn-product" onclick="return chuyentrang_pro();">VIEW MORE</button>
               </div>
               <div class="col-xs-12 col-sm-6 right">
                <center>
                 <img class="img-responsive" src="images/<?php echo $row_ts['hinh_anh_ts'] ?>" alt="..." width="auto">
               </center>
               </div>
             </div> 
             <div class="row">
               <div class="col-xs-12 col-sm-6 right">
                <center>
                <img class="img-responsive" src="images/<?php echo $row_ts['hinh_anh_ts'] ?>" alt="..." width="auto">
              </center>
               </div>
               <div class="col-xs-12 col-sm-6 left">
                <h3><?php echo $row_ts['ten_ts'] ?></h3>
                <br><br>
                 <button type="button" class="btn btn-light btn-lg btn-about btn-product" onclick="return chuyentrang_pro();">VIEW MORE</button>
               </div>
             </div> 
            </div>
          <?php } ?>
            <!--<div class="item">
             <div class="row">
               <div class="col-xs-12 col-sm-6 left">
                 <h3>t??n s???n ph???m</h3>
                 <br><br>
                 <button type="button" class="btn btn-light btn-lg btn-about btn-product" onclick="return chuyentrang_pro();">VIEW MORE</button>
               </div>
               <div class="col-xs-12 col-sm-6 right">
                <center>
                 <img class="img-responsive" src="images/trsua.png" alt="..." width="auto">
               </center>
               </div>
             </div> 
             <div class="row">
               <div class="col-xs-12 col-sm-6 right">
                <center>
                <img class="img-responsive" src="images/trsua.png" alt="..." width="auto">
              </center>
               </div>
               <div class="col-xs-12 col-sm-6 left">
                <h3>t??n s???n ph???m</h3>
                <br><br>
                 <button type="button" class="btn btn-light btn-lg btn-about btn-product" onclick="return chuyentrang_pro();">VIEW MORE</button>
               </div>
             </div> 
            </div>
            <div class="item active">
             <div class="row">
               <div class="col-xs-12 col-sm-6 left">
                 <h3>t??n s???n ph???m</h3>
                 <br><br>
                 <button type="button" class="btn btn-light btn-lg btn-about btn-product" onclick="return chuyentrang_pro();">VIEW MORE</button>
               </div>
               <div class="col-xs-12 col-sm-6 right ">
                <center>
                 <img class="img-responsive" src="images/trsua.png" alt="..." width="auto">
               </center>
               </div>
             </div> 
             <div class="row">
               <div class="col-xs-12 col-sm-6 right">
                <center>
                <img class="img-responsive" src="images/trsua.png" alt="..." width="auto">
              </center>
               </div>
               <div class="col-xs-12 col-sm-6 left">
                <h3>t??n s???n ph???m</h3>
                <br><br>
                 <button type="button" class="btn btn-light btn-lg btn-about btn-product" onclick="return chuyentrang_pro();">VIEW MORE</button>
               </div>
             </div> 
            </div>-->
          </div>
          <a class="left carousel-control hidden" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control hidden" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
        
      </div>
    </div>
  </div>

<div class="news">
  <div class="container">
      <h1><b>LATEST NEWS</b></h1>
      <h4>S???C M???NH K???T XU???T M???I MANG T??NH C??CH M???NG</h4>
      <br><br>
      <div class="row">
        <?php
              $con = mysqli_connect('localhost','root','','trasuacraloy');
              $sql="SET NAMES UTF8";
              mysqli_query($con,$sql);
              $sql_tt="SELECT * FROM tintuc LIMIT 4";
              $re_tt=mysqli_query($con,$sql_tt);
              while($row_tt=mysqli_fetch_array($re_tt)) {
             

        ?>
        <div class="col-sm-3 col-xs-12 tintuc">
          <br>
          <p><?php echo $row_tt['gio_dang'] ?></p>
          <br>
          <div>
            <p><?php echo $row_tt['tieu_de'] ?></p>
          </div>
        </div>
      <?php } ?>
        <!--<div class="col-sm-3 col-xs-12 tintuc">
          <p>ng??y ????ng</p>
          <div>
            <p>tin t???c</p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12 tintuc">
          <p>ng??y ????ng</p>
          <div>
            <p>tin t???c</p>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12 tintuc">
          <p>ng??y ????ng</p>
          <div>
            <p>tin t???c</p>
          </div>
        </div>-->
        <div class="text-center">
          <button type="button" class="btn btn-light btn-lg btn-about btn-news" onclick="return chuyentrang_news();">VIEW MORE</button>
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
    <h6>H??A M??NH V???I C??CH TH??? HI???N HO??N H???O NH???NG TR???I NGHI???M CU???C S???NG,<br> C???NG HI???N CHO TH??? TR?????NG NH???NG S???N PH???M TUY???T V???I NH???T, ???C??N <br> QU??T??? TH??? GI???I, SHAKE FOR LIFE!</h6>
    <hr>
    <div class="row footer-mini">
      <div class="col-sm-6">
        <p>T +886-4-22530011</p>
        <p>A21F-2, No. 88, Sec. 1, Huizhong Rd., Xitun Dist.,</p>
        <p>Taichung City 407, Taiwan (R.O.C.)</p>
        <p>??????????????? iBest</p>
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
     <button style="float: right;margin-top: -34px;" class="btn btn-default" name="follow">Theo d??i</button>
   </form>
   <?php 
   if(isset($_REQUEST['follow'])){
    $email=$_POST['sub'];
    $sqlsub="INSERT INTO subscribers(email) VALUES('$email')";
    mysqli_query($con,$sqlsub);
   }
    ?>
  </div>
  <br><br><br>
  </div>
</div>
</body>
</html>
