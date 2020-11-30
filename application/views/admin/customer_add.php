<?php

			 if(!empty($customer[0]))
				{

          $MemberID = $customer[0]->MemberID;
					$Title = $customer[0]->Title;
          $Cus_Name = $customer[0]->Cus_Name;
          $Family_name = $customer[0]->Family_name;
          $Organization = $customer[0]->Organization;
					$ContactPerson = $customer[0]->ContactPerson;
          $Address = $customer[0]->Address;
					$Address2 = $customer[0]->Address2;
					$Address3 = $customer[0]->Address3;
          $Tel = $customer[0]->Tel;
          $Fax = $customer[0]->Fax;
          $Province = $customer[0]->Province;
          $Zipcode = $customer[0]->Zipcode;
          $Email = $customer[0]->Email;
          $Date_signup = $customer[0]->Date_signup;
          $Password = $customer[0]->Password;
          $Effective = $customer[0]->Effective;
          $Remark = $customer[0]->Remark;
          $Mobile = $customer[0]->Mobile;
					$Dateavailable = $customer[0]->Dateavailable;
					$Timeavailable = $customer[0]->Timeavailable;
					$Sendby = $customer[0]->Sendby;
					$Receiveby = $customer[0]->Receiveby;
					$ReceivebyEmail = $customer[0]->ReceivebyEmail;
					$ReceivebyFax = $customer[0]->ReceivebyFax;

				}else{
          $MemberID = '';
					$Title = NULL;
          $Cus_Name = NULL;
          $Family_name = NULL;
          $Organization = NULL;
					$ContactPerson = NULL;
          $Address = NULL;
					$Address2 = NULL;
					$Address3 = NULL;
          $Tel = NULL;
          $Fax = NULL;
          $Email = NULL;
          $Date_signup = NULL;
          $Password = NULL;
          $Effective = NULL;
          $Remark = NULL;
          $Mobile = NULL;
					$Dateavailable = NULL;
					$Timeavailable = NULL;
					$Sendby = NULL;
					$Receiveby = NULL;
					$ReceivebyEmail = NULL;
					$ReceivebyFax = NULL;
				}


?>
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add/Edit Customer</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="<?=base_url();?>customer/all"><span>All Customers</span></a></li>
						<li class="active"><span>Add/Edit Customer</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

