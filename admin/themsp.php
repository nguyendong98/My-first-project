<!DOCTYPE html>
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
    <div class="tatca_sanpham">
        <h3>THÊM SẢN PHẨM</h3>
    </div>

    <div class="vien">
            <form method="post" action="xulithemsp.php" enctype="multipart/form-data">
            <table width="580px" border="0" cellspacing= 35px style="background-color:#BDBDBD"  >
                <tr>
                    <td width="140px">Loại</td>
                    <td width ="430px"><input type="text" name='loai' size="40"></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type ="text" name="tensp" size="40"></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><input type="text" name="gia" size="40"></td>
                </tr>
                <tr>
                    <td>Hình đại diện</td>
                    <td> <input type="file" style="width:250px" name="hinhanh"></td>
                </tr>
                <tr>
                    <td>Mã danh mục</td>
                    <td><input type="text"  name="madm" size="40"></td>
                    
                </tr>
                <tr>
                    <td>Tổng số</td>
                    <td><input type="text"  name="tongso" size="40"></td>
                    
                </tr>
                <tr>
                    <td>Chi tiết</td>
                    <td>
                        <textarea name="chitiet" rows="8" cols="45" ></textarea>
                    </td>
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
