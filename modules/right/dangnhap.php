<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql=mysqli_query($conn, "select * from register where email='$email' and password='$pass' limit 1");
		$count=mysqli_num_rows($sql);
		$customerid=mysqli_fetch_array($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			$_SESSION['customer_id']=$customerid['customer_id'];
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Login success.</p>';
			echo '<a href="shoppage.php?quanly=dathang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Wrong email or password</p>';
		}
	}
?>
<div class="tieude">
	Login Page
</div>

<div class="dangky">
<div class="imgcontainer">
    <img src="./image/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" style="border-collapse:collapse;">
  <tr>
    <td width="11%"><strong>Email : </strong></td>
    <td width="89%"><input type="text" name="email" size="60" placeholder="Enter Email" required>
	<small style="margin: 12px; color: rgb(117, 117, 117);">Example: abc@gmail.com</small></td>
  </tr>
    <td width="11%"><strong>Password : </strong></td>
   <td width="89%" height="40px"><input type="password" name="pass" size="60" placeholder="Enter Password" required>
   <small style="margin: 12px; color: rgb(117, 117, 117);">Password must be at least 8 characters</small></td>
  </tr>
  <tr>
    <td colspan="2">
		<button class="button-submit" type="submit" name="dangnhap" value="Login" >Login</button>
    </td>
    </tr>
</table>
</form>
 
</div>

	<h3><a href="?quanly=dangkymoi" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;;background:#F00;float:right;" >Don't have an account yet?  Sign Up Now</a></h3>