<form method="post" name="form" id="form" action="<?=base_url();?>customer/data_save">
<input type="hidden" name="MemberID" id="MemberID" value="<?php echo $MemberID; ?>" />
					<!-- Row -->
					<div class="row">

						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Customer Information Form</h6>
									</div>

									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

										<div class="col-sm-4">
										<div class="form-group">
										<label class="control-label mb-10 text-left">คำนำหน้าชื่อ</label>
												<select name="Title" id="Title" class="form-control input-group" required >
													<option value=""></option>
													<option value="คุณ">คุณ</option>
													<option value="อาจารย์">อาจารย์</option>
													<option value="ผศ.">ผศ.</option>
													<option value="รศ.">รศ.</option>
													<option value="ศ.">ศ.</option>
													<option value="ดร.">ดร.</option>
													<option value="นพ.">นพ.</option>
													<option value="พญ.">พญ.</option>
													<option value="ผศ. ดร.">ผศ. ดร.</option>
													<option value="รศ. ดร.">รศ. ดร.</option>
													<option value="ศ. ดร.">ศ. ดร.</option>
													<option value="ศ. พญ.">ศ. พญ.</option>
													<option value="นสพ.">นสพ.</option>
													<option value="นาย">นาย</option>
													<option value="นางสาว">นางสาว</option>
													<option value="นาง">นาง</option>
													<option value="อื่นๆ">อื่นๆ</option>
												</select>
										</div>
										</div>

                        <div class="col-sm-4">
                        <div class="form-group">
                        <label class="control-label mb-10 text-left">ชื่อ</label>
                        <input type='text' class="form-control input-group" id='Cus_Name' name="Cus_Name" autocomplete="off" value="<?=$Cus_Name;?>" required/>
                        </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                          <label class="control-label mb-10 text-left">นามสกุล</label>
                            <input type='text' class="form-control input-group" id='Family_name' name="Family_name" autocomplete="off" value="<?=$Family_name;?>" required/>
                          </div>
                        </div>



                        <div class="col-sm-4">
                          <div class="form-group">
                          <label class="control-label mb-10 text-left">หน่วยงาน</label>
                            <input type='text' class="form-control input-group" id='Organization' name="Organization" autocomplete="off" value="<?=$Organization;?>"/>
                          </div>
                        </div>


                        <div class="col-sm-4">
                          <div class="form-group">
                          <label class="control-label mb-10 text-left">ชื่อ ที่อยู่ ที่ต้องระบุในใบเสร็จรับเงิน</label>
                            <textarea name="Address" cols="50" rows="3" id="Address"  class="form-control"><?php echo (isset($Address))?$Address:'';?></textarea>
                          </div>
                        </div>

												<div class="col-sm-4">
                          <div class="form-group">
                          <label class="control-label mb-10 text-left">บุคคลที่ติดต่อและประสานงาน</label>
                            <input type='text' class="form-control input-group" id='ContactPerson' name="ContactPerson" autocomplete="off" value="<?=$ContactPerson;?>"/>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label class="control-label mb-10 text-left">เบอร์โทร</label>
                            <input name="Tel" type="text" id="Tel"  class="form-control" value="<?php echo $Tel; ?>" size="50" />
                          </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                              <label class="control-label mb-10 text-left">แฟกซ์</label>
                              <input name="Fax" type="text" id="Fax"  class="form-control" value="<?php echo $Fax; ?>" size="50" />
                            </div>
                          </div>



                        <div class="col-sm-4">
                        	<div class="form-group">
                        		<label class="control-label mb-10 text-left">อีเมล์</label>
                        		<input name="Email" type="text" id="Email" value="<?php echo $Email; ?>" size="50" class="form-control" required/>
                        	</div>
                        </div>

                        <div class="col-sm-4">
                        	<div class="form-group">
                        		<label class="control-label mb-10 text-left">รหัสผ่าน</label>
                        		<input name="Password" type="text" id="Password" value="<?php echo $Password; ?>" size="50" class="form-control" required/>
                        	</div>
                        </div>

                        <div class="col-sm-4">
                        	<div class="form-group">
                        		<label class="control-label mb-10 text-left">มือถือ</label>
                        		<input name="Mobile" type="text" id="Mobile" value="<?php echo $Mobile; ?>" size="50" class="form-control" />
                        	</div>
                        </div>


												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">ที่อยู่สำหรับรับสิ่งส่งตรวจ</label>
														<textarea name="Address2" cols="50" rows="3" id="Address2"  class="form-control"><?php echo (isset($Address2))?$Address2:'';?></textarea>
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">ที่อยู่สำหรับส่งใบรายงานผล</label>
														<textarea name="Address3" cols="50" rows="3" id="Address3"  class="form-control"><?php echo (isset($Address3))?$Address3:'';?></textarea>
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">ช่วงวัน ที่สามารถไปรับและส่งผล *เช่น จันทร์ - ศุกร์</label>
														<input name="Dateavailable" type="text" id="Dateavailable"  class="form-control" value="<?php echo $Dateavailable; ?>" size="50" />
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">ช่วงวัน ที่สามารถไปรับและส่งผล *เช่น 08.00 - 17.00</label>
														<input name="Timeavailable" type="text" id="Timeavailable"  class="form-control" value="<?php echo $Timeavailable; ?>" size="50" />
													</div>
												</div>


												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">การนำส่งสิ่งส่งตรวจ</label>
															<select name="Sendby" id="Sendby" class="form-control"   >
																<option value=""></option>
																<option value="นำส่งเอง">นำส่งเอง</option>
																<option value="จัดส่งทางรถตู้/รถประจำทาง/เครื่องบิน">จัดส่งทางรถตู้/รถประจำทาง/เครื่องบิน</option>
																<option value="จัดส่งทางไปรษณีย์">จัดส่งทางไปรษณีย์</option>
																<option value="พนักงานของห้องปฏิบัติงานติดต่อรับ">พนักงานของห้องปฏิบัติงานติดต่อรับ</option>
															</select>
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">รับผลการตรวจตัวจริงโดย</label>
														<select name="Receiveby" id="Receiveby"  class="form-control"   >
																<option value=""></option>
																<option value="พนักงานของห้องปฏิบัติการจัดส่ง">พนักงานของห้องปฏิบัติการจัดส่ง</option>
																<option value="ทางไปรษณีย์">ทางไปรษณีย์</option>
																<!-- <option value="รับผลทางอีเมล์">รับผลทางอีเมล์</option>
																<option value="รับผลทางโทรสาร">รับผลทางโทรสาร</option> -->
															</select>
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">รับผลทางอีเมล์</label>
														<input name="ReceivebyEmail" type="text" id="ReceivebyEmail"  class="form-control" value="<?php echo $ReceivebyEmail; ?>" size="50" />
													</div>
												</div>

												<div class="col-sm-4">
													<div class="form-group">
													<label class="control-label mb-10 text-left">รับผลทางโทรสาร หมายเลข</label>
														<input name="ReceivebyFax" type="text" id="ReceivebyFax"  class="form-control" value="<?php echo $ReceivebyFax; ?>" size="50" />
													</div>
												</div>


                        <div class="col-sm-4">
                        		<div class="form-group">
                        			<label class="control-label mb-10 text-left">หมายเหตุ</label>
                        			<textarea name="Remark" cols="50" rows="3" id="Remark"  class="form-control"><?php echo (isset($Remark))?$Remark:'';?></textarea>
                        		</div>
                        </div>


                        <div class="col-sm-2">
                        		<div class="form-group">
                        			<label class="control-label mb-10 text-left">Status</label>
                        			<div class="checkbox checkbox-primary">
                        				<input  type="checkbox"  name="Effective" id="Effective"  value="1" <?php echo ($Effective==1?"checked":""); ?> />
                        				<label for="Effective">
                        					Active ?
                        				</label>
                        			</div>
                        		</div>
                        </div>



                        <input type="hidden" name="Effective_" id="Effective_" value="<?php echo $Effective; ?>" />

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

      				// $("input").attr("required", "true");
      				// $("select").attr("required", "true");
      				// $('#MemberID').removeAttr('required');
              // $('#Fax').removeAttr('required');
              // $('#Remark').removeAttr('required');
              // $('#Effective').removeAttr('required');
							//


              $( "#Province" ).val('<?php echo (isset($Province))? $Province:'';?>');
							$('#Title').val('<?php echo (isset($Title))? $Title:'';?>');
							$('#Sendby').val('<?php echo (isset($Sendby))? $Sendby:'';?>');
							$('#Receiveby').val('<?php echo (isset($Receiveby))? $Receiveby:'';?>');

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
																  url: '<?=base_url();?>customer/data_save',
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
																			// console.log(data);
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
