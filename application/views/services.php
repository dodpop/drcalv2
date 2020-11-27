<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_about_bg bradcam_overlay">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">
               <h3>Services</h3>
               <p><a href="/">Home /</a> Services</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- bradcam_area_end  -->
<!-- expert_doctors_area_start -->
<div class="expert_doctors_area doctor_page services_page">
   <div class="container">
      <div class="row">
        <?php
                        if(isset($services) && sizeof($services) > 0){
                        	foreach ($services as $key_data => $value_data){
        ?>
         <div class="col-md-6 col-lg-3">
            <div class="single_expert mb-40">
               <div class="expert_thumb">
                  <img src="<?php echo $value_data['service_img']; ?>" alt="<?php echo $value_data['service_name']; ?> <?php echo $value_data['service_range']; ?>">
               </div>
               <div class="experts_name text-center">
                  <h3><?php echo $value_data['service_name']; ?></h3>
                  <span><?php echo $value_data['service_range']; ?></span>
               </div>
            </div>
         </div>
         <?php
                            }
                        }
        ?>
         
         
      </div>
   </div>
</div>
<!-- expert_doctors_area_end -->