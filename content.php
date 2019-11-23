<?php
	if(isset($_GET['content']))	{
		switch ($_GET['content'])
		{
			case "gioithieu":
				include ('gioithieu.php');
				break;
			case "dangky":
				include ('dangky.php');
				break;	
			case "hotro":
				include ('hotro.php');
				break;	
			case "trangchu":
				include ('trangchu.php');
				break;	
			case "sanpham":
				include ('sanpham.php');
				break;
			case "phukien":
				include ('phukien.php');
				break;	
			case "xemchitiet":
				include ('xemchitiet.php');
				break;		
			case "cart":
				include ('cart.php');
				break;
			case "timkiem":
				include ('timkiem.php');
				break;		
			case "thanhtoan":
				include ('thanhtoan.php');
				break;	
			case "tintuc":
				include ('tintuc.php');
				break;	
			case "donhangcuaban":
				include ('donhangcuaban.php');
				break;	
			case "chitiet":
				include ('chitiet.php');
				break;	
		    case "phanhoi":
		        include ('phanhoi.php');
		        break;
		}	
	}
	else if(isset($_GET['madm'])){
		include 'danhmuc.php';
		
	}
	else{
		include 'trangchu.php';
	}


?>