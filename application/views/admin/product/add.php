<?php

			 if(!empty($all_data[0]))
				{
					$service_id = $all_data[0]['service_id'];
					$strservice_name = $all_data[0]["service_name"];
					$service_range = $all_data[0]["service_range"];
					$intbitEffective = $all_data[0]["Effective"];
					$service_img = $all_data[0]["service_img"];

				}else{
					$service_id = NULL;
					$strservice_name = NULL;
					$service_range = NULL;
					$intbitEffective = NULL;
					$service_img = NULL;

				}

?>
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add/Edit Service</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
						<li><a href="<?=base_url();?>">Home</a></li>
						<li><a href="<?=base_url();?>admin/product"><span>All Services</span></a></li>
						<li class="active"><span>Add/Edit Service</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

					<!-- Row -->
					<div class="row">

<form method="post" name="form" id="form" enctype="multipart/form-data">
<input type="hidden" name="service_id" id="service_id" value="<?php echo $service_id; ?>" />
						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Services Information Form</h6>
									</div>
									<!-- <div class="pull-right">
									* Last updated by <?php echo $update_by_name; ?> (<?php echo $update_date;?>)
									</div> -->
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

											<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label mb-10 text-left">Service Name</label>
												<input type='text' class="form-control input-group" id='service_name' name="service_name" autocomplete="off" value="<?=$strservice_name;?>" required/>
											</div>
											</div>

											<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label mb-10 text-left">Service Range</label>
												<input type='text' class="form-control input-group" id='service_range' name="service_range" autocomplete="off" value="<?=$service_range;?>" required/>
											</div>
											</div>


											<div class="col-sm-3">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Service Image</label>
														<input type="file" name="strPic1" id="strPic1" size="80" value="" class="form-control">
													</div>
											</div>



											<div class="col-sm-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">&nbsp;</label>
														<?php
																		if($service_img != ""){
																			echo "<a    href='".$service_img."' target='_blank' class=\"btn   btn-anim form-control \"> View Service service_img </a>";
																		}
														?>
													</div>
											</div>


											<div class="col-sm-1">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Active</label>
														<div class="checkbox checkbox-primary">
															<input  type="checkbox"  name="intbitEffective_" id="intbitEffective_"  value="1" <?php echo ($intbitEffective==1?"checked":""); ?> />
															<label for="intbitEffective_">
																Active ?
															</label>
														</div>
													</div>
											</div>
											<input type="hidden" name="intbitEffective" id="intbitEffective" value="<?php echo $intbitEffective; ?>" />

											<div class="col-sm-4 pull-right">
												<div class="form-group">
													<label class="control-label mb-10 text-left">&nbsp;</label>
													<button type="submit" class="btn btn-success btn-anim form-control text-white" name="btnSubmit" id="btnSubmit"><i class="fa fa-check"></i><span class="btn-text">Save</span></button>
												</div>
											</div>

											</div>
									</div>

								</div>
							</div>
							</form>





					</div>
					</div>

					<!-- /Row -->


					<div class="modal fade">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					        <!-- <h4 class="modal-title">Modal title</h4> -->
					      </div>
					      <div class="modal-body">
					        <p>One fine body…</p>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div><!-- /.modal -->


					<style>

					.checkbox {
					    padding-left: 20px;
					    height: 42px;
					}

					</style>

					<script src="<?=base_url();?>public/admin_assets/jqueryui/jquery.min.js"></script>
					<script src="<?=base_url();?>public/admin_assets/jqueryui/jquery-ui.min.js"></script>
					<script language="JavaScript">

					var $ = jQuery.noConflict();

        	$(document).ready(function () {




				$('div.checkbox').click(function() {
									 labelID = $(this).find( "label" ).attr('for');
									 if ($('#'+labelID).is(':checked')) {
												labelID = labelID.replace("_", "");
												$('#'+labelID).val(1);
									 }else{
												labelID = labelID.replace("_", "");
												$('#'+labelID).val(0);
									 }
						});



				// $("#btnSubmit").click(function(Service){
				$("#form").submit(function(Service){

											event.preventDefault();

											// for (instance in CKEDITOR.instances) {
											//         CKEDITOR.instances[instance].updateElement();
											//     }

							        //validate fields
							        var fail = false;
							        var fail_log = '';
							        $( '#form' ).find( 'select, input' ).each(function(){
							            if( ! $( this ).prop( 'required' )){

							            } else {
							                if ( ! $( this ).val() ) {
							                    fail = true;
							                    name = $( this ).attr( 'name' );
							                    fail_log += name + " is required \n";
																	$( this ).focus();
																	console.log(fail_log);
							                }

							            }
							        });

											// check_Service_expire();

											if ( ! fail ) {

													$.ajax({
													  type: 'POST',
													  url: '<?=base_url();?>admin/product/add',
														data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
														contentType: false,       // The content type used when sending data to the server.
														cache: false,             // To unable request pages to be cached
														processData:false,
													  beforeSend:function(){
													     $(".preloader-it").fadeIn("slow");
															 $('#btnSubmit').attr("disabled", true);
															 $("#btnSubmit").css("cursor", "progress");
													  },
													  success:function(data){
															// alert(data);
															// return false;
															if (data==="TRUE"){
																 alert('Infomation has been saved.');
															}
													     if (data=="FALSE" ){
																 $(".preloader-it").hide();
																 // alert("Please check your data!");
																alert('Please check your data!');
																$('#btnSubmit').attr("disabled", false);
															  $("#btnSubmit").css("cursor", "default");
																	return false;


															 }else{
																 $(".preloader-it").hide();

																		 // BootstrapDialog.confirm('Infomation has been saved, Close add/edit page?', function(result) {
																     //     if (result)
																				 // alert('Infomation has been saved.');
																			 if ($("#service_id").val()>0){
 																					location.reload();
 																				}else{
 																					 window.location="<?=base_url();?>admin/product/index/saved";
 																				}

																     // });
															 }
													  },
														  error:function(){
															$(".preloader-it").hide();
													    alert("Please try again!");
															$('#btnSubmit').attr("disabled", false);
															$("#btnSubmit").css("cursor", "default");
															return false;
													  }

													});

												} else {
													alert('Please check your data!');
													$('#btnSubmit').attr("disabled", false);
													$("#btnSubmit").css("cursor", "default");
												}


						});
				});

  </script>
