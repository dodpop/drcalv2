              <!-- Title -->
              <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                  <h5 class="txt-dark">All Customer <button class="btn btn-info btn-icon-anim btn-addnew" onclick="window.location='<?=base_url();?>customer/addnew';"><i class="fa fa-plus"></i> New Customer</button></h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                  <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <!-- <li><a href="<?=base_url();?>customer/all"><span>All Customer</span></a></li> -->
                  <li class="active"><span>All Customer</span></li>
                  </ol>
                </div>
                <!-- /Breadcrumb -->
              </div>
              <!-- /Title -->
              <!-- Main content -->

               <div class="row">

                     <div class="panel panel-bd lobidisable">
                        <div class="panel-body">
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                             <?php
                               if(isset($all_data) && sizeof($all_data) > 0){
                               ?>
                              <table id="dataTableExample1" class="table table_desc   table-hover display  pb-30" >
                                 <thead>
                                    <tr >
                                      <th>Member ID</th>
                                      <th width="100">Name</th>
                                      <th width="100">Family Name</th>
                                      <th>Organization</th>
                                      <th>Address</th>

                                      <th>Tel</th>
                                      <th class="hidden">Fax</th>

                                      <th>Email</th>
                                      <th>Date Signup</th>
                                      <th class="hidden">Password</th>
                                      <th>Effective</th>
                                      <th class="hidden">Remark</th>
                                      <th>Mobile</th>
                                      <th>Fax</th>
                                      <th class="hidden">Member Type</th>
                                       <th style="min-width: 90px;"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                   <?php
                                			foreach ($all_data as $key_data => $value_data){

                                		?>
                                    <tr>
                                      <td><?php echo $value_data->MemberID;?></td>
                                      <td><?php echo $value_data->Cus_Name;?></td>
                                      <td><?php echo $value_data->Family_name;?></td>
                                      <td><?php echo $value_data->Organization;?></td>
                                      <td><?php echo $value_data->Address;?></td>

                                      <td><?php echo $value_data->Tel;?></td>
                                      <td class="hidden"><?php echo $value_data->Fax;?></td>
                                     
                                      <td><?php echo $value_data->Email;?></td>
                                      <td><?php echo $value_data->Date_signup;?></td>
                                      <td class="hidden"><?php echo $value_data->Password;?></td>
                                      <td><?php echo ($value_data->Effective==1)? "Yes":"No";?></td>
                                      <td class="hidden"><?php echo $value_data->Remark;?></td>
                                      <td><?php echo $value_data->Mobile;?></td>
                                      <td><?php echo $value_data->Fax;?></td>
                                      <td class="hidden"><?php echo $value_data->Member_type;?></td>

                                       <td>
                                          <a class="btn btn-default btn-icon-anim btn-circle btn-edit" href="<?=base_url();?>customer/edit_customer/<?php echo $value_data->MemberID;?>"> <i class="fa fa-pencil"></i></a>



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



                           </div><?php
                           // echo $pages;
                           ?>
                        </div>
                     </div>
                  </div>
