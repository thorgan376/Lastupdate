<?php
	$sql="select * from product_admin where productid='$_GET[id]'";
	$num=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($num);
?>
	<div class="tieude">Product details</div>
   
                	<div class="box_chitietsp">
                    	<div class="box_hinhanh">
                        	<img src="<?php echo $dong['image'] ?>" data-zoom-image="imgs/op-lung-sony-z3-pelosi-50.jpg"  width="200" height="200" />
                            <?php
                            $sql_gallery=mysqli_query($conn, 'select * from gallery where id_sp="$_GET[id]" limit 3');							
							$row_gallery=mysqli_num_rows($sql_gallery);
							
							?>
                            <ul class="hinhanhphongto">
                           	<?php
							if($row_gallery>0){
								while($dong_gallery=mysqli_fetch_array($sql_gallery)){
							?>
                            	<li><img src="<?php echo $dong_gallery['image'] ?>" id="zoom_01" width="70" height="70" /></li>
                              <?php
								}
							}else{
								echo '<li><img src="'.$dong['image'].'" id="zoom_01"  width="70" height="70" /></li>';
							
							}
							  ?>
                            </ul>
                        </div>
                        <div class="box_info">
                         <form action="update_cart.php?id=<?php echo $dong['productid'] ?>" method="post" enctype="multipart/form-data">
                        	<p>
                            	<strong>Product name: <em style="color:red"><?php echo $dong['productname'] ?></em></strong></p>

                                           <p><strong>Price:</strong><span style="color:red;"> <?php echo number_format($dong['price']).' '.'VND'?></span></p> 
                                           <p style="text-decoration:underline;color:blue;"><strong>Status:</strong> Available </p> 
                                           <p><strong>Amount: </strong><input type="number" name="soluong" size="3" value="1" /></p>
                                           	<input type="submit" name="add_to_cart" value="ADD TO CART" 
											style="margin:10px;width:170px;height:40px;
													background:#34a853;color:#fff;
													font-size:18px;border-radius:9px; border: 1px solid #fff" />
                                             
                           </form>              
                                       
                           
                        </div><!-- Ket thuc box box_info -->
                    
                    </div><!-- Ket thuc box chitiet sp -->
     			
              		<div class="tabs_panel">
                    	<ul class="tabs">
                        	<li rel="panel1" class="active">Product infomation</li>
                            <li rel="panel2">Product images</li>
                            <li rel="panel3">Khách hàng đánh giá</li>
                        </ul>
                        <?php
					$sql_thongtinsp=mysqli_query($conn, "select * from product_admin where productid='$_GET[id]'");
					$count_thongtinsp=mysqli_num_rows($sql_thongtinsp);
					$sql_productorder=mysqli_query($conn, "select productorder from product_admin where productid='$_GET[id]'");
					$productorder=mysqli_fetch_array($sql_productorder);
					if($count_thongtinsp>0){
					$dong_thongtinsp=mysqli_fetch_array($sql_thongtinsp);
				?>
                        <div id="panel1" class="panel active">
							<?php
							$link='';
							if($_GET['idloaisp']=='a'){
								$link = 'http://localhost:83/fan.php?fanid=a';
							}else if($_GET['idloaisp']=='b'){
								$link = 'http://localhost:83/airconditioner.php?airconditionerid=b';
							}else if($_GET['idloaisp']=='c'){
								$link = 'http://localhost:83/lightbulb.php?lightbulbid=c';
							}else if($_GET['idloaisp']=='d'){
								$link = 'http://localhost:83/microwave.php?microwaveid=d';
							}else if($_GET['idloaisp']=='e'){
								$link = 'http://localhost:83/fridge.php?fridgeid=e';
							}
							?>
							<a href="<?php echo $link ?><?php echo $productorder['productorder'] ?>">click me</a>
                        
                        </div>
                   <?php
					}else{
						echo '<p style="padding:30px;">No information</p>';
					}
				   ?>
                          <div id="panel2" class="panel">
                             <?php
					$sql_hinhanhsp=mysqli_query($conn, "select * from gallery where id_sp='$_GET[id]'");
					$count=mysqli_num_rows($sql_hinhanhsp);
					if($count>0){
					while($dong_hinhanhsp=mysqli_fetch_array($sql_hinhanhsp)){
						
				?>
                        	<p style="text-align:center;"><img src="<?php echo $dong_hinhanhsp['image'] ?>" width="200"/></p>
                        <?php
					}
					}else{
						echo '<p>No image found</p>';
					}
						?>
                        </div>
                        
                          <div id="panel3" class="panel">
                        	<p>Good product</p>
                        
                        </div>
                    
                    </div>
                   <?php
				   	$sql_lienquan="select * from product_admin where producttype='$_GET[idloaisp]' and product_admin.productid<>$_GET[id] ";
					$row_lienquan=mysqli_query($conn,$sql_lienquan);
					$count_lienquan=mysqli_num_rows($row_lienquan);
					if($count_lienquan>0){
				   ?>
                    <div class="sanphamlienquan">
                   	<div class="tieude">Related products</div>
                    	<ul>
                        <?php
						
						while($dong_lienquan=mysqli_fetch_array($row_lienquan)){
						?>
                        		 <li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_lienquan['producttype'] ?>&id=<?php echo $dong_lienquan['productid'] ?>">
                        	<img src="<?php echo $dong_lienquan['image'] ?>" width="150" height="150" />
                            <p><?php echo $dong_lienquan['productname'] ?></p>
                            <p style="color:red;">Giá : <?php echo number_format($dong_lienquan['price']).' '.'VNĐ' ?></p>
                            
                        	
                        </a></li>
                        <?php
						}
					?>
                        </ul>
                    </div><!-- Ket thuc box sp liên quan -->
            <?php
					}else{
						echo'<div class="tieude">Sản phẩm liên quan</div>';
						echo '<p style="padding:30px;">Hiện chưa có thêm sản phẩm nào</p>';
					}
			?>
            <div class="clear"></div>
          
           