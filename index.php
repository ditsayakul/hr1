<?php
session_start();
include(''.dirname(dirname(__FILE__)).'/hrm/conf/setdb.php');
if (!isset($_SESSION['username']))
{
      header("Location: app/page_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SSI Recruitment Center</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
                <meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
                <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="css/style_v2.css" rel="stylesheet">
		<link href="plugins/chartist/chartist.min.css" rel="stylesheet">
                <link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css' rel='stylesheet' type='text/css'>
                
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-4">
                            <a href="app/page_login.php"><img src="img/hr-logo.png" /> 
                            <span style="color: red;font-weight: bold;">SSI</span>
                            <span style="color: #666666;font-weight: bold;">Recruitment</span>
                            </a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-8">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div>
						</div>
					</div>
                                    
					<div class="col-xs-4 col-sm-8 top-panel-right">
                                                
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
							</li>
							<li class="hidden-xs">
							</li>
							<li class="hidden-xs">
							</li>
							<li class="dropdown">
                                                            
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
<!--									<div class="avatar">
										<?php /*if($user != NULL){ */?>
                                                                                    <img src="img/blank.jpg" class="img-circle" alt="avatar" />
                                                                                <?php //} ?>
									</div>-->
									
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<?php if(!isset($_SESSION['username'])){ ?>
<!--										<span><?php //$user ?></span>-->
										<?php }else{ ?>
											<span>
											<?php echo $_SESSION['username']; ?>
											</span>
										<?php } ?>
									</div>
								</a>
								<ul class="dropdown-menu">
                                                                        <li>
                                                                            <i class="fa">&nbsp;</i>
                                                                            <span style="color: #9C9A78;">Logged in as 
                                                                                <?php if(!isset($_SESSION['username'])){ ?>
										<?php }else{ ?>
											<span>
											<?php echo $_SESSION['username']; ?>
											</span>
										<?php } ?>
                                                                            </span>
									</li>
                                                                        <li>
										<a href="ajax/page_changepassword.html">
											<i class="fa fa-key"></i>
											<span>Change Password: เปลี่ยนรหัสผ่าน</span>
										</a>
									</li>
									<li>
										<a href="app/page_logout.php">
											<i class="fa fa-power-off"></i>
											<span>Logout: ออกจากระบบ</span>
										</a>
									</li>
								</ul>
                                                            
							</li>
						</ul>
                                            
					</div>
                                    
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
<!--                                <li>
                                        <a class="ajax-link" href="ajax/page_login.html" title="Member Login">
                                                <i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Member Login</span>
					</a>
					<ul class="dropdown-menu">
						
					</ul>
					
				</li>-->
<!--                                <li>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="clearfix">&nbsp;</div>
				</li>-->
                                <li>
                                        <a class="ajax-link" href="app/welcome.php" title="Welcome">
                                                <i class="fa fa-bar-chart-o"></i>
						<span class="hidden-xs">Welcome</span>
					</a>
					<ul class="dropdown-menu">
						
					</ul>
					
				</li>
				<li class="dropdown">
					<a class="ajax-link" href="app/page_register.php" title="Register">
						<i class="fa fa-key"></i>
						<span class="hidden-xs">Register</span>
					</a>
					<ul class="dropdown-menu">
						
					</ul>
				</li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">
						<i class="fa fa-info-circle"></i>
						<span class="hidden-xs">Personal Information</span>
					</a>
<!--					<a class="ajax-link" id="page_personal" href="app/page_personal_step1.php" title="Personal Information">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Personal Information</span>
					</a>-->
					<ul class="dropdown-menu">
                                            <li><a class="ajax-link" id="page_personal1" href="app/page_personal_step1.php">ข้อมูลส่วนตัว</a></li>
                                            <li><a class="ajax-link" id="page_personal2" href="app/page_personal_step2.php">ที่อยู่</a></li>
					</ul>
				</li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">
						<i class="fa fa-graduation-cap"></i>
						<span class="hidden-xs">Education Background</span>
					</a>
<!--					<a class="ajax-link" id="page_personal" href="app/page_personal_step1.php" title="Personal Information">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Personal Information</span>
					</a>-->
					<ul class="dropdown-menu">
                                            <li><a class="ajax-link" id="page_education" href="app/page_education.php">ประวัติการศึกษา</a></li>
                                            <li><a class="ajax-link" id="page_education2" href="app/page_education_step2.php">ความสามารถทางด้านภาษา</a></li>
					</ul>
				</li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">
						<i class="fa fa-laptop"></i>
						<span class="hidden-xs">Working Experience</span>
					</a>
<!--					<a class="ajax-link" id="page_personal" href="app/page_personal_step1.php" title="Personal Information">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Personal Information</span>
					</a>-->
					<ul class="dropdown-menu">
                                            <li><a class="ajax-link" id="page_education" href="app/page_working_exp.php">ประวัติการทำงาน</a></li>
                                        </ul>
				</li>
                                <li class="dropdown">
                                        <a class="ajax-link" href="app/page_fileupload.php" title="Attachment">
						<i class="fa fa-book"></i>
						 <span class="hidden-xs">Attachment</span>
					</a>
					<ul class="dropdown-menu">
                                            
					</ul>
				</li>
				<li class="dropdown">
                                        <a class="ajax-link" href="ajax/page_searchjob.html" title="Search Job">
						<i class="fa fa-search"></i>
						 <span class="hidden-xs">Search Job</span>
					</a>
					<ul class="dropdown-menu">
                                            
					</ul>
				</li>
<!--                                <li class="dropdown">
					<a class="ajax-link" href="ajax/page_contactus.html" title="Contact Us">
						<i class="fa fa-map-marker"></i>
						 <span class="hidden-xs">Contact Us</span>
					</a>
					<ul class="dropdown-menu">
                                            
					</ul>
				</li>-->
				
			</ul>
                    
		</div>
		<!--Start Content-->
                 
                <div id="content" class="col-xs-12 col-sm-10">
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>

<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
</body>
</html>
