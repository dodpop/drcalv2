

					<!-- Row -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Welcome</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="/admin/welcome">Home</a></li>
							<li class="active"><span>Welcome</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>

					<div class="panel panel-default card-view">
													<div class="panel-wrapper collapse in">
														<div class="panel-body pa-15">


																									<div class="row">
																										<div class="col-sm-12 col-xs-12">
																											<div class="mb-30">
																												<h3 class="text-center txt-dark mb-10">Welcome: <?php echo $this->session->userdata('User'); ?></h3>
																											</div>
																										</div>
																									</div>


																								</div>
																							</div>
																				</div>


					<!-- /Row -->
					<style>
					.auth-form-wrap {
					    /* padding:  0!important; */
					}
					@media (min-width: 1025px) {
						.horizontal-nav .page-wrapper {
						    /* margin-left: 0;
						    padding-top: 0;
						    left: 0; */
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
