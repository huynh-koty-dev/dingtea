<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> giỏ hàng </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
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
  function updatecart(){
  	document.getElementById("myForm").submit();
  }
</script>
<style>
  .bs-example-modal-lg{
    background:url("../images/hh3-1493052173.jpg") no-repeat;
    background-size: cover;
  }
  body{
    background:#fff;
  }
  .btn-search{
    position:relative;
    left:270px;
    top:34px;
    
  }
</style>
</head>
<body>
  <?php include('nav.php'); ?> 
<div class="banner">
  <img class="img-responsive" src="../images/vnL_banner_ins_19L04_ratw2zksy2.jpg" alt="..." width="100%">
</div>
 
<div class="main-cart container">
  
	<?php  
	$con = mysqli_connect('localhost','root','','trasuacraloy');
	$sql="SET NAMES UTF8";
       mysqli_query($con,$sql);
		$isempty=0;
		//bien trang thai dung de kiem tra xem gio hang co trong hay ko
		if(isset($_SESSION['cart'])){
			//lay ra cac san pham trong gio
			$list=$_SESSION['cart'];
			//lay ra so san pham trong gio hang
			$somathang=count($list);
			if($somathang==0){
				echo '<h3>Gio hang trong</h3>';
			}else{
				echo "<h3>Có tổng số $somathang sản phẩm trong giỏ hàng</h3>";
			}
			foreach ($_SESSION['cart'] as $k => $v) {
				if(isset($k)){
					$isempty=1; //gio hang co san pham
				}
				$item[] = $k;
			}
			//chuyen mang thanh chuoi
			$str=implode(',', $item);
			$sql3="select * from trasua where ma_ts in ($str)";
			$result = mysqli_query($con, $sql3);
			
			?>
			<center>
			<form id="myForm" action="updatecart.php" method="post">
				
			<table border="0" width="100%">
				<tr>
				<th>Hình ảnh</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Tổng giá trị</th>
				<th>Xóa</th>
				</tr>
			<?php 
				$tonggiatri=0;
				while($row= mysqli_fetch_assoc($result)){
					$ten=$row['ten_ts'];
					$gia=$row['gia_ts'];
					$soluong = $_SESSION['cart'][$row['ma_ts']];
					$hinhanh=$row['hinh_anh_ts'];
					$giatri = $soluong * $gia;
					$tonggiatri += $giatri;
					?>
					<tr>
					<td><img src="../images/<?php echo $hinhanh; ?>" width="150px" height="150px" /></td>
					<td><?php echo $ten; ?></td>
					<td><?php echo number_format($gia); ?>VNĐ</td>
					<td><input type="text" name="txtsoluong[<?php echo $row['ma_ts']; ?>]" value="<?php echo $soluong; ?>" size="3" onblur="updatecart()" /></td>
					
					<td><?php echo $giatri; ?>VNĐ</td>
					<td><a href="deletecart.php?id_de=<?php echo $row['ma_ts']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
				<?php	
				}
				?>
				<tr>
				<td colspan="6" align="right"><b>Tổng giá trị: <?php echo number_format($tonggiatri);?>VNĐ</b></td>
				</tr>
				<tr>
					<td colspan="6" align="right"><a href="checkout/checkout.php"><button type="button" class="btn btn-success">Thanh toán</button></a></td>
				</tr>
				</table>

				</form>
			</center>	
			<?php
				} else {
				echo '<h3>Giỏ hàng trống</h3>';
				}
				?>
				<br>
				<a href="deletecart.php"><button type="button" class="btn btn-danger">Xóa giỏ hàng</button> </a>
				<h3><a href="../product.php"><button type="button" class="btn btn-warning">Mua tiếp</button></a></h3>
  
         
 	
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
