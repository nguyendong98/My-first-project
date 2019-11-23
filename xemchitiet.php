<?php

	if(isset($_GET['masp'])){
		$result= mysqli_query($conn, "SELECT * FROM sanpham WHERE masp='{$_GET['masp']}'");
		$row=mysqli_fetch_assoc($result);
	?>
	<div class="tatca_sanpham" style="">
	<h3><?php echo $row['tensp'] ?></h3>
	</div>
	<div class="content_chitiet" style="margin-top: 300px">
		<div class="left_chitiet" style="">
			<div class="image_chitiet"><img src="img/<?php echo $row['hinhanh'] ?>" width="300px" height="250px" style="padding-left: 10px;"></div>
			<h3 style ="color: #8e44ad;text-shadow: 1px 1px 1px 1px  #8e44ad;margin-bottom: 15px;text-align: center">Tên sản phẩm: <?php echo $row['tensp'] ?></h3>
			<h3 style="color: #34495e;letter-spacing:10px;text-align: center">Giá: <?php echo number_format($row['gia'],0,",",".") ?> đ </h3>
			<button style="font-size: 20px;padding:10px 0;margin-top: 20px;margin-left: 100px;margin-right: 60px;border-radius: 4px;"><i class="fas fa-cart-plus" style="font-size: 30px;color:red;float: left"></i><a style="display:block;color: #4b6584;float: left;padding: 5px;" href="addcart.php?idcart=<?php echo $row['masp'] ?>">Thêm vào giỏ</a></button>
			

		</div>
		<div class="right_chitiet">
			<div class="chitiet"><?php echo $row['chitiet'] ?></div>
		</div>
	</div>


<?php } ?>