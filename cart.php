
<div style="margin-bottom:25px" class="tatca_sanpham">
	<h3>GIỎ HÀNG CỦA BẠN</h3>
</div>

<?php 



 if(isset($_SESSION['cart'])){ 

	if(isset($_POST['submit'])){
		foreach ($_POST['qty'] as $key => $val) {
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}
			else {
				$_SESSION['cart'][$key]['qty']=$val;
			}
			
		}
	}
	if(isset($_GET['idxoa'])){
		$idxoa=$_GET['idxoa'];
		unset($_SESSION['cart'][$idxoa]);
	}

	?>

<form action="index.php?content=cart" method="POST">
<table id="hienthi_giohang" width="100%" border="1" style="border-collapse: collapse;text-align: center;border-color: #b2bec3" cellpadding="30px" >
	<tr>
		<th id="stt"  >STT</th>
		<th >Tên sản phẩm</th>
		<th >Hình ảnh</th>
		<th id="sl">Số lượng</th>
		<th>Đơn giá</th>
		<th>Tổng tiền</th>
		<th>Thao tác</th>
	</tr>
	<?php
		$sum =0;
		$stt=1;
		foreach ($_SESSION['cart'] as $key => $value):	
		 ?> 
							
		
			
				<tr>
					<td ><?php echo $stt ?></td>
					<td ><?php echo $value['name'] ?></td>
					<td><img style="width: 80px;height: 60px;" src="img/<?php echo $value['hinhanh'] ?>" ></td>
					<td><input  id="qty" type="number" value="<?php echo $value['qty'] ?>" name="qty[<?php echo $key ?>]" min="0" max="20"></td>
					<td><?php echo number_format($value['price'],0,",",".") ?> đ</td>
					<td><?php echo number_format(($value['price']* $value['qty']),0,",",".")  ?> đ</td>
					<td><a  class="btncart remove" href="index.php?content=cart&idxoa=<?php echo $key ?>"><i class="far fa-trash-alt" style="font-size: 15px;"></i> Remove</a><br>
						
				</tr>
				<?php $sum += $value['price']*$value['qty']; $_SESSION['tong']= $sum; 

			
		 $stt ++; endforeach ?>
		<tr>
			<td colspan="7"><button type="submit" name="submit"  id="btn_update_cart"><i class="fas fa-sync-alt"></i> Update</button></td>
		</tr>
</table>
</form>
<div class="hoadon">

<ul class="list-group">
  <li class="list-group-item active">THÔNG TIN HÓA ĐƠN</li>
  <li class="list-group-item">Số tiền<span id="list-group-right"> <?php echo number_format($_SESSION['tong'],0,',','.') ?> đ</span></li>
  <li class="list-group-item">Thuế VAT<span id="list-group-right">10%</span></li>
  <li class="list-group-item">Tổng tiền thanh toán<span id="list-group-right"><?php echo number_format(($_SESSION['tong'] * 1.1),0,',','.')?> đ</span></li>
  
</ul>
<a class="btn_hoadon tieptucmua" href="index.php">Tiếp tục mua hàng</a>
<a class="btn_hoadon thanhtoan" href="index.php?content=thanhtoan">Xác nhận đơn hàng</a>
</div>
<?php 
} $count = count($_SESSION['cart']);
if($count==0){
	echo "<script>
		alert('Giỏ hàng rỗng');
		window.open('index.php','_self', 1);
		
	</script>";
}
	
 ?>




