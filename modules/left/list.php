<?php
	$sql_loai="select * from producttype order by product_type_id asc";
	$row_loai=mysqli_query($conn, $sql_loai);
?>
<div class="box_list">
            <div class="tieude">
            	<p>Electrical appliances</p>
            </div>
            	<ul class="list">
                <?php
				while($dong_loai=mysqli_fetch_array($row_loai)){
				?>
                	<li><a href="shoppage.php?quanly=loaisp&id=<?php echo $dong_loai['type'] ?>"><?php echo $dong_loai['type_name'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box loai mat hang -->
               <?php
	$sql_hieu="select * from producer order by producer_id asc";
	$row_hieu=mysqli_query($conn, $sql_hieu);
?>
                <div class="box_list">
            <div class="tieude">
            	<p>Producer</p>
            </div>
            	<ul class="list">
                <?php
				while($dong_hieu=mysqli_fetch_array($row_hieu)){
				?>
                	<li><a href="shoppage.php?quanly=hieusp&id=<?php echo $dong_hieu['producer_id'] ?>"><?php echo $dong_hieu['producer_name'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box thuong hieu -->
                 <div class="box_list">
                 
                   <div class="tieude">
            	<p>Top selling</p>
            		</div>
                    <?php
					$sql_topselling=mysqli_query($conn, "select * from product_admin order by productid asc limit 5");
					?>
            	<ul class="hangbanchay">	
                <?php
				while($dong_banchay=mysqli_fetch_array($sql_topselling)){
				?>
                	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['producttype'] ?>&id=<?php echo $dong_banchay['productid'] ?>&productorder=<?php echo $dong_banchay['productorder'] ?>">
                    	<img src="<?php echo $dong_banchay['image'] ?>" width="150" height="150" style="padding-top: 10px"/>
                    	<p style="padding-top:15px"><?php echo $dong_banchay['productname'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['price']).' '.'VND' ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box hang ban chay -->
                 <div class="box_list">
                 <?php
				 	$sql=mysqli_query($conn, "select * from news");
					
				 ?>
                   <div class="tieude">
            	<p>Product news</p>
            		</div>
            	<ul class="tintucsp">	
                <?php
				while($dong_tin=mysqli_fetch_array($sql)){
				?>
                	<li><a href="#">
                    	<p style="float:left;"><img src="admincp/modules/quanlytintuc/uploads/<?php echo $dong_tin['news_image'] ?>" width="40" height="30" /></p>
                        <p style="overflow:hidden;padding-left:5px;"><?php echo $dong_tin['news_title'] ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box tin tức -->