<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Admin: MIC Lab</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content=""/>

	<!-- Favicon -->
  <link rel="icon"
        type="image/png"
        href="<?php echo base_url(); ?>assets/img/fav.png">
  </head>

	<link href="<?=base_url();?>assets/vendors//bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- Data table CSS -->
	<link href="<?=base_url();?>assets/vendors//bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<!-- Toast CSS -->
	<link href="<?=base_url();?>assets/vendors//bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- Morris Charts CSS -->
    <link href="<?=base_url();?>assets/vendors//bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

	<!-- Chartist CSS -->
	<link href="<?=base_url();?>assets/vendors//bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css"/>


	<!-- vector map CSS -->
	<link href="<?=base_url();?>assets/vendors//vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="<?=base_url();?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
		<!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="nav-wrap">
      <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
          <div class="logo-wrap">
            <a href="<?=base_url();?>">
              <img class="brand-img" src="<?=base_url();?>img/logo.png" alt="brand"/>
              <span class="brand-text"><img  src="<?=base_url();?>img/brand.png" alt="brand"/></span>
            </a>
          </div>
        </div>
        <?php if($this->session->userdata('is_loggedin')){  ?>
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>

        <!-- <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a> -->

        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        <!-- <form id="search_form" role="search" class="top-nav-search collapse pull-left">
          <div class="input-group">
            <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
            </span>
          </div>
        </form> -->
        <?php }  ?>
      </div>
      <?php if($this->session->userdata('is_loggedin')){  ?>
      <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">



          <li class="dropdown auth-drp">
            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
              <div class="empimg">
              <img src="<?php echo ($this->session->userdata('EmpImage'))? base_url(). $this->session->userdata('EmpImage'): base_url('img/image-na.png');?>" alt="user_auth" class="user-auth-img "/>
              </div>
              <span class="user-online-status"></span><span class="user-auth-name inline-block"><?php echo $this->session->userdata('Username');?> <span class="ti-angle-down"></span></span></a>
            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
              <li>
								<a href="<?=base_url();?>admin/user_profile" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-star-circle zmd-fw text-success"></i> Profile</a>
							</li>
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
      <?php if($this->session->userdata('is_loggedin')){ ?>
			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li class="navigation-header">
						<span>Main</span>
						<hr/>
					</li>
					<li>
						<a class="<?php echo ($activemenu=="customer")? "active":""; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-user mr-20"></i><span class="right-nav-text">Customer</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
						<ul id="dashboard_dr" class="collapse collapse-level-1">
							<li>
								<a class="active-page" href="<?=base_url();?>customer/all">All Customers</a>
							</li>
              <li>
								<a class="active-page" href="<?=base_url();?>customer/addnew">Add Customer</a>
							</li>

						</ul>
					</li>
          <li>
            <a class="<?php echo ($activemenu=="documentation")? "active":""; ?>" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-user mr-20"></i><span class="right-nav-text">Document</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
              <li>
                <a class="active-page" href="<?=base_url();?>documentation/all">All Documents</a>
              </li>
              <li>
                <a class="active-page" href="<?=base_url();?>documentation/addnew">Add Documents</a>
              </li>

            </ul>
          </li>


					<!-- <li>
						<a href="documentation"><div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">documentation</span></div><div class="clearfix"></div></a>
					</li> -->
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->
      <?php } ?>


      <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container">
        <?php



             if (isset ( $content ))
               echo $content;
             ?>
        <!-- /Main Content -->
        <!-- Footer -->
        			<footer class="footer pl-30 pr-30">
        				<div class="container">
        					<div class="row">
        						<div class="col-sm-12">
        							<p class="desktop-only-view">2018 &copy; บริษัท เมดิคอล อินโนเวชั่น เซ็นเตอร์ จำกัด 414 ซอยส.ธรณินทร์ 4 แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพฯ 10310</p>
                      <p class="mobile-only-view">2018 &copy; บริษัท เมดิคอล อินโนเวชั่น เซ็นเตอร์ จำกัด</p>
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
    <script src="<?=base_url();?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="https://cdn.rawgit.com/brianreavis/selectize.js/master/dist/js/standalone/selectize.js"></script>
  <link href="https://cdn.rawgit.com/brianreavis/selectize.js/master/dist/css/selectize.css" rel="stylesheet" type="text/css" />
    <!-- Data table JavaScript -->
    <script src="<?=base_url();?>assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- <script src="<?=base_url();?>assets/vendors/bower_components/datatables/media/js/dataTables.fixedHeader.min.js"></script> -->
    <script src="<?=base_url();?>assets/dist/js/dataTables-data.js"></script>
    <script src="<?=base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bower_components/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>

    <script src="<?=base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script  src="<?=base_url();?>assets/dist/js/export-table-data.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="<?=base_url();?>assets/dist/js/jquery.slimscroll.js"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="<?=base_url();?>assets/vendors//bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="<?=base_url();?>assets/vendors//bower_components/jquery.counterup/jquery.counterup.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="<?=base_url();?>assets/dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Sparkline JavaScript -->
	<script src="<?=base_url();?>assets/vendors//jquery.sparkline/dist/jquery.sparkline.min.js"></script>


	<!-- Switchery JavaScript -->
	<script src="<?=base_url();?>assets/vendors//bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Vector Maps JavaScript -->
    <script src="<?=base_url();?>assets/vendors//vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?=base_url();?>assets/vendors//vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?=base_url();?>assets/vendors//vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url();?>assets/dist/js/vectormap-data.js"></script>

	<!-- Toast JavaScript -->
	<script src="<?=base_url();?>assets/vendors//bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- Piety JavaScript -->
	<script src="<?=base_url();?>assets/vendors//bower_components/peity/jquery.peity.min.js"></script>
	<script src="<?=base_url();?>assets/dist/js/peity-data.js"></script>


	<!-- Morris Charts JavaScript -->
    <script src="<?=base_url();?>assets/vendors//bower_components/raphael/raphael.min.js"></script>
    <script src="<?=base_url();?>assets/vendors//bower_components/morris.js/morris.min.js"></script>
    <script src="<?=base_url();?>assets/vendors//bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- ChartJS JavaScript -->
	<script src="<?=base_url();?>assets/vendors//chart.js/Chart.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.9/js/bootstrap-dialog.min.js"></script>
	<!-- Init JavaScript -->
	<script src="<?=base_url();?>assets/dist/js/init.js"></script>

</body>


</html>
