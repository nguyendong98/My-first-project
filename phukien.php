<div class="tatca_sanpham">
	<h3>PHỤ KIỆN</h3>
</div>
<?php
			 
$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:12;
			 $current= !empty($_GET['page'])?$_GET['page']:1;
			 $offset= ($current-1) * $item_per_page;
			 $sql="SELECT * FROM sanpham WHERE loai=2 order by masp  asc limit ".$item_per_page." offset ".$offset."";
			 $total_product=mysqli_query($conn,"SELECT * FROM sanpham WHERE loai=2");
			 $total_product= $total_product->num_rows;
			 $result=mysqli_query($conn, $sql);
			 $total_page= ceil($total_product/$item_per_page);
			 
			 while($roww=mysqli_fetch_assoc($result)){
		 ?>
<div class="pro_duct">
	
			<img src="img/<?php echo $roww['hinhanh']?>" >
			<h3 style="color:#795548"><?php echo $roww['tensp']?></h3>
			<h3><strong style="color:#B71C1C"><?php echo number_format($roww['gia'],0,",",".")?> đ</strong></h3>
			<button class="button"><a href="addcart.php?idcart=<?php echo $roww['masp'] ?>" style="color:blue">Thêm vào giỏ</a></button>
			<button class="button"><a href="index.php?content=xemchitiet&masp=<?php echo $roww['masp'] ?>" style="color:green">Xem chi tiết</a></button>
			<h4>Đã bán: <?php echo $roww['daban'] ?> chiếc</h4>
  		

</div>
<?php } ?>
<?php include 'phantrangphukien.php' ?>