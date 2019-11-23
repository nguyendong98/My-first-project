<?php
	if(isset($_GET['idxoa'])){
		$idxoa=$_GET['idxoa'];
		$result=mysqli_query($conn,"DELETE FROM tintuc where matt='$idxoa'");
		echo "<script>
			alert('Xóa thành công');
		</script>";
	}
?>
<div class="tatca_sanpham">
	<h3>QUẢN LÍ TIN TỨC</h3>
	</div>
	<button class="add_product"><a href="admin.php?content1=them_tt"><i class="fas fa-plus-circle"></i>Thêm mới tin tức</a></button>
	<table border="1" width="100%">
	

		<tr>
			<th style="text-align: center;width: 5%">Mã tin tức</th>
			<th style="text-align:center;">Tiêu đề</th>
			<th style="text-align:center;">Nội dung ngắn</th>
			<th style="text-align:center;">Nội dung </th>
			<th style="text-align:center;">Hình ảnh</th>
			<th style="text-align:center;">Ngày đăng</th>
			<th colspan="2" style="text-align:center;">Thao tác</th>
		</tr>
		<?php
			$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:12;
			$current= !empty($_GET['page'])?$_GET['page']:1;
			$offset= ($current-1) * $item_per_page;
			$result = mysqli_query($conn,"SELECT * FROM tintuc limit ".$item_per_page." offset ".$offset." ");
			$total_product=mysqli_query($conn,"SELECT * FROM tintuc");
			$total_product=mysqli_num_rows($total_product);
			 $total_page= ceil($total_product/$item_per_page);
			while ($row=mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td style="text-align: center;"><?=$row['matt']?></td>
				<td><?=$row['tieude']?></td>
				<td><?=$row['noidungngan']?></td>
				<td><a href="<?=$row['noidung']?>" style="color:blue;text-decoration:none" target="_blank" >Bấm để xem</a></td>
				<td><img src="../img/<?=$row['hinhanh']?>" style="width:80px;height: 80px"></td>
				<td><?=$row['ngaydang']?></td>
				<td><a href="admin.php?content1=edit_tt&idedit=<?=$row['matt']?>"><img src="../img/edit.png" style="width: 50px;height: 50px"></a></td>
				<td><a href="admin.php?content1=qltt&idxoa=<?=$row['matt']?>"><img src="../img/delete.png" style="width: 50px;height: 50px"></a></td>
				
			</tr>


			<?php } ?>
		
	</table>
	<div class="phantrang" style="margin-top: 20px;">
<?php if($current>3){ 
	$first_page=1; ?>
	<a class="button" href="?content1=qltt&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>"><?php echo 'First' ?></a>
<?php } 
	if($current>1){
		$prev_page=$current-1;
?>
		<a class="button" href="?content1=qltt&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>"><?php echo 'Prev' ?></a>		
<?php } ?>	
<?php for($num=1;$num<=$total_page;$num++){ ?>
  	<?php if ($num != $current){ ?>
  		<?php if($num >$current-3 && $num<$current+3){	?>
		<a class="button" href="?content1=qltt&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
		<?php } ?>
	<?php } else { ?>          <!-- end nháy if -->
				<strong class="button button1"><?php echo $num ?></strong>
			<?php } ?>    <!-- end nháy else -->
<?php } ?>  <!--end nháy for-->
<?php
	if($current <$total_page ){
		$next_page=$current + 1;	?>
	<a class="button" href="?content1=qltt&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>"><?php echo 'Next' ?></a>
<?php } 
	 if($current<$total_page - 2){ 
	$end_page=$total_page; ?> 
	<a class="button" href="?content1=qltt&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>"><?php echo 'Last' ?></a>
<?php } ?>	

</div>	