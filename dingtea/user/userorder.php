<div class="col-lg-10  col-md-9 col-sm-12">
<div class="w3-row-padding">
<div class="w3-col m12">
<h2 class="w3-center">Đơn hàng của bạn</h2>
<br>
<br>

<div id="orders">
<table class="table table-hover">

<tr>
		<th>Mã</th>
		<th>Nội dung</th>
		<th>Thành tiền</th>
		<th>Ngày đặt hàng</th>
		<th>Tên khách hàng</th>
		<th>Địa chỉ</th>
		<th>Điện thoại</th>
		<th>Trạng thái</th>
		<th></th>
	</tr>
	<?php 
		$con = mysqli_connect('localhost','root','','trasuacraloy');
              $sql="SET NAMES UTF8";
              mysqli_query($con,$sql);
              if(isset($_SESSION['ten_tv'])){
              $email=$_SESSION['ten_tv'];
              $sql_tv="SELECT * FROM donhang where email='$email'";
              $re_tv=mysqli_query($con,$sql_tv);
              while($row_tv=mysqli_fetch_array($re_tv)) {
             
	?>
	<tr>
		<td><?php echo $row_tv['ma_dh']?></td>
		<td></td>
		<td><?php echo $row_tv['tongtien']?> VNĐ</td>
		<td><?php echo date_format(date_create($row_tv['ngay_dh']),"H:i d/m/Y")?></td>
		<td><?php echo $row_tv['ten_kh']?></td>
		<td><?php echo $row_tv['noi_giao']?></td>
		<td><?php echo $row_tv['sdt']?></td>
		<td><?php $row_tv['trang_thai'];if($row_tv['trang_thai']==1){echo "Đã Giao";}else if($row_tv['trang_thai']==0){echo "Đang xử lý";}else if($row_tv['trang_thai']-1){echo "Đã Hủy";}?></td>
		<td>
		<?php
			if($row_tv['trang_thai'] == 0){	
		?>
			<a href="?action=cancelorder&id=<?php echo $row_tv['ma_dh']?>"><button type="button" class="w3-button w3-padding-small w3-red " onClick="return confirm('Bạn chắc chắn sẽ hủy đơn hàng này chứ?');">Hủy đơn hàng</button></a>
		<?php
			}
		?>
		</td>
	</tr>
	<?php }?>
<?php } ?>
</table>
</div>
</div>  
</div>
</div>