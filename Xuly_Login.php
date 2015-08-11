<?php
	$db = mysqli_connect("localhost","root","","db_vest");
	session_start();
	$_SESSION['valid']= "";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$user=$_POST['TenDN'];
		$pass=$_POST['PassDN'];
		$query="SELECT * FROM TaiKhoan WHERE TenTK='".$user."' AND PassTK='".$pass."'";
		$query1="SELECT * FROM TaiKhoan WHERE VaiTro=1 and TenTK='".$user."' AND PassTK='".$pass."'";
		$check=mysqli_query($db, $query);
		$check1=mysqli_query($db, $query1);
		if (empty($user) and empty($pass)) {
			$_SESSION['valid']= "Vui lòng điền thông tin.";
			header('Location:dangnhap.php');
		}else if (mysqli_num_rows($check)==0){
			$_SESSION['valid']= "Tên đăng nhập và mật khẩu không đúng";
			header('Location:dangnhap.php');
		}else{
			if (mysqli_num_rows($check1)==0){
				$_SESSION['valid']= "Bạn không phải là quản trị viên";
				header('Location:dangnhap.php');
			}else {
				$_SESSION['namedn']=$user;
				$_SESSION['passdn']=$pass;
				header('Location:index.php');
			}
		}
		
	}else{ header('location:dangnhap.php');}