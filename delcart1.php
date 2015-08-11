<?php  
	session_start() ;
	$mahd1=0;
	$mahd="";
	$tenkh=$_SESSION['namedn'];
	$ngayhd=date('Y/m/d');
	$tongtien =$_SESSION['tongtien'];
	$db = mysqli_connect("localhost","root","","db_vest");
	
	if (empty($_SESSION['namedn'])){
		header('Location:dangnhap.php');
	}else {
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
		
			$query="SELECT * FROM HoaDon";
			$check=mysqli_query($db, $query);
			if (mysqli_num_rows($check)==0){
				$mahd="HD001";
			}else {
				$mahd1=mysqli_num_rows($check) +1;
				$mahd='HD00'.$mahd1;
			}
			//Thêm vào HÓA ĐƠN
			$them="INSERT INTO HoaDon VALUES ('$mahd','$tenkh','$ngayhd','$tongtien','Đã Thanh Toán')";
			$check=mysqli_query($db,$them);
			// THÊM VÀO VÓA ĐƠN CHI TIẾT
			foreach($_SESSION['cart'] as $masp=>$soluong){
				 $item[]=$masp;
			}
			$str=implode("','",$item);
			$sql= "Select * From SanPham Where MaSP IN ('".$str."')";
			$query=mysqli_query($db,$sql);
			while($sanpham = mysqli_fetch_row($query)) 
			{
			echo	$masanp=$sanpham[0];
			echo	$sluong=$_SESSION['cart'][$sanpham[0]];
			echo	$thanhtien=$_SESSION['cart'][$sanpham[0]] * $sanpham[2];
				$them1="INSERT INTO chitiethoadon VALUES ('$mahd','$masanp','$sluong','$thanhtien')";
				$check1=mysqli_query($db,$them1);
			}
			//Xóa giỏ hàng
			unset($_SESSION['cart']);
			$_SESSION['dem']=0;
			header("location:index.php");
			exit();
		}else{
			header('Location:index.php');
			exit();
		}
		// 
	}
?>
