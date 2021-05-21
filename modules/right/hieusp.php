<?php
	$sql_loaisp="select * from product_admin where producer='$_GET[id]'";
	$num_loaisp=mysqli_query($conn, $sql_loaisp);
	$count=mysqli_num_rows($num_loaisp);
?>
<?php
	$sql_tenloaisp="select producer_name from producer where producer_id='$_GET[id]' ";
	$row=mysqli_query($conn, $sql_tenloaisp);
	$dong=mysqli_fetch_array($row);
?>
	<div class="tieude"><?php echo $dong['producer_name'] ?></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_loaisp=mysqli_fetch_array($num_loaisp)){
						?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_loaisp['producttype'] ?>&id=<?php echo $dong_loaisp['productid'] ?>">
                       
                        	<img src="<?php echo $dong_loaisp['image'] ?>" width="150" height="150" />
                            <p><?php echo $dong_loaisp['productname'] ?></p>
                            <p><?php echo number_format($dong_loaisp['price']) ?></p>
                            
                        	<p>Details</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>