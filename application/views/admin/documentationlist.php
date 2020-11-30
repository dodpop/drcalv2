
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">
							<?php
							if (is_numeric($DocumentType) && $DocumentType >0){
						      foreach ($all_data as $key_data => $value_data){
										echo $value_data->DocumentTypeName;
										break;
									}
						  }else{
						      echo "All Documents";
						  }
							?>

								<button class="btn btn-info btn-icon-anim btn-addnew" onclick="window.location='<?=base_url();?>documentation/addnew';"><i class="fa fa-plus"></i> New Documents</button>
							</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="<?=base_url();?>documentation/all"><span>Documents</span></a></li>
						<li class="active"><span>All Documents</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default border-panel card-view">
							<!-- <div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Service</h6>
								</div>
								<div class="clearfix"></div>
							</div> -->
							<div class="panel-wrapper collapse in">
								<div class="panel-body">





																<div class="table-wrap">
																	<div class="table-responsive">
																		<table id="" class="table table_nosort table-bordered table-hover display  pb-30" >
																			<thead>
																				<tr>
																					<th>No</th>
																					<th>Lab Number</th>
																					<th>Patient name</th>
																					<th>HN</th>
																					<th>File</th>
																					<th>Type</th>
																					<th>Status</th>
																					<th>Received date</th>
																					<th>Member</th>
							                            <th></th><th></th>
																				</tr>
																			</thead>
																			<tfoot>
																				<tr>
																					<th>No</th>
																					<th>Lab Number</th>
																					<th>Patient name</th>
																					<th>HN</th>
																					<th>File</th>
																					<th>Type</th>
																					<th>Status</th>
																					<th>Received date</th>
																					<th>Member</th>
							                            <th></th><th></th>
																				</tr>
																			</tfoot>
																			<tbody>
							                          <?php
																					$i = $data_records;
							                            foreach ($all_data as $key_data => $value_data){

							                            ?>
																				<tr>
																					<td><?php echo $i;?></td>
																					<td><?php echo $value_data->DocumentNumber;?></td>
							                            <td><?php echo $value_data->DocumentName;?></td>
																					<td><?php echo $value_data->DocumentURL;?></td>
							                            <td><? if ($value_data->DocumentFile){ ?>
                                          <a href="<?=$value_data->DocumentFile; ?>" target="_blank">View File</a><?php  }  ?></td>
																					<td><?php echo $value_data->DocumentTypeName;?></td>
							                            <td><?php echo ($value_data->DocumentStatus=="1")?"Active":"Inactive";?></td>
																					<td><?php echo $value_data->DocumentUpdated;?></td>
																					<td><?php echo "(".$value_data->MemberID.") ". $value_data->Cus_Name ." ".$value_data->Family_name;?></td>
							                            <td class="nopadding">
																						<a href="<?=base_url();?>documentation/edit/<?=$value_data->DocumentID?>" class="btn btn-default btn-icon-anim btn-circle btn-edit" title="Edit"><i class="fa fa-pencil"></i></a>
																					</td>
                                                                                    <td class="nopadding">
																						<a href="<?=base_url();?>documentation/delete_documentation/<?=$value_data->DocumentID?>" class="btn btn-default btn-icon-anim btn-circle btn-edit" title="Edit"><i class="fa fa-trash"></i></a>
																					</td>
																				</tr>
							                          <?php
																					$i = $i - 1;
							                            }
							                          ?>

																			</tbody>
																		</table>
																	</div>
																</div>






							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="myModal" >
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								<p>One fine body…</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary btn-print"><i class="fa fa-print"></i> Print</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

				<!-- /Row -->
        <style>
        .btn-edit i {
          line-height: 29px;
        }
				.nopadding {
					padding: 0!important;
				}
				#myModal .modal-dialog {
				    width: 100%;
				}
				#myModal .modal-dialog .modal-body {
				    overflow: auto;
				}
				#myModal .modal-dialog .modal-body table.table-data td {
					border: 1px solid #999!important;
					padding: 5px;
				}
				@media print {
				    .row, .modal-header, .modal-footer, .edit-td { display: none; }
				    #myModal .modal-dialog .modal-body { display: block!important; }
				}

        </style>

				<script src="<?=base_url();?>assets/jqueryui/jquery.min.js"></script>
				<script src="<?=base_url();?>assets/jqueryui/jquery-ui.min.js"></script>
				<script language="JavaScript">

				var $ = jQuery.noConflict();

				$('.btn-print').click(function(e){
						window.print();
				});

				$('.btn-action').click(function(e){

				    var url = $(this).data("id");

						$.ajax({
							type: 'POST',
							url: url,
							beforeSend:function(){
								 // $(".preloader-it").fadeIn("slow");
							},
							success:function(data){

								 if (data=="FALSE" ){
									 // $(".preloader-it").hide();
									 // alert("Please check your data!");
									BootstrapDialog.alert('Please check your data!');
										return false;


								 }else{
									 // $(".preloader-it").hide();
									 $('.modal-title').html("<p><span>Asset Infomation</span></p>")
									 $('.modal-body').html(data);
										// show modal
										$('.modal').modal('show');
								 }
							},
								error:function(){
								// $(".preloader-it").hide();
								alert("Please try again!");
								return false;
							}

						});



				});

				</script>
