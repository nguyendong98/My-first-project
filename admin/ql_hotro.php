<?php
    if(isset($_GET['mahtxoa'])){
        $mahtxoa=$_GET['mahtxoa'];
        $result=mysqli_query($conn,"DELETE FROM hotro WHERE id_hotro='$mahtxoa'");
        if($result){
            echo "<script>
                alert('Xóa thành công');
            </script>";
        }
    }
?>

<div class="tatca_sanpham">
	<h3>QUẢN LÍ HỖ TRỢ</h3>
	</div>
	
	<table border="1" style="text-align: center;margin-top: 40px" width="100%" cellpadding ="35px">
				<tr>
					<th class="qlhd" >Mã hỗ trợ</th>
					<th class="qlhd">Id người dùng</th>
					<th>Chủ đề</th>
					<th>Tên người dùng</th>
					<th style="width: 10%">Điện thoại</th>
					<th >Email</th>
					<th >Nội dung</th>
					<th>Ngày gửi</th>
					
					<th colspan="2">Thao tác</th>
					
					
				</tr>
				<?php 
		$item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:12;
		$current=!empty($_GET['page'])?$_GET['page']:1;
		$offset= ($current-1) * $item_per_page;
		$sql=mysqli_query($conn,"SELECT * FROM hotro  order by id_hotro limit ".$item_per_page." offset ".$offset."");
		$total_product=mysqli_query($conn, "SELECT * FROM hotro ");
		$total_product=mysqli_num_rows($total_product);
		$total_page=ceil($total_product / $item_per_page);

		if(mysqli_num_rows($sql)>0){
			
			while ($row=mysqli_fetch_assoc($sql)) {

			?>
				<tr>
					<td><?=$row['id_hotro']?></td>
					<td><?=$row['idnd']?></td>
					<td><?=$row['chude']?></td>
					<td><?=$row['tennd']?></td>
					<td><?=$row['dienthoai']?></td>
					<td><?=$row['email']?></td>
					<td><?=$row['noidung']?></td>
					<td><?=$row['ngaygui']?></td>
					
					
					
					<td><a href="admin.php?content1=phanhoi&maht=<?=$row['id_hotro']?>">Phản hồi</a></td>
					<td><a href="admin.php?content1=qlht&mahtxoa=<?=$row['id_hotro']?>">Xóa</a></td>
					
					
				</tr>

				<?php }} ?>
	</table>
	<div class="phantrang" style="margin-top: 20px;">
<?php if($current>3){ 
	$first_page=1; ?>
	<a class="button" href="?content1=qlht&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>"><?php echo 'First' ?></a>
<?php } 
	if($current>1){
		$prev_page=$current-1;
?>
		<a class="button" href="?content1=qlht&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>"><?php echo 'Prev' ?></a>		
<?php } ?>	
<?php for($num=1;$num<=$total_page;$num++){ ?>
  	<?php if ($num != $current){ ?>
  		<?php if($num >$current-3 && $num<$current+3){	?>
		<a class="button" href="?content1=qlht&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
		<?php } ?>
	<?php } else { ?>          <!-- end nháy if -->
				<strong class="button button1"><?php echo $num ?></strong>
			<?php } ?>    <!-- end nháy else -->
<?php } ?>  <!--end nháy for-->
<?php
	if($current <$total_page ){
		$next_page=$current + 1;	?>
	<a class="button" href="?content1=qlht&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>"><?php echo 'Next' ?></a>
<?php } 
	 if($current<$total_page - 2){ 
	$end_page=$total_page; ?> 
	<a class="button" href="?content1=qlht&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>"><?php echo 'Last' ?></a>
<?php } ?>	
