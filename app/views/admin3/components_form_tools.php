<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.0
Version: 3.2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Form Tools</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/typeahead/typeahead.css">
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css">
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="../../assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="../../assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="../../assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html"><img src="../../assets/admin/layout3/img/logo-default.png" alt="logo" class="logo-default"></a>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-default">7</span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <strong>12 pending</strong> tasks</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">14 hrs</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">5 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">9 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_task_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-default">3</span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>You have <strong>12 pending</strong> tasks</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile app release</span>
										<span class="percent">98%</span>
										</span>
										<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Database migration</span>
										<span class="percent">10%</span>
										</span>
										<span class="progress">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile development</span>
										<span class="percent">85%</span>
										</span>
										<span class="progress">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="task">
										<span class="desc">New UI release</span>
										<span class="percent">38%</span>
										</span>
										<span class="progress progress-striped">
										<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
										</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<li class="droddown dropdown-separator">
						<span class="separator"></span>
					</li>
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-inbox" id="header_inbox_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="circle">3</span>
						<span class="corner"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <strong>7 New</strong> Messages</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="../../assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile">Nick</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="page_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
								<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="login.html">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.html">Dashboard</a>
					</li>
					<li class="menu-dropdown mega-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Features <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 710px">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-4">
											<ul class="mega-menu-submenu">
												<li>
													<h3>eCommerce</h3>
												</li>
												<li>
													<a href="ecommerce_index.html" class="iconify">
													<i class="icon-home"></i>
													eCommerce </a>
												</li>
												<li>
													<a href="ecommerce_orders.html" class="iconify">
													<i class="icon-basket"></i>
													Manage Orders </a>
												</li>
												<li>
													<a href="ecommerce_orders_view.html" class="iconify">
													<i class="icon-tag"></i>
													Order View </a>
												</li>
												<li>
													<a href="ecommerce_products.html" class="iconify">
													<i class="icon-handbag"></i>
													Manage Products </a>
												</li>
												<li>
													<a href="ecommerce_products_edit.html" class="iconify">
													<i class="icon-pencil"></i>
													Product Edit </a>
												</li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Layouts</h3>
												</li>
												<li>
													<a href="layout_fluid.html" class="iconify">
													<i class="icon-cursor-move"></i>
													Fluid Layout </a>
												</li>
												<li>
													<a href="layout_mega_menu_fixed.html" class="iconify">
													<i class="icon-pin"></i>
													Fixed Mega Menu </a>
												</li>
												<li>
													<a href="layout_top_bar_fixed.html" class="iconify">
													<i class="icon-bar-chart"></i>
													Fixed Top Bar </a>
												</li>
												<li>
													<a href="layout_light_header.html" class="iconify">
													<i class="icon-paper-plane"></i>
													Light Header Dropdowns </a>
												</li>
												<li>
													<a href="layout_blank_page.html" class="iconify">
													<i class="icon-doc"></i>
													Blank Page Layout </a>
												</li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="mega-menu-submenu">
												<li>
													<h3>More Layouts</h3>
												</li>
												<li>
													<a href="layout_click_dropdowns.html" class="iconify">
													<i class="icon-speech"></i>
													Click vs. Hover Dropdowns </a>
												</li>
												<li>
													<a href="layout_fontawesome_icons.html" class="iconify">
													<i class="icon-link"></i>
													Layout with Fontawesome </a>
												</li>
												<li>
													<a href="layout_glyphicons.html" class="iconify">
													<i class="icon-settings"></i>
													Layout with Glyphicon </a>
												</li>
												<li>
													<a href="layout_language_bar.html" class="iconify">
													<i class="icon-globe"></i>
													Language Switch Bar </a>
												</li>
												<li>
													<a href="layout_disabled_menu.html" class="iconify">
													<i class=" icon-lock"></i>
													Disabled Menu Links </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full active">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						UI Components <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>UI Components</h3>
												</li>
												<li>
													<a href="ui_general.html">
													<i class="fa fa-angle-right"></i>
													General </a>
												</li>
												<li>
													<a href="ui_buttons.html">
													<i class="fa fa-angle-right"></i>
													Buttons </a>
												</li>
												<li>
													<a href="ui_icons.html">
													<i class="fa fa-angle-right"></i>
													Font Icons </a>
												</li>
												<li>
													<a href="ui_colors.html">
													<i class="fa fa-angle-right"></i>
													Flat UI Colors </a>
												</li>
												<li>
													<a href="ui_typography.html">
													<i class="fa fa-angle-right"></i>
													Typography </a>
												</li>
												<li>
													<a href="ui_tabs_accordions_navs.html">
													<i class="fa fa-angle-right"></i>
													Tabs, Accordions & Navs </a>
												</li>
												<li>
													<a href="ui_tree.html">
													<i class="fa fa-angle-right"></i>
													Tree View </a>
												</li>
												<li>
													<a href="ui_page_progress_style_1.html">
													<i class="fa fa-angle-right"></i>
													Page Progress Bar <span class="badge badge-roundless badge-warning">new</span></a>
												</li>
												<li>
													<a href="ui_blockui.html">
													<i class="fa fa-angle-right"></i>
													Block UI </a>
												</li>
												<li>
													<a href="ui_notific8.html">
													<i class="fa fa-angle-right"></i>
													Notific8 Notifications </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>More UI Components</h3>
												</li>
												<li>
													<a href="ui_toastr.html">
													<i class="fa fa-angle-right"></i>
													Toastr Notifications </a>
												</li>
												<li>
													<a href="ui_alert_dialog_api.html">
													<i class="fa fa-angle-right"></i>
													Alerts & Dialogs API <span class="badge badge-roundless badge-danger">new</span></a>
												</li>
												<li>
													<a href="ui_session_timeout.html">
													<i class="fa fa-angle-right"></i>
													Session Timeout </a>
												</li>
												<li>
													<a href="ui_idle_timeout.html">
													<i class="fa fa-angle-right"></i>
													User Idle Timeout </a>
												</li>
												<li>
													<a href="ui_modals.html">
													<i class="fa fa-angle-right"></i>
													Modals </a>
												</li>
												<li>
													<a href="ui_extended_modals.html">
													<i class="fa fa-angle-right"></i>
													Extended Modals </a>
												</li>
												<li>
													<a href="ui_tiles.html">
													<i class="fa fa-angle-right"></i>
													Tiles </a>
												</li>
												<li>
													<a href="ui_datepaginator.html">
													<i class="fa fa-angle-right"></i>
													Date Paginator </a>
												</li>
												<li>
													<a href="ui_nestable.html">
													<i class="fa fa-angle-right"></i>
													Nestable List </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Form Stuff</h3>
												</li>
												<li>
													<a href="form_controls.html">
													<i class="fa fa-angle-right"></i>
													Form Controls </a>
												</li>
												<li>
													<a href="form_icheck.html">
													<i class="fa fa-angle-right"></i>
													iCheck Controls </a>
												</li>
												<li>
													<a href="form_layouts.html">
													<i class="fa fa-angle-right"></i>
													Form Layouts </a>
												</li>
												<li>
													<a href="form_editable.html">
													<i class="fa fa-angle-right"></i>
													Form X-editable <span class="badge badge-roundless badge-success">new</span></a>
												</li>
												<li>
													<a href="form_wizard.html">
													<i class="fa fa-angle-right"></i>
													Form Wizard </a>
												</li>
												<li>
													<a href="form_validation.html">
													<i class="fa fa-angle-right"></i>
													Form Validation </a>
												</li>
												<li>
													<a href="form_image_crop.html">
													<i class="fa fa-angle-right"></i>
													Image Cropping </a>
												</li>
												<li>
													<a href="form_fileupload.html">
													<i class="fa fa-angle-right"></i>
													Multiple File Upload </a>
												</li>
												<li>
													<a href="form_dropzone.html">
													<i class="fa fa-angle-right"></i>
													Dropzone File Upload </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Form Components</h3>
												</li>
												<li>
													<a href="components_pickers.html">
													<i class="fa fa-angle-right"></i>
													Pickers </a>
												</li>
												<li>
													<a href="components_dropdowns.html">
													<i class="fa fa-angle-right"></i>
													Custom Dropdowns </a>
												</li>
												<li class="active">
													<a href="components_form_tools.html">
													<i class="fa fa-angle-right"></i>
													Form Tools </a>
												</li>
												<li>
													<a href="components_editors.html">
													<i class="fa fa-angle-right"></i>
													Markdown & WYSIWYG Editors </a>
												</li>
												<li>
													<a href="components_ion_sliders.html">
													<i class="fa fa-angle-right"></i>
													Ion Range Sliders </a>
												</li>
												<li>
													<a href="components_noui_sliders.html">
													<i class="fa fa-angle-right"></i>
													NoUI Range Sliders </a>
												</li>
												<li>
													<a href="components_jqueryui_sliders.html">
													<i class="fa fa-angle-right"></i>
													jQuery UI Sliders </a>
												</li>
												<li>
													<a href="components_knob_dials.html">
													<i class="fa fa-angle-right"></i>
													Knob Circle Dials </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown classic-menu-dropdown ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Extra <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-briefcase"></i>
								Data Tables </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="table_basic.html">
										Basic Datatables </a>
									</li>
									<li class=" ">
										<a href="table_responsive.html">
										Responsive Datatables </a>
									</li>
									<li class=" ">
										<a href="table_managed.html">
										Managed Datatables </a>
									</li>
									<li class=" ">
										<a href="table_editable.html">
										Editable Datatables </a>
									</li>
									<li class=" ">
										<a href="table_advanced.html">
										Advanced Datatables </a>
									</li>
									<li class=" ">
										<a href="table_ajax.html">
										Ajax Datatables </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-wallet"></i>
								Portlets </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="portlet_general.html">
										General Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_general2.html">
										New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_general3.html">
										New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_ajax.html">
										Ajax Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_draggable.html">
										Draggable Portlets </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-bar-chart"></i>
								Charts </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="charts_amcharts.html">
										Amchart </a>
									</li>
									<li class=" ">
										<a href="charts_flotcharts.html">
										Flotchart </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-pointer"></i>
								Maps </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="maps_google.html">
										Google Maps </a>
									</li>
									<li class=" ">
										<a href="maps_vector.html">
										Vector Maps </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-puzzle"></i>
								Multi Level </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-settings"></i>
										Item 1 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-user"></i>
										Item 2 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-globe"></i>
										Item 3 </a>
									</li>
									<li class=" dropdown-submenu">
										<a href="#">
										<i class="icon-folder"></i>
										Sub Items </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="javascript:;">
												Item 1 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 2 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 3 </a>
											</li>
											<li class=" ">
												<a href="javascript:;">
												Item 4 </a>
											</li>
										</ul>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-share"></i>
										Item 4 </a>
									</li>
									<li class=" ">
										<a href="javascript:;">
										<i class="icon-bar-chart"></i>
										Item 5 </a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Pages <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>User Pages</h3>
												</li>
												<li>
													<a href="page_todo.html">
													<i class="fa fa-angle-right"></i>
													Todo & Tasks <span class="badge badge-danger">4</span></a>
												</li>
												<li>
													<a href="extra_profile.html">
													<i class="fa fa-angle-right"></i>
													User Profile <span class="badge badge-success badge-roundless">new</span></a>
												</li>
												<li>
													<a href="inbox.html">
													<i class="fa fa-angle-right"></i>
													User Inbox <span class="badge badge-success">4</span></a>
												</li>
												<li>
													<a href="page_calendar.html">
													<i class="fa fa-angle-right"></i>
													User Calendar <span class="badge badge-warning">14</span></a>
												</li>
												<li>
													<a href="login.html">
													<i class="fa fa-angle-right"></i>
													Login Form 1 </a>
												</li>
												<li>
													<a href="login_2.html">
													<i class="fa fa-angle-right"></i>
													Login Form 2 </a>
												</li>
												<li>
													<a href="login_3.html">
													<i class="fa fa-angle-right"></i>
													Login Form 3 </a>
												</li>
												<li>
													<a href="login_soft.html">
													<i class="fa fa-angle-right"></i>
													Login Form 4 </a>
												</li>
												<li>
													<a href="extra_lock.html">
													<i class="fa fa-angle-right"></i>
													Lock Screen 1 </a>
												</li>
												<li>
													<a href="extra_lock2.html">
													<i class="fa fa-angle-right"></i>
													Lock Screen 2 </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>General Pages</h3>
												</li>
												<li>
													<a href="extra_faq.html">
													<i class="fa fa-angle-right"></i>
													FAQ Page </a>
												</li>
												<li>
													<a href="page_portfolio.html">
													<i class="fa fa-angle-right"></i>
													Portfolio </a>
												</li>
												<li>
													<a href="page_timeline.html">
													<i class="fa fa-angle-right"></i>
													Timeline <span class="badge badge-info">4</span></a>
												</li>
												<li>
													<a href="page_coming_soon.html">
													<i class="fa fa-angle-right"></i>
													Coming Soon </a>
												</li>
												<li>
													<a href="extra_invoice.html">
													<i class="fa fa-angle-right"></i>
													Invoice </a>
												</li>
												<li>
													<a href="page_blog.html">
													<i class="fa fa-angle-right"></i>
													Blog </a>
												</li>
												<li>
													<a href="page_blog_item.html">
													<i class="fa fa-angle-right"></i>
													Blog Post </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Custom Pages</h3>
												</li>
												<li>
													<a href="page_news.html">
													<i class="fa fa-angle-right"></i>
													News <span class="badge badge-success">9</span></a>
												</li>
												<li>
													<a href="page_news_item.html">
													<i class="fa fa-angle-right"></i>
													News View </a>
												</li>
												<li>
													<a href="page_about.html">
													<i class="fa fa-angle-right"></i>
													About Us </a>
												</li>
												<li>
													<a href="page_contact.html">
													<i class="fa fa-angle-right"></i>
													Contact Us </a>
												</li>
												<li>
													<a href="extra_search.html">
													<i class="fa fa-angle-right"></i>
													Search Results </a>
												</li>
												<li>
													<a href="extra_pricing_table.html">
													<i class="fa fa-angle-right"></i>
													Pricing Tables </a>
												</li>
											</ul>
										</div>
										<div class="col-md-3">
											<ul class="mega-menu-submenu">
												<li>
													<h3>Miscellaneous</h3>
												</li>
												<li>
													<a href="extra_404_option1.html">
													<i class="fa fa-angle-right"></i>
													404 Page Option 1 </a>
												</li>
												<li>
													<a href="extra_404_option2.html">
													<i class="fa fa-angle-right"></i>
													404 Page Option 2 </a>
												</li>
												<li>
													<a href="extra_404_option3.html">
													<i class="fa fa-angle-right"></i>
													404 Page Option 3 </a>
												</li>
												<li>
													<a href="extra_500_option1.html">
													<i class="fa fa-angle-right"></i>
													500 Page Option 1 </a>
												</li>
												<li>
													<a href="extra_500_option2.html">
													<i class="fa fa-angle-right"></i>
													500 Page Option 2 </a>
												</li>
												<li>
													<a href="email_newsletter.html">
													<i class="fa fa-angle-right"></i>
													Newsletter Email Template </a>
												</li>
												<li>
													<a href="email_system.html">
													<i class="fa fa-angle-right"></i>
													System Email Template </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li class="menu-dropdown">
						<a href="angularjs" target="_blank" class="tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="AngularJS version demo">
						AngularJS Version </a>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Form Tools <small>input spinner, switches, input masks and more</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<!-- BEGIN THEME PANEL -->
	<div class="btn-group btn-theme-panel">
                    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-settings"></i>
                    </a>
                    <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <h3>THEME COLORS</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <ul class="theme-colors">
                                            <li class="theme-color theme-color-default" data-theme="default">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Default</span>
                                            </li>
                                            <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Blue Hoki</span>
                                            </li>
                                            <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Blue Steel</span>
                                            </li>
                                            <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Orange</span>
                                            </li>
                                            <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Yellow Crusta</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <ul class="theme-colors">
                                            <li class="theme-color theme-color-green-haze" data-theme="green-haze">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Green Haze</span>
                                            </li>
                                            <li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Red Sunglo</span>
                                            </li>
                                            <li class="theme-color theme-color-red-intense" data-theme="red-intense">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Red Intense</span>
                                            </li>
                                            <li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Purple Plum</span>
                                            </li>
                                            <li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Purple Studio</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                                <h3>LAYOUT</h3>
                                <ul class="theme-settings">
                                    <li>
                                        Theme Style
                                        <select class="theme-setting theme-setting-style form-control input-sm input-small input-inline tooltips" data-original-title="Change theme style" data-container="body" data-placement="left">
                                            <option value="boxed" selected="selected">Square corners</option>
                                            <option value="rounded">Rounded corners</option>
                                        </select>
                                    </li>
                                    <li>
                                         Layout
                                        <select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
                                            <option value="boxed" selected="selected">Boxed</option>
                                            <option value="fluid">Fluid</option>
                                        </select>
                                    </li>
                                    <li>
                                         Top Menu Style
                                        <select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body" data-placement="left">
                                            <option value="dark" selected="selected">Dark</option>
                                            <option value="light">Light</option>
                                        </select>
                                    </li>
                                    <li>
                                         Top Menu Mode
                                        <select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
                                            <option value="fixed">Fixed</option>
                                            <option value="not-fixed" selected="selected">Not Fixed</option>
                                        </select>
                                    </li>
                                    <li>
                                         Mega Menu Style
                                        <select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body" data-placement="left">
                                            <option value="dark" selected="selected">Dark</option>
                                            <option value="light">Light</option>
                                        </select>
                                    </li>
                                    <li>
                                         Mega Menu Mode
                                        <select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body" data-placement="left">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="not-fixed">Not Fixed</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
	<!-- END THEME PANEL -->
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="components_form_tools.html">UI Components</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Form Tools
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Twitter Auto Complete(typeahead.js)</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form action="javascript:;" id="form-username" class="form-horizontal form-bordered">
								<div class="form-group">
									<label class="col-sm-3 control-label">Basic Auto Complete</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-user"></i>
											</span>
											<input type="text" id="typeahead_example_1" name="typeahead_example_1" class="form-control"/>
										</div>
										<p class="help-block">
											 E.g: metronic, keenthemes.<br>
											<span class="label label-success label-sm">
											Learn more: </span>
											<a target="_blank" href="http://twitter.github.io/typeahead.js/">
											http://twitter.github.io/typeahead.js/ </a>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Country Auto Complete</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-search"></i>
											</span>
											<input type="text" id="typeahead_example_2" name="typeahead_example_2" class="form-control"/>
										</div>
										<p class="help-block">
											 E.g: USA, Malaysia. Prefetch from JSON source</code>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Custom Template</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-cogs"></i>
											</span>
											<input type="text" id="typeahead_example_3" name="typeahead_example_3" class="form-control"/>
										</div>
										<p class="help-block">
											 Uses a precompiled template to customize look of suggestion.</code>
										</p>
									</div>
								</div>
								<div class="form-group ">
									<label class="col-sm-3 control-label">Multiple Sections with Headers</label>
									<div class="col-sm-4">
										<div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-check"></i>
											</span>
											<input type="text" id="typeahead_example_4" name="typeahead_example_4" class="form-control"/>
										</div>
										<p class="help-block">
											 Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
										</p>
									</div>
								</div>
								<div class="form-group last">
									<label class="control-label col-md-3">Modal</label>
									<div class="col-md-4">
										<a href="#myModal_autocomplete" role="button" class="btn red" data-toggle="modal">
										View in Modal </a>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<div id="myModal_autocomplete" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Radio Switch in Modal</h4>
										</div>
										<div class="modal-body form">
											<form action="javascript:;" class="form-horizontal form-row-seperated">
												<div class="form-group">
													<label class="col-sm-4 control-label">Basic Auto Complete</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-user"></i>
															</span>
															<input type="text" id="typeahead_example_modal_1" name="typeahead_example_modal_1" class="form-control"/>
														</div>
														<p class="help-block">
															 E.g: metronic, keenthemes.<br>
															<span class="label label-success label-sm">
															Learn more: </span>
															<a target="_blank" href="http://twitter.github.io/typeahead.js/">
															http://twitter.github.io/typeahead.js/ </a>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Country Auto Complete</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-search"></i>
															</span>
															<input type="text" id="typeahead_example_modal_2" name="typeahead_example_modal_2" class="form-control"/>
														</div>
														<p class="help-block">
															 E.g: USA, Malaysia. Prefetch from JSON source</code>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4 control-label">Custom Template</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-cogs"></i>
															</span>
															<input type="text" id="typeahead_example_modal_3" name="typeahead_example_modal_3" class="form-control"/>
														</div>
														<p class="help-block">
															 Uses a precompiled template to customize look of suggestion.</code>
														</p>
													</div>
												</div>
												<div class="form-group last">
													<label class="col-sm-4 control-label">Multiple Sections with Headers</label>
													<div class="col-sm-8">
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-check"></i>
															</span>
															<input type="text" id="typeahead_example_modal_4" name="typeahead_example_modal_4" class="form-control"/>
														</div>
														<p class="help-block">
															 Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
														</p>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Form Tools</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" id="form-username" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Google reCaptcha</label>
										<div class="col-md-9">
											<!-- BEGIN REPCAPTCHA -->
											<div id="recaptcha_widget" class="form-recaptcha">
												<div class="form-recaptcha-img" style="width: 325px">
													<a id="recaptcha_image" href="javascript:;">
													</a>
													<div class="recaptcha_only_if_incorrect_sol display-none" style="color:red">
														 Incorrect please try again
													</div>
												</div>
												<div class="input-group" style="width: 325px">
													<input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field">
													<div class="input-group-btn">
														<a class="btn default" href="javascript:Recaptcha.reload()">
														<i class="fa fa-refresh"></i>
														</a>
														<a class="btn default recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')">
														<i title="Get an audio CAPTCHA" class="fa fa-headphones"></i>
														</a>
														<a class="btn default recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')">
														<i title="Get an image CAPTCHA" class="fa fa-picture-o"></i>
														</a>
														<a class="btn default" href="javascript:Recaptcha.showhelp()">
														<i class="fa fa-question-circle"></i>
														</a>
													</div>
												</div>
												<p class="help-block">
													<span class="recaptcha_only_if_image">
													Enter the words above </span>
													<span class="recaptcha_only_if_audio">
													Enter the numbers you hear </span>
												</p>
											</div>
											<!-- END REPCAPTCHA -->
											<p class="help-block">
												<span class="label label-sm label-danger">
												Note: </span>
												Please visit <a href="http://www.google.com/recaptcha" target="_blank">
												http://www.google.com/recaptcha </a>
												to learn more about the Google reCaptcha
											</p>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Username #1</label>
										<div class="col-md-4">
											<div class="input-group" style="text-align:left">
												<input type="text" class="form-control" name="username1" id="username1_input">
												<span class="input-group-btn">
												<a href="javascript:;" class="btn green" id="username1_checker">
												<i class="fa fa-check"></i> Check </a>
												</span>
											</div>
											<div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability.
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Username #2</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<input type="text" class="form-control" name="username1" id="username2_input">
											</div>
											<div class="help-block">
												 Type a username(E.g: user1, user2) and check its availability on focus lost
											</div>
										</div>
									</div>
									<div class="form-group last password-strength">
										<label class="control-label col-md-3">Password</label>
										<div class="col-md-4">
											<input type="text" class="form-control" name="password" id="password_strength">
											<span class="help-block">
											Type a password to check its strength </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Bootstrap Input MaxLength</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Default usage</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_defaultconfig">
											<span class="help-block">
											Maxlength is 25 chars. The badge will show up by default when the remaining chars are 10 or less. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Change the threshold value</label>
										<div class="col-md-4">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_thresholdconfig">
											<span class="help-block">
											Maxlength is 25 chars. Do you want the badge to show up when there are 20 chars or less? Use the threshold option: <code>threshold: 20</code>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Advance usage</label>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_alloptions">
											<span class="help-block">
											This is a complete example where all the options configured for the bootstrap-maxlength counter are setted. Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Textarea</label>
										<div class="col-md-9">
											<textarea id="maxlength_textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
											<span class="help-block">
											Bootstrap maxlength supports textarea as well as inputs. Even on old IE. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Position</label>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_placement">
											<span class="help-block">
											The field counter can be positioned at the top, bottom, left or right. You can also place the maxlength indicator on the corners: <code>bottom-right</code>, <code>top-right</code>, <code>top-left</code>, <code>bottom-left</code> and <code>centered-right</code>. All you need to do is specify the <code>placement</code> option, with one of those strings. </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Spinners</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 1</label>
										<div class="col-md-9">
											<div id="spinner1">
												<div class="input-group input-small">
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn btn-group-vertical">
														<button type="button" class="btn spinner-up btn-xs blue">
														<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn spinner-down btn-xs blue">
														<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											basic example </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 2</label>
										<div class="col-md-9">
											<div id="spinner2">
												<div class="input-group input-small">
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn btn-group-vertical">
														<button type="button" class="btn spinner-up btn-xs red">
														<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn spinner-down btn-xs red">
														<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											disabled state </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 3</label>
										<div class="col-md-9">
											<div id="spinner3">
												<div class="input-group" style="width:150px;">
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn spinner-up default">
														<i class="fa fa-angle-up"></i>
														</button>
														<button type="button" class="btn spinner-down default">
														<i class="fa fa-angle-down"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											with max value: 10 </span>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">Spinner 4</label>
										<div class="col-md-9">
											<div id="spinner4">
												<div class="input-group" style="width:150px;">
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn spinner-up blue">
														<i class="fa fa-plus"></i>
														</button>
													</div>
													<input type="text" class="spinner-input form-control" maxlength="3" readonly>
													<div class="spinner-buttons input-group-btn">
														<button type="button" class="btn spinner-down red">
														<i class="fa fa-minus"></i>
														</button>
													</div>
												</div>
											</div>
											<span class="help-block">
											with step: 5 </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Bootstrap Switch</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Default Sizes</label>
										<div class="col-md-9">
											<input type="checkbox" checked class="make-switch" data-size="small">
											<input type="checkbox" checked class="make-switch" data-size="normal">
											<input type="checkbox" checked class="make-switch" data-size="large">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Colors</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
											<input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success">
											<input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
											<input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
											<input type="checkbox" class="make-switch" checked data-on-color="danger" data-off-color="default">
											<input type="checkbox" class="make-switch" checked data-on-color="default" data-off-color="primary">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Disabled / Readonly</label>
										<div class="col-md-9">
											<input type="checkbox" checked disabled class="make-switch"/>
											<input type="checkbox" checked readonly class="make-switch"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" data-on-text="Yes" data-off-text="No">
											<input type="checkbox" class="make-switch" data-on-text="1" data-off-text="0">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Long Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" data-on-text="&nbsp;External&nbsp;" data-off-text="&nbsp;Internal&nbsp;">
											<input type="checkbox" class="make-switch" data-on-text="&nbsp;Enabled&nbsp;&nbsp;" data-off-text="&nbsp;Disabled&nbsp;">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Label Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" checked data-on-text="TV">
											<input type="checkbox" class="make-switch" checked data-off-text="Signal">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">HTML Text</label>
										<div class="col-md-9">
											<input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-user'></i>" data-off-text="<i class='fa fa-trash-o'></i>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">HTML Text Label Icon</label>
										<div class="col-md-9">
											<input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-youtube" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Radio Group</label>
										<div class="col-md-9">
											<div class="margin-bottom-10">
												<label for="option1">Option 1</label>
												<input id="option1" type="radio" name="radio1" value="option1" class="make-switch switch-radio1">
											</div>
											<div class="margin-bottom-10">
												<label for="option2">Option 2</label>
												<input id="option2" type="radio" name="radio1" value="option2" class="make-switch switch-radio1">
											</div>
											<div class="margin-bottom-10">
												<label for="option3">Option 3</label>
												<input id="option3" type="radio" name="radio1" value="option3" class="make-switch switch-radio1">
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">Modal</label>
										<div class="col-md-9">
											<a href="#myModal" role="button" class="btn red" data-toggle="modal">
											View in Modal </a>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Bootstrap switches</h4>
										</div>
										<div class="modal-body">
											<form action="javascript:;" class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-md-3">Default Sizes</label>
													<div class="col-md-9">
														<input type="checkbox" checked class="make-switch" data-size="small">
														<input type="checkbox" checked class="make-switch" data-size="normal">
														<input type="checkbox" checked class="make-switch" data-size="large">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Colors</label>
													<div class="col-md-9">
														<input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
														<input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
														<input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
													</div>
												</div>
												<div class="form-group last">
													<label class="control-label col-md-3">Disabled / Readonly</label>
													<div class="col-md-9">
														<input type="checkbox" checked disabled class="make-switch"/>
														<input type="checkbox" checked readonly class="make-switch"/>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary"><i class="fa fa-check"></i> Save changes</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Bootstrap TouchSpin</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 1</label>
										<div class="col-md-9">
											<div class="input-inline input-medium">
												<input id="touchspin_demo1" type="text" value="55" name="demo1" class="form-control">
											</div>
											<span class="help-block">
											basic example </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Spinner 2</label>
										<div class="col-md-9">
											<div class="input-inline input-medium">
												<input id="touchspin_demo2" type="text" value="55" name="demo1" class="form-control">
											</div>
											<span class="help-block">
											example with decimal steps </span>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
												<button type="button" class="btn default">Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">IP Address Input</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-row-seperated">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">IPV4</label>
										<div class="col-md-4">
											<input class="form-control" id="input_ipv4" type="text"/>
											<span class="help-block">
											192.168.120.150 </span>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">IPV6</label>
										<div class="col-md-4">
											<input class="form-control" id="input_ipv6" type="text"/>
											<span class="help-block">
											3ffe:1900:4545:3:200:f8ff:fe21:67cf </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Input Masks</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Date 1</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date" type="text"/>
											<span class="help-block">
											y/m/d </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date 2</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date1" type="text"/>
											<span class="help-block">
											change the placeholder </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date 3</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date2" type="text"/>
											<span class="help-block">
											multi-char placeholder </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Phone</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_phone" type="text"/>
											<span class="help-block">
											(999) 999-9999 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Tax ID</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_tin" type="text"/>
											<span class="help-block">
											99-9999999 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Number</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_number" type="text"/>
											<span class="help-block">
											mask "9" or mask "99" or ... mask "9999999999" </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Currency</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_currency" type="text"/>
											<span class="help-block">
											123456 => € ___.__1.234,56 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Currency 2</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_currency2" type="text"/>
											<span class="help-block">
											123456 => € ___.__1.234,56(left aligned) </span>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">SSN</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_ssn" type="text"/>
											<span class="help-block">
											999-99-9999. remove the empty mask on blur or when not empty removes the optional trailing part </span>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Tags Input</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body ">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-md-3">Default</label>
									<div class="col-md-9">
										<input id="tags_1" type="text" class="form-control tags" value="foo,bar,baz,roffle"/>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3">Fixed Width</label>
									<div class="col-md-6">
										<input id="tags_2" type="text" class="form-control tags medium" value="tag1,tag2"/>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">Advanced File Input</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">Default</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group input-large">
													<div class="form-control uneditable-input span3" data-trigger="fileinput">
														<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
														</span>
													</div>
													<span class="input-group-addon btn default btn-file">
													<span class="fileinput-new">
													Select file </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
													<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Without input</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<span class="btn default btn-file">
												<span class="fileinput-new">
												Select file </span>
												<span class="fileinput-exists">
												Change </span>
												<input type="file" name="...">
												</span>
												<span class="fileinput-filename">
												</span>
												&nbsp; <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput">
												</a>
											</div>
										</div>
									</div>
									<div class="form-group ">
										<label class="control-label col-md-3">Image Upload #1</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger">
												NOTE! </span>
												Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">Image Upload #2</label>
										<div class="col-md-9">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
													<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
												</div>
												<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
												</div>
												<div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
													<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
													Remove </a>
												</div>
											</div>
											<div class="clearfix margin-top-10">
												<span class="label label-danger">
												NOTE! </span>
												Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXTRAS PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">CKEditor Editor</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="javascript:;" class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group last">
										<label class="control-label col-md-3">CKEditor</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" name="editor1" rows="6"></textarea>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END EXTRAS PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>About</h2>
				<p>
					 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore.
				</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs12 footer-block">
				<h2>Subscribe Email</h2>
				<div class="subscribe-form">
					<form action="javascript:;">
						<div class="input-group">
							<input type="text" placeholder="mail@email.com" class="form-control">
							<span class="input-group-btn">
							<button class="btn" type="submit">Submit</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>Follow Us On</h2>
				<ul class="social-icons">
					<li>
						<a href="javascript:;" data-original-title="rss" class="rss"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="facebook" class="facebook"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="twitter" class="twitter"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="youtube" class="youtube"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>Contacts</h2>
				<address class="margin-bottom-40">
				Phone: 800 123 3456<br>
				 Email: <a href="mailto:info@metronic.com">info@metronic.com</a>
				</address>
			</div>
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="container">
		 2014 &copy; Metronic. All Rights Reserved.
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="../../assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/global/plugins/ckeditor/ckeditor.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/components-form-tools.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           ComponentsFormTools.init();
        });   
    </script>
<!-- BEGIN GOOGLE RECAPTCHA -->
<script type="text/javascript">
        var RecaptchaOptions = {
           theme : 'custom',
           custom_theme_widget: 'recaptcha_widget'
        };
    </script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
<!-- END GOOGLE RECAPTCHA -->
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>