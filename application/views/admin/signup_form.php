 
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
          Create Users
        </h2>
      </div>
            <?php
            //form validation
            echo validation_errors();
            ?>  	
            <div class="container login">
            <?php
            $attributes = array('class' => 'form-signin');   
            
          
            
            echo form_open('admin/create_member', $attributes);
           // echo '<h2 class="form-signin-heading">Create an account</h2>';
            echo form_input('first_name', set_value('first_name'), 'placeholder="First name"');
            echo form_input('last_name', set_value('last_name'), 'placeholder="Last name"');
            echo form_input('email_address', set_value('email_address'), 'placeholder="Email"');
            
            echo form_input('username', set_value('username'), 'placeholder="Username"');
            echo form_password('password', '', 'placeholder="Password"');
            echo form_password('password2', '', 'placeholder="Password confirm"');
            
            $options_membership_groups = array();    
            echo "<select style='width:230px;'  id='membership_groups' name='membership_groups' >";
            foreach ($usertypes as $array) {
            ?>              
                    <option value="<?=$array['id'];?>" ><?=$array['description'];?></option>          
            <?php
            }
            echo "</select><br>";
            
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