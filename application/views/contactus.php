<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_about_bg bradcam_overlay">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="bradcam_text">
               <h3>contact Us</h3>
               <p><a href="/">Home /</a> contact us</p>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- bradcam_area_end  -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
         </div>
         <div class="col-lg-8">
            <form class="form-contact contact_form" action="/contactus/savecontact" method="post" id="contactForm" >
            <small style="color:#e43800;"><?php echo $this->session->flashdata('flashError')?></small>
               <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control w-100" name="your-message" id="your-message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" ><?php echo ($this->session->flashdata('message')) ? $this->session->flashdata('message'):''; ?></textarea>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control valid" name="your-name" id="your-name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" value="<?php echo ($this->session->flashdata('name')) ? $this->session->flashdata('name'):''; ?>">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control valid" name="your-org" id="your-org" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your organization'" placeholder="Enter your organization" value="<?php echo ($this->session->flashdata('org')) ? $this->session->flashdata('org'):''; ?>">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control valid" name="your-email" id="your-email" type="your-email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" value="<?php echo ($this->session->flashdata('email')) ? $this->session->flashdata('email'):''; ?>">
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="form-group">
                            <select name="your-subject" id="your-subject" class="form-control">
                                <option value="">กรุณาเลือกเรื่องที่ต้องการติดต่อ</option>
                                <option <?php echo ($this->session->flashdata('subject')=='ขอใบเสนอราคา') ? 'selected':''; ?> value="ขอใบเสนอราคา">ขอใบเสนอราคา</option>
                                <option  <?php echo ($this->session->flashdata('subject')=='สอบถามงานบริการ">สอบถามงานบริการ') ? 'selected':''; ?> value="สอบถามงานบริการ">สอบถามงานบริการ</option>
                                <option  <?php echo ($this->session->flashdata('subject')=='แจ้งขอร้องเรียน /แนะนำการบริการ') ? 'selected':''; ?> value="แจ้งขอร้องเรียน /แนะนำการบริการ">แจ้งขอร้องเรียน /แนะนำการบริการ</option>
                                <option  <?php echo ($this->session->flashdata('subject')=='สอบถามเรื่องอื่นๆ') ? 'selected':''; ?> value="สอบถามเรื่องอื่นๆ">สอบถามเรื่องอื่นๆ</option>
                            </select>
                        <!-- <input class="form-control" name="your-subject" id="your-subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject"> -->
                     </div>
                  </div>
               </div>
               <div class="form-group mt-3">
                  <button type="submit" class="button button-contactForm boxed-btn">Send</button>
               </div>
            </form>
         </div>
         <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-home"></i></span>
               <div class="media-body">
                  <h3>3N Holding Building</h3>
                  <p>44/6 Suthisarnvinitchai Rd. Samsennok Huay Kwang, Bangkok 10310, THAILAND</p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-tablet"></i></span>
               <div class="media-body">
                  <h3>66 (0) 2277 855</h3>
                  <p>Mon to Fri 8am to 5pm</p>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="ti-email"></i></span>
               <div class="media-body">
                  <h3>info@doctorcalibration.com, sales@doctorcalibration.com</h3>
                  <p>Send us your query anytime!</p>
               </div>
            </div>
         </div>
      </div>
      
   </div>
   <div class="">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.7068052145781!2d100.58279500000002!3d13.789287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf447bd9d85f8286c!2z4Lit4Liy4LiE4Liy4LijIOC4l-C4o-C4teC5gOC4reC5h-C4mSDguYLguK7guKXguJTguLTguYnguIcg4LmA4Liu4LmJ4Liy4Liq4LmM!5e0!3m2!1sen!2sth!4v1606469833664!5m2!1sen!2sth" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
</section>
<!-- ================ contact section end ================= -->