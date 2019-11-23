<?php 
	if(isset($_GET['content1'])){
		switch ($_GET['content1']) {
			case 'qlsp':
				include ('qlsp.php');
				break;
			case 'them_sp':
				include ('themsp.php')	;
				break;
			case 'update_sp':
				include ('updatesp.php');
				break;	
			case 'qlnd':
				include ('qlnd.php');
				break;	
			case 'qlhd':
				include ('ql_hoadon.php');
				break;
			case 'qlht':
				include ('ql_hotro.php');
				break;
			case 'qltt':
				include ('ql_tintuc.php');
				break;
			case 'chitiet_hoadon':
				include ('chitiet_hoadon.php');
				break;
			case 'them_tt':
				include ('them_tt.php');
				break;	
			case 'edit_tt':
				include ('edit_tt.php');
				break;	
			case 'phanhoi':
			    include('phanhoi.php');
			    break;
			case 'chitietthongke':
				include('chitietthongke.php');
				break;
			default:
				# code...
				break;
		}
	}
	else
		include ('qlnd.php');

?>