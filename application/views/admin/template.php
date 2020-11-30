<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin of Doctor Calibration - <?php echo ucwords($activemenu); ?> </title>
  <meta name="description" content="" />
  <meta property="author" content=""/>
  <meta name="keywords" content=""/>
  <meta name="robots" content="INDEX, FOLLOW"/>
  <link rel="icon" href="<?=base_url();?>public/img/favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?=base_url();?>public/img/favicon.png" type="image/x-icon"/>
  <meta name="author" content="Doctor Calibration">




	<!-- Data table CSS -->
	<link href="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables/media/css/fixedHeader.dataTables.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables/media/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="<?=base_url();?>public/admin_assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Preloader-->
	<div class="preloader-it"  >
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
  <a href="#" id="scroll" style="display: none;"><span></span></a>
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="nav-wrap">
				<div class="mobile-only-brand pull-left">
					<div class="nav-header pull-left">
						<div class="logo-wrap">
							<a href="<?=base_url();?>admin/welcome">
								<img class="brand-img" src="<?=base_url();?>public/img/logo.png" alt="brand"/>
								<span class="brand-text"><img  src="<?=base_url();?>public/img/logo.png" alt="brand" class="full-width"/></span>
							</a>
						</div>
					</div>
          <?php if($this->session->userdata('is_logged_in')){  ?>
					<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>



					<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>

          <?php }  ?>
				</div>
        <?php if($this->session->userdata('is_logged_in')){  ?>
				<div id="mobile_only_nav" class="mobile-only-nav pull-right">
					<ul class="nav navbar-right top-nav pull-right">




						<li class="dropdown auth-drp">
							<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                <div class="empimg">
                <img src="<?php echo ($this->session->userdata('EmpImage'))? base_url(). $this->session->userdata('EmpImage'): base_url('public/img/user.png');?>" alt="user_auth" class="user-auth-img "/>
                </div>
                <span class="user-online-status"></span><span class="user-auth-name inline-block"><?php echo $this->session->userdata('User');?> <span class="ti-angle-down"></span></span></a>
							<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">


                <!-- <li>
									<a href="<?=base_url();?>MenuSwitcher/switchType/salesasset" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-star-circle zmd-fw text-success"></i> Sales Asset</a>
								</li> -->


								<li class="divider"></li>

								<li>
									<a href="<?=base_url("admin/logout");?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
        <?php }  ?>
				</div>
			</nav>
			<!-- /Top Menu Items -->
      <?php if($this->session->userdata('is_logged_in')){ ?>
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Menu</span>
						<hr/>
					</li>
          <?php if($this->session->userdata('bitAdmin')==1){ ?>
          <li>
            <a class="<?php echo ($activemenu=="user")? "active":""; ?>" href="/admin/users" data-toggle="collapse" data-target="#"><div class="pull-left"><i class="ti-id-badge mr-10"></i><span class="right-nav-text">User</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
          </li>
          <?php }  ?>
          <li>
            <a class="<?php echo ($activemenu=="newsupdate")? "active":""; ?>" href="/admin/newsupdate" data-toggle="collapse" data-target="#"><div class="pull-left"><i class="ti-desktop mr-10"></i><span class="right-nav-text">News & Activities</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
          </li>
          <li>
            <a class="<?php echo ($activemenu=="product")? "active":""; ?>" href="/admin/product" data-toggle="collapse" data-target="#"><div class="pull-left"><i class="ti-package mr-10"></i><span class="right-nav-text">Product</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
          </li>
          <li>
            <a class="<?php echo ($activemenu=="promotion")? "active":""; ?>" href="/admin/promotion" data-toggle="collapse" data-target="#"><div class="pull-left"><i class="ti-package mr-10"></i><span class="right-nav-text">Promotion</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
          </li>


          <li>
            <a class="<?php echo ($activemenu=="Logout")? "active":""; ?>" href="/admin/logout" data-toggle="collapse" data-target="#pages_dr9"><div class="pull-left"><i class="ti-unlock mr-10"></i><span class="right-nav-text">Logout</span></div><div class="pull-right"><i class="ti-angle-down "></i></div><div class="clearfix"></div></a>
          </li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->





<?php } ?>



			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<div class="add-friend">
												<a href="javascript:void(0)" class="inline-block txt-grey">
													<i class="zmdi zmdi-more"></i>
												</a>
												<span class="inline-block txt-dark">users</span>
												<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
												<div class="clearfix"></div>
											</div>
											<form role="search" class="chat-search pl-15 pr-15 pb-15">
												<div class="input-group">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
													</span>
												</div>
											</form>
											<div id="chat_list_scroll">
												<div class="nicescroll-bar">
													<ul class="chat-list-wrap">
														<li class="chat-list">
															<div class="chat-body">
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Clay Masse</span>
																			<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user1.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Evie Ono</span>
																			<span class="time block truncate txt-grey">Unity is strength</span>
																		</div>
																		<div class="status offline"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user2.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Madalyn Rascon</span>
																			<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Mitsuko Heid</span>
																			<span class="time block truncate txt-grey">I’m thankful.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Ezequiel Merideth</span>
																			<span class="time block truncate txt-grey">Patience is bitter.</span>
																		</div>
																		<div class="status offline"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user1.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Jonnie Metoyer</span>
																			<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user2.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Angelic Lauver</span>
																			<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user3.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Priscila Shy</span>
																			<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																		</div>
																		<div class="status online"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
																<a href="javascript:void(0)">
																	<div class="chat-data">
																		<img class="user-img img-circle"  src="<?=base_url();?>public/admin_assets/img/user4.png" alt="user"/>
																		<div class="user-data">
																			<span class="name block capitalize-font">Linda Stack</span>
																			<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																		</div>
																		<div class="status away"></div>
																		<div class="clearfix"></div>
																	</div>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="recent-chat-wrap">
												<div class="panel-heading ma-0">
													<div class="goto-back">
														<a  id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
															<i class="zmdi zmdi-chevron-left"></i>
														</a>
														<span class="inline-block txt-dark">ryan</span>
														<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
														<div class="clearfix"></div>
													</div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body pa-0">
														<div class="chat-content">
															<ul class="nicescroll-bar pt-20">
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="<?=base_url();?>public/admin_assets/img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:30 PM</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self mb-10">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right">  How about you?
																			<div class="msg-per-detail text-right">
																				<span class="msg-time txt-light">2:31 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="<?=base_url();?>public/admin_assets/img/user.png" alt="user"/>
																		<div class="msg pull-left">
																			<p>Not too bad.</p>
																			<div class="msg-per-detail  text-right">
																				<span class="msg-time txt-light">2:35 pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="input-group">
															<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
															<div class="input-group-btn emojis">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-mood"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>
															<div class="input-group-btn attachment">
																<div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="messages_tab" class="tab-pane fade" role="tabpanel">
									<div class="message-box-wrap">
										<div class="msg-search">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>
											<span class="inline-block txt-dark">messages</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="set-height-wrap">
											<div class="streamline message-box nicescroll-bar">
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
															<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user1.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
															<span class="inline-block font-11  pull-right message-time">1 Feb</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Pogody theme support</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user2.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
															<span class="inline-block font-11  pull-right message-time">31 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Congratulations from design nominees</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user3.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
															<span class="inline-block font-11  pull-right message-time">29 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Themeforest item support message</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item unread-message">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user4.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
															<span class="inline-block font-11  pull-right message-time">27 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Help with beavis contact form</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
															<span class="inline-block font-11  pull-right message-time">19 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject">Your uploaded theme is been selected</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
												<a href="javascript:void(0)">
													<div class="sl-item">
														<div class="sl-avatar avatar avatar-sm avatar-circle">
															<img class="img-responsive img-circle" src="<?=base_url();?>public/admin_assets/img/user1.png" alt="avatar"/>
														</div>
														<div class="sl-content">
															<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
															<span class="inline-block font-11  pull-right message-time">13 Jan</span>
															<div class="clearfix"></div>
															<span class=" truncate message-subject"> A new rating has been received</span>
															<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
									<div class="todo-box-wrap">
										<div class="add-todo">
											<a href="javascript:void(0)" class="inline-block txt-grey">
												<i class="zmdi zmdi-more"></i>
											</a>
											<span class="inline-block txt-dark">todo list</span>
											<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
											<div class="clearfix"></div>
										</div>
										<div class="set-height-wrap">
											<!-- Todo-List -->
											<ul class="todo-list nicescroll-bar">
												<li class="todo-item">
													<div class="checkbox checkbox-default">
														<input type="checkbox" id="checkbox01"/>
														<label for="checkbox01">Record The First Episode</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-pink">
														<input type="checkbox" id="checkbox02"/>
														<label for="checkbox02">Prepare The Conference Schedule</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-warning">
														<input type="checkbox" id="checkbox03" checked/>
														<label for="checkbox03">Decide The Live Discussion Time</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-success">
														<input type="checkbox" id="checkbox04" checked/>
														<label for="checkbox04">Prepare For The Next Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-danger">
														<input type="checkbox" id="checkbox05" checked/>
														<label for="checkbox05">Finish Up AngularJs Tutorial</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
												<li class="todo-item">
													<div class="checkbox checkbox-purple">
														<input type="checkbox" id="checkbox06" checked/>
														<label for="checkbox06">Finish Infinity Project</label>
													</div>
												</li>
												<li>
													<hr class="light-grey-hr"/>
												</li>
											</ul>
											<!-- /Todo-List -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /Right Sidebar Menu -->

			<!-- Right Setting Menu -->
			<div class="setting-panel">
				<ul class="right-sidebar nicescroll-bar pa-0">
					<li class="layout-switcher-wrap">
						<ul>
							<li>
								<span class="layout-title">Scrollable header</span>
								<span class="layout-switcher">
									<input type="checkbox" id="switch_3" class="js-switch"  data-color="ff6028" data-secondary-color="#dedede" data-size="small"/>
								</span>
								<h6 class="mt-30 mb-15">Sidebar colors</h6>
								<ul class="theme-option-wrap">
									<li id="theme-1"><i class="zmdi zmdi-check"></i></li>
									<li id="theme-2" class="active-theme"><i class="zmdi zmdi-check"></i></li>
								</ul>
								<h6 class="mt-30 mb-15">Topbar colors</h6>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-blue" value="navbar-top-blue">
									<label class="capitalize-font" for="navbar-top-blue"> blue </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-skyblue" value="navbar-top-skyblue">
									<label class="capitalize-font" for="navbar-top-skyblue"> skyblue </label>
								</div>

								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-purple" value="navbar-top-purple">
									<label class="capitalize-font" for="navbar-top-purple"> purple </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-pink" value="navbar-top-pink">
									<label class="capitalize-font" for="navbar-top-pink"> pink </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-red" value="navbar-top-red">
									<label class="capitalize-font" for="navbar-top-red"> red </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-yellow" value="navbar-top-yellow">
									<label class="capitalize-font" for="navbar-top-yellow"> yellow </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-green" value="navbar-top-green">
									<label class="capitalize-font" for="navbar-top-green"> green </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-teal" value="navbar-top-teal">
									<label class="capitalize-font" for="navbar-top-teal"> teal </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-violet" value="navbar-top-violet">
									<label class="capitalize-font" for="navbar-top-violet"> violet </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-chrome" value="navbar-top-chrome">
									<label class="capitalize-font" for="navbar-top-chrome"> chrome </label>
								</div>
								<div class="radio mb-5">
									<input type="radio" name="radio-topbar-color" id="navbar-top-orange" value="navbar-top-orange">
									<label class="capitalize-font" for="navbar-top-orange"> orange </label>
								</div>

								<div class="radio mb-35">
									<input type="radio" name="radio-topbar-color" id="navbar-top-light" value="navbar-top-light">
									<label class="capitalize-font" for="navbar-top-light"> light </label>
								</div>
								<button id="reset_setting" class="btn  btn-info btn-xs btn-outline btn-rounded mb-10">reset</button>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- <button id="setting_panel_btn" class="btn btn-info btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button> -->
			<!-- /Right Setting Menu -->

		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container">
              <?php

              if (isset ( $content ))
                echo $content;
              ?>


				<!-- Footer -->
			<footer class="footer pl-30 pr-30">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<p class="desktop-only-view">2020 &copy; Doctor Calibration </p>
              <p class="mobile-only-view">2020 &copy; Doctor Calibration</p>
						</div>
						<!-- <div class="col-sm-6 text-right">
							<p>Follow Us</p>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div> -->
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			</div>
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->


