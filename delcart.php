<?php  
	session_start() ;
	$cart=$_SESSION['cart'];
	$id=$_GET['item'];

	foreach ($_SESSION['cart'] as $masp=> $soluong){
		if ($id == $masp){
			unset($_SESSION['cart'][$id]);
		}
	}

// Đếm sản phẩm
	$kiemtra=1;
	$dem=0;
	if(isset($_SESSION['cart']))
	{
		foreach($_SESSION['cart'] as $masp=>$soluong)
		{
			$dem+=$soluong;
			if(isset($masp))
			{
				   $kiemtra=2;
			}
		}
	}
	if ($kiemtra != 2)
	{
		$_SESSION['dem'] =0;
	}
	else
	{
			$_SESSION['dem'] =$dem;

	} 

	header("location:showgh.php");
	exit();
?>