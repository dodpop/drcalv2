<?php

			 if(!empty($admindata[0]))
				{

          $AdminID = $admindata[0]->AdminID;
          $Username = $admindata[0]->Username;
          $Password = $admindata[0]->Password;
          $Email = $admindata[0]->Email;
				}else{
          $AdminID = '';
          $Username = NULL;
          $Password = NULL;
          $Email = NULL;
				}


?>
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Edit Admin Profile</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active"><span>Edit Admin Profile</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

<form method="post" name="form" id="form" action="<?=base_url();?>admin/data_save">
<input type="hidden" name="AdminID" id="AdminID" value="<?php echo $AdminID; ?>" />
					<!-- Row -->
					<div class="row">

						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Admin Profile Form</h6>
									</div>

									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

                        <div class="col-sm-4">
                        <div class="form-group">
                        <label class="control-label mb-10 text-left">Username</label>
                        <input type='text' class="form-control input-group" id='Username' name="Username" autocomplete="off" value="<?=$Username;?>"/>
                        </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                          <label class="control-label mb-10 text-left">Password</label>
                            <input type='text' class="form-control input-group" id='Password' name="Password" autocomplete="off" value="<?=$Password;?>"/>
                          </div>
                        </div>



                        <div class="col-sm-4">
                        	<div class="form-group">
                        		<label class="control-label mb-10 text-left">Email</label>
                        		<input name="Email" type="text" id="Email" value="<?php echo $Email; ?>" size="50" class="form-control"/>
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

      				$("input").attr("required", "true");
      				$("select").attr("required", "true");
      				// $('#AdminID').removeAttr('required');
              // $('#Fax').removeAttr('required');
              // $('#Remark').removeAttr('required');
              // $('#Effective').removeAttr('required');
      				// $('#Member_type').removeAttr('required');
              // $('#Tax_id').removeAttr('required');




          });

						var labelID;

						$('div.checkbox').click(function() {
						       labelID = $(this).find( "label" ).attr('for');
									 if ($('#'+labelID).is(':checked')) {
										 		$('#'+labelID+'_').val(1);
									 }else{
										 		$('#'+labelID+'_').val(0);
									 }
						});


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
																  url: '<?=base_url();?>admin/data_save',
																  // data: { EmpID:$EmpID, EmpFullname :$namethai   ,EmpFullnameEng :$nameeng  ,DepID :$depart   ,CompanyID :$CompanyID   ,Company :$company   ,Status :$status   ,Person :$person   ,PositionName :$PositionName   ,PositionType :$PositionType   ,Image :$strImage   ,Rank :$CompanyEmail   ,CompanyEmail :$Mobile   ,Mobile :$UserNameLogon   ,UserNameLogon :$PasswordLogon   ,PasswordLogon :$IPAddress   ,IPAddress :$SoftwareLicense   ,SoftwareLicense :$update_by   ,update_by :$update_date   ,remark :$remark    },
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
																			BootstrapDialog.alert('Please check your data!');
																				return false;


																		 }else{
																			 $(".preloader-it").hide();


																					 BootstrapDialog.confirm('Infomation has been saved, Close add/edit page?', function(result) {
																			         if (result)
																			             window.location="/customer/all";

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




  </script>
