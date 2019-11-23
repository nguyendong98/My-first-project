<?php 
include 'process.php';
	if(isset($_POST['xacnhan'])){
		$loai=$_POST['loai'];
		$tensp=$_POST['tensp'];
		$gia=$_POST['gia'];
		$hinhanh=$_FILES['hinhanh']['name'];
		$hinhanhtmpname=$_FILES['hinhanh']['tmp_name'];
		$folder='../img/';
		move_uploaded_file($hinhanhtmpname, $folder.$hinhanh);
		$madm=$_POST['madm'];
		$chitiet=$_POST['chitiet'];
		$tongso=$_POST['tongso'];
		$sql=mysqli_query($conn, "INSERT INTO sanpham(loai,tensp,gia,hinhanh,tongso,daban,conlai,madm,chitiet) VALUES('$loai','$tensp','$gia','$hinhanh','$tongso','0','$tongso','$madm','$chitiet') ");
		if($sql){
			echo "<script>
				alert ('Thêm thành công');
				window.open('admin.php?content1=qlsp', '_self', 1);
			</script>";
		}
		else
			echo "<script>
				alert ('Thêm thất bại');
				window.open('admin.php?content1=qlsp', '_self', 1);
			</script>";
	}
?>