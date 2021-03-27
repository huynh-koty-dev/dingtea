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
    <style type="text/css" media="screen">
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
        padding:50px 60px; 
        margin-top:30px;
       
       
      }
      .form-container h1 {
        border-bottom: 3px solid green;
        padding:10px 0px;
        margin-bottom: 50px;
        text-shadow: 5px 5px 5px green;
        
      }
    
      
    </style>
 <title>Đăng nhập</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
         
          <form action='login.php' method="post" class="form-container">
             <h1 class="text-center">Đăng nhập</h1>
              <div class="form-group" >
              <label for="maildangnhap"> Đăng nhập</label>
              <input type="email" class="form-control" name="maildangnhap" required id="maildangnhap"/>
            </div>

             <div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" name="password" required id="password"/>
            </div>

           <input type="submit" id="dangnhap" name="dangnhap" value="ĐĂNG NHẬP" class="btn btn-default btn-lg btn-block">
           <br>
           <a href="../trang_chu.php">Quay về.</a>
        </form>
         
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

