<?php
	if(isset($_SESSION['product'])){
		if(isset($_SESSION['dangnhap'])){
			echo '<div class="tieude">Cart Details | <span>Xin chào bạn:<strong><em> '.$_SESSION['dangnhap'].'</em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
		}else{
			echo '<div class="tieude">Cart Details | <span>You are not logged in</span></div>';
		}
			
			echo '<div class="box_giohang">';
			echo '  <table class="tablecss">';
			
			echo'  <tr>';
			echo'<th>Product name</th>';
			echo'<th>Image</th>';
			echo'<th>Price</th>';
			echo'<th>Amount</th>';
			echo'<th>Total price</th>';
			echo'<th>Cancel</th>';
			echo'</tr>';
	$thanhtien=0;
	foreach($_SESSION['product'] as $cart_item){
			$id=$cart_item['id'];
			$sql="select * from product_admin where productid='$id'";
			$row=mysqli_query($conn, $sql);
			$dong=mysqli_fetch_array($row);
		 	echo'<tr>';
			echo'<td>'.$dong['productname'].'</td>';
			echo'<td><img src="'.$dong['image'].'" width="150" height="150" /></td>';
			echo'<td>'.number_format($dong['price']).'</td>';
			
			echo'<td><a href="update_cart.php?cong='.$cart_item['id'].'" style="margin-right:2px;"><img src="imgs/plus.png" 
			width="20" height="20"></a>'.$cart_item['soluong'].'<a href="update_cart.php?tru='.$cart_item['id'].'" 
			style="margin-left:2px;"><img src="imgs/subtract.png" width="20" height="20"></a></td>';
			$tongtien=0;
			$tongtien=$cart_item['soluong']*$cart_item['gia'];
			$thanhtien=($thanhtien + $tongtien);
			echo'<td>'.number_format($tongtien).'</td>';
			echo'<td><a href="update_cart.php?xoa='.$cart_item['id'].'"><img src="imgs/deletered.png" width="30" height="30"></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
			
  	}
			echo '<tr>
	  			<td colspan="4"></td>
				<td colspan="1">Thành tiền : '.number_format($thanhtien).'VNĐ'.'</td>	
				</td>	
				<td colspan="1"><a href="update_cart.php?xoatoanbo=1"  style="text-decoration:none;" >Delete All</a>
				</tr>';
			
	}else{
		
		echo '<div class="imgcontainer">
				<img src="./image/empty-cart.png" alt="Avatar">
	  			</div>';
	}
	

 	echo'</table>';
	
	
  ?>
  
 

            <ul	class="control">
              <p><a href="shoppage.php">Continue Shopping</a></p>
                <p><a href="?quanly=dangkymoi">Register ( for new user )</a></p>
                <p><a href="?quanly=dangnhap">Login ( Already had an account )</a></p>
                <?php
				if(isset($_SESSION['dangnhap'])&&isset($_SESSION['product'])){
				?>
                 <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p>
				<?php
				}
				?>
        	</ul>
    
        </div>
