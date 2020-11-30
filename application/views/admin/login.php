
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Sign in to <br>Website Admin</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>
										<div class="form-wrap">
											<form action="<?php echo base_url('admin/login/validate_credentials'); ?>" id="loginForm" novalidate method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Username</label>
													<input type="text" class="form-control" required="" id="user_name" name="user_name" placeholder="Enter Username">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<!-- <a class="capitalize-font txt-danger block mb-10 pull-right font-12" href="forgot-password">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="user_password" name="user_password" placeholder="Enter Password">
												</div>
												<?php
												$success_msg= $this->session->flashdata('success_msg');
												$error_msg= $this->session->flashdata('error_msg');

														if($success_msg){
															?>
															<div class="alert-success">
																<?php echo $success_msg; ?>
															</div>
														<?php
														}
														if($error_msg){
															?>
															<div class="txt-danger font-12">
																<?php echo $error_msg; ?>
															</div>
															<?php
														}
														?>

												<!-- <div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="keepmeloggedin" required="" type="checkbox">
														<label for="keepmeloggedin"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div> -->
												<input type="hidden" name="keepmeloggedin_" id="keepmeloggedin_" value="" />

												<div class="form-group text-center">
													<button type="submit" class="btn btn-danger btn-rounded">sign in</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					<style>
					.auth-form-wrap {
					    padding:  0!important;
					}
					@media (min-width: 1025px) {
						.horizontal-nav .page-wrapper {
						    margin-left: 0;
						    padding-top: 0;
						    left: 0;
						}
					}
					</style>

					<script src="<?=base_url();?>admin_assets/jqueryui/jquery.min.js"></script>
					<script src="<?=base_url();?>admin_assets/jqueryui/jquery-ui.min.js"></script>
					<script language="JavaScript">

									var $ = jQuery.noConflict();

									$(document).ready(function () {

									var labelID;

									$('div.checkbox').click(function() {
												 labelID = $(this).find( "label" ).attr('for');
												 if ($('#'+labelID).is(':checked')) {
															$('#'+labelID+'_').val(1);
												 }else{
															$('#'+labelID+'_').val(0);
												 }
									});

									});

					  </script>
