<?php  session_start() ;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giới thiệu</title>
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
	<link rel="stylesheet" type="text/css" href="css/gioithieu.css" />
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
            </div>
       	  <div id="right_content">
          	<div class="text">
  				   <p style="font-weight:bold; text-align:center; color:#000">LỊCH SỬ PHÁT TRIỂN THƯƠNG HIỆU</p>
                   <p> Percée là một trong những thương hiệu thời trang tiên phong trong lĩnh vực thiết kế dành cho nam giới.</p>

					<p>Ra đời từ năm 2008,  Percée được biết đến là một trong những hãng thời trang bán hàng online trực tuyến đầu tiên ở Hà Nội. Phong cách mà chúng tôi hướng tới là phong cách lịch lãm, sang trọng nhưng không kém phần trẻ trung dành cho các quý ông thời thượng. Năm 2012 là mốc đánh dấu quan trọng của chúng tôi khi cho ra mắt cửa hàng đại diện đầu tiên tại Hà Nội. Cũng từ đó Percée ngày càng lớn mạnh. Được sự yêu mến và tin dùng của quý khách hàng, trong năm 2013 Percée đã phát triển thêm hệ thống cửa hàng của mình không chỉ tại Hà Nội mà còn tiến vào Thành phố Đà Nẵng.</p>

			<p >Khách hàng mà  Percée hướng đến là các teenboy trẻ trung, nam giới hiện đại làm việc tại công sở. Ưu tiên hàng đầu của chúng tôi là mang đến khách hàng những sản phẩm tốt nhất với chi phí thấp nhất. Đáp ứng các yêu cầu và làm hài lòng mọi người.</p>

			<p>Đến với  Percée, các bạn sẽ được tư vấn về xu hướng thời trang thịnh hành nhất hiện nay. Ngoài cung cấp các sản phẩm   thời trang thiết kế và nhập từ các nguồn uy tín ở Hồng Kông và Hàn Quốc, chúng tôi còn nhận thiết kế theo yêu cầu khách hàng. Sự hài lòng của khách hàng chính là điều mà  Percée luôn hướng tới.</p>

				<p>Hãy đến với  Percée và cảm nhận thế giới thời trang mà chúng tôi mang đến!</p>
			</div>
			<div class="img">
            	<img src="images/images.jpg" width="225" height="224"  />
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
