
<div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a>
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a>
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">New</a>
        </li>
      </ul>

      <div class="page-header">
        <h2>
          Create Employee
        </h2>
      </div>
            <?php
            //form validation
            echo validation_errors();
            ?>
            <div class="container login">
            <?php
            $attributes = array('class' => 'form-signin');



            echo form_open('admin_employee/create_member', $attributes);
           // echo '<h2 class="form-signin-heading">Create an account</h2>';
            echo form_input('full_name', set_value('full_name'), 'placeholder="Full name"', 'required="required"');
            echo form_input('position_name', set_value('position_name'), 'placeholder="Position"');
            echo form_input('email_address', set_value('email_address'), 'placeholder="Email"');

            echo form_input('mobile', set_value('mobile'), 'placeholder="Mobile"');




           // echo form_submit('submit', 'submit', 'class="btn btn-large btn-primary"');
            ?>
                    <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn" type="reset" onclick="window.location='../';">Back</button>
                  </div>

            <?php
            echo form_close();
            ?>
            </div>

    </div>
