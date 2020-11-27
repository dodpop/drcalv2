<?php
                if(isset($news) && sizeof($news) > 0){
                    foreach ($news as $key_data => $value_data){
?>
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_about_bg bradcam_overlay">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">
               <h3>News</h3>
               <p><a href="/">Home /</a> <a href="/news">News /</a> <?php echo $value_data['Topic']; ?></p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- bradcam_area_end  -->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 mb-12 mb-lg-12" id="easyPaginate_blog">
             
                
               <article class="blog_item col-lg-12 col-md-12 col-xs-12">
                
                    <h2><?php echo $value_data['Topic']; ?></h2>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $value_data['Duration']; ?>
                     <br><i class="fa fa-map-marker fa-6" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $value_data['Location']; ?>
                     <br></p>
                     <p><?php echo $value_data['Content']; ?></p>
                 
               </article>             
                            

                    <div class="ml-3 mr-3">
                    <h3>Image Gallery</h3>
                    <div class="row gallery-item">
                            <?php
                            //Get a list of file paths using the glob function.
                            $fileList = glob('public/news/'.$value_data['ID'].'/*.{JPG,jpg,PNG,png,GIF,gif}', GLOB_BRACE);
                            foreach($fileList as $filename){
                            ?>
                                     
                                    <div class="col-md-4">
                                        <a href="/<?php echo $filename; ?>" class="img-pop-up">
                                            <div class="single-gallery-image" style="background: url(/<?php echo $filename; ?>);"></div>
                                        </a>
                                    </div>
                            <?php   
                            }
                            ?>
                        
                         
                    </div>
                    </div>


         </div>            
      </div>
   </div>
</section>
<!--================Blog Area =================-->
<?php
            }
        }
?>