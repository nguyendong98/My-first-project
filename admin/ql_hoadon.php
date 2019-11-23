<?php 
	if(isset($_GET['mahdduyet'])){
		$mahdduyet=$_GET['mahdduyet'];
		$update=mysqli_query($conn, "UPDATE hoadon SET trangthai='Đã xử lí' WHERE mahd='$mahdduyet' ");
		if($update){
			echo "<script>
				alert('Đã duyệt hóa đơn này');
				window.open('admin.php?content1=qlhd','_self', 1);
			</script>";
		}
	}
	if(isset($_GET['mahdxoa'])){
		$mahdxoa=$_GET['mahdxoa'];
		
		$xoa=mysqli_query($conn,"DELETE FROM hoadon WHERE mahd = '$mahdxoa'");
		if($xoa){
			echo "<script>
				alert('Đã xóa hóa đơn này');
				window.open('admin.php?content1=qlhd','_self', 1);
			</script>";
		}
	}



?>
<div class="tatca_sanpham">
	<h3>QUẢN LÍ HÓA ĐƠN</h3>
	<?php $sql=mysqli_query($conn,"SELECT * FROM hoadon WHERE trangthai='Chưa xử lí'");
	       $row=mysqli_num_rows($sql);
	       $sql1=mysqli_query($conn,"SELECT * FROM hoadon WHERE trangthai='Đã xử lí'");
	       $row1=mysqli_num_rows($sql1); 
	  ?>     
	</div>
	<p>Có <span style="color:red"><?=$row?></span> đơn hàng chưa được xử lí</p>
	<p>Đã xử lí <span style="color:red"><?=$row1?></span> đơn hàng</p>
	<table border="1" style="text-align: center;margin-top: 40px" width="100%" cellpadding ="35px">
				<tr>
					<th class="qlhd" >Mã hóa đơn</th>
					<th class="qlhd">Id người dùng</th>
					<th>Họ tên</th>
					<th>SDT</th>
					<th style="width: 10%">Email</th>
					<th >Địa chỉ</th>
					<th >Tổng tiền</th>
					<th >Ngày đặt hàng</th>
					<th>Trạng thái</th>
					<th>Chi tiết</th>
					<th colspan="2">Thao tác</th>
					
					
				</tr>
				<?php 
		$item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:12;
		$current=!empty($_GET['page'])?$_GET['page']:1;
		$offset= ($current-1) * $item_per_page;
		$sql=mysqli_query($conn,"SELECT * FROM hoadon  order by mahd limit ".$item_per_page." offset ".$offset."");
		$total_product=mysqli_query($conn, "SELECT * FROM hoadon ");
		$total_product=mysqli_num_rows($total_product);
		$total_page=ceil($total_product / $item_per_page);

		if(mysqli_num_rows($sql)>0){
			
			while ($row=mysqli_fetch_assoc($sql)) {

			?>
				<tr>
					<td><?=$row['mahd']?></td>
					<td><?=$row['idnd']?></td>
					<td><?=$row['hoten']?></td>
					<td><?=$row['dienthoai']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['diachi']?></td>
					<td><?=number_format($row['tongtien'],0,',','.')?> đ</td>
					<td><?=$row['ngaydathang']?></td>
					<td><?=$row['trangthai']?></td>
					<td><a href="admin.php?content1=chitiet_hoadon&mahdchitiet=<?=$row['mahd']?>">Chi tiết hóa đơn</a></td>

					
					<td><a href="admin.php?content1=qlhd&mahdduyet=<?=$row['mahd']?>">Duyệt</a></td>
					<td><a href="admin.php?content1=qlhd&mahdxoa=<?=$row['mahd']?>">Xóa</a></td>
					
					
				</tr>

				<?php }} ?>
	</table>
	<div class="phantrang" style="margin-top: 20px;">
<?php if($current>3){ 
	$first_page=1; ?>
	<a class="button" href="?content1=qlhd&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>"><?php echo 'First' ?></a>
<?php } 
	if($current>1){
		$prev_page=$current-1;
?>
		<a class="button" href="?content1=qlhd&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>"><?php echo 'Prev' ?></a>		
<?php } ?>	
<?php for($num=1;$num<=$total_page;$num++){ ?>
  	<?php if ($num != $current){ ?>
  		<?php if($num >$current-3 && $num<$current+3){	?>
		<a class="button" href="?content1=qlhd&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
		<?php } ?>
	<?php } else { ?>          <!-- end nháy if -->
				<strong class="button button1"><?php echo $num ?></strong>
			<?php } ?>    <!-- end nháy else -->
<?php } ?>  <!--end nháy for-->
<?php
	if($current <$total_page ){
		$next_page=$current + 1;	?>
	<a class="button" href="?content1=qlhd&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>"><?php echo 'Next' ?></a>
<?php } 
	 if($current<$total_page - 2){ 
	$end_page=$total_page; ?> 
	<a class="button" href="?content1=qlhd&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>"><?php echo 'Last' ?></a>
<?php } ?>	
