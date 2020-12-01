
					<!-- Row -->
					<div class="row heading-bg">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Services  <button class="btn btn-info btn-icon-anim btn-addnew" onclick="window.location='<?=base_url();?>admin/product/add';"><i class="fa fa-plus"></i> New</button></h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="/admin/welcome">Home</a></li>
							<li class="active"><span>Services</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>

					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default border-panel card-view">
								<?php if ($segment4 == 'saved'){  ?>
										<div class="alert alert-success alert-dismissable alert-style-1">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">Your data has been saved.</p>
											<div class="clearfix"></div>
										</div>
								<?php } ?>
								<!-- <div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">one open</h6>
									</div>
									<div class="clearfix"></div>
								</div> -->
								<div class="panel-wrapper collapse in">
									<div class="panel-body">

										<div class="table-responsive">
                       <?php
                         if(isset($all_data) && sizeof($all_data) > 0){
                         ?>
                        <table id="" class="table  table_desc   table-hover display  pb-30" >
                           <thead>
                              <tr >
                                <th>#</th>
                                <th>Service Product</th>
								<th>Image</th>
								<th>Range</th>
								<th>Effective</th>
                                <th></th>
                                <th></th>
                              </tr>
                           </thead>
                           <tbody>
                             <?php
                          			// foreach ($all_data as $key_data => $value_data){
																foreach ($all_data as  $value_data){
                          		?>
                              <tr>
                                 <td><?php echo $value_data['service_id'];?></td>
								<td class="wrap"><?php echo strip_tags($value_data['service_name']);?></td>
								<td class="wrap"><?php echo "<a href=\"".$value_data['service_img']."\" target=\"_blank\"><img src=\"".$value_data['service_img']."\" style=\"padding:10px;max-width:90px;\"></a>";?></td>
								<td><?php echo $value_data['service_range'];?></td>
								<td><?php echo ($value_data['Effective']=="1")?"Yes":"";?></td>
                                 <td><a class="btn btn-default btn-icon-anim btn-circle btn-edit" href="<?=base_url();?>admin/product/update/<?php echo $value_data['service_id'];?>"> <i class="fa fa-pencil"></i></a>
																 </td>
                                 <td>

                                    <a class="btn btn-danger btn-icon-anim btn-circle btn-edit" href="javascript:del_confirm('Are you Sure want to delete this record?','<?=base_url();?>admin/product/delete/<?php echo $value_data['service_id'];?>');"> <i class="fa fa-trash-o"></i></a>


                                 </td>
                              </tr>
                              <?php
                                }
                              ?>
                            </tbody>
                            </table>
                            <?php
                            }
                            ?>
                     </div>
									</div>
								</div>
							</div>
					</div>
					</div>
					<!-- /Row -->





					<!-- /Row -->
					<style>
					table td {
						padding-top: 5px;
					}
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
