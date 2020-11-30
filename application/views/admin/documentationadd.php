<?php

			 if(!empty($documentationdata[0]))
				{
					$DocumentID = $documentationdata[0]->DocumentID;
					$DocumentStatus = $documentationdata[0]->DocumentStatus;
					$DocumentName= $documentationdata[0]->DocumentName;
					$DocumentURL = $documentationdata[0]->DocumentURL;
					$DocumentFile = $documentationdata[0]->DocumentFile;
					$DocumentType = $documentationdata[0]->DocumentType;
					$DocumentSpecimen = $documentationdata[0]->DocumentSpecimen;
					$DocumentResults = $documentationdata[0]->DocumentResults;
					$DocumentUpdated = $documentationdata[0]->DocumentUpdated;
					$MemberID = $documentationdata[0]->MemberID;
					$DocumentNumber = $documentationdata[0]->DocumentNumber;

				}else{
					$DocumentID = NULL;
					$DocumentStatus = NULL;
					$DocumentName= NULL;
					$DocumentURL = NULL;
					$DocumentFile = NULL;
					$DocumentType = NULL;
					$DocumentSpecimen = NULL;
					$DocumentResults = NULL;
					$DocumentUpdated = NULL;
					$MemberID = NULL;
					$DocumentNumber = NULL;
				}

?>
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add/Edit Documents</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="<?=base_url();?>documentation/all"><span>Documents</span></a></li>
						<li class="active"><span>Add/Edit Documents</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

<form method="post" name="form" id="form" action="<?=base_url();?>documentation/data_save" enctype="multipart/form-data">
<input type="hidden" name="DocumentID" id="DocumentID" value="<?php echo $DocumentID; ?>" />
					<!-- Row -->
					<div class="row">

						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Document Form</h6>
									</div>

									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

										<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Patient  Name</label>
														<input type='text' class="form-control input-group" id='DocumentName' name="DocumentName" autocomplete="off" value="<?=$DocumentName;?>"/>
												</div>
											</div>

											<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label mb-10 text-left">HN</label>
														<input type='text' class="form-control input-group" id='DocumentURL' name="DocumentURL" autocomplete="off" value="<?=$DocumentURL;?>"/>
													</div>
												</div>

												<div class="col-sm-4">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Lab Number</label>
															<input type='text' class="form-control input-group" id='DocumentNumber' name="DocumentNumber" autocomplete="off" value="<?=$DocumentNumber;?>"/>
														</div>
													</div>

												<div class="col-sm-4">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Browse File</label>
																<input name="strImage" type="file" id="strImage" size="40" class="form-control input-group" >
														</div>
												</div>

												<? if ($DocumentFile){ ?>
												<div class="col-sm-2">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Current File</label>
																<a href="<?=$DocumentFile; ?>" target="_blank" class="btn btn-success btn-block btn-rounded btn-outline  btn-success">View File</a>
														</div>
												</div>
												<?php  }  ?>

												<div class="col-sm-4">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Document Type</label>
															<select name="DocumentType" id="DocumentType"   class="form-control input-group">
																<option value="">--Select--</option>
																<?php
																foreach ($documentation_type as $key_data => $value_data){
																?>
																<option value="<?php echo $value_data->DocumentTypeID;?>"  <?php echo ($value_data->DocumentTypeID==$DocumentType) ?"selected":""; ?>><?php echo $value_data->DocumentTypeName;?></option>
																<?php
																}
																?>
 														 </select>
														</div>
												</div>

												<div class="col-sm-6">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Specimen</label>
															<input type='text' class="form-control input-group" id='DocumentSpecimen' name="DocumentSpecimen" autocomplete="off" value="<?=$DocumentSpecimen;?>"/>
														</div>
													</div>

													<div class="col-sm-6">
															<div class="form-group">
																<label class="control-label mb-10 text-left">Results</label>
																<input type='text' class="form-control input-group" id='DocumentResults' name="DocumentResults" autocomplete="off" value="<?=$DocumentResults;?>"/>
															</div>
														</div>


												<div class="col-sm-4">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Member</label>
															<select name="MemberID" id="MemberID"   class="form-control ">
																<option value="">--Select--</option>
																<?php
																foreach ($all_member as $key_data => $value_data2){
																?>
																<option value="<?php echo $value_data2->MemberID;?>"  <?php echo ($value_data2->MemberID==$MemberID) ?"selected":""; ?>><?php echo "(".$value_data2->MemberID.") ". $value_data2->Cus_Name ." ".$value_data2->Family_name;?></option>
																<?php
																}
																?>
 														 </select>
														</div>
												</div>


												<div class="col-sm-2">
														<div class="form-group">
															<label class="control-label mb-10 text-left">Active</label>
															<select name="DocumentStatus" id="DocumentStatus"   class="form-control input-group">
															 <option value="">--Select--</option>
															 <option value="1"  <?=($DocumentStatus=="1" ?"selected":"")?>>Yes</option>
															 <option value="0"  <?=($DocumentStatus=="0" ?"selected":"")?>>No</option>
														 </select>
														</div>
												</div>








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
					.selectize-input {
						    border: 0px!important;
								box-shadow: none!important;

					}
					.selectize-dropdown {
						height: auto;
					}

					</style>

					<script src="<?=base_url();?>assets/jqueryui/jquery.min.js"></script>
					<script src="<?=base_url();?>assets/jqueryui/jquery-ui.min.js"></script>

					<script language="JavaScript">

					var $ = jQuery.noConflict();

        	$(document).ready(function () {

						$("#MemberID").selectize({
					    create: true,
					    sortField: 'text'
					});
					// $("#startdate").datepicker({
					// dateFormat: 'dd/mm/yy',
					// numberOfMonths: 2,
					// changeMonth: true,
					// changeYear: true,
					// yearRange: "1927:2055"
					// });
					// $("#enddate").datepicker({
					// dateFormat: 'dd/mm/yy',
					// numberOfMonths: 2,
					// changeMonth: true,
					// changeYear: true,
					// yearRange: "1927:2055"
					// });


				$("input").attr("required", "true");
				$("select").attr("required", "true");
				$('#DocumentID').removeAttr('required');
				$('#DocumentURL').removeAttr('required');
				$('#strImage').removeAttr('required');
				$('#MemberID-selectized').removeAttr('required');



							// $("#btnSubmit").click(function(event){
							$("#form").submit(function(event){

														event.preventDefault();

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
										                }

										            }
										        });

														if ( ! fail ) {


																$.ajax({
																  type: 'POST',
																  url: '<?=base_url();?>documentation/data_save',

																	data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
																	contentType: false,       // The content type used when sending data to the server.
																	cache: false,             // To unable request pages to be cached
																	processData:false,
																  beforeSend:function(){
																     $(".preloader-it").fadeIn("slow");
																  },
																  success:function(data){
																		// alert(data);
																		// return false;
																     if (data=="FALSE" ){
																			 $(".preloader-it").hide();
																			 // alert("Please check your data!");
																			BootstrapDialog.alert('Please check your data!.	');
																				return false;


																		 }else{
																			 $(".preloader-it").hide();


																					 BootstrapDialog.confirm('Infomation has been saved, Close add/edit page?', function(result) {
																			         if (result)
																			             window.location="/documentation/all";

																			     });
																		 }
																  },
																	  error:function(){
																		$(".preloader-it").hide();
																    alert("Please try again!");
																		return false;
																  }

																});

															} else {
																BootstrapDialog.alert('Please check your data!');
															}


									});


					});

  </script>