<!-- jQuery -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Moment JavaScript -->
<script type="text/javascript" src="<?=base_url();?>public/admin_assets/vendors/bower_components/moment/min/moment-with-locales.min.js"></script>

<!-- Bootstrap Colorpicker JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- Switchery JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/switchery/dist/switchery.min.js"></script>

<!-- Bootstrap Colorpicker JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- Bootstrap Datetimepicker JavaScript -->
<script type="text/javascript" src="<?=base_url();?>public/admin_assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap Daterangepicker JavaScript -->
<!-- <script src="<?=base_url();?>public/admin_assets/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->

<!-- Form Picker Init JavaScript -->
<link rel="stylesheet" href="<?=base_url();?>public/admin_assets/vendors/bower_components/jquery/dist/jquery-ui.css">
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/jquery/dist/jquery-ui.js"></script>
<!-- <script src="<?=base_url();?>public/admin_assets/dist/js/form-picker-data.js"></script> -->
<!-- Bootstrap Select JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Bootstrap Tagsinput JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<!-- Bootstrap Touchspin JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>

<!-- Multiselect JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/multiselect/js/jquery.multi-select.js"></script>


<!-- Bootstrap Switch JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>

<!-- Bootstrap Datetimepicker JavaScript -->
<script type="text/javascript" src="<?=base_url();?>public/admin_assets/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script src="<?=base_url();?>public/admin_assets/jquery.timepicker.js"></script>
<link rel="stylesheet" href="<?=base_url();?>public/admin_assets/jquery.timepicker.css">


<!-- Progressbar Animation JavaScript -->
	<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Form Advance Init JavaScript -->
<script src="<?=base_url();?>public/admin_assets/dist/js/form-advance-data.js"></script>


<!-- Data table JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<!-- <script src="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables/media/js/dataTables.fixedHeader.min.js"></script> -->
<script src="<?=base_url();?>public/admin_assets/dist/js/dataTables-data.js"></script>
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>

<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script  src="<?=base_url();?>public/admin_assets/dist/js/export-table-data.js"></script>



<!-- Slimscroll JavaScript -->
<script src="<?=base_url();?>public/admin_assets/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="<?=base_url();?>public/admin_assets/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Owl JavaScript -->
<script src="<?=base_url();?>public/admin_assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>


<link href="<?=base_url();?>public/admin_assets/bootstrap-dialog.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url();?>public/admin_assets/bootstrap-dialog.js"></script>

<!-- Init JavaScript -->
<script src="<?=base_url();?>public/admin_assets/dist/js/init.js"></script>

<script>
function del_confirm(msg,url)
  {
      if(confirm(msg))
      {
          window.location.href=url
      }
      else
      {
          false;
      }

  }
</script>

</body>
</html>
