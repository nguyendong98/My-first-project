<?php
	$tendm=mysqli_query($conn, "SELECT * FROM danhmuc WHERE madm='{$_GET['madm']}'");
	$row=mysqli_fetch_assoc($tendm);
?>
<div class="tatca_sanpham">
	<h3><?php echo $row['tendm'] ?></h3>
</div>
<?php
			 
			 $sql="SELECT * FROM sanpham WHERE madm='{$_GET['madm']}'";
			 
			 $result=mysqli_query($conn, $sql);
			


			 while($roww=mysqli_fetch_assoc($result)){
		 ?>
<div class="pro_duct">
	
			<img src="img/<?php echo $roww['hinhanh']?>" >
			<h3 style="color:#795548"><?php echo $roww['tensp']?></h3>
			<h3><strong style="color:#B71C1C" ><?php echo number_format($roww['gia'],0,",",".")?> đ</strong></h3>
			<button class="button"><a href="addcart.php?idcart=<?php echo $roww['masp'] ?>" style="color:blue">Thêm vào giỏ</a></button>
			<button class="button"><a href="index.php?content=xemchitiet&masp=<?php echo $roww['masp'] ?>" style="color:green">Xem chi tiết</a></button>
			<h4>Đã bán: <?php echo $roww['daban'] ?> chiếc</h4>
  		

</div>
<?php } ?>