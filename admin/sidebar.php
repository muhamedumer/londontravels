<!--common sidebar menu for admin pages-->
<?php
$menuid=$_SESSION['menuid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    	<!-- =========== sidebar-left ============= -->
		<div class="sidebar-left">
			<div class="sidebar-topbar text-center">
				<i class="fa fa-plane"></i><span class="text">Admin</span>
			</div> <!-- End sidebar-topbar -->

			<div class="side-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item" id="dashboard-link">
                            <?php 
                            if($menuid==1){
                            ?>
                            <a href="adminhome.php" class="items-list first active">
                             <?php } else{ ?> <a href="adminhome.php" class="items-list first"> 
                                <?php } ?>
                                <span><i class="fa fa-home link-icon" data-toggle="tooltip" data-html="true"
                                        title="Dashboard"></i></span>
                                <span class="items-list-text">Dashboard</span>
                            </a>
                        </li>
						<li class="nav-item">
                        <?php 
                            if($menuid==2){
                            ?>
                            <a href="#package" class="items-list active" data-toggle="collapse" aria-expanded="false">
                            <?php } else{ ?>    
                            <a href="#package" class="items-list" data-toggle="collapse" aria-expanded="false">
                                <?php } ?>
                                <span><i class="fas fa-globe-africa" data-toggle="tooltip" data-html="true"
                                        title="Gallery"></i></span>
                                <span class="items-list-text">Tour Packages</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-menu" id="package">
                                <a class="items-list1" href="addpackg.php">Add Package</a>
                                <a class="items-list1" href="managepackg.php">Manage Package</a>
								<a class="items-list1" href="toppkg.php">Top Packages</a>
                            </div><!-- End sub-menu -->
                        </li>
                        <li class="nav-item">
                        <?php 
                            if($menuid==3){
                            ?>  
                        <a href="#gallery" class="items-list active" data-toggle="collapse" aria-expanded="false">
                        <?php } else{ ?>
                            <a href="#gallery" class="items-list" data-toggle="collapse" aria-expanded="false">
                                <?php } ?>
                                <span><i class="fas fa-image" data-toggle="tooltip" data-html="true"
                                        title="Gallery"></i></span>
                                <span class="items-list-text">Manage Gallery</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-menu" id="gallery">
                                <a class="items-list1" href="addpic.php">Picture Gallery</a>
                                <a class="items-list1" href="addvideo.php">Video gallery</a>
                            </div><!-- End sub-menu -->
                        </li>
                        <li class="nav-item">
                        <?php 
                            if($menuid==4){
                            ?>
                            <a href="highlightcount.php" class="items-list active">
                            <?php } else{ ?>
                            <a href="highlightcount.php" class="items-list">
                                <?php } ?>
                                <span><i class="fas fa-calculator" data-toggle="tooltip" data-html="true"
                                        title="Highlight Count"></i></span>
                                <span class="items-list-text">Highlight Count</span>
                            </a>
                        </li>
                        <li class="nav-item">
                        <?php 
                            if($menuid==5){
                            ?>
                        <a href="addnews.php" class="items-list active">
                        <?php } else{ ?>
                                <a href="addnews.php" class="items-list">
                                    <?php } ?>
                                    <span><i class="fas fa-newspaper" data-toggle="tooltip" data-html="true"
                                            title="Newsletter"></i></span>
                                    <span class="items-list-text">Add Newsletter</span>
                                </a>
                            </li>
                        <li class="nav-item">
                        <?php 
                            if($menuid==6){
                            ?>
                            <a href="serviceEdit.php" class="items-list active">
                            <?php } else{ ?>   
                            <a href="serviceEdit.php" class="items-list">
                                <?php } ?>
                                <span><i class="fas fa-pencil-alt" data-toggle="tooltip" data-html="true"
                                        title="Services"></i></span>
                                <span class="items-list-text">Edit Services</span>
                            </a>
                        </li>
						<li class="nav-item">
                            <?php
                            if($menuid==7)
                            {
                            ?>
                            <a href="#review" class="items-list active" data-toggle="collapse" aria-expanded="false">
                                <?php } 
                                else { ?>
                                <a href="#review" class="items-list" data-toggle="collapse" aria-expanded="false">
                                    <?php } ?>
                                <span><i class="fas fa-sync-alt" data-toggle="tooltip" data-html="true"
                                        title="Reviews"></i></span>
                                <span class="items-list-text">Reviews</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-menu" id="review">
                                <a class="items-list1" href="review.php">All Reviews</a>
                                <a class="items-list1" href="bestreview.php">Best Reviews</a>
                            </div><!-- End sub-menu -->
                        </li>
                        <li class="nav-item">
                            <?php
                            if($menuid==8)
                            {
                            ?>
                            <a href="#visa" class="items-list active" data-toggle="collapse" aria-expanded="false">
                                <?php } 
                                else { ?>
                                <a href="#visa" class="items-list" data-toggle="collapse" aria-expanded="false">
                                    <?php } ?>
                                <span><i class="fas fa-book" data-toggle="tooltip" data-html="true"
                                        title="Visa Services"></i></span>
                                <span class="items-list-text">Visa</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-menu" id="visa">
                                
                                <a class="items-list1" href="addvisacat.php">Add Category</a>
                                <a class="items-list1" href="addvisa.php">Add Visa details</a>
                            </div><!-- End sub-menu -->
                        </li>
                        <li class="nav-item">
                        <?php 
                            if($menuid==9){
                            ?>
                            <a href="message.php" class="items-list active">
                            <?php } else{ ?>   
                            <a href="message.php" class="items-list">
                                <?php } ?>
                                <span><i class="fas fa-inbox" data-toggle="tooltip" data-html="true"
                                        title="Messages"></i></span>
                                <span class="items-list-text">Messages</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- End side-menu -->
                <div class="side-bar-bottom">
                    <ul class="list-unstyled">
                   
                                <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Change Password"><a
                                    href="passwordchange.php"><i class="fas fa-key"></i></li>
                            
                            <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout"><a href="logout.php"><i
                                        class="fas fa-power-off"></i></a></li>
                    </ul>
                </div><!-- End side-bar-bottom -->
            </div><!-- End sidebar-left -->
</body>
</html>