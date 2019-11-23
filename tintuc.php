


<div class="tatca_sanpham">
	<h3>TIN TỨC</h3>
</div>
<?php
	$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
	$current= !empty($_GET['page'])?$_GET['page']:1;
	$offset= ($current-1) * $item_per_page;
	$result=mysqli_query($conn,"SELECT * FROM tintuc order by matt  asc limit ".$item_per_page." offset ".$offset."");
	$total_product=mysqli_query($conn,"SELECT * FROM tintuc");
	$total_product= $total_product->num_rows;
 	$total_page= ceil($total_product/$item_per_page);
	while($row=mysqli_fetch_assoc($result)){
	?>	
	
	

<div class="mau_tin">
	<div class="anh_tintuc">
		<a href="<?=$row['noidung']?>" target="_blank"><img src="img/<?=$row['hinhanh']?>"></a>
	</div>
	<div class="noidung_tintuc">
		<a href="<?=$row['noidung']?>"  target="_blank"><p><?=$row['tieude']?></p></a>
		<p><?=$row['ngaydang']?></p>
		<p><?=$row['noidungngan']?></p>
	</div>	
	<div class="clearboth"></div>
	
 	
</div>
<?php } ?>
<div class="phantrang" style="margin-top: 20px;">
<?php if($current>3){ 
	$first_page=1; ?>
	<a class="button" href="?content=tintuc&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>"><?php echo 'First' ?></a>
<?php } 
	if($current>1){
		$prev_page=$current-1;
?>
		<a class="button" href="?content=tintuc&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>"><?php echo 'Prev' ?></a>		
<?php } ?>	
<?php for($num=1;$num<=$total_page;$num++){ ?>
  	<?php if ($num != $current){ ?>
  		<?php if($num >$current-3 && $num<$current+3){	?>
		<a class="button" href="?content=tintuc&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
		<?php } ?>
	<?php } else { ?>          <!-- end nháy if -->
				<strong class="button button1"><?php echo $num ?></strong>
			<?php } ?>    <!-- end nháy else -->
<?php } ?>  <!--end nháy for-->
<?php
	if($current <$total_page ){
		$next_page=$current + 1;	?>
	<a class="button" href="?content=tintuc&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>"><?php echo 'Next' ?></a>
<?php } 
	 if($current<$total_page - 2){ 
	$end_page=$total_page; ?> 
	<a class="button" href="?content=tintuc&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>"><?php echo 'Last' ?></a>
<?php } ?>	

</div>