<div class="tatca_sanpham" style="margin-bottom: 40px;">
	<h3>PHẢN HỒI</h3>
</div>
<?php 

 if(isset($_GET['maht'])){
     $maht=$_GET['maht'];
    if(isset($_POST['submit'])){
    
        
    
    
    $ndphanhoi=$_POST['ndphanhoi'];
    $result=mysqli_query($conn,"UPDATE hotro SET phanhoi='$ndphanhoi' WHERE id_hotro='$maht' ");
    if($result){
        echo "<script>
            alert('Phản hồi thành công');
            window.open('admin.php?content1=qlht','_self',1);
        </script>";
    }
}
}
?>
<form method="post"  style="margin-left: 150px" >
    <textarea name="ndphanhoi" rows="7" cols="50"></textarea><br><br>
    <button style="padding:8px" type="submit" name="submit" >Gửi</button>
    <button style="padding:8px" type="reset">Reset</button>
</form>
