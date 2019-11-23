<?php
    if(isset($_POST['xacnhan'])){
        $tieude=$_POST['tieude'];
        $noidung=$_POST['noidung'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $hinhanhtmpname=$_FILES['hinhanh']['tmp_name'];
        $folder='../img/';
        move_uploaded_file($hinhanhtmpname,$folder.$hinhanh);
        $ndngan=$_POST['ndngan'];
        $result=mysqli_query($conn,"INSERT INTO tintuc(tieude,noidungngan,noidung,hinhanh) VALUES('$tieude','$ndngan','$noidung','$hinhanh')");
        if($result){
            echo "<script>
                 alert('Thêm thành công');   
            </script>";

        }
    }


?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <meta charset="utf-8">
    <style>
            table{
                margin : 20px auto;
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
        <script language="javascript">
            function kt(){
                var ok ;
                if(document.form1.tieude.value==""){
                    document.getElementById("errtieude").innerHTML="*Tiêu đề không được bỏ trống";
                    document.getElementById("errtieude").style.color="red";
                    form1.tieude.focus();
                    ok = false;
                }
                else{
                    document.getElementById("errtieude").innerHTML="";
                    ok=true;
                }
                if(document.form1.noidung.value==""){
                    document.getElementById("errnoidung").innerHTML="*Nội dung không được bỏ trống";
                    document.getElementById("errnoidung").style.color="red";
                    form1.noidung.focus();
                    ok = false;
                }
                else{
                    document.getElementById("errnoidung").innerHTML="";
                    ok=true;
                }
                if(document.form1.hinhanh.value==""){
                    document.getElementById("errhinhanh").innerHTML="*Hình ảnh không được bỏ trống";
                    document.getElementById("errhinhanh").style.color="red";
                    form1.hinhanh.focus();
                    ok = false;
                }
                else{
                    document.getElementById("errhinhanh").innerHTML="";
                    ok=true;
                }
                if(document.form1.ndngan.value==""){
                    document.getElementById("errndngan").innerHTML="*Nội dung ngắn không được bỏ trống";
                    document.getElementById("errndngan").style.color="red";
                    form1.ndngan.focus();
                    ok = false;
                }
                else{
                    document.getElementById("errndngan").innerHTML="";
                    ok=true;
                }
               
                return ok;
            }
        </script>
</head>
<body>
    <div class="tatca_sanpham">
        <h3>THÊM TIN TỨC</h3>
    </div>

    <div class="vien" style="margin-top: 30px;">
            <form method="post" action="admin.php?content1=them_tt" enctype="multipart/form-data" name="form1" onSubmit="return kt()">
            <table width="580px" border="0" cellspacing= 35px style="background-color:#BDBDBD;"  >
                <tr>
                    <td width="140px">Tiêu đề</td>
                    <td width ="430px"><input type="text" name='tieude' size="40">
                    </td>
                   
                </tr>
                <tr>
                    <td></td>
                    <td> <p id="errtieude"></p></td>
                </tr>
                <tr>
                    <td>Nội dung</td>
                    <td><input type ="text" name="noidung" size="40"></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td><p id="errnoidung"></p></td>
                </tr>
                
                <tr>
                    <td>Hình ảnh</td>
                    <td> <input type="file" style="width:250px" name="hinhanh">
                    <div id="errhinhanh"></div></td>
                    
                </tr>
                <tr>
                    <td></td>
                    <td><p id="errhinhanh"></p></td>
                </tr>
               
                <tr>
                    <td>Nội dung ngắn</td>
                    <td>
                        <textarea name="ndngan" rows="8" cols="45" ></textarea>
                        
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td><p id="errndngan"></p></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" name ="xacnhan" value="Xác nhận">&nbsp;<input class="btn" type="reset" value="Làm lại"></td>
                </tr>
            
            </table>
            </form>
        </div>  


</body>
</html>