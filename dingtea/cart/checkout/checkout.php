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
  <link rel="stylesheet" href="../../css/style.css">
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
  <img class="img-responsive" src="../../images/vnL_banner_ins_19L04_ratw2zksy2.jpg" alt="..." width="100%">
</div>
 
<div class="main-cart container">
  
	<?php  
	$con = mysqli_connect('localhost','root','','trasuacraloy');
	$sql="SET NAMES UTF8";
       mysqli_query($con,$sql);
       
       
		$isempty=0;
		//bien trang thai dung de kiem tra xem gio hang co trong hay ko
		
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
				<br><br>
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
          $ma_ts=$row['ma_ts'];
					$ten=$row['ten_ts'];
					$gia=$row['gia_ts'];
					$soluong = $_SESSION['cart'][$row['ma_ts']];
					$hinhanh=$row['hinh_anh_ts'];
					$giatri = $soluong * $gia;
					$tonggiatri += $giatri;
					?>
					<tr>
					<td><br><img src="../../images/<?php echo $hinhanh; ?>" width="150px" height="150px" /></td>
					<td><?php echo $ten; ?></td>
					<td><?php echo number_format($gia); ?>VNĐ</td>
					<td><input disabled type="text" class="" name="txtsoluong[<?php echo $row['ma_ts']; ?>]" value="<?php echo $soluong; ?>" size="3"  /></td>
					
					<td><?php echo $giatri; ?>VNĐ</td>
					<td><a href="deletecart.php?id_de=<?php echo $row['ma_ts']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
					</tr>
				<?php	
				}
				?>
        <?php 
          if(isset($_POST["thanhtoan"])){
        $name=$_POST["userName"];
        $email=$_POST["email"];
        $phone=$_POST["telephone"];
        $address=$_POST["address"];
        $sqlInsertOrder='INSERT INTO donhang(ten_kh,email,ngay_dh,noi_giao,sdt,tongtien,trang_thai,ma_nv)';
        $sqlInsertOrder .='VALUES("'.$name.'","'.$email.'","'.date("Y-m-d H:i:s").'","'.$address.'","'.$phone.'","'.$tonggiatri.'","0","")';
        mysqli_query($con,$sqlInsertOrder);

       }
         ?>
				<tr>
				<td colspan="6" align="right"><b>Tổng giá trị: <?php echo number_format($tonggiatri);?>VNĐ</b></td>
				</tr>
				</table>

				</form>
        <?php 
        if(isset($_POST["thanhtoan"]))
        { 
          $dlhd = "select * from donhang";
            $sql = mysqli_query($con,$dlhd);
            while ($r = mysqli_fetch_assoc($sql)) {
              $ma[] = $r['ma_dh'];
            }
            $ma_dh = array_pop($ma);
            
           $sqldetail="INSERT INTO chitietdonhang(ma_dh,ma_ts,so_luong,ghi_chu,don_gia,tong_gia) VALUES($ma_dh,$ma_ts,$soluong,'',$giatri,$tonggiatri)";
        
        mysqli_query($con,$sqldetail);
      }
         ?>
			</center>	
			
			<h3>Thông tin thanh toán</h3>	
			<form action="checkout.php" method="post">
        <?php 
            $con = mysqli_connect('localhost','root','','trasuacraloy');
            if(isset($_SESSION['ten_tv'])){
            $ten_tv=$_SESSION['ten_tv'];
            $sql="SELECT * FROM thanhvien where email = '$ten_tv'";  
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);
          }
          
         ?>
         
				<div class="form-group">
					<label for="exampleInputEmail">Họ tên*</label>
					<input type="text" value="<?php echo $row['ten_tv'] ?>" class="form-control" name="userName" id="userName"	placeholder="Họ tên...">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail">Email*</label>
					<input type="text" value="<?php echo $row['email'] ?>" class="form-control" name="email" id="email" placeholder="Email...">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail">Address*</label>
					<input type="text" value="<?php echo $row['diachi'] ?>" class="form-control" name="address" id="address" placeholder="Address...">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail">Telephone*</label>
					<input type="text" value="<?php echo $row['sdt'] ?>" class="form-control" name="telephone" id="telephone" placeholder="Telephone...">
				</div>
				<button type="submit" class="btn btn-success" name="thanhtoan">Thanh toán</button>
			</form>
  
         
 	
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
