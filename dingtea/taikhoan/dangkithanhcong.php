  <?php session_start(); ?>
  <!DOCTYPE html>

<html>
<head>
  <title>Đăng ký</title>
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
<script type="text/javascript">
      function checkform() {
        var name = document.forms[0].ten_tv.value;
        if(name == ''){
          alert('Bạn cần nhập thông tin đầy đủ!');
          document.forms[0].ten_tv.focus();
          return;
        }

        var sdt = document.forms[0].sdt.value;
        if(sdt == ''){
          alert('Bạn cần nhập thông tin đầy đủ!');
          document.forms[0].sdt.focus();
          return;
        }
        var diachi = document.forms[0].diachi.value;
        if(diachi == ''){
          alert('Bạn cần nhập thông tin đầy đủ!');
          document.forms[0].diachi.focus();
          return;
        }


        if(document.forms[0].chka.value=''){
          alert('Bạn cần nhập thông tin đầy đủ!');
        }

          var  email= document.forms[0].email.value;
        if(email == ''){
          alert('Bạn cần nhập mật khẩu!');
          document.forms[0].email.focus();
          return;

        var password = document.forms[0].password.value;
        if(password == ''){
          alert('Bạn cần nhập mật khẩu!');
          document.forms[0].password.focus();
          return;
        }
        var repassword = document.forms[0].repassword.value;
        if(repassword == ''){
          alert('Bạn cần nhập lại mật khẩu!');
          document.forms[0].repassword.focus();
          return;
        }
        if(password != repassword) {
          alert('mật khẩu không khớp!');
           }
     }
      
     alert('đăng kí thành công!');
    </script>
<style>
  .bs-example-modal-lg{
    background:url("../images/hh3-1493052173.jpg") no-repeat;
    background-size: cover;
  }
  
  body {
        margin:0;
        padding:0;
        background: url("../images/banner_news.jpg") no-repeat;
        width:100%;
        height:100vh;
        color:#ffff;
        
        
      }
      .form-container {
        border:0px solid #fff;
        padding:3px 40px; 
        margin-top:30px;
       
       
      }
      .form-container h1 {
        border-bottom: 3px solid green;
        padding:10px 0px;
        margin-bottom: 50px;
        text-shadow: 5px 5px 5px green;
        
      }
      h1 {
        padding-top:260px;
        padding-left:100px;
      }
</style>
</head>
<body>
  <div class="container">
    <a href="../trang_chu.php">Quay về trang chủ</a>
     <div>
            <a href="dangnhap.php">đăng nhập</a>
          </div>
      <div class="row">
        <div class="col-md-8">
         
          
           <?php
            $con = mysqli_connect('localhost', 'root','','trasuacraloy');
            if(isset($_POST['dangki'])){
            $ten_dn=mysqli_real_escape_string($con,$_POST['ten_dn_tv']);
            $name =mysqli_real_escape_string($con,$_POST['ten_tv']);
            $sdt = mysqli_real_escape_string($con,$_POST['sdt']);
            $diachi = mysqli_real_escape_string($con,$_POST['diachi']);
            $gioitinh = $_POST['chka'];
            $email = mysqli_real_escape_string($con,$_POST['email']); 
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $password = md5($_POST['password']);
 
            $sql = "insert into thanhvien(ten_tv, sdt, diachi, gioi_tinh, email,ten_dn_tv, mat_khau_tv) values('$name','$sdt', '$diachi' , '$gioitinh','$email','$ten_dn', '$password')";
             $rs = mysqli_query($con,$sql);

             if($rs != 0){
              echo '<h1 style="text-align:center">Bạn đã đăng kí thành công!</h1>';

             } else {
              echo '<h1 style="text-align:center">Đăng kí không thành công!</h1>';
           }    
          }
         

          ?>
         
        </div>
      </div>
      
    </div>

</body>
</html>
