<?php


?>
<html>
<head>
    <title></title>
    
    <meta charset="utf-8">
    <style>
            table{
                margin : 10px auto;
            }
            .vien{
                border: 1px solid black;
                width: 600px;
                    margin : 0 auto;
            }
            .btn{
                padding: 5px 8px;
                cursor: pointer;
                border-radius: 4px;
            }
        </style>
</head>
<body>
     <?php
    if(isset($_GET['idupdate'])){
        $idupdatesp=$_GET['idupdate'];
        $sql=mysqli_query($conn,"SELECT * FROM sanpham WHERE masp='$idupdatesp'");
        $row=mysqli_fetch_assoc($sql);
        if(isset($_POST['sua'])){
            $loai=$_POST['loai'];
            $tensp=$_POST['tensp'];
            $gia=$_POST['gia'];
            $hinhanh=$_FILES['hinhanh']['name'];
            $hinhanhtmpname=$_FILES['hinhanh']['tmp_name'];
            $folder='../img/';
            move_uploaded_file($hinhanhtmpname, $folder.$hinhanh);
            $madm=$_POST['madm'];
            $chitiet=$_POST['chitiet'];
            $sql1=mysqli_query($conn, "UPDATE sanpham SET loai='$loai',tensp='$tensp',gia='$gia',hinhanh='$hinhanh',madm='$madm',chitiet='$chitiet' WHERE masp='$idupdatesp' ");
            if($sql1){
                echo "<script language='javascript'>
                        alert('Update thành công');
                        window.open('admin.php?content1=qlsp','_self', 1);
                </script>";
             }
}
    
    ?>
    <div class="tatca_sanpham">
        <h3>SỬA SẢN PHẨM <?=$row['tensp']?></h3>
    </div>
    
   
    <div class="vien">
            <form method="post" action="" enctype="multipart/form-data">
            <table width="580px" border="0" cellspacing= "35px" style="background-color:#BDBDBD">
                <tr>
                    <td width="140px">Loại</td>
                    <td width ="430px"><input type="text" name='loai' size="40" value="<?=$row['loai']?>"></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type ="text" name="tensp" size="40" value="<?=$row['tensp']?>"></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><input type="text" name="gia" size="40" value="<?=$row['gia']?>"></td>
                </tr>
                <tr>
                    <td>Hình đại diện</td>
                    <td> <input type="file" style="width:250px" name="hinhanh" selectionDirection="<?=$row['hinhanh']?>" ><?=$row['hinhanh']?></td>
                </tr>
                <tr>
                    <td>Mã danh mục</td>
                    <td><input type="text"  name="madm" size="40" value="<?=$row['madm']?>"></td>
                    
                </tr>
                <tr>
                    <td>Chi tiết</td>
                    <td>
                        <textarea name="chitiet" rows="8" cols="45" ><?=$row['chitiet']?></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" name ="sua" value="Xác nhận">&nbsp;<button class="btn" type="reset" ><a href="admin.php?content1=qlsp" >Trở về</a></button></td>
                </tr>
            
            </table>
            </form>
        </div>  

        <?php } ?>
</body>
</html>
