<?php
	@session_start();
	include('admincp/modules/config.php');
		$cus_id=$_SESSION['customer_id'];	
		$insert_cart="insert into cart (customer_id) value ('".$cus_id."')";
		$ketqua=mysqli_query($conn, $insert_cart);
		if($ketqua){
			for($i=0;$i<count($_SESSION['product']);$i++){
			$max=mysqli_query($conn, "select max(id) from cart");
			$row=mysqli_fetch_array($max);
			
			$cart_id=$row[0];
			$product_id=$_SESSION['product'][$i]['id'];
			var_dump($product_id);
			$quantity=$_SESSION['product'][$i]['soluong'];
			var_dump($quantity);
			$price=$_SESSION['product'][$i]['gia'];
			var_dump($price);
			 $insert_cart_detail="insert into cart_detail (cart_id,product_id,order_amount,total_product_price) values('".$cart_id."','".$product_id."','".$quantity."','".$price."');";
			 $cart_detail=mysqli_query($conn, $insert_cart_detail);

		}
		
	}	
		unset($_SESSION['product']);
		
		header('location:shoppage.php?quanly=camon');
	
?>