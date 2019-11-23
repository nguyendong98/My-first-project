
<?php
	session_start();
	include 'process.php';


?>
<?php
	//Kiểm tra Login nè
	if(isset($_POST["btnLogin"])){
		$username=$_POST['txtUser'];
		$password=md5($_POST['txtPass']);
		//$password=md5($password);
		$sql =" SELECT * FROM users 
				WHERE username= '$username'
				AND password ='$password'	";
		$user = mysqli_query($conn, $sql);
		if(mysqli_num_rows($user)==1){//nếu số hàng tìm dc trong sql = 1
			//đăng nhập đúng
			$row  = mysqli_fetch_array($user);
			$_SESSION['id']= $row['id'];
			$_SESSION['tennd']= $row['tennd'];
			$_SESSION['username']= $row['username'];
			$_SESSION['phanquyen']= $row['phanquyen'];//lưu các  giá trị trong sql lại bằng biến SESSION
			 if($_SESSION['phanquyen'] ==0)
					{
						
						echo "
							<script language='javascript'>
								alert('Chào admin đã đăng nhập vào hệ thống');
								window.open('admin/admin.php','_self', 1);
							</script>
						";
					}
                else
                {
                   
                   echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								
							</script>
						";
                }

		}else{
			echo "
							<script language='javascript'>
								alert('Tài khoản không tồn tại');
								history.go(-1);
							</script>
						";
		}	


	}

?>
 <?php
	if(isset($_POST['btnthoat'])){
		unset($_SESSION['id']);
		unset($_SESSION['tennd']);
		unset($_SESSION['username']);
		unset($_SESSION['phanquyen']);
		unset($_SESSION['cart']);
		echo "
							<script language='javascript'>
								alert('Thoát thành công');
								window.open('index.php','_self', 1);
							</script>
			";

	}
?>
<script language="javascript">
	var i = 0;
	var images = [];
	var time = 3000;
	images[0] = 'img/laptop4.jpg';
	images[1]='img/laptop5.png';
	images[2]='img/laptop8.jpg';
	images[3]='img/laptop9.jpg';

	function changeImage(){
		document.slide.src = images[i];
		if(i < images.length -1){
			i++;

		}
		else{
			i=0;
		}
		setTimeout("changeImage()", time);
	}
