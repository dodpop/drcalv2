<?php

if(!empty($all_data[0]))
{
$ID = $all_data[0]['ID'];
$Topic = $all_data[0]['Topic'];
$Duration = $all_data[0]['Duration'];
$Location = $all_data[0]['Location'];
$Content = $all_data[0]['Content'];
$Active = $all_data[0]['Active'];
}else{
$ID = NULL;
$Topic = NULL;
$Duration = NULL;
$Location = NULL;
$Content = NULL;
$Active = NULL;
}


?>
<!-- Title -->
<div class="row heading-bg">
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<h5 class="txt-dark">Add/Edit News & Activities</h5>
</div>
<!-- Breadcrumb -->
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	<ol class="breadcrumb">
	<li><a href="<?=base_url();?>">Home</a></li>
	<li><a href="<?=base_url();?>admin/newsupdate"><span>All News & Activities</span></a></li>
	<li class="active"><span>Add/Edit News & Activities</span></li>
	</ol>
</div>
<!-- /Breadcrumb -->
</div>
<!-- /Title -->

<form method="post" name="form" id="form" enctype="multipart/form-data">
<input type="hidden" name="ID" id="ID" value="<?php echo $ID; ?>" />
<!-- Row -->
<div class="row">

	<div class="col-md-12">
		<div class="panel panel-default border-panel card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">News & Activities Information Form</h6>
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
								<label class="control-label mb-10 text-left">ชื่องาน</label>
								<textarea class="form-control " id="Topic" name="Topic" required><?php echo ($Topic)?$Topic:''; ?></textarea>
						</div>
				</div>

				<div class="col-sm-6">
						<div class="form-group">
								<label class="control-label mb-10 text-left">สถานที่</label>
								<textarea class="form-control " id="Location" name="Location" required><?php echo ($Location)?$Location:''; ?></textarea>
						</div>
				</div>

				<div class="col-sm-12">
					<div class="form-group">
							<label class="control-label mb-10 text-left">รายละเอียด</label>
							<textarea class="form-control " id="Content" name="Content" required><?php echo ($Content)?$Content:''; ?></textarea>
					</div>
				</div>

				<div class="col-sm-6">
						<div class="form-group">
								<label class="control-label mb-10 text-left">วันที่</label>
								<textarea class="form-control " id="Duration" name="Duration" required><?php echo ($Duration)?$Duration:''; ?></textarea>
						</div>
				</div>


				<!-- <div class="col-sm-3">
						<div class="form-group">
							<label class="control-label mb-10 text-left">Image</label>
							<input type="file" name="strFile" id="strFile" size="80" value="" class="form-control">
						</div>
				</div> -->

				<div class="col-sm-3">
						<div class="form-group">
							<label class="control-label mb-10 text-left">Gallery Image (Multiple selection)</label>
							<input type="file" name='files[]' multiple="" id="files" size="80" value="" class="form-control">
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

<?php
	$fileList = glob('public/news/'.$ID.'/*.{JPG,jpg,PNG,png,GIF,gif}', GLOB_BRACE); 
?>

<?php
	if(isset($fileList) && sizeof($fileList) > 0){
	?>
<div class="row" id="galnewsupdate">
	<div class="col-md-12">
		<div class="panel panel-default border-panel card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">News & Activities Gallery</h6>
				</div>
				<!-- <div class="pull-right">
				* Last updated by <?php echo $update_by_name; ?> (<?php echo $update_date;?>)
				</div> -->
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
					<div class="panel-body">
					<?php
						// foreach ($all_data as $key_data => $value_data){
							foreach($fileList as $filename){
					?>
					<div class="col-sm-2">
						<div class="form-group">
							<a href="<?php echo "/".$filename;?>" target="_blank"><img src="<?php echo "/".$filename;?>" class="full-width"></a>
								
							<a class="btn btn-danger btn-icon-anim btn-circle btn-edit" href="javascript:del_confirm('Are you Sure want to delete this record?','<?=base_url();?>admin_newsupdate/delete_product_image/?path=<?php echo $_SERVER['DOCUMENT_ROOT']."/".$filename .'&url=/admin/newsupdate/update/'.$ID.'/?save=saved'; ?>');" style="margin-top:-35px;float:right;"> <i class="fa fa-trash-o"></i></a>
						</div>
					</div>
						<?php
								}
						?>
					</div>
				</div>
			</div>
	</div>
</div>
<?php
			}
?>







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

// $("#btnSubmit").click(function(newsupdate){
$("#form").submit(function(event){

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
									url: '<?=base_url();?>admin_newsupdate/add',
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
										if (data==="TRUE"){
												alert('Infomation has been saved.');
										}
										// return false;
										if (data=="FALSE" ){
												$(".preloader-it").hide();
												// alert("Please check your data!");
											alert('Please check your data!');
											$('#btnSubmit').attr("disabled", false);
											$("#btnSubmit").css("cursor", "default");
												return false;


											}else{
												$(".preloader-it").hide();

														// newsupdateconfirm('Infomation has been saved, Close add/edit page?', function(result) {
													//     if (result)
													// alert('Infomation has been saved.');
													if ($("#ID").val()>0){
														location.reload();
													}else{
														window.location="<?=base_url();?>admin/newsupdate/index/saved";
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
