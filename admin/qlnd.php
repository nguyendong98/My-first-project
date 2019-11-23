<?php
	if(isset($_GET['idxoand'])){
		$idxoand=$_GET['idxoand'];

		$xoand=mysqli_query($conn,"DELETE FROM users WHERE id='$idxoand'");
		if($xoand){
			echo "<script>
				alert('Xóa người dùng thành công');
				window.open('admin.php?content1=qlnd','_self', 1);
			</script>";
		}
		
	}

?>

<div class="tatca_sanpham">
	<h3>QUẢN LÍ NGƯỜI DÙNG</h3>
	</div>
	<?php $result=mysqli_query($conn,"SELECT * FROM users");
	       $result=mysqli_num_rows($result); ?> 
	<p style="font-weight:bold">Có tổng cộng <span style="color:red;font-size:20px"><?=$result?></span> người dùng.</p>
	<?php ?>
	<table border="1" style="text-align: center;margin-top: 40px" width="100%" cellpadding ="35px">
				<tr>
					<th id="ma_nd">Mã người dùng</th>
					<th>Tên người dùng</th>
					<th>User name</th>
					<th>SDT</th>
					<th>Địa chỉ</th>
					<th id="email_nd">Email</th>
					<th id="gt">Giới tính</th>
					<th id="ndk">Ngày đăng kí</th>
					
					<th id="thaotac" colspan="2">Thao tác</th>
				</tr>
				<?php 
		$item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:12;
		$current=!empty($_GET['page'])?$_GET['page']:1;
		$offset= ($current-1) * $item_per_page;
		$sql=mysqli_query($conn,"SELECT * FROM users WHERE phanquyen='1' order by id limit ".$item_per_page." offset ".$offset."");
		$total_product=mysqli_query($conn, "SELECT * FROM users WHERE phanquyen='1'");
		$total_product=mysqli_num_rows($total_product);
		$total_page=ceil($total_product / $item_per_page);

		if(mysqli_num_rows($sql)>0){
			
			while ($row=mysqli_fetch_assoc($sql)) {

			?>
				<tr>
					<td><?=$row['id']?></td>
					<td><?=$row['tennd']?></td>
					<td><?=$row['username']?></td>
					<td><?=$row['dienthoai']?></td>
					<td><?=$row['diachi']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['gioitinh']?></td>
					<td><?=$row['ngaydangky']?></td>
					
					<td><a href="admin.php?content1=qlnd&idxoand=<?=$row['id']?>"><img src="../img/delete.png" style="width: 50px;height: 50px"></a></td>
				</tr>

				<?php }} ?>
	</table>
	<div class="phantrang" style="margin-top: 20px;">
<?php if($current>3){ 
	$first_page=1; ?>
	<a class="button" href="?content1=qlnd&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>"><?php echo 'First' ?></a>
<?php } 
	if($current>1){
		$prev_page=$current-1;
?>
		<a class="button" href="?content1=qlnd&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>"><?php echo 'Prev' ?></a>		
<?php } ?>	
<?php for($num=1;$num<=$total_page;$num++){ ?>
  	<?php if ($num != $current){ ?>
  		<?php if($num >$current-3 && $num<$current+3){	?>
		<a class="button" href="?content1=qlnd&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
		<?php } ?>
	<?php } else { ?>          <!-- end nháy if -->
				<strong class="button button1"><?php echo $num ?></strong>
			<?php } ?>    <!-- end nháy else -->
<?php } ?>  <!--end nháy for-->
<?php
	if($current <$total_page ){
		$next_page=$current + 1;	?>
	<a class="button" href="?content1=qlnd&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>"><?php echo 'Next' ?></a>
<?php } 
	 if($current<$total_page - 2){ 
	$end_page=$total_page; ?> 
	<a class="button" href="?content1=qlnd&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>"><?php echo 'Last' ?></a>
<?php } ?>	
