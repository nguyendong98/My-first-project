<?php   
session_start();
include 'process.php';
	if(!isset($_SESSION['username'])){
		echo "<script language='javascript'>
			alert('Bạn cần đăng nhập trước đã');
			history.go(-1);

		</script>";
	}
	else{
		$idcart = $_GET['idcart'];
		$result=mysqli_query($conn, "SELECT * FROM sanpham WHERE masp='$idcart'");
		$row=mysqli_fetch_assoc($result);
		
		
		if(!isset($_SESSION['cart'][$idcart])){
		$_SESSION['cart'][$idcart]['name']= $row['tensp'];
		$_SESSION['cart'][$idcart]['hinhanh']= $row['hinhanh'];
		$_SESSION['cart'][$idcart]['price']= $row['gia'];
		$_SESSION['cart'][$idcart]['qty']= 1;
		

		}
		else{
			$_SESSION['cart'][$idcart]['qty'] += 1;
		}
		echo "<script language='javascript'>
		alert('Thêm sản phẩm vào giỏ hàng thành công');
		history.go(-1);


		</script>";

	}	
	

?>
