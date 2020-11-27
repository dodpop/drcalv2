<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_about_bg bradcam_overlay">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">
               <h3>News</h3>
               <p><a href="/">Home /</a> News</p>
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
         <div class="col-lg-12 mb-5 mb-lg-0" id="easyPaginate_blog">
             
                <?php
                                if(isset($news) && sizeof($news) > 0){
                                    foreach ($news as $key_data => $value_data){
                ?>
               <article class="blog_item col-lg-6 col-md-6 col-xs-12">
                  <div class="blog_item_img" >
                            <?php
                            //Get a list of file paths using the glob function.
                            $fileList = glob('public/news/'.$value_data['ID'].'/*.{JPG,jpg,PNG,png,GIF,gif}', GLOB_BRACE);
                            foreach($fileList as $filename){
                                    echo '<img class="card-img rounded-0" src="'.$filename. '" alt="">';
                                break;
                            }
                            ?>
                     <!-- <a href="#" class="blog_item_date">
                        <h3>15</h3>
                        <p>Jan</p>
                     </a> -->
                  </div>
                  <div class="blog_details">
                     <a class="d-inline-block" href="news/detail/<?php echo $value_data['ID']; ?>">
                        <h2><?php echo $value_data['Topic']; ?></h2>
                     </a>
                     <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $value_data['Duration']; ?>
                     <br><i class="fa fa-map-marker fa-6" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $value_data['Location']; ?>
                     <br>
                     <a href="news/detail/<?php echo $value_data['ID']; ?>" class="learn_more">Read More</a></p>
                     <!-- <ul class="blog-info-link">
                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul> -->
                  </div>
               </article>
               <?php
                            }
                        }
                ?>


               
         </div>

         <!-- <nav class="blog-pagination justify-content-center d-flex">
                  <ul class="pagination">
                     <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                        </a>
                     </li>
                     <li class="page-item">
                        <a href="#" class="page-link">1</a>
                     </li>
                     <li class="page-item active">
                        <a href="#" class="page-link">2</a>
                     </li>
                     <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                        </a>
                     </li>
                  </ul>
               </nav> -->
             
         
      </div>
   </div>
</section>
<!--================Blog Area =================-->