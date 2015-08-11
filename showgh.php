<?php  session_start() ;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giỏ hàng</title>
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
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/giohang.css" />
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
                         <li class='last'><a href='dangnhap.php'><span>ĐĂNG NHẬP</span></a></li>
                         <li class='last'><a href='lienhe.php'><span>LIÊN HỆ </span></a></li>
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
                <div class="chitiethang">
  			<h1 style="color:#000;">THÔNG TIN ĐƠN HÀNG</h1>
			<table width="100%" border="1" cellspacing="0" bordercolor="#FFF">
  			<tr bgcolor="#999999">
    			<td><p style=" font-weight:bold; text-align:center">TÊN SẢN PHẨM</p></td>
    			<td><p style=" font-weight:bold; text-align:center">SỐ LƯỢNG</p></td>
    			<td><p style=" font-weight:bold; text-align:center">THÀNH TIỀN</p></td>
    			<td><p style=" font-weight:bold; text-align:center">GHI CHÚ</p></td>
  			</tr>
			<?php
							$tongtien=0;
							//Duyệt qua mảng Giỏ
							$kiemtra=1;
							if(isset($_SESSION['cart']))
							{
								foreach($_SESSION['cart'] as $masp=>$soluong)
								{
									$_SESSION['sl']=$soluong;
									if(isset($masp))
									{
										   $kiemtra=2;
									}
								}
							}
							if ($kiemtra == 2)
							{	
									foreach($_SESSION['cart'] as $masp=>$soluong){
										 $item[]=$masp;
									}
									$str=implode("','",$item);
									$db = mysqli_connect("localhost","root","","db_vest");
									$sql= "Select * From SanPham Where MaSP IN ('".$str."')";
									$query=mysqli_query($db,$sql);
									while($sanpham = mysqli_fetch_row($query)) 
									{ echo '
											<tr>
												<td><img style="float:left" src="images/ao/'.$sanpham[3].'" width="200" height="250" />
												<h2>'.$sanpham[1].'</h2>
												<p>'.$sanpham[4].'</p>
												</td>
												<td align="center"> X '.$_SESSION['cart'][$sanpham[0]].'</td>
												<td align="center">'.number_format($_SESSION['cart'][$sanpham[0]] * $sanpham[2]).' vnđ </td>
												<td align="center" style="font-weight:bold"><p style="color:#F00"><a href="delcart.php?item='.$sanpham[0].'">Xóa sản phẩm</a></p></td>
											</tr>';
											$tongtien += $_SESSION['cart'][$sanpham[0]] * $sanpham[2];	
									}
									
									
							}else{
									echo '<tr><td style="text-align:center;padding:20px ;font-size:13pt;color:red">Chưa có sản phẩm nào trong Giỏ hàng.</td></tr>';
									$_SESSION['dem']=0;
								}				
  			?>
		</table>
       <?php echo '<p style="border-top:2px solid #c2c2c2;padding:5px;text-align:right;font-size:14pt">Tổng tiền : <em style="color:red">'.number_format($tongtien).'</em></p>'; 
	   $_SESSION['tongtien']=$tongtien;?>
        <a href="delcart1.php?item=0"><input style="color:red; float:right; margin:auto; font-size:14pt" type="button" value="Thanh toán ngay"></a><br/><br/>
        <br/>
        </div>
       
        <div id="footer">
        	<p style="text-align:center;">2014 Percée| All rights reserved.</p>
            <p style="text-align:center;">Trụ sở chính: 114 Pastour - DN/04.6670.0808</p>
            <p style="text-align:center;">Hotline: DN: 0975308321</p>
            <p style="text-align:center;">Email: percee@fashion.vn</p>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
