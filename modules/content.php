  	<div class="content">
  		<div class="container">
        	<div class="content_left">
            	<?php
					include('modules/left/list.php');
				?>
            </div>
        <div class="content_right">
            <?php
				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$tam= $_GET['quanly'];
				}else{
					$tam ='';
				}if($tam == 'chitietsp'){
					include('modules/right/chitietsp.php');
				}else if($tam == 'loaisp'){
					include('modules/right/loaisp.php');
				}else if($tam == 'dathang'){
					include('modules/right/dathang.php');
				}else if($tam == 'dangkymoi'){
					include('modules/right/dangkymoi.php');
				}else if($tam == 'dangnhap'){
					include('modules/right/dangnhap.php');
				}else if($tam == 'xulygiohang'){
					include('modules/right/xulygiohang.php');
				}else if($tam == 'camon'){
					include('modules/right/camon.php');
				}else if($tam == 'hieusp'){
					include('modules/right/hieusp.php');
				}else{
					include('modules/right/spmoi.php');
				}
			?>
        </div>
	</div>
        <div class="clear"></div>