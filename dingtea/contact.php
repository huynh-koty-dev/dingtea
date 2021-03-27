<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liên hệ</title>
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
<script>
  function checkform_contact(){
    var name_lh = document.getElementById('namelh');
      if (name_lh.value == ''){
        err_namelh.innerHTML = 'Bạn phải nhập vào trường này';
        err_namelh.style.color = 'red';
        name_lh.style.border = '2px solid red';
        return false;
      }
      else{
        err_namelh.innerHTML = '';
        name_lh.style.border = '1px solid #000';
      }
      var email_lh = document.getElementById('emaillh');
      if (email_lh.value == ''){
        err_emaillh.innerHTML = 'Bạn phải nhập vào trường này';
        err_emaillh.style.color = 'red';
        email_lh.style.border = '2px solid red';
        return false;
      }
      else{
        err_emaillh.innerHTML = '';
        email_lh.style.border = '1px solid #000';
      }
      var comment_lh = document.getElementById('commentlh');
      if (comment_lh.value == ''){
        err_commentlh.innerHTML = 'Bạn phải nhập vào trường này';
        err_commentlh.style.color = 'red';
        comment_lh.style.border = '2px solid red';
        return false;
      }
      else{
        err_commentlh.innerHTML = '';
        comment_lh.style.border = '1px solid #000';
      }
  }
</script>
</head>
<body>

<?php include('modules/nav.php'); ?>
<div class="banner">
  <img class="img-responsive" src="images/contact.jpg" alt="..." width="100%">
</div>
<div class="contact">
  <div class="container">
    <div class="col-md-3">
      <p><i>Shake for Life</i></p>
      <h1><b>CONTACT US</b></h1>
      <hr>
      <p>Chúng tôi đánh giá cao các câu hỏi và ý kiến quý báu của quý khách. Phản hồi của quý khách đã tạo ra không gian cho chúng tôi tiến bộ. Xin quý khách vui lòng điền vào mẫu liên hệ dưới đây và chúng tôi sẽ liên lạc với quý khách sớm nhât có thể. Một lần nữa xin trân trọng cám ơn</p>
      <br><br>
      <p><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;&nbsp;  +886-422530011</p>
      <p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;&nbsp;&nbsp; dingteaMK@dingtea.com</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp; 546, Đài Loan, Nantou County,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ren’ai Township, Renhe Road,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 170號546</p>
      <p><span class="glyphicon glyphicon-time"></span> &nbsp;&nbsp;&nbsp;&nbsp;Thời gian bán hàng:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  8:30-17:30</p>
    </div>
    <div class="col-md-9">
        <form action="contact.php" method="post">
            <br>
            <br>
           <div class="row">
              <div class="col-md-6">
                <div class="name">
                  <input type="text" id="namelh" name="namelh" class="form-control" placeholder="Name">
                  &nbsp;&nbsp;&nbsp;<p id="err_namelh"></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mail">
                  <input type="mail" id="emaillh" name="emaillh" class="form-control" placeholder="E-Mail" >
                  <p id="err_emaillh"></p>
                </div>
            </div>

           </div>
           
            
            <div class="row">
              <div class="col-md-12">
                 <textarea name="commentlh" id="commentlh" cols="115%" rows="10" class="form-control" placeholder="Comment"></textarea>
                 <p id="err_commentlh"></p>
              </div>
            </div>
            <br>
            <div class="row">
             <div class="col-md-12">
                <button type="reset" class="btn btn-lg btn-default">Reset</button>
             
               <button type="submit" class="btn btn-lg btn-success" onclick="return checkform_contact();">Submit</button>
               </div>
            </div>
        </form>
        <?php 
            if(isset($_POST['namelh'])==true&&isset($_POST['emaillh'])==true&&isset($_POST['commentlh'])==true){
              $ten_lh=$_POST['namelh'];
              $email_lh=$_POST['emaillh'];
              $comment_lh=$_POST['commentlh'];
            

            $con = mysqli_connect('localhost','root','','trasuacraloy');
            
              $sqllh="INSERT INTO feedback(ten_nguoi_lh,email_nguoi_lh,noi_dung,ngay_lh) VALUES ('$ten_lh','$email_lh','$comment_lh',curtime())";   
              mysqli_query($con,$sqllh);
              echo '<br><p style="font-size:30pt;color:limegreen;">Gửi thành công</p>';

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
