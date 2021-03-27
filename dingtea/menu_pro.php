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
  function myFunction() { 
    document.getElementById("mp4_src").src = "images/vid.mp4";
    document.getElementById("myVideo").load();
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

  <?php include('modules/nav.php'); ?>
    <div class="menu_pro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
           <div class="row">
            <div class="menu-bg">
              <table>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <th><i>Milk Tea</i></th><th><i>M.</i></th><th><i>L.</i></th>
                </tr>
                <tr>
                  <td>Vua trà sữa</td><td>35K</td><td>42K</td>
                </tr>
                <tr>
                  <td>Trà sữa ô long</td><td>32K</td><td>39K</td>
                </tr>
                <tr>
                  <td>Trà sữa hoa nhài</td><td>32K</td><td>39K</td>
                </tr>
                <tr>
                  <td>Hồng trà sữa</td><td>32K</td><td>39K</td>
                </tr>
                <tr>
                  <td>Trà sữa Hokkaido</td><td>39K</td><td>46K</td>
                </tr>
                <tr>
                  <td>Trà sữa đường đen</td><td>39K</td><td>49K</td>
                </tr>
                <tr>
                  <td>Trà sữa vanilla</td><td>39K</td><td>46K</td>
                </tr>
                <tr>
                  <td>Trà sữa hạt dẻ</td><td>39K</td><td>46K</td>
                </tr>
                <tr>
                  <td>Trà sữa trân châu</td><td>37K</td><td>44K</td>
                </tr>
                <tr>
                  <td>Trà sữa đậu đỏ</td><td>40K</td><td>47K</td>
                </tr>
                <tr>
                  <td>Trà sữa tổng hợp</td><td>42K</td><td>49K</td>
                </tr>
                <tr>
                  <td>Trà sữa khoai môn</td><td>32K</td><td>39K</td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="row">
           <img class="img-responsive" src="images/anh2.jpg" alt="..." width="100%">
         </div>
       </div>
       <div class="col-md-6 col-xs-12">
        <img class="img-responsive" src="images/anh1.jpg" alt="..." width="100%">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12">
       <div class="row">
        <div class="menu-bg">
          <table>
            <tr>
              <td></td>
            </tr>
            <tr>
              <th><i>Fresh Tea</i></th><th><i>M.</i></th><th><i>L.</i></th>
            </tr>  
            <tr>
              <td>Trà kim tuyền</td><td>28K</td><td>35K</td>
            </tr> 
            <tr>
              <td>Trà ô long</td><td>25K</td><td>32K</td>
            </tr>
            <tr>
              <td>Hồng trà</td><td>25K</td><td>32K</td>
            </tr>
            <tr>
              <td>Trà xanh nhài</td><td>25K</td><td>32K</td>
            </tr> 
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
     <div class="row">
      <div class="menu-bg">
        <table>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><i>Rich And Aromatic</i></th><th><i>M.</i></th><th><i>L.</i></th>
          </tr>  
          <tr>
            <td>Sôcôla cổ điển</td><td>32K</td><td>39K</td>
          </tr> 
          <tr>
            <td>Sôcôla vanilla Pháp</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sôcôla Hokkaido</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Cà phê cổ điển</td><td>32K</td><td>39K</td>
          </tr> 
          <tr>
            <td>Cà phê vanilla</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Cà phê Hokkaido</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Cà phê hạt dẻ</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div>     
</div>

   <div class="row">
    <div class="col-md-6 col-sm-12">
      <div class="row">
      <div class="menu-bg">
        <table>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><i>Monster Bobo Latte</i></th><th><i>M.</i></th><th><i>L.</i></th>
          </tr>
          <tr>
            <td>Sữa tươi trân châu đường đen</td><td>62K</td><td>-</td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <th><i>Matcha</i></th><th><i>M.</i></th><th><i>L.</i></th>
          <tr>
            <td>Matcha Nhật Bản</td><td>32K</td><td>39K</td>
          </tr>
          <tr>
            <td>Matcha đậu đỏ</td><td>40K</td><td>47K</td>
          </tr>
          <tr>
            <tr>
              <td></td>
            </tr>
          </tr>
          <th><i>Yakult/Yogurt</i></th><th><i>M.</i></th><th><i>L.</i></th>
          <tr>
            <td>Sữa chua vị chanh leo</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa chua vị dâu</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa chua vị bưởi</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa chua yogurt chanh leo</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa chua yogurt dâu</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa chua yogurt bưởi</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><i>Cream Mousse</i></th><th><i>M.</i></th><th><i>L.</i></th>
          </tr>
          <tr>
            <td>Kem mousse hồng trà</td><td>35K</td><td>42K</td>
          </tr>
          <tr>
            <td>Kem mousse trà xanh</td><td>35K</td><td>42K</td>
          </tr>
          <tr>
            <td>Kem mousse ô long</td><td>35K</td><td>42K</td>
          </tr>
          <tr>
            <td>Kem mousse kim tuyền</td><td>38K</td><td>45K</td>
          </tr>
          <tr>
            <td>Kem mousse sôcôla</td><td>42K</td><td>49K</td>
          </tr>
          <tr>
            <td>Kem mousse khoai môn</td><td>42K</td><td>49K</td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><i>Fruit Tea</i></th><th><i>M.</i></th><th><i>L.</i></th>
          </tr>
          <tr>
            <td>Trà xanh/đen mật ong</td><td>32K</td><td>39K</td>
          </tr>
          <tr>
            <td>Trà xanh/ đen vị đào</td><td>32K</td><td>39K</td>
          </tr>
          <tr>
            <td>Trà xanh/ đen vị chanh leo</td><td>32K</td><td>39K</td>
          </tr>
          <tr>
            <td>Trà xanh/ đen vị bưởi</td><td>37K</td><td>44K</td>
          </tr>
          <tr>
            <td>Trà xanh ổi</td><td>37K</td><td>44K</td>
          </tr>
          <tr>
            <td>Ô long vải</td><td>37K</td><td>44K</td>
          </tr>
          <tr>
            <td>Trà ô long vải QQ</td><td>45K</td><td>52K</td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table>
      </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
     <div class="row">
      <div class="menu-bg">
        <table>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><i>Fruit Juice</i></th><th><i>M.</i></th><th><i>L.</i></th>
          </tr>  
          <tr>
            <td>Nước vải lô hội</td><td>39K</td><td>46K</td>
          </tr> 
          <tr>
            <td>Nước nho lô hội</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Nước kiwi lô hội</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Nước chanh leo lô hội</td><td>39K</td><td>46K</td>
          </tr> 
          <tr>
            <td>Nước đào lô hội</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Nước bưởi lô hội</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Trà chanh quất</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Nước chanh mật ong lô hội</td><td>42K</td><td>49K</td>
          </tr>
          <tr>
            <td>Nước chanh quất</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Nước chanh ô mai</td><td>32K</td><td>39K</td>
          </tr>
          <tr>
            <td>Ổi ô mai</td><td>37K</td><td>44K</td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <th><i>Fruit Milk Tea</i></th><th><i>M.</i></th><th><i>L.</i></th>
          </tr>
          <tr>
            <td>Sữa dâu tây</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa đào</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa vải</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa chanh leo</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa nho</td><td>39K</td><td>46K</td>
          </tr>
          <tr>
            <td>Sữa ổi</td><td>42K</td><td>49K</td>
          </tr>
          <tr>
            <td></td>
          </tr>
        </table>
      </div>
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
