<?php  session_start() ;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liên hệ</title>
<script language="javascript">
	function kiemtra()
	{
		//lay ho ten
		hoten = document.getElementById("hoten").value;
		email = document.frmLienhe.email.value;		
		//kiem tra hoten co gia tri hay khong
		if(hoten=="")
		{
			//alert("Xin vui lòng nhập họ tên");
			document.getElementById("label_hoten").style.display = "inline";
			document.getElementById("hoten").focus();
			return;
		}
		if(email=="")
		{
			//alert("Xin vui lòng nhập họ tên");
			document.getElementById("label_email").style.display = "inline";
			document.getElementById("email").focus();
		}
		
	}
</script>
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
	<link rel="stylesheet" type="text/css" href="css/lienhe.css" />
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
          	<p style="font-weight:bold; text-align:left;">Liên hệ</p>
            <div class="hor_sep"></div>
          		<div class="lienhe">
          			<h3>THÔNG TIN LIÊN HỆ</h3>
					<p>TRỤ SỞ CHÍNH: 114 Pastour - Đà Nẵng<br/>
					VĂN PHÒNG GIAO DỊCH: 114 Pastour - Đà Nẵng<br/>
					PHONE: 04.6670.0808. EMAIL:percee@fashion.vn<br/>
					HOT LINE : 0975 308 321<br/>
					Mọi thắc mắc và khiếu nại vui lòng liên hệ : percee@fashion.vn<br/>
					LIÊN HỆ MỞ ĐẠI LÝ : 0975 308 321</p>
                    <br/>
           			
                
                     <form name="frmLienhe" action="" method="post">
						<table width="398" align="center">
        						<tr>
          							<td width="162">Họ và tên</td>
          							<td width="224"><label>
            						<input type="text" name="hoten" size="20" id="hoten" />
                                    <span style="color:#FF0000; display:none" id="label_hoten">Xin vui lòng nhập họ tên</span>
          							</label></td>
       							</tr>
								<tr>
          							<td>Email</td>
          							<td><label>
            						<input type="text" name="email" size="20" />
                                    <span style="color:#FF0000; display:none" id="label_email">Xin vui lòng nhập email</span>
          							</label></td>
        						</tr>
								<tr>
          							<td>Tiêu đề</td>
          							<td><label>
            						<input type="text" name="Tieude" id="Tieude" />
                                    <span style="color:#FF0000; display:none" id="label_tieude">Xin vui lòng nhập tiêu đề</span>
          							</label></td>
        						</tr>
                                <tr>
									<td>Thông điệp: </td>
									<td><textarea name="thongdiep" cols="22" rows="5"></textarea></td>
								</tr>
								<tr>
									<td width="80" align="right" valign="top"></td>
									<td>
										<input type="button" value="Gửi" onclick="kiemtra()" />
										<input type="reset" value="Hủy" />											
									</td>
								</tr>
						</table>
					</form>
               </div>
             
          		<div class="diachi">
                	 <p style="font-weight:bold;">Địa chỉ</p>
                	
                    <img src="images/diachi.JPG" width="755" height="575" alt="" />
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
