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
</script>
<style>
  .bs-example-modal-lg{
    background:url("images/hh3-1493052173.jpg") no-repeat;
    background-size: cover;
  }
  body{
    background:#f1ede9;
  }
  body {
  font-family: Arial;
  font-size: 14px;  
}
* {
    box-sizing: border-box;
  
}
.Tintuc {
    background-color: white;
  margin-bottom: -30px;
  margin-top: -20px;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    word-break: break-all;
  text-align: center;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
    text-align: center;
}
.content:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  border: 5px solid #963;
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>
<?php include('modules/nav.php'); ?>
<div class="banner">
  <img class="img-responsive" src="images/banner_news.jpg" alt="..." width="100%">
</div>
<div class="title-product">
    <p><i>Shake for Life</i></p>
    <h3><b>LATEST NEWS</b></h3>
    <hr style="width: 50px;">
    <p>Tin t???c m???i nh???t</p>
  </div>
<nav class="navbar navbar-inverse dropdown-news" role="navigation">
      <div class="container">
          <div class="dropdown">
            <button class="btn btn-latest dropdown-toggle" type="button" data-toggle="dropdown">All
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Th??ng b??o chung</a></li>
              <li><a href="#">B???n tin ho???t ?????ng</a></li>
              <li><a href="#">S???n ph???m m???i</a></li>
              <li><a href="#">All</a></li>
            </ul>
  </div>
      </div>
    </nav>
    <div class="latest_news">
  <div class="container">
   
      <center>
<div class="row">
 <?php 
 include("connection/connect.php");
  $con = new connection();
  $con = $con->con;
  $statement = $con->prepare("SELECT * FROM tintuc ORDER BY ABS(TIMEDIFF(gio_dang, NOW())) LIMIT 0,4");
  $statement->execute();
  $news = $statement->fetchAll(PDO::FETCH_OBJ);

 foreach($news as $ob){ ?>
  <div class="column">
    <div class="content">
      <img src="images/gcs_thumb_5768a93f6e0b496d85b65740-2016-06-21-024110.jpg" alt="" style="width:100%">
      <h3><?php echo $ob->tieu_de;?></h3>
      <p><?php echo substr($ob->noi_dung,0,75);?> ...
    <br>
      <a href="xemthem.php?id=<?php echo $ob->ma_tin;?>" class="w3-text-brown">Xem th??m</a></p>
    </div>
  </div>
<?php } ?>

<!-- END GRID -->

      </center>
    </div>
    <br><br><br><br><br>
<div class="footer ">
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
  
  </div>
</div>

</body>
</html>
