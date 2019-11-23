
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(isset($_GET['idxoa'])){
			$masp=$_GET['idxoa'];
			$xoa=mysqli_query($conn, "DELETE FROM sanpham WHERE masp = '$masp' ");
			echo "<script>
				alert ('Xóa thành công');
				window.open('admin.php?content1=qlsp', '_self', 1);
			</script>";
		}
	?>
	<div class="tatca_sanpham">
	<h3>QUẢN LÍ SẢN PHẨM</h3>
	</div>
	<button class="add_product"><a href="admin.php?content1=them_sp"><i class="fas fa-plus-circle"></i>Thêm mới sản phẩm</a></button>
	<?php $result=mysqli_query($conn,"SELECT * FROM sanpham");
	        $result=mysqli_num_rows($result); ?>
	<p style="font-weight:bold;margin-left:20px">Có tổng cộng <span style="color:red"><?=$result?></span> sản phẩm</p>
	<?php ?>
	<table border="1" style="text-align: center;" width="100%">
				<tr>
					<th style="width:5%">Mã sản phẩm</th>
					<th style="width:5%">Mã danh mục</th>
					<th style="width:5%">Loại</th>
					<th>Tên sản phẩm</th>
					<th>Hình ảnh</th>
					<th>Giá</th>
					<th>SL nhập về</th>
					<th>Đã bán</th>
					<th>Sl còn lại</th>
					<th>Thu được</th>
					
					
					<th colspan="2">Thao tác</th>
				</tr>
	<?php 
		$item_per_page=!empty($_GET['per_page'])?$_GET['per_page']:8;
		$current=!empty($_GET['page'])?$_GET['page']:1;
		$offset= ($current-1) * $item_per_page;
		$sql=mysqli_query($conn,"SELECT * FROM sanpham order by madm limit ".$item_per_page." offset ".$offset."");
		$total_product=mysqli_query($conn, "SELECT * FROM sanpham");
		$total_product=mysqli_num_rows($total_product);
		$total_page=ceil($total_product / $item_per_page);

		if(mysqli_num_rows($sql)>0){
			
			while ($row=mysqli_fetch_assoc($sql)) {

			?>
				<tr>
					<td><?=$row['masp']?></td>
					<td><?=$row['madm']?></td>
					<td><?=$row['loai']?></td>
					<td><?=$row['tensp']?></td>
					<td><img src="../img/<?=$row['hinhanh']?>" style="width: 50px;height: 50px;"></td>
					<td><?=number_format($row['gia'],0,',','.')?> đ</td>
					<td><?=$row['tongso']?></td>
					<td><?=$row['daban']?></td>
					<td><?=$row['conlai']?></td>
					<td><?=number_format(($row['daban']*$row['gia']*1.1),0,',','.')?> đ</td>
					
					<td><a href="admin.php?content1=update_sp&idupdate=<?=$row['masp']?>"><img src="../img/edit.png" style="width: 50px;height: 50px"></a></td>
					<td><a href="admin.php?content1=qlsp&idxoa=<?=$row['masp']?>"><img src="../img/delete.png" style="width: 50px;height: 50px"></a></td>
				</tr>

				<?php }} ?>
	</table>
	<div class="phantrang" style="margin-top: 20px;">
<?php if($current>3){ 
	$first_page=1; ?>
	<a class="button" href="?content1=qlsp&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>"><?php echo 'First' ?></a>
<?php } 
	if($current>1){
		$prev_page=$current-1;
?>
		<a class="button" href="?content1=qlsp&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>"><?php echo 'Prev' ?></a>		
<?php } ?>	
<?php for($num=1;$num<=$total_page;$num++){ ?>
  	<?php if ($num != $current){ ?>
  		<?php if($num >$current-3 && $num<$current+3){	?>
		<a class="button" href="?content1=qlsp&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
		<?php } ?>
	<?php } else { ?>          <!-- end nháy if -->
				<strong class="button button1"><?php echo $num ?></strong>
			<?php } ?>    <!-- end nháy else -->
<?php } ?>  <!--end nháy for-->
<?php
	if($current <$total_page ){
		$next_page=$current + 1;	?>
	<a class="button" href="?content1=qlsp&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>"><?php echo 'Next' ?></a>
<?php } 
	 if($current<$total_page - 2){ 
	$end_page=$total_page; ?> 
	<a class="button" href="?content1=qlsp&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>"><?php echo 'Last' ?></a>
<?php } ?>	

</div>		
<h2 style="clear:both;margin-top:50px;color:#d63031;margin-bottom:20px;margin-left:90px">THỐNG KÊ</h2>
<table  style="margin-bottom:30px">
     <?php 
       $result1=mysqli_query($conn,"SELECT sum(tongso) FROM sanpham"); 
       $row1=mysqli_fetch_assoc($result1);
       $result2=mysqli_query($conn,"SELECT sum(daban) FROM sanpham"); 
       $row2=mysqli_fetch_assoc($result2); 
       $result3=mysqli_query($conn,"SELECT sum(conlai) FROM sanpham"); 
       $row3=mysqli_fetch_assoc($result3); ?>
    <tr  style="border-bottom:2px solid #dfe6e9">
        <th style="width:250px;padding-top:20px">Tổng sản phẩm nhập về</th>
        <td style="text-align:right;padding-top:20px"><?=$row1['sum(tongso)']?> sản phẩm</td>
     </tr>    
     <tr style="border-bottom:2px solid #dfe6e9">
        <th style="padding-top:20px">Tổng sản phẩm bán được</th>
        <td style="text-align:right;padding-top:20px"><?=$row2['sum(daban)']?> sản phẩm</td>
   </tr>
   
    <tr style="border-bottom:2px solid #dfe6e9">
         <th style="padding-top:20px">Tổng sản phẩm tồn kho</th>
        <td style="text-align:right;padding-top:20px"><?=$row3['sum(conlai)']?> sản phẩm</td>
    </tr>
    <tr style="border-bottom:2px solid #dfe6e9">
        <?php  $tongloinhuan = 0;
        $result5=mysqli_query($conn,"SELECT * FROM sanpham");
                while($row5=mysqli_fetch_assoc($result5)){
                    $tongloinhuan += $row5['daban']*$row5['gia']*1.1;
                } ?>
        <th style="padding-top:20px">Tổng lợi nhuận thu được</th>
        <td style="text-align:right;padding-top:20px"><?=number_format($tongloinhuan,0,',','.')?> đ</td>
    </tr style="border-bottom:1px solid #dfe6e9">
    <tr style="border-bottom:2px solid #dfe6e9">
        <td padding-top:20px><a href="admin.php?content1=chitietthongke" style="text-decoration:none;cursor:pointer;margin-top:20px;color:red">Chi tiết</a></td>
    </tr>
</table>

	
</body>
</html>