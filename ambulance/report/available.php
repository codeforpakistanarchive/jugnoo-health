<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Dreamworks - Responsive admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
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
<script type="text/javascript" src="./js/cl_editor/jquery.cleditor.min.js"> </script>
<script type="text/javascript" src="./uploadify/swfobject.js"></script>
<script type="text/javascript" src="./uploadify/jquery.uploadify.v2.1.4.min.js"></script>
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
<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="./js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./js/highlight.js"></script>
<script type="text/javascript" src="./js/main.js"> </script>
<meta charset="UTF-8"></head>
<body>
<!--Header-->
<header>
    <!--Logo-->
    <div id="logo"><a href="#"><img src="./images/logo.png" alt="" /></a></div>
    <!--Search-->
    <div class="header_search">
        <form action="">
            <input type="text" name="search" placeholder="Search" id="ac">
            <input type="submit" value="">
        </form>
    </div>
</header>
<!--Dreamworks Container-->
<div id="dreamworks_container">
    <!--Primary Navigation-->
    <nav id="primary_nav">
        <ul>
				<li class="nav_dashboard "><a href="index.php">Dashboard</a>
				</li>
				<li class="nav_dashboard active"><a href="available.php">Ambulance Availability</a>
				</li>
        </ul>
    </nav>
<!--Main Content-->
<section id="main_content">
<!--Secondary Navigation-->
<nav id="secondary_nav"> 
<!--UserInfo-->
<dl class="user_info">
	<dt><a href="#"><img src="./images/avatar.png" alt="" /></a></dt>
    <dd>
    <a class="welcome_user" href="#">Welcome,<strong>John Doe</strong></a>
    <span class="log_data">Last sign in : 16:11 Feb 27th 2012</span>
    <a class="logout" href="./login.html">Logout</a>
    <a class="user_messages" href="#"><span>12</span></a>
    </dd>
</dl>
<h2>Dashboard</h2>
<ul>
	<li><a href="#"><span class="iconsweet">a</span>Ambulance Status</a></li>

</ul>
</nav>
<!--Content Wrap-->
<div id="content_wrap">	<!--Activity Stats-->

	<!--One_Wrap-->
 	<div class="one_wrap">
    	<div class="widget">
        	<div class="widget_title"><span class="iconsweet">H</span><h5>Projects</h5></div>
            <div class="widget_body">
            	<div class="project_sort">
                	<ul class="filter_project">
                    	<li class="segment  selected"><a class="all" href="#">All <span class="count">200</span></a></li>
                        <li class="segment"><a class="incomplete" href="#">Available<span class="count">70</span></a></li>
                        <li class="segment"><a class="Resolved" href="#">Busy<span class="count">130</span></a></li>
                     </ul>
                     <ul class="project_list">
                        
                        <li data-id="id-8" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Aman <br />
                                54
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>XyZ [02302310]
                            </a>                        
                        </li> 
                        <li data-id="id-7" data-type="incomplete">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Cheepa <br />
                                150
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>XyZ [02302310]
                            </a>                        
                        </li>  
                        <li data-id="id-8" data-type="Resolved">
                        	<span class="project_badge blue iconsweet">
                            (
                            </span>
                            <a href="#" class="project_title">
                            	Edhi <br />
								200
                            </a>
                            <a href="#" class="assigned_user">
                            	<span class="iconsweet">a</span>XyZ [02302310]
                            </a>                        
                        </li>                                                                 
                                                                                        
                     </ul>
                </div>
            </div>
        </div>
    </div>     
	<!--One_Wrap-->
 	        
</div>
</section>
</div>

</body>
</html>