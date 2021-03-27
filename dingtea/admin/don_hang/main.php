<div class="content-wrapper">
	<section class="content">
		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
            </div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
                		<tr>
                  			<th>Mã đơn hàng</th>
                  			<th>Khách hàng</th>
                  			<th>điện thoại</th>
                  			<th>Địa chỉ nhận hàng</th>
                  			
                  			<th>Thành tiền</th>
                  			
                  			<th>Trạng thái</th> 
                  			<th>Thời gian</th>
                		</tr>
 					</thead>
        			<tbody>
        			<?php 
        				$con = mysqli_connect('localhost','root','','trasuacraloy');
						$sql="SET NAMES UTF8";
					       mysqli_query($con,$sql);
        					$dlhd = "select * from donhang";
				            $sql = mysqli_query($con,$dlhd);
				            while ($row = mysqli_fetch_assoc($sql)) {
				              
				            
					?>
        				
						<tr>
							<td><a  href="#"><?php echo $row['ma_dh']; ?></a></td>
							<td><?php echo $row['ten_kh']; ?></td>
							<td><?php echo $row['sdt']; ?></td>
							<td><?php echo $row['noi_giao']; ?></td>
							<td><?php echo number_format($row['tongtien']); ?> VNĐ</td>
							
							<td ><span class="dropdown"><?php if($row['trang_thai']==1){echo "<span class='label label-success'>Shipped</span>";}else if($row['trang_thai']==0){echo "<span class='label label-warning'>Pending</span>";}else if($row['trang_thai']==-1){echo "<span class='label label-danger'>Canceled</span>";} ?><i class="fa fa-angle-down pull-right dropdown-toggle" data-toggle="dropdown"></i><ul class="dropdown-menu">
   								<li><a>Thay đổi trạng thái</a></li>
   								<li class="divider"></li>
    							<li><a href="?status=1&id=<?php echo $row['ma_dh']; ?>">Shipped</a></li>
    							<li><a href="?status=0&id=<?php echo $row['ma_dh']; ?>">Pending</a></li>
    							<li><a href="?status=-1&id=<?php echo $row['ma_dh']; ?>">Canceled</a></li>
  							</ul></span></td>
							<td><?php echo $row['ngay_dh']; ?></td>
						</tr>
					<?php } ?>
       				 </tbody>
        			
				</table>
			</div>
		</div>
	</section>
</div>