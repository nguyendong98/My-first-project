<?php
	session_start();
	include 'process.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="indonhang.css">

</head>

	<body onload="window.print();">
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="img/logo.png"/></div>
        <div class="company">C.Ty TNHH LapTop CPT</div>
        <div class="company">An Đức - Ba Tri - Bến Tre</div>

    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
  </div>
  <br/>
  <br/>
  <?php
  	if(isset($_GET['mahd'])){
  		$mahd=$_GET['mahd'];

  	$result1=mysqli_query($conn,"SELECT * FROM hoadon WHERE mahd='$mahd'");
  	$row1=mysqli_fetch_assoc($result1);
  ?>
  <p>Tên khách hàng: <?=$row1['hoten']?></p>
  <p>Mã hóa đơn: <?=$row1['mahd']?></p>
  <table class="TableData">
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Đơn giá</th>
      <th>Số lượng</th>
      <th>Thành tiền</th>
    </tr>
    <?php


	$i=1;
$tongsotien = 0;
		$result=mysqli_query($conn,"SELECT * FROM chitiethoadon WHERE mahd='$mahd'");
	while($row=mysqli_fetch_assoc($result)){
		$dongia=$row['gia']/$row['soluong'];
		$tongsotien += ($row['gia']*1.1);
	?>	

    <tr>
    	<td><?=$i?></td>
    	<td><?=$row['tensp']?></td>
    	<td><?=number_format($dongia,0,',','.')?> đ</td>
    	<td><?=$row['soluong']?></td>
    	<td><?=number_format($row['gia'],0,',','.')?> đ</td>
    </tr>     

<?php $i++;} ?>
	<tr>
		<td colspan="4" class="tong">Thuế VAT</td> 
		<td style="text-align: right;">10%</td>
	</tr>
    <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo number_format(($tongsotien),0,",",".")?></td>
    </tr>
<?php } ?>
  </table>
  <div class="footer-left"> Cần thơ, ngày&nbsp;&nbsp;&nbsp;  tháng&nbsp;&nbsp;&nbsp;  năm&nbsp;&nbsp;&nbsp;   <br/>
    Khách hàng </div>
  <div class="footer-right"> Cần thơ, ngày&nbsp;&nbsp;&nbsp;  tháng&nbsp;&nbsp;&nbsp;  năm&nbsp;&nbsp;&nbsp; <br/>
    Nhân viên </div>
</div>
</body>

</html>