<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Percée Cửa hàng Vest</title>
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
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<script type="text/javascript" src="js/engine1/jquery.js"></script>
	<link href="js/menu_source/styles.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type='text/javascript' src='/menu_source/menu_jquery.js'></script>
    <meta name="description" content="Áo Vest Percée - Chất lượng, rẻ, đẹp nhất!" />
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
  				   <div class="khung">
                    	<div id="wowslider-container1">
                        	<div class="ws_images">
                            	<ul>
                                	<li><img src="images/slider.jpg" alt="Percée" title="Percée" id="wows1_0"/></li>
									<li><img src="images/slider1.jpg" alt="Percée" title="" id="wows1_1"/></li>
									<li><img src="images/slider2.jpg" alt="Percée" title="" id="wows1_2"/></li>
									<li><img src="images/slider3.jpg" alt="Percée" title="" id="wows1_3"/></li>
                                </ul>
                        	</div>
                        </div>
                    </div>
						<script type="text/javascript" src="js/engine1/wowslider.js"></script>
						<script type="text/javascript" src="js/engine1/script.js"></script>
					<div class="khung_2">
						<h1 style="text-align:center; font-weight:bold;">HOT TREND</h1>
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
</body>
</html>
