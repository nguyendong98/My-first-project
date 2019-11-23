<div style = "margin-bottom: 20px" class="tatca_sanpham">
	<h3>TÌM KIẾM</h3>
</div>
<?php
if(isset($_GET['timkiem']))
{

  $tim=$_GET['timkiem'];
  
  switch($_GET['gia'])
  {
	case "0 - 1.000.000 đ":
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%' and (gia between '0' and '1000000') ";	
		break;
	case "1.000.000 đ - 3.000.000 đ":
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '1000000' and '3000000')";	
		break;
	case "3.000.000 đ - 8.000.000 đ":
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '3000000' and '8000000')";	
		break;
	case "8.000.000 đ - 10.000.000 đ":
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '8000000' and '10000000')";	
		break;
	case "10.000.000 đ - 15.000.000 đ":
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '10000000' and '15000000')";	
		break;
	case "15.000.000 đ - 20.000.000 đ":
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '15000000' and '20000000')";	
		break;
	case "20.000.000 đ - 25.000.000 đ" :
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '20000000' and '25000000')";
		break;
	case "25.000.000 đ - 30.000.000 đ" :
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia between '25000000' and '30000000')";
		break;	
	case "> 30.000.000 đ" :
		$sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%'  and (gia > '30000000')";
		break;	
	default:
	 	 $sql="SELECT * FROM sanpham WHERE tensp like '%".$tim."%' ";	
		  break;
  }
  
 
	$result=mysqli_query($conn, $sql);
	$tong=mysqli_num_rows($result);
    if($tong<0)
     echo"Không tìm được sản phẩm nào";
	else{ ?>
	<h2 style="margin-bottom: 20px">Từ khóa <font color="red"><b><?php echo $tim ?></b></font> giá từ <font color="red"><b><?php echo $_GET['gia'] ?></b></font>: có <font color="red"><b><?php echo $tong?></b></font> kết quả </h2>
	<?php while($rows=mysqli_fetch_assoc($result)){
		 ?>
			<div class="pro_duct">
	
				<img src="img/<?php echo $rows['hinhanh']?>" >
				<h3 style="color:#795548"><?php echo $rows['tensp']?></h3>
				<h3><strong style="color:#B71C1C"><?php echo number_format($rows['gia'],0,",",".")?> đ</strong></h3>
				<button class="button"><a href="addcart.php?idcart=<?php echo $rows['masp'] ?>" style="color:blue">Thêm vào giỏ</a></button>
				<button class="button"><a href="index.php?content=xemchitiet&masp=<?php echo $rows['masp'] ?>" style="color:green">Xem chi tiết</a></button>
				<h4>Đã bán: <?php echo $rows['daban'] ?> chiếc</h4>
	  		

			</div>
	<?php }} ?>

<?php } ?> 
