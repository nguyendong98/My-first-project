<?php 
include 'process.php';
if(!isset($_POST['submit'])){
	die ('');
}
	
	$tennd=$_POST['tennd'];
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	$email=$_POST['email'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		//Lay ngay cua he thong
	$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
	
    if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM users WHERE username='$user'")) > 0){
        echo " <script language='javascript'>
        			alert('User name đã tồn tại');
        			window.open('index.php?content=dangky','_self', 1)


        	</script>";
    }
     $addmember = mysqli_query($conn, "INSERT INTO users(tennd,username,password,ngaysinh,gioitinh,email,dienthoai,diachi,phanquyen) VALUES ('$tennd','$user','$pass',
     	'$ngaysinh',
            '$gioitinh',
            '$email',
            '$dienthoai',
            '$diachi',
            '1') ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo " <script language='javascript'>
        			alert('Đăng kí thành công');
        			window.open('index.php','_self', 1 );


        	</script>";
    else
        echo " <script language='javascript'>
        			alert('Đăng kí thất bại');
        			window.open('index.php?content=dangky','_self', 1)



        	</script>";
?>
	
	