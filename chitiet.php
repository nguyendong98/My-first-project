<div class="tatca_sanpham" style="margin-bottom: 40px;">
	<h3>CHI TIẾT HÓA ĐƠN</h3>
</div>
<table border="1" width="100%" style="text-align: center">
	<tr>
		<th>Mã hóa đơn</th>
		<th>Mã sản phẩm</th>
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Giá</th>
		<th>Phương thức thanh toán</th>
	</tr>	
	<?php
		if(isset($_GET['mahdchitiet'])){
			$mahdchitiet=$_GET['mahdchitiet'];
			$sql=mysqli_query($conn,"SELECT * FROM chitiethoadon WHERE mahd='$mahdchitiet'");
			while($row=mysqli_fetch_assoc($sql)){



			?>	
	<tr>
		<td><?=$row['mahd']?></td>
		<td><?=$row['idsp']?></td>
		<td><?=$row['tensp']?></td>
		<td><?=$row['soluong']?></td>
		<td><?=number_format($row['gia'],0,',','.')?> đ</td>
		<td><?=$row['phuongthucTT']?></td>

	
		
	</tr>
<?php }} ?>
</table>