<?php
	if(isset($_POST['gui'])){
		$ctname=$_POST['hoten'];
		$email=$_POST['email'];
		$address=$_POST['diachi'];
		$pass=$_POST['pass'];
		$phone=$_POST['dienthoai'];
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
    $customer_id=$randomString;
      
		$sql_dangky=mysqli_query($conn, "insert into register (customer_name,email,password,phone_number,address,customer_id) value('$ctname','$email','$pass','$phone','$address','$customer_id')");
		    
	if($sql_dangky){
		echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Sign Up Success</p>';
		echo '<button class="button-submit">
            <a href="?quanly=dangnhap" style="margin:auto;text-decoration:none; color: white; ">Login Now</a>
          </button>';
	}
	}
?>
	

<div class="tieude">
	Register Page
</div>

<div class="dangky">
<div class="imgcontainer">
    <img src="./image/pencil-register.png" alt="Avatar" class="avatar">
  </div>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" style="border-collapse:collapse;">
  <tr>
    <td width="11%"><strong>Username : </strong></td>
    <td width="89%"><input type="text" name="hoten" size="50" placeholder="Enter Username" required></td>
  </tr>
  <tr>
    <td><strong>Email : </strong></td>
    <td width="60%"><input type="text" name="email" size="50" placeholder="Enter Email" required>
    <small style="margin: 12px; color: rgb(117, 117, 117);">Example: abc@gmail.com</small>
  </td>
  </tr>
  <tr>
    <td><strong>Password : </strong></td>
    <td width="60%"><input type="password" name="pass" size="50" placeholder="Enter Password" required>
    <small style="margin: 12px; color: rgb(117, 117, 117);">Password must be at least 8 characters</small>
  </td>
  </tr>
  <tr>
    <td><strong>Phone : </strong></strong></td>
     <td width="60%"><input type="text" name="dienthoai" size="50" placeholder="Enter Phone" required></td>
  </tr>
  <tr>
    <td><strong>Address : </strong></strong></td>
   <td width="60%"><input type="text" name="diachi" size="50" placeholder="Enter Address" required></td>
  </tr>
  <tr>
    <td colspan="2">
      <button class="button-submit" type="submit" name="dangnhap" value="Login" >Register</button>
    </td>
    </tr>
</table>
</form>
</div>
<div class="ghichu">
	<p><strong>Note : </strong></p>
	<textarea name="ghichu">
    
    </textarea>
    </div>

