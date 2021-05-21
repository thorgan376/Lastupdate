	<?php
	$sql_moinhat="select * from product_admin order by productid desc limit 0,6";
	$row_moinhat=mysqli_query($conn, $sql_moinhat);
	
?>
	<div class="tieude">Latest product</div>
                	<ul class="product">
                    <?php
					while($dong_moinhat=mysqli_fetch_array($row_moinhat)){
					?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_moinhat['producttype'] ?>&id=<?php echo $dong_moinhat['productid'] ?>">
                        	<img src="<?php echo $dong_moinhat['image'] ?>" width="150" height="150" />
                            <p style="color:black"><?php echo $dong_moinhat['productname'] ?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;">
							<?php echo number_format($dong_moinhat['price']).' '.'VND'?></p>
                        </a></li>
                      <?php
					}
					  ?>
                    </ul>
                 <div class="clear"></div>
                 
 <?php
 	$sql_loai=mysqli_query($conn, "select * from producttype ");
	
	while($dong_loai=mysqli_fetch_array($sql_loai)){
		
	echo '<div class="tieude">'.$dong_loai['type_name'].'</div>';
 	$sql_loaisp="select * from producttype inner join product_admin on product_admin.producttype=producttype.type where product_admin.producttype='".$dong_loai['type']."'";
	$row=mysqli_query($conn, $sql_loaisp);
	$count=mysqli_num_rows($row);
	if($count>0){
	?>
   
                 
         
                	<ul class="product">
                     <?php
			
			while($dong=mysqli_fetch_array($row)){
					
 				?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong['producttype'] ?>&id=<?php echo $dong['productid'] ?>">
                        	<img src="<?php echo $dong['image'] ?>" width="150" height="150" />
                            <p style="color:skyblue"><?php echo $dong['productname']?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong['price']).' '.'VND' ?></p>
                            
                        	
                        </a></li>
                        <?php
			}
	}else{
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
	}
			
			
						?>
                    </ul>
                     <div class="clear"></div>
                <?php
	
	
	}
	
	
				?>
          
            