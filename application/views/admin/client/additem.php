<?php


?>
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Add/Edit Product Promotion Item</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
						<li><a href="<?=base_url();?>">Home</a></li>
						<li><a href="<?=base_url();?>admin/promotion/update/<?=$PromotionID?>"><span><?=$promotion_data[0]['PromotionCode'];?> Promotion</span></a></li>
						<li class="active"><span>Add/Edit Product Promotion Item</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->



					<!-- Row -->
					<div class="row">

						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h4 class=" txt-dark">Promotion: <?=$promotion_data[0]['PromotionCode'];?> - <?=$promotion_data[0]['PromotionName'];?></h4>
									</div>
									<!-- <div class="pull-right">
									* Last updated by <?php echo $update_by_name; ?> (<?php echo $update_date;?>)
									</div> -->
									<div class="clearfix"></div>
								</div>


								<?php
									 // Edit case not to search
									if(!sizeof($productpromotion_item) > 0){
								 ?>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

												 <form id="" method="post" action="" class="col-lg-12 col-md-12 col-sm-12" enctype="multipart/form-data">
													 <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>


														<div class="form-group col-lg-12 col-md-12 col-sm-12 m-b-5">
																<h5>ค้นหา</h5>
													 </div>

														<div class="form-group col-lg-3 col-md-12 col-sm-12">
															 <label>Company </label>
															 <select name="CompanyID" id="CompanyID" class="form-control" >
																 <option value="">--Select--</option>
																 <?php
																		foreach ($all_company as   $value_data){
																	?>
																	<option  value="<?php echo $value_data['CompanyID']; ?>" <?php echo ($value_data['CompanyID']==$CompID)?"selected":""; ?> ><?php echo $value_data['Cname'];?></option>
																	<? } ?>
															</select>
														</div>


														<div class="form-group col-lg-3 col-md-12 col-sm-12">
															 <label>Product Line</label>
															 <select name="usabilitID" id="usabilitID"   class="form-control input-group">
																<option value="">Select</option>
																<?php
																foreach ($all_usabililty as $key_data => $value_data){
																?>
																<option value="<?php echo $value_data['SubcategoryID']; ?>" <?php  echo ($value_data['SubcategoryID']==$usabilitID)?"selected":""; ?>><?php echo $value_data['SubcategoryName'];?></option>
																<?php
																	}
																?>
															</select>
														</div>

														<div class="form-group col-lg-3 col-md-12 col-sm-12">
															 <label>Search by  Code/Name</label>
															 <input name="txtSearch" id="txtSearch" type="text" class="form-control "  value="<?=($txtSearch!='canttofind'&&$txtSearch!='')?$txtSearch:'';?>"    autocomplete="off" >
														</div>

													 <div class="clear-fix"></div>
													 <div class="form-group col-lg-3 col-md-12 col-sm-12">
															<label>&nbsp;</label>
															<div class="reset-button">
																 <input type="submit" class="btn btn-success" value="Search"></a>
																 <input type="reset" id="reset-btn"  class="btn btn-warning" value="Reset">
															</div>
														</div>

												 </form>
									</div>
								</div>

								<div class="panel-wrapper collapse in">
									<div class="panel-body">

										<div class="table-responsive">
                       <?php
                         if(isset($all_data) && sizeof($all_data) > 0){
                         ?>
												 <form method="post" name="form" id="form" enctype="multipart/form-data" >
													 <input type="hidden" name="PromotionID" id="PromotionID" value="<?php echo $PromotionID; ?>" />
				                        <table id="dataTable_product" class="table  table_nomenu table-hover display  pb-30" >
				                           <thead>
				                              <tr >
																				 <th></th>
				                                 <th class="hidden">Product ID</th>
				                                 <th>Product Code</th>
																				 <th>Product Name</th>
																				 <th>Company</th>
																				 <th>Promotion Remark</th>
																				 <th>Promotion Price</th>
																				 <th>Price List</th>
																				 <th>Active</th>
				                              </tr>
				                           </thead>
				                           <tbody>

				                             <?php
																				foreach ($all_data as  $value_data){
				                          		?>
				                              <tr>
				                                 <td><input type="checkbox" id="ProductID" name="ProductID[]" value="<?php echo$value_data['ProductID']; ?>" / style="transform : scale(1.5); "></td>
																				 <td  class="hidden"><?php echo $value_data['ProductID'];?></td>
																				 <td width="250"><input type='text' class="form-control input-group" id='ProductCode' name="ProductCode[]" autocomplete="off" value="<?php echo $value_data['ProductCode'];?>" required/></td>
																				 <td width="250"><input type='text' class="form-control input-group" id='ProductName' name="ProductName[]" autocomplete="off" value="<?php echo $value_data['ProductName'];?>" required/></td>
																				 <td><?php echo $value_data['Cname'];?></td>
																				 <td><input type='text' class="form-control input-group" id='Description' name="Description[]" autocomplete="off" value="<?php echo $value_data['Description'];?>" /></td>
																				 <td><input type='number' class="form-control input-group" id='Price' name="Price[]" autocomplete="off"  onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)"/></td>
																				 <td><input type='number' class="form-control input-group" id='PriceList' name="PriceList[]" autocomplete="off"  onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)"/></td>
																				 <td><?php echo ($value_data['bitShow']=="1")?"Yes":"";?></td>
				                              </tr>
				                              <?php
				                                }
				                              ?>


				                            </tbody>
				                            </table>

																		<div class="col-sm-4 pull-right">
																			<div class="form-group">
																				<label class="control-label mb-10 text-left">&nbsp;</label>
																				<button type="submit" class="btn btn-success btn-anim form-control text-white" name="btnSubmit" id="btnSubmit"><i class="fa fa-check"></i><span class="btn-text">Save</span></button>
																			</div>
																		</div>
														</form>
                            <?php
                            }
                            ?>
                     </div>
									</div>
								</div>

								<?php
									}
									// Edit case not to search
								?>


								<?php
									 // The user has to search a product before
								  if(isset($productpromotion_item) && sizeof($productpromotion_item) > 0){
								 ?>

								<!-- Edit data -->
								<form method="post" name="form" id="form" enctype="multipart/form-data">

										<input type="hidden" name="PromotionID" id="PromotionID" value="<?php echo $PromotionID; ?>" />
										<input type="hidden" name="ProductPromotionID" id="ProductPromotionID" value="<?php echo ($productpromotion_item[0]['ProductID'])?$productpromotion_item[0]['ProductID']:''; ?>" />

										<div class="panel-wrapper collapse in">
											<div class="panel-body">

														<br class="clearfix">
														<input type="hidden" name="ProductID" id="ProductID" value="<?php echo ($productpromotion_item[0]['ProductID'])?$productpromotion_item[0]['ProductID']:''; ?>" />

														<div class="col-sm-2">
															<div class="form-group">
																<label class="control-label mb-10 text-left">Product Code</label>
																	<input type='text' class="form-control input-group" id='ProductCode' name="ProductCode" autocomplete="off" value="<?php echo ($productpromotion_item[0]['ProductCode'])?$productpromotion_item[0]['ProductCode']:''; ?>" readonly required/>
															</div>
														</div>

														<div class="col-sm-6">
																<div class="form-group">
																	<label class="control-label mb-10 text-left">Product Name</label>
																		<input type='text' class="form-control input-group" id='ProductName' name="ProductName" autocomplete="off" value="<?php echo ($productpromotion_item[0]['ProductName'])?$productpromotion_item[0]['ProductName']:''; ?>" required/>
																</div>
														</div>

														<div class="col-sm-2">
															<div class="form-group">
																<label class="control-label mb-10 text-left">Promotion Price</label>
																	<input type='number' class="form-control input-group" id='Price' name="Price" autocomplete="off" value="<?php echo ($productpromotion_item[0]['Price'])?$productpromotion_item[0]['Price']:''; ?>" required onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)"/>
															</div>
														</div>

														<div class="col-sm-2">
																<div class="form-group">
																	<label class="control-label mb-10 text-left">Price List</label>
																		<input type='number' class="form-control input-group" id='PriceList' name="PriceList" autocomplete="off" value="<?php echo ($productpromotion_item[0]['PriceList'])?$productpromotion_item[0]['PriceList']:''; ?>" required onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)"/>
																</div>
														</div>


														<div class="col-sm-12">
																<div class="form-group">
																		<label class="control-label mb-10 text-left">Description</label>
																		<textarea class="form-control input-group" id="Description" name="Description" ><?php echo ($productpromotion_item[0]['Description'])?$productpromotion_item[0]['Description']:''; ?></textarea>
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
								 </form>
								 <?php
								 }
								 // The user has to search a product before
								 ?>
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


					// $("#strPeriod_1_view").datepicker({
					// dateFormat: 'dd/mm/yy',
					// numberOfMonths: 2,
					// changeMonth: true,
					// changeYear: true,
					// yearRange: "1927:2055"
					// });
					// $("#strPeriod_2_view").datepicker({
					// dateFormat: 'dd/mm/yy',
					// numberOfMonths: 2,
					// changeMonth: true,
					// changeYear: true,
					// yearRange: "1927:2055"
					// });



				// $("input").attr("required", "true");
				// $("select").attr("required", "true");
				//
				// $('#ID').removeAttr('required');
				// $('#strFile').removeAttr('required');
				// $('#strFile2').removeAttr('required');
				// $('#Description').removeAttr('required');
				// $('#intbitEffective_').removeAttr('required');
				// $('#intbitEffective').removeAttr('required');


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


				// $("#btnSubmit").click(function(promotion){
				$("#form").submit(function(promotion){

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


											if ( ! fail ) {

													$.ajax({
													  type: 'POST',
													  url: '<?=base_url();?>admin_promotion/save_item_data',
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
													     if (data=="FALSE" ){
																 $(".preloader-it").hide();
																 // alert("Please check your data!");
																BootstrapDialog.alert('Please check your data!');
																$('#btnSubmit').attr("disabled", false);
															  $("#btnSubmit").css("cursor", "default");
																	return false;


															 }else{
																 $(".preloader-it").hide();

																		 // BootstrapDialog.confirm('Infomation has been saved, Close add/edit page?', function(result) {
																     //     if (result)
																				 // BootstrapDialog.alert('Infomation has been saved.');
														            window.location="<?=base_url();?>admin/promotion/update/<?=$PromotionID?>#btnSubmit";
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
													BootstrapDialog.alert('Please check your data!');
													$('#btnSubmit').attr("disabled", false);
													$("#btnSubmit").css("cursor", "default");
												}


						});
				});

  </script>
