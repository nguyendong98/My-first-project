<?php 
if(!isset($_SESSION['username'])){
	echo "<script>
		alert('Bạn hãy đăng nhập trước đã');
		history.go(-1);
	</script>";
}
else{
?>
<div class="tatca_sanpham">
	<h3>ĐƠN HÀNG CỦA BẠN</h3>
</div>
<?php 	
	$idnd=$_SESSION['id'];
	$result=mysqli_query($conn,"SELECT * FROM hoadon WHERE idnd='$idnd'");
	while ($row=mysqli_fetch_assoc($result)) {
	?>	
		<div class="donhangcuaban" style=" margin-bottom: 30px;">
			<table border="1" style="margin: 30px auto" width="80%">
				<tr>
					<th>Mã đơn hàng</th>
					<td><?=$row['mahd']?></td>
				</tr>
				<tr>
					<th>Họ tên</th>
					<td><?=$row['hoten']?></td>
				</tr>
				<tr>
					<th>Điện thoại</th>
					<td><?=$row['dienthoai']?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?=$row['email']?></td>
				</tr>
				<tr>
					<th>Địa chỉ</th>
					<td><?=$row['diachi']?></td>
				</tr>
				<tr>
					<th>Ngày đặt hàng</th>
					<td><?=$row['ngaydathang']?></td>
				</tr>
				<tr>
					<th>Tổng tiền</th>
					<td><?=number_format($row['tongtien'],0,',','.')?> đ</td>
				</tr>
				<tr>
					<th>Trạng thái</th>
					<td><?=$row['trangthai']?></td>
				</tr>
				<tr>
					<th>Chi tiết</th>
					<td><a href="index.php?content=chitiet&mahdchitiet=<?=$row['mahd']?>">Xem chi tiết</a></td>
				</tr>
				<tr>
					<th>Thao tác</th>
					<td><a href="indonhang.php?mahd=<?=$row['mahd']?>">In đơn hàng</a></td>
				</tr>
			</table>
		</div>


	<?php	
	}}
	?>

