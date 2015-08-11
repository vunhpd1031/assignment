<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
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
	<link rel="stylesheet" type="text/css" href="css/chinhsach.css" />
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
       	 
			<div class="login">
				<h1 style="color:red">ĐĂNG NHẬP</h1>
				<form action="admin_Xuly_Login.php" method="POST">
					<p><input type="text" name="TenDN" value="" placeholder="Tài khoản"></p>
					<p><input type="password" name="PassDN" value="" placeholder="Mật khẩu"></p>
					<p class="remember_me">
				<label>
					<input type="checkbox" name="remember_me" id="remember_me">
					Ghi nhớ tài khoản!
				</label>
			</p>
				<?php
					if(empty($_SESSION['valid'])==False){
						echo $_SESSION['valid'];
						$_SESSION['valid']= "";
					}
				?>
        <input class="button" type="submit" name="OK" value="Đăng nhập">
        
      </form>
   

   
			
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
