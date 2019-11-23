<?php 
if(!isset($_SESSION['id'])){
     echo "<script>
        alert('Bạn hãy đăng nhập trước đã');
        window.open('index.php','_self',1);
    </script>"; 
}
?>
<div class="tatca_sanpham">
	<h3>PHẢN HỒI CỦA BẠN</h3>
</div>

<table border="1" width="100%">
    <tr>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Ngày gửi</th>
        <th>Phản hồi từ admin</th>
    </tr>
    <?php
    if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    $result=mysqli_query($conn,"SELECT * FROM hotro WHERE idnd='$id'");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    
    ?>
    <tr>
        <td><?=$row['chude']?></td>
        <td><?=$row['noidung']?></td>
        <td><?=$row['ngaygui']?></td>
        <td><?=$row['phanhoi']?></td>
    </tr>
    <?php }}} ?>
</table>