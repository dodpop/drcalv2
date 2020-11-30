<?php

			 if(!empty($all_data[0]))
				{
					$UserID = $all_data[0]['UserID'];
					$User = $all_data[0]['User'];
					$Pws = $all_data[0]['Pws'];
					$bitAdmin = $all_data[0]['bitAdmin'];
					$Email = $all_data[0]['Email'];
					$Active = $all_data[0]['Active'];
				}else{
					$UserID = NULL;
					$User = NULL;
					$Pws = NULL;
					$bitAdmin = NULL;
					$Email = NULL;
					$Active = '1';
				}


?>
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add/Edit User</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
						<li><a href="<?=base_url();?>">Home</a></li>
						<li><a href="<?=base_url();?>admin/users"><span>All User</span></a></li>
						<li class="active"><span>Add/Edit User</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

<form method="post" name="form" id="form" enctype="multipart/form-data">
<input type="hidden" name="UserID" id="UserID" value="<?php echo $UserID; ?>" />
					<!-- Row -->
					<div class="row">

						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">User Information Form</h6>
									</div>
									<!-- <div class="pull-right">
									* Last updated by <?php echo $update_by_name; ?> (<?php echo $update_date;?>)
									</div> -->
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label mb-10 text-left">User Name</label>
														<input type='text' class="form-control input-group" id='User' name="User" autocomplete="off" value="<?=$User;?>" required/>
												</div>
											</div>

											<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Password</label>
															<input type='password' class="form-control input-group" id='Pws' name="Pws" autocomplete="off" value="<?=$Pws;?>" required/>
													</div>
												</div>

											<div class="col-sm-2">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Type</label>
															<select id="bitAdmin" name="bitAdmin" class="form-control input-group" required>
                                   <option value="1" >Admin</option>
                                   <option value="0" selected>User</option>
                                </select>
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">Email</label>
															<input type='text' class="form-control input-group" id='Email' name="Email" autocomplete="off" value="<?=$Email;?>" />
													</div>
												</div>

														<div class="col-sm-1">
																<div class="form-group">
																	<label class="control-label mb-10 text-left">Active</label>
																	<div class="checkbox checkbox-primary">
																		<input  type="checkbox"  name="Active_" id="Active_"  value="1" <?php echo ($Active==1?"checked":""); ?> />
																		<label for="Active_">
																			Active ?
																		</label>
																	</div>
																</div>
														</div>
														<input type="hidden" name="Active" id="Active" value="<?php echo $Active; ?>" />

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

				  </form>

					<style>

					.checkbox {
					    padding-left: 20px;
					    height: 42px;
					}

					</style>

					<script src="<?=base_url();?>admin_assets/jqueryui/jquery.min.js"></script>
					<script src="<?=base_url();?>admin_assets/jqueryui/jquery-ui.min.js"></script>
					<script language="JavaScript">

					var $ = jQuery.noConflict();

        	$(document).ready(function () {

				$( "#bitAdmin" ).val('<?php echo (isset($bitAdmin))?$bitAdmin:"0";?>');

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

				// $("#btnSubmit").click(function(users){
				$("#form").submit(function(event){

											event.preventDefault();
											//
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

											if ( ! fail ) {

													$.ajax({
													  type: 'POST',
													  url: '<?=base_url();?>admin/users/add',
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
																 alert("Please check your data!");
																// BootstrapDialog.alert('Please check your data!');
																$('#btnSubmit').attr("disabled", false);
															  $("#btnSubmit").css("cursor", "default");
																	return false;


															 }else{
																 $(".preloader-it").hide();

																		 // BootstrapDialog.confirm('Infomation has been saved, Close add/edit page?', function(result) {
																     //     if (result)
																				 // BootstrapDialog.alert('Infomation has been saved.');
																				 if ($("#UserID").val()>0){
																					 location.reload();
																				 }else{
																					 	window.location="<?=base_url();?>admin/users/index/saved";
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