window.onload = changeImage;
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Laptop CPT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7dc3f08a6a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>
<body>
	
	
	<div class="wrap" >		
		<div class="banner1">
			<img src="img/logo.png" style="width: 100px;height: 100px">
		</div>   <!-- Banner trên cùng-->
		<div class="menu"> <!--  menu-->			
			<ul>
				<li><a href="index.php?content=trangchu">trang chủ</a></li>
				<li><a href="index.php?content=gioithieu">giới thiệu</a></li>
				<li><a href="index.php?content=sanpham">sản phẩm</a></li>
				<li><a href="index.php?content=phukien">phụ kiện</a></li>
				<li><a href="index.php?content=donhangcuaban">đơn hàng</a></li>
				<li><a href="index.php?content=tintuc">tin tức</a></li>
				<li><a href="index.php?content=hotro">hỗ trợ</a></li>
				<li><a href="index.php?content=phanhoi">tin nhắn</a></li>
			</ul>
		</div>  
		<div class="banner2">
			<img name="slide" width="100%" height="300">
		</div>
		<div class="container">
			<div class="left">
				<div class="product"> <!-- danh sách sản phẩm-->
					<p>Sản phẩm</p>
					<?php
						$sql1="SELECT * FROM danhmuc WHERE loai=1";
						$result=mysqli_query($conn,$sql1);
					?>
					<ul class="product-menu">
						<?php
							while($row=mysqli_fetch_array($result)){
						 ?>
						<li><a class="d_m" href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row['tendm'] ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="accessories"> <!-- danh sách phụ kiện-->
					<p>Phụ kiện</p>
					<?php
						$sql="SELECT * FROM danhmuc WHERE loai=2";
						$result=mysqli_query($conn,$sql);
					?>
					<ul class="accessories-menu">
						<?php while ($row=mysqli_fetch_array($result)) {
						?>
						<li><a class="d_m" href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row['tendm'] ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="banner3">
					
				</div>

				
			</div>
			<div class="center">
				<?php
					include 'content.php';
				?>
				
				
			</div>
			<div class="right">
				<div class="right1">
					<?php
						if(!isset($_SESSION['username'])){
							include 'dangnhap.php';
						}
						else
							include 'saudangnhap.php';
					?>
					
				</div>
				<div class="right2">
					<div class="right01">
						<i class="fas fa-cart-plus"></i>
						<p>Giỏ hàng</p>
					</div>	
					<a href="index.php?content=cart"><img src="img/cart.jpg" ></a>
					<?php 
								//$tongtien=0;
								if(isset($_SESSION['cart']))
								$count=count($_SESSION['cart']);
								else $count=0;
								if($count==0){
							?>
							<p style="text-align:center;font-family: 'Pacifico', cursive;" id="hienthi_qty_giohang">Không có sản phẩm nào !</p>
							<?php } 
							else {
							?>
							<p style="text-align: center;font-family: 'Pacifico', cursive;" id="hienthi_qty_giohang">Có <span style="color:red"><?=$count?></span> sản phẩm trong giỏ</p>
					<?php } ?>
				</div>
				<div class="right3">
					<div class="right31">
						<i class="fas fa-search"></i>
						<p>Tìm kiếm</p>
					</div>	
					<form action="index.php?content=timkiem" method="GET">
						<input class="txtlook" type="text" name="timkiem" style="width: 170px">
						<input type="hidden" name="content" value="timkiem"> 
						<div class="gia">
							<select name="gia">
								<option value="0"> - Chọn giá - </option>
								<option value="0 - 1.000.000 đ">< 1.000.000</option>
								<option value="1.000.000 đ - 3.000.000 đ">1.000.000 - 3.000.000</option>
								<option value="3.000.000 đ - 8.000.000 đ">3.000.000 - 8.000.000</option>
								<option value="8.000.000 đ - 10.000.000 đ">8.000.000 - 10.000.000</option>
								<option value="10.000.000 đ - 15.000.000 đ">10.000.000 - 15.000.000</option>
								<option value="15.000.000 đ - 20.000.000 đ">15.000.000 - 20.000.000</option>
								<option value="20.000.000 đ - 25.000.000 đ">20.000.000 - 25.000.000</option>
								<option value="25.000.000 đ - 30.000.000 đ">25.000.000 - 30.000.000</option>
								<option value="> 30.000.000 đ">> 30.000.000</option>
							</select>
						</div>	
						<div class="btnlook">
							<input type="submit" name="btnlook" value="Tìm kiếm" style="cursor: pointer;padding: 8px">
						</div>
					</form>	

					
				</div>
					<div class="right3">
					<div class="right31">
						<i class="fas fa-phone-volume"></i>
						<p>Liên hệ</p>
					</div>	
					&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/profile.php?id=100010264920363" target="_blank"><i style="font-size:25px;padding:9px;" class="fab fa-facebook-square"></i></a>&nbsp;
					<a href="#"><i style="font-size:25px;padding:9px;" class="fas fa-envelope-square"></i></a>&nbsp;
					<a href="#"><i style="font-size:25px;padding:9px;" class="fab fa-instagram"></i></a>&nbsp;
					<a href="#"><i style="font-size:25px;padding:9px;" class="fab fa-twitter-square"></i></a><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="font-size:25px;padding:9px;margin-top:20px;"class="fas fa-phone-alt"></i> 0354860101<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="font-size:25px;padding:9px;margin-top:10px" class="fas fa-mobile-alt"></i> 03677364610

					
				</div>
				<div class="right4">
					
				</div>
				<div class="right5">
					
				</div>
				
			</div>

			

		</div><!-- end container-->
		<div class="banner4">
			<div class="logo logo1"><img src="img/macbook.jpg" width=150px height="130px;"></div>
			<div class="logo logo2"><img src="img/accer.png" width=150px height="130px;"></div>
			<div class="logo logo3"><img src="img/asus.png" width=150px height="130px;"></div>
			<div class="logo logo4"><img src="img/lenovo.png" width=150px height="130px;"></div>
			<div class="logo logo5"><img src="img/dell.png" width=150px height="130px;"></div>
			
		</div>
		<div class="footer">
			<div class="footer1">
				<div class="logoleft">
					<img src="img/logo.png" style="width: 100px;height: 100px">
				</div>
				<div class="rightfooter">
					<h4>Công Ty TNHH LAPTOP CPT</h4>
					<p>Địa chỉ: Ba Tri - Bến Tre</p>
					<p>Điện thoại: 0354860101 - (037) 7364610</p>
					<p>Email: dongb1605330@student.ctu.edu.vn</p>
				</div>
			</div>	
			<div class="bothfooter">
				&copy;Copyright - Nguyễn Đông - B1605330
			</div>
		</div> <!-- end footer-->

	</div>  <!-- end wrap-->
	
</body>
</html>
