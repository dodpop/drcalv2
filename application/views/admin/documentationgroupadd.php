<?php

			 if(!empty($documentationgroupdata[0]))
				{
					$DocumentTypeID = $documentationgroupdata[0]->DocumentTypeID;
					$DocumentTypeName= $documentationgroupdata[0]->DocumentTypeName;

				}else{
					$DocumentTypeID = NULL;
					$DocumentTypeName = NULL;

				}


?>

				<!-- Title -->

				<div class="row heading-bg">

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

						<h5 class="txt-dark">Add/Edit Document Type</h5>

					</div>

					<!-- Breadcrumb -->

					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

						<ol class="breadcrumb">

						<li><a href="#">Home</a></li>

						<li><a href="<?=base_url();?>documentationgroup/all"><span>Document Type</span></a></li>

						<li class="active"><span>Add/Edit Document Type</span></li>

						</ol>

					</div>

					<!-- /Breadcrumb -->

				</div>

				<!-- /Title -->



<form method="post" name="form" id="form" action="<?=base_url();?>documentationgroup/data_save" enctype="multipart/form-data">

<input type="hidden" name="DocumentTypeID" id="DocumentTypeID" value="<?php echo $DocumentTypeID; ?>" />

					<!-- Row -->

					<div class="row">



						<div class="col-md-12">

							<div class="panel panel-default border-panel card-view">

								<div class="panel-heading">

									<div class="pull-left">

										<h6 class="panel-title txt-dark">Document Type Form</h6>

									</div>



									<div class="clearfix"></div>

								</div>

								<div class="panel-wrapper collapse in">

									<div class="panel-body">



										<div class="col-sm-4">

												<div class="form-group">

													<label class="control-label mb-10 text-left">Document Type Name</label>

														<input type='text' class="form-control input-group" id='DocumentTypeName' name="DocumentTypeName" autocomplete="off" value="<?=$DocumentTypeName;?>"/>

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



					</style>



					<script src="<?=base_url();?>assets/jqueryui/jquery.min.js"></script>

					<script src="<?=base_url();?>assets/jqueryui/jquery-ui.min.js"></script>

					<script language="JavaScript">



					var $ = jQuery.noConflict();



        	$(document).ready(function () {





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





				/*$("input").attr("required", "true");

				$("select").attr("required", "true");

				$('#DocumentTypeID').removeAttr('required');

				$('#DocumentRoot').removeAttr('required');

				$('#strImage').removeAttr('required');
				$('#strImage2').removeAttr('required');
				*/







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

																  url: '<?=base_url();?>documentationgroup/data_save',



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





																					 //BootstrapDialog.confirm('Infomation has been saved, Close add/edit page?', function(result) {

																			       //  if (result)

																			             window.location="/documentationgroup/all";



																			   //  });

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
