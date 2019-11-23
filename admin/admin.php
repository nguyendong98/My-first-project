
<!-- TK admin
username: phudong
password:phudong -->


<?php 
	session_start();
	include 'process.php';
	if(!isset($_SESSION['id'] )){
		header('location:../index.php');
	}
	if($_SESSION['phanquyen'] <> 0){
		header('location:../index.php');
	}
	if(isset($_POST['btnthoat'])){
		session_destroy();
		echo "<script language='javascript'>
			alert('Thoát thành công');
		</script>";
		header('location:../index.php');
	}

?>
<script language="javascript">
	var i = 0;
	var images = [];
	var time = 3000;
	images[0]='../img/laptop4.jpg';
	images[1]='../img/laptop5.png';
	images[2]='../img/laptop8.jpg';
	images[3]='../img/laptop9.jpg';

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
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../index.css">
	<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7dc3f08a6a.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="wrap" >		
		<div class="banner1">
			<img src="../img/logo.png" style="width: 100px;height: 100px">
		</div>   <!-- Banner trên cùng-->
		  
		<div class="banner2">
			<img name="slide" width="100%" height="300">
		</div>
		<div class="container">
			<div class="left" >
				
				<div class="right1">
				
					<div class="right0">
						<i class="fas fa-user-tie"></i>
						<p style="">User</p>
					</div>	
					<div class="afterlogin">
						<p style="text-align: center; color: #2d3436;font-size: 20px;font-family: 'Mansalva', cursive;">Xin chào Admin:<br>  [<?php echo $_SESSION['tennd'] ?>]</p>
						<form method="post">
							<input type="submit" name="btnthoat" value="Log out" style="margin-left: 120px;cursor: pointer;padding: 8px;border-radius: 4px;">
						</form>
					</div>
					
				</div>
				<div class="right1" style="margin-top: 30px; height: auto"> <!-- danh sách phụ kiện-->
					
					<div class="right0" style="">
						<i class="fas fa-users-cog"></i>
						<p style="">Tùy chọn</p>
					</div>	
					<ul class="accessories-menu" >
						<li class="d_m2"><a class="d_m1" style="font-size:17px !important"  href="admin.php?content1=qlnd"> ql người dùng </a></li>
						
						<li class="d_m2"><a class="d_m1" style="font-size:18px !important" href="admin.php?content1=qlsp"> ql sản phẩm</a></li>
						<li class="d_m2"><a class="d_m1" style="font-size:18px !important" href="admin.php?content1=qlhd"> ql hóa đơn</a></li>
						<li class="d_m2"><a class="d_m1" style="font-size:18px !important" href="admin.php?content1=qlht"> ql hỗ trợ</a></li>
						<li class="d_m2"><a class="d_m1" style="font-size:18px !important" href="admin.php?content1=qltt"> ql tin tức</a></li>
						
					</ul>
				</div>

				
			</div>
			<div class="center1">
				<?php include 'content1.php' ?>
				
			</div>
			
			
	</div>	
	<div class="footer" style="clear: both">
				<div class="footer1">
					<div class="logoleft">
						<img src="../img/logo.png" style="width: 100px;height: 100px">
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
			</div> 
		</div>	
</body>
</html>