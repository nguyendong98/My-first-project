<div class="tatca_sanpham">
	<h3>CHI TIẾT THỐNG KÊ</h3>
</div>
<table class="table_tkhd" width="100%">
    <?php
        $sql0=mysqli_query($conn,"SELECT sum(tongso) FROM sanpham WHERE madm='3'");
        $row0=mysqli_fetch_assoc($sql0);
        $sql1=mysqli_query($conn,"SELECT sum(daban) FROM sanpham WHERE madm='3'");
        $row1=mysqli_fetch_assoc($sql1);
        $sql2=mysqli_query($conn,"SELECT sum(conlai) FROM sanpham WHERE madm='3'");
        $row2=mysqli_fetch_assoc($sql2);
        $sql3=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=3");
        $tongdell=0;
        while($row3=mysqli_fetch_assoc($sql3)){
            $tongdell += $row3['gia']*$row3['daban']*1.1;
        }
       
        $sql4=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='4'");
        $row4=mysqli_fetch_assoc($sql4);
        $sql5=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=4");
        $tongasus=0;
        while($row5=mysqli_fetch_assoc($sql5)){
            $tongdell += $row5['gia']*$row5['daban']*1.1;
        }
        
        $sql6=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='5'");
        $row6=mysqli_fetch_assoc($sql6);
        $sql7=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=5");
        $tonglenovo=0;
        while($row7=mysqli_fetch_assoc($sql7)){
            $tonglenovo += $row7['gia']*$row7['daban']*1.1;
        }
        
        $sql8=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='6'");
        $row8=mysqli_fetch_assoc($sql8);
        $sql9=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=6");
        $tongacer=0;
        while($row9=mysqli_fetch_assoc($sql9)){
            $tongacer += $row9['gia']*$row9['daban']*1.1;
        }
        
         
        $sql10=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='7'");
        $row10=mysqli_fetch_assoc($sql10);
        $sql11=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=7");
        $tongapple=0;
        while($row11=mysqli_fetch_assoc($sql11)){
            $tongapple += $row11['gia']*$row11['daban']*1.1;
        }
        
        $sql12=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='8'");
        $row12=mysqli_fetch_assoc($sql12);
        $sql13=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=8");
        $tongmsi=0;
        while($row13=mysqli_fetch_assoc($sql13)){
            $tongmsi += $row13['gia']*$row13['daban']*1.1;
        }
        
        $sql14=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='9'");
        $row14=mysqli_fetch_assoc($sql14);
        $sql15=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=9");
        $tongsamsung=0;
        while($row15=mysqli_fetch_assoc($sql15)){
            $tongsamsung += $row15['gia']*$row15['daban']*1.1;
        }
        
        $sql16=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='10'");
        $row16=mysqli_fetch_assoc($sql16);
        $sql17=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=10");
        $tongpin=0;
        while($row17=mysqli_fetch_assoc($sql17)){
            $tongpin += $row17['gia']*$row17['daban']*1.1;
        }
        
        $sql18=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='11'");
        $row18=mysqli_fetch_assoc($sql18);
        $sql19=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=11");
        $tongssd=0;
        while($row19=mysqli_fetch_assoc($sql19)){
            $tongssd += $row19['gia']*$row19['daban']*1.1;
        }
        
        $sql20=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='12'");
        $row20=mysqli_fetch_assoc($sql20);
        $sql21=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=12");
        $tongram=0;
        while($row21=mysqli_fetch_assoc($sql21)){
            $tongram += $row21['gia']*$row21['daban']*1.1;
        }
        
        $sql22=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham WHERE madm='13'");
        $row22=mysqli_fetch_assoc($sql22);
        $sql23=mysqli_query($conn,"SELECT * FROM sanpham WHERE madm=13");
        $tonghdd=0;
        while($row23=mysqli_fetch_assoc($sql23)){
            $tonghdd += $row23['gia']*$row23['daban']*1.1;
        }
        
         $sql24=mysqli_query($conn,"SELECT sum(tongso), sum(daban), sum(conlai) FROM sanpham ");
        $row24=mysqli_fetch_assoc($sql24);
        $sql25=mysqli_query($conn,"SELECT * FROM sanpham  ");
        $tongdoanhthu=0;
        while($row25=mysqli_fetch_assoc($sql25)){
            $tongdoanhthu += $row25['gia']*$row25['daban']*1.1;
        }
    ?>
    <tr>
        <td style="width:10%"></td>
        <th>Tổng sp nhập về (sp)</th>
        <th>Tổng sp bán ra (sp)</th>
        <th>Tổng sp tồn kho (sp)</th>
        <th>Tổng doanh thu (đồng)</th>
    </tr>
    <tr>
        <th>Dell</th>
        <td><?=$row0['sum(tongso)']?></td>
        <td><?=$row1['sum(daban)']?></td>
        <td><?=$row2['sum(conlai)']?></td>
        <td><?=number_format($tongdell,0,',','.')?></td>
    </tr>
    <tr>
        <th>Asus</th>
        <td><?=$row4['sum(tongso)']?></td>
        <td><?=$row4['sum(daban)']?></td>
        <td><?=$row4['sum(conlai)']?></td>
        <td><?=number_format($tongasus,0,',','.')?></td>
    </tr>
    <tr>
        <th>Lenovo</th>
        <td><?=$row6['sum(tongso)']?></td>
        <td><?=$row6['sum(daban)']?></td>
        <td><?=$row6['sum(conlai)']?></td>
        <td><?=number_format($tonglenovo,0,',','.')?></td>
    </tr>
     <tr>
        <th>Acer</th>
        <td><?=$row8['sum(tongso)']?></td>
        <td><?=$row8['sum(daban)']?></td>
        <td><?=$row8['sum(conlai)']?></td>
        <td><?=number_format($tongacer,0,',','.')?></td>
    </tr>
    <tr>
        <th>Apple</th>
        <td><?=$row10['sum(tongso)']?></td>
        <td><?=$row10['sum(daban)']?></td>
        <td><?=$row10['sum(conlai)']?></td>
        <td><?=number_format($tongapple,0,',','.')?></td>
    </tr>
    <tr>
        <th>Msi</th>
        <td><?=$row12['sum(tongso)']?></td>
        <td><?=$row12['sum(daban)']?></td>
        <td><?=$row12['sum(conlai)']?></td>
        <td><?=number_format($tongmsi,0,',','.')?></td>
    </tr>
    
    <tr>
        <th>Samsung</th>
        <td><?=$row14['sum(tongso)']?></td>
        <td><?=$row14['sum(daban)']?></td>
        <td><?=$row14['sum(conlai)']?></td>
        <td><?=number_format($tongsamsung,0,',','.')?></td>
    </tr>
    <tr>
        <th>Pin</th>
        <td><?=$row16['sum(tongso)']?></td>
        <td><?=$row16['sum(daban)']?></td>
        <td><?=$row16['sum(conlai)']?></td>
        <td><?=number_format($tongpin,0,',','.')?></td>
    </tr>
    <tr>
        <th>SSD</th>
        <td><?=$row18['sum(tongso)']?></td>
        <td><?=$row18['sum(daban)']?></td>
        <td><?=$row18['sum(conlai)']?></td>
        <td><?=number_format($tongssd,0,',','.')?></td>
    </tr>
        
        <th>Ram</th>
        <td><?=$row20['sum(tongso)']?></td>
        <td><?=$row20['sum(daban)']?></td>
        <td><?=$row20['sum(conlai)']?></td>
        <td><?=number_format($tongram,0,',','.')?></td>
    </tr>
    </tr>

        <th>HDD</th>
        <td><?=$row22['sum(tongso)']?></td>
        <td><?=$row22['sum(daban)']?></td>
        <td><?=$row22['sum(conlai)']?></td>
        <td><?=number_format($tonghdd,0,',','.')?></td>
    </tr>
    </tr>

        <th>Tổng </th>
        <td><?=$row24['sum(tongso)']?></td>
        <td><?=$row24['sum(daban)']?></td>
        <td><?=$row24['sum(conlai)']?></td>
        <td><?=number_format($tongdoanhthu,0,',','.')?></td>
    </tr>
    
</table>

