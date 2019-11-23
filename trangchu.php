

<div class="sanpham_banchay">
	<h3>SẢN PHẨM BÁN CHẠY</h3>
</div>
<?php 
		
		$sql="SELECT * FROM sanpham where loai=1 ORDER BY daban DESC LIMIT 6 offset 0"; 
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){

	?>
<div class="pro_duct">
	
			<img src="img/<?php echo $row['hinhanh']?>" >
			<h3 style="color:#795548"><?php echo $row['tensp']?></h3>
			<h3 style="color:#B71C1C"><strong><?php echo number_format($row['gia'],0,",",".")?> đ</strong></h3>
			<button class="button"><a href="addcart.php?idcart=<?php echo $row['masp'] ?>" style="color:blue">Thêm vào giỏ</a></button>
			<button class="button"><a href="index.php?content=xemchitiet&masp=<?php echo $row['masp'] ?>" style="color:green">Xem chi tiết</a></button>
			<h4>Đã bán: <?php echo $row['daban'] ?> chiếc</h4>
  		

</div>
<?php } ?>
<br>
<br>
<div class="sanpham_moi">
	<h3>SẢN PHẨM MỚI</h3>
</div>
<?php 
		
		$sql="SELECT * FROM sanpham where loai=1 ORDER BY masp DESC LIMIT 6 offset 0"; 
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){

	?>
<div class="pro_duct">
	
			<img src="img/<?php echo $row['hinhanh']?>" >
			<h3 style="color:#795548"><?php echo $row['tensp']?></h3>
			<h3 style="color:#B71C1C"><strong><?php echo number_format($row['gia'],0,",",".")?> đ</strong></h3>
			<button class="button"><a href="addcart.php?idcart=<?php echo $row['masp'] ?>" style="color:blue">Thêm vào giỏ</a></button>
			<button class="button"><a href="index.php?content=xemchitiet&masp=<?php echo $row['masp'] ?>" style="color:green">Xem chi tiết</a></button>
			<h4>Đã bán: <?php echo $row['daban'] ?> chiếc</h4>
  		

</div>
<?php } ?>