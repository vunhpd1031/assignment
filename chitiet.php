<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vest đen khuy xích cổ vuông</title>
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

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
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
                    	<li class='active'><a href='index.php'><span>TRANG CHỦ </span></a></li>
                        <li class='has-sub'><a href='gioithieu.php'><span>GIỚI THIỆU </span></a></li>
                         <li class='has-sub'><a href='sanpham.php'><span>SẢN PHẨM</span></a></li>
                         <li class='last'><a href='lienhe.php'><span>LIÊN HỆ </span></a></li>
						  <?php
										if (isset($_SESSION['namedn'])==False){
											echo ' <li class="last"><a href="dangnhap.php"><span>ĐĂNG NHẬP </span></a></li>';
										}else {echo ' <li class="last"><a href="logout.php"><span>THOÁT </span></a></li>';}
										?>
						<li style="width:auto; " class='last'><a style="color:#FFF; background:#424242" href='showgh.php'>
						<span>
							<em style="color:red; font-size:14pt"><?php 
											if (empty($_SESSION['dem'] )==False){
												echo $_SESSION['dem'] ;
											}else {echo '0';}
										?> </em> x SẢN PHẨM
						</span></a></li>
                   	</ul>
                </div>
          </div>
            <div id="left_content">
            	<img src="images/quang-cao.jpg" width="174" height="682" alt=""  />
                <img src="images/qc2.JPG" width="174" height="174" alt="" />
            </div>
       	  <div id="right_content">
          	<div class="chitiet">
			<?php
				$sanpham=$_GET['code'];
				$db = mysqli_connect ("localhost","root","","db_vest");
				$sql1 = 'Select * from Sanpham Where MaSP="'.$sanpham.'"';
				$query1 = mysqli_query($db,$sql1);
				$rowsp = mysqli_fetch_row($query1);
				$masp=$rowsp[0];
				$tensp=$rowsp[1];
				$dongia=$rowsp[2];
				$hinhanh=$rowsp[3];
				$mota=$rowsp[4];
            	echo '<div class="img1">
            	<img style="margin-right:20px;" src="images/ao/'.$hinhanh.'" width="440" height="600" alt="" />
             	</div>';
                echo '	<p style="font-size:20px; font-weight:bold;">Vest đen khuy xích cổ vuông</p>
                    <p>Mã Sản Phẩm : '.$masp.'</p>
                    <p>GIÁ: '.number_format($dongia).'</p>
                    <p>Mô tả : '.$mota.'</p>
                    <p>Xuất xứ: Việt Nam</p>
                    <p>Nhanh tay sở hữu sản phẩm giá tốt cùng Percée. Nếu sản phẩm khiến bạn hài lòng vui

					lòng giới thiệu người thân quen ủng hộ Shop Percée bạn nhé !</p>
					
                    	<a href="giohang2.php?item='.$masp.'" ><input style="margin-left:200px; font-size:15pt; color:white; background:green"  type="submit" class="cil" name="mua" value="Mua ngay"></a>
                   
                
            </div>';
			?>
             <div class="khung_3">
                	<p style="text-align:center; font-weight:bold;">HOT TREND</p>
                	<div class="khunganh">
                    	<?php
						$db = mysqli_connect("localhost","root","","db_vest");
						$sql= "select * From Sanpham";
						$query=mysqli_query($db,$sql);
						while($sanpham = mysqli_fetch_row($query)) {
							echo	'<div class="khunganhcon">';
							echo 			'<a href="chitiet.php?code='.$sanpham[0].'" >';
							echo			'<img style="padding-left:10px" src="images/ao/'.$sanpham[3].'"  width="147" height="200" />';
							echo				' <p style="color:#000; font-size:9px; font-weight:bold; text-align:center;"> '.$sanpham[1].'</p></a>';
							echo				'<p style=" color:#333; font-size:9px; font-weight:bold; text-align:center;">'.number_format($sanpham[2]).' VNĐ</p>';
							//echo				'<a href="../cart/giohang.php?item='.$sanpham[0].'"><h3><em class="glyphicon glyphicon-plus adm1"></em> Giỏ hàng</h3></a>';
							//echo				'<a href="chitiet.php?code='.$sanpham[0].'"><i> <img src="../images/b2.png"/></i></a>';
							echo	'</div>';
						}		
					?>  	
                    </div>
            </div>
          </div>
      </div>       
        
<br/>
        <div id="footer">
        	<p style="text-align:center;">2014 Percée| All rights reserved.</p>
            <p style="text-align:center;">Trụ sở chính: 114 Pastour - DN/04.6670.0808</p>
            <p style="text-align:center;">Hotline: DN: 0975308321</p>
            <p style="text-align:center;">Email: percee@fashion.vn</p>
        </div>
    </div>
    </div>
    
</body>
</html>
