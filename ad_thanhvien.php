<?php
	session_start();
	if(isset($_SESSION['namedn'])==False){
		header('Location:ad_login.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý đơn hàng</title>
<style type="text/css">
	input {
	outline: none;
}
input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
	display: none; /* remove the search and cancel icon */
}

/* search input field */
input[type=search] {
	background: #ededed url(images/search-icon.png) no-repeat 9px center;
	border: solid 1px #666;
	padding: 9px 10px 9px 32px;
	width: 25px;
	
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
	width: 130px;
	background-color: #fff;
	border-color: #6dcff6;
	
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
}



/* demo B */
#demo-b input[type=search] {
	width: 15px;
	padding-left: 10px;
	color: transparent;
	cursor: pointer;
}
#demo-b input[type=search]:hover {
	background-color: #fff;
}
#demo-b input[type=search]:focus {
	width: 130px;
	padding-left: 32px;
	color: #000;
	background-color: #fff;
	cursor: auto;
}
#demo-b input:-moz-placeholder {
	color: transparent;
}
#demo-b input::-webkit-input-placeholder {
	color: transparent;
}

</style>
</head>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/quanlydonhang.css" />
	<script type="text/javascript" src="js/engine1/jquery.js"></script>
	<link href="js/menu_source/styles.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type='text/javascript' src='/menu_source/menu_jquery.js'></script>
<body>
	<div id="wrapper">
    	<div id="header">
        	<div class="canhgiua">
           	  <img src="images/header-09.jpg" height="245" width="970" alt="" />
            </div>
        </div>
        <div id="content">
       	  <div id="menu">
            	<div class="canhgiua">
                	<ul>
                    	 <li class='active'><a href='home.php'><span style="text-align:center">HOME</span></a></li>
                         <li class='has-sub'><a href='ad_thanhvien.php'><span>QUẢN LÝ THÀNH VIÊN</span></a></li>
                         <li class='has-sub'><a href='ad_sanpham.php'><span>QUẢN LÝ SẢN PHẨM</span></a></li>
                         <li class='last'><a href='ad_hoadon.php'><span>QUẢN LÝ ĐƠN HÀNG</span></a></li>
						 <li class='last'><a href="admin_Logout.php"> <em style="color:#d310d5"><?php echo $_SESSION['namedn'];?> </em>,THOÁT</a></li>
                   	</ul>
                </div>
                <div class="chitiethang">
  			<h1 style="color:#000;">QUẢN LÝ THÀNH VIÊN</h1>
			<table width="800" border="1" cellspacing="0" bordercolor="#000">
  			<tr>
    			<td><p>Tài khoản</p></td>
    			<td><p>Họ tên</p></td>
    			<td><p>Địa chỉ</p></td>
    			<td><p>Giới tính</p></td>
    			<td><p>Điện thoại</p></td>
    			<td><p>Vai trò</p></td>
  			</tr>
			<?php
										$db = mysqli_connect("localhost","root","","db_vest");
										$sql= "select * From TaiKhoan";
										$query=mysqli_query($db,$sql);
										while($sanpham = mysqli_fetch_row($query)) {
											if ($sanpham[3]=="1"){$sex="Nam";}else{$sex="Nữ";}
											if ($sanpham[6]=="1"){$vt="Quản trị";}else{$vt="Khách hàng";}
											echo '<tr>';
											echo	'<td>'.$sanpham[0].'</div>';
											echo	'<td>'.$sanpham[2].'</div>';
											echo	'<td>'.$sex.'</div>';
											echo	'<td>'.$sanpham[4].'</div>';
											echo	'<td>'.$sanpham[5].'</div>';
											echo	'<td>'.$vt.'</div>';
											echo '</tr>';
										}		
										?>
  			
		</table>
		</div>
        <a href ="ad_taotv.php" style="text-align:right;"><h2 style="color:#F00">Thêm mới thành viên</h2></a>

	</div>
  </div>
  </div>
          </div>
            
       </div>
    </div>
</body>
</html>
