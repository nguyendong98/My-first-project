<script>
    function kt(){
        var ok;
        if(document.frm.diachi.value==""){
            document.getElementById("diachi").innerHTML="*Địa chỉ không thể để trống";
            document.getElementById("diachi").style.color="red";
            frm.diachi.focus();
            ok=false;
        }
        else{
            document.getElementById("diachi").innerHTML="";
            ok=true;
        }
        return ok;
    }
</script>
<div class="tatca_sanpham">
	<h3>XÁC NHẬN ĐƠN HÀNG</h3>
</div>
<?php 
include 'process.php';
	if(isset($_SESSION['id'])){
		$id=$_SESSION['id'];
		$sql=mysqli_query($conn,"SELECT * FROM users WHERE id='$id' ");
		if(mysqli_num_rows($sql)>0){
		$result=mysqli_fetch_array($sql);
		if(isset($_POST['btn_xacnhan'])){
			$tongtien=$_SESSION['tong']*1.1;
			$hoten=$_POST['tennd'];
			$dienthoai=$_POST['dienthoai'];
			$email=$_POST['email'];
			$diachi=$_POST['diachi'];
			$sql1=mysqli_query($conn,"INSERT INTO hoadon(idnd,hoten,dienthoai,email,diachi,tongtien,trangthai) VALUES('$id', '$hoten', '$dienthoai', '$email', '$diachi', '$tongtien','Chưa xử lí') ");
			$sql2=mysqli_query($conn,"SELECT * FROM hoadon order by mahd desc limit 1");

			$row2=mysqli_fetch_assoc($sql2);
			$mahd=$row2['mahd'];
			$hinhthuc_TT=$_POST['hinhthuc_TT'];
			
			foreach ($_SESSION['cart'] as $key => $value) {		
				$nameid=$value['name'];
				$qty=$value['qty'];
				$tong=$value['qty']*$value['price']; 
				$k= $key;
			    $result=mysqli_query($conn,"SELECT * FROM sanpham WHERE masp='$k'");
			    $row=mysqli_fetch_assoc($result);
			    
			    $daban =$row['daban'] + $qty;
			    
			    $conlai = $row['tongso'] - $daban;
			    $result1=mysqli_query($conn,"UPDATE sanpham SET daban='$daban' , conlai='$conlai' WHERE masp='$k'");

				
				
			    $sql3=mysqli_query($conn, "INSERT INTO chitiethoadon(mahd,idsp,tensp,soluong,gia,phuongthucTT) VALUES('$mahd', '$key' , '$nameid', '$qty' , '$tong' ,'$hinhthuc_TT') ");
			} 
			unset($_SESSION['cart']);
			echo "<script language='javascript'>
				alert('Đã ghi nhận đơn hàng của bạn, chúng tôi sẽ giao hàng trong thời gian sớm nhất');
				window.open('index.php','_self', 1);

			</script>"
			;

		}

		
	?>	
	<h3 style="text-align: center; margin-bottom: 20px;margin-top: 40px">Bạn vui lòng điền đầy đủ thông tin để xác nhận đơn hàng</h3>
	<form style="margin-left: 80px;" action="index.php?content=thanhtoan" method="post" name="frm" onsubmit="return kt()">
	<div id="dangky">
		
		<table cellspacing="15px">
		
		<tr>
			<td style="width: 150px">Tên người dùng <font color="red">*</font> </td><td class="input"><input type="text" name="tennd" value ="<?php echo $result['tennd'] ?>" placeholder="Họ tên người nhận" size="40"></td>
		</tr>
		
		
		
		<tr>
			<td>Email <font color="red">*</font> </td><td class="input"><input type="text" name="email" value="<?php echo $result['email'] ?>" placeholder="Email người nhận" size="40"></td>
		</tr>
		<tr>
			<td>Điện thoại <font color="red">*</font> </td><td class="input"><input type="text" name="dienthoai" value ="<?php echo $result['dienthoai'] ?>" placeholder="SDT người nhận" size="40"></td>
		</tr>
		<tr>
			<td>Địa chỉ <font color="red">*</font>   </td><td class="input"><textarea name="diachi" value="<?php echo $result['diachi'] ?>"></textarea></td>
		</tr>
		<tr>
		    <td></td>
		    <td><p id="diachi"></p></td>
		</tr>
		<tr>
			<td>Tổng số tiền <font color="red">*</font> </td><td class="input"><input type="text" name="tongtien" value ="<?php echo number_format(($_SESSION['tong']*1.1),0,',','.') ?> đ" readonly size="40" ></td>
		</tr>
		<tr>
			<td>Hình thức thanh toán <font color="red">*</font> </td><td><input type="radio" name="hinhthuc_TT" value="Chuyển khoản" checked="checked">Chuyển khoản &nbsp;<input type="radio" name="hinhthuc_TT" value="Thanh toán trực tiếp">Thanh toán trực tiếp </td>
		</tr>
		<tr>
			<td colspan=2 class="btndangky">
				<button type="submit" name="btn_xacnhan" style="cursor: pointer;padding: 8px">Xác nhận</button>
				<button type="button" style="padding: 8px"><a href="index.php?content=cart" style="color: black;">Trở về</a></button>
			</td>
		</tr>
		</table>
	</div>
</form>
<?php 	
	}}
?>