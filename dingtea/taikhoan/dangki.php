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
    background:url("../images/hh3-1493052173.jpg")  no-repeat ;
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
        padding:0px 40px; 
        margin-top:0px;
       
       
      }
      .form-container h1 {
       
        padding:0px 0px;
        margin-bottom: 30px;
        text-shadow: 5px 5px 5px green;
        
      }
</style>
</head>
<body>
  <div class="container">  <a href="../trang_chu.php">Quay về trang chủ</a>
      <div class="row">
        <div class="col-md-8">
         
          <form action='dangkithanhcong.php' method="post" class="form-container">
             <h1 class="text-center">Đăng kí</h1>
            <div class="form-group" >
              <label for="ten_tv">Tên thành viên</label>
              <input type="text" class="form-control" name="ten_tv" id="ten_tv" required placeholder="Tên thành viên..." />
            </div>
            <div class="form-group" >
              <label for="ten_dn_tv">Tên đăng nhập</label>
              <input type="text" class="form-control" name="ten_dn_tv" id="ten_dn_tv" required placeholder="Tên đăng nhập..." />
            </div>
            
             <div class="form-group" >
              <label for="sdt">Số điện thoại</label>
              <input type="text" class="form-control" name="sdt" id="sdt" required placeholder="Số điện thoại..." />
            </div>
            
             <div class="form-group" >
              <label for="diachi">Địa chỉ</label>
              <input type="text" class="form-control" name="diachi" id="diachi" required placeholder="Nhập địa chỉ..." />
            </div>

             <div class="form-group" >
              <label for="gioi_tinh">Giới tính</label>
              <input type="radio" class="custom-checkbox" name="chka" required id="gioi_tinh" value="1" />Nam
              <input type="radio" class="custom-checkbox" name="chka" required id="gioi_tinh" value="0" />Nữ
            </div>


             <div class="form-group" >
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" required placeholder="Nhập email..." />
            </div>

            <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" name="password" id="password" required placeholder="Mật khẩu..." />
            </div>

            <div class="form-group">
              <label for="repassword">Nhập lại mật khẩu</label>
              <input type="password" class="form-control" name="repassword" id="repassword" required placeholder="Nhập Lại mật khẩu..." />
            </div>
           
            <button name="dangki" class="btn btn-success btn-block" onclick="checkform()">Đăng kí</button>
          </form>
          
          
        </div>
      </div>
    
    </div>

</body>
</html>
