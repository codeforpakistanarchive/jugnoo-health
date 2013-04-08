<?php 

require_once '../DB.php';

$db = new DB();

$db->connectDB();
$query="select count(*) from ambulance where attended=0";
$newRequests=$db->executeQuery($query);
$newRequests=$newRequests[0]['count(*)'];
$query="select count(*) from ambulance ";
$total=$db->executeQuery($query);
//var_dump($total[0]['count(*)']);
$total=$total[0]['count(*)'];
//var_dump($total);
$query="select * from ambulance";
$records=$db->executeQuery($query);
//var_dump($records);
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport"
	content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Jugnoo</title>
<link rel="shortcut icon" type="image/x-icon"
	href="./images/favicon.ico">
<!--Stylesheets-->
<link rel="stylesheet" href="./css/reset.css" />
<link rel="stylesheet" href="./css/main.css" />
<link rel="stylesheet" href="./css/typography.css" />
<link rel="stylesheet" href="./css/tipsy.css" />
<link rel="stylesheet" href="./js/cl_editor/jquery.cleditor.css" />
<link rel="stylesheet" href="./uploadify/uploadify.css" />
<link rel="stylesheet" href="./css/jquery.ui.all.css" />
<link rel="stylesheet" href="./css/fullcalendar.css" />
<link rel="stylesheet" href="./css/bootstrap.css" />
<link rel="stylesheet" href="./js/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" href="./css/highlight.css" />
<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
<!--Javascript-->
<script type="text/javascript" src="./js/jquery.min.js"> </script>
<script type="text/javascript" src="./js/highcharts.js"> </script>
<script type="text/javascript" src="./js/exporting.js"> </script>
<script type="text/javascript" src="./js/jquery.quicksand.js"> </script>
<script type="text/javascript" src="./js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="./js/jquery.tipsy.js"> </script>
<script type="text/javascript"
	src="./js/cl_editor/jquery.cleditor.min.js"> </script>
<script type="text/javascript" src="./uploadify/swfobject.js"></script>
<script type="text/javascript"
	src="./uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript" src="./js/jquery.autogrowtextarea.js"></script>
<script type="text/javascript" src="./js/form_elements.js"></script>
<script type="text/javascript" src="./js/jquery.ui.core.js"></script>
<script type="text/javascript" src="./js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="./js/jquery.ui.mouse.js"></script>
<script type="text/javascript" src="./js/jquery.ui.slider.js"></script>
<script type="text/javascript" src="./js/jquery.ui.progressbar.js"></script>
<script type="text/javascript" src="./js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="./js/jquery.ui.tabs.js"></script>
<script type="text/javascript" src="./js/fullcalendar.js"></script>
<script type="text/javascript" src="./js/gcal.js"></script>
<script type="text/javascript" src="./js/bootstrap-modal.js"></script>
<script type="text/javascript"
	src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript"
	src="./js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./js/highlight.js"></script>
<script type="text/javascript" src="./js/main.js"> </script>
<meta charset="UTF-8">
</head>
<body>
	<!--Header-->
	<header>
		<!--Logo-->
		<div id="logo">
			<a href="#"><img src="./images/logo.png" alt="" /> </a>
		</div>
		<!--Search-->
		<div class="header_search">
			<form action="">
				<input type="text" name="search" placeholder="Search" id="ac"> <input
					type="submit" value="">
			</form>
		</div>
	</header>
	<!--Dreamworks Container-->
	<div id="dreamworks_container">
		<!--Primary Navigation-->
		<nav id="primary_nav">
			<ul>
				<li class="nav_dashboard active"><a href="#">Dashboard</a>
				</li>
				<li class="nav_dashboard "><a href="available.php">Ambulance Availability</a>
				</li>
			</ul>
		</nav>
		<!--Main Content-->
		<section id="main_content">
			<!--Secondary Navigation-->
			<nav id="secondary_nav">
				<!--UserInfo-->
				<dl class="user_info">
					<dt>
						<a href="#"><img src="./images/avatar.png" alt="" /> </a>
					</dt>
					<dd>
						<a class="welcome_user" href="#">Welcome,<strong>John Doe</strong>
						</a> <span class="log_data">Last sign in : 16:11 Feb 27th 2012</span>
						<a class="logout" href="./login.html">Logout</a> <a
							class="user_messages" href="#"><span>12</span> </a>
					</dd>
				</dl>
				<h2>Dashboard</h2>
				<ul>
					<li><a href="#"><span class="iconsweet">a</span>Ambulance Requests</a>
					</li>

				</ul>
			</nav>
			<!--Content Wrap-->
			<div id="content_wrap">
				<!--Activity Stats-->
				<div id="activity_stats">
					<h3>Activity</h3>
					<div class="activity_column">
						<span class="iconsweet">+</span> <span class="big_txt rd_txt"><?php echo $newRequests?>
						</span>New
					</div>
					<div class="activity_column">
						<span class="iconsweet">Y</span> <span class="big_txt gr_txt"><?php echo $total-$newRequests?>
						</span>Attended
					</div>
					<div class="activity_column">
						<span class="iconsweet">#</span> <span class="big_txt"><?php echo $total?>
						</span>total
					</div>
				</div>


				<!--One_TWO-->

				<!--One_TWO-->


				<!--One_Wrap-->
				<div class="one_wrap">
					<div class="widget">
						<div class="widget_title">
							<span class="iconsweet">f</span>
							<h5>Requests From Users</h5>
						</div>
						<div class="widget_body">
							<!--Activity Table-->
							<table class="activity_datatable" width="100%" border="0"
								cellspacing="0" cellpadding="8">
								<tr>
									<th width="8%">ID</th>
									<th width="15%">Location</th>
									<th width="12%">Unconcious</th>
									<th width="12%">Breathing</th>
									<th width="20%">Phone Number</th>
									<th width="20%">Ambulance Suggested</th>
									<th width="13%">Actions</th>
								</tr>
								<?php 
								 
								foreach($records as $record)
								{
									?>
								<tr>
									<td><?php echo $record['id']?></td>
									<td><span class="green_highlight pj_cat"><?php echo $record['location']?></span></td>
									<td><?php echo $record['unconcious']?></td>
									<td><?php echo $record['breathing']?></span>
									</span></td>
									<td><?php echo $record['phonenumber']?></td>
									<td><?php if($record['unconcious']!="" && $record['unconcious']=="no")
													echo "Edhi";
												else
													echo "Aman";
										?></td>
									<td><span class="data_actions iconsweet"><a class="tip_north"
											original-title="User" href="#">a</a> <a class="tip_north"
											original-title="Edit" href="#">C</a> <a class="tip_north"
											original-title="Delete" href="#">X</a> </span></td>
								</tr>
								<?php 
                    }?>
							</table>
							<div class="action_bar">
								<a class="button_small whitishBtn" href="#"><span
									class="iconsweet">l</span>Export Table</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</body>
</html>
