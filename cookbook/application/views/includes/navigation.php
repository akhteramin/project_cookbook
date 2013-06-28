<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="navbar">
    <div class="navbar-inner">
        
		<a class="brand" href="<?php echo site_url(''); ?>"><img src="..img/new.png" alt="" class="img-circle pull-right"/>
		
		COOKBOOK 
		</a>
		
		<?php
		 $is_logged_in_user = $this->session->userdata('is_logged_in_user');
			 $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');
            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //NOT LOGGED  IN admin and user
            ?>
		<div class="offset4">  
 <?php
        echo form_open('user_auth/login');
        ?>
		
<fieldset>
            <label>
            Username
            <input type="text" placeholder="username" name="username">
           Password
            <input type="password" placeholder="Password" name="password">	</label>		
        </fieldset>    
 <a data-toggle="modal" href="#registration">Not a Member, Join for FREE!</a> 	
 <a href="<?php echo site_url('forgot_password/show_forgot_password');?>">(Forgot Password?)</a> 	
 <input type="submit" class ="btn btn-success" value="Login" />
          <?php echo form_close(); ?>	
	  
</div>  
<?php } 

else {?>
</br></br></br></br>
<?php } ?>
<div class="offset6">  
<div class="fb-like" data-send="true" data-href="<?php echo base_url(); ?>" data-width="450" data-show-faces="true"></div>
  <div class="fb-comment" data-send="true" data-href="<?php echo base_url(); ?>" data-width="450" data-show-faces="true"></div>
  </div>
		</br>
        <ul class="nav">

            
            <?php
           
           

            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //NOT LOGGED  IN admin and user
            ?>
			
			    <li id="home_navbar"><a href="<?php echo site_url('');?>">HOME</a></li> 
				<li id="contact_us_navbar"><a href="<?php echo site_url('contact_us');?>">Contact Us</a></li>
				<li id="archieve_navbar"><a data-toggle="modal" href="#registration">Register</a></li>
                <li id="archieve_navbar"><a data-toggle="modal" href="#login">Login</a></li>
				 

          <?php echo form_close(); ?>	
</div>

                
            <?php
            } else if((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (isset($is_logged_in_user) || $is_logged_in_user = true)) {
                //USER LOGGED IN
            ?>

             
                <li id="home_navbar"><a href="<?php echo site_url('');?>">HOME</a></li>
               				
				<li id="recipe_navbar"><a href="<?php echo site_url('show_recipe/show_recipe_details');?>">Recipe</a></li>
				<li id="recipe_books_navbar"><a href="<?php echo site_url('show_recipe/show_recipe_books');?>">Recipe Books</a></li>
				<li id="recipe_books_navbar"><a href="<?php echo site_url('');?>">Events</a></li>
				<li class="dropdown"  id="topics_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      FAQ
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="<?php echo site_url('');?>">Add question</a></li>
                          <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('');?>">My question</a></li>
						   <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('');?>">View others</a></li>
                    </ul>
					
                </li>
				<li id="settings_navbar"><a href="<?php echo site_url('setting/user_setting');?>">Settings</a></li>
				
				

			<?php
			}
             else if((isset($is_logged_in_admin) || $is_logged_in_admin = true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //ADMIN LOGGED IN
            ?>

             
                <li id="home_navbar"><a href="<?php echo site_url('');?>">HOME</a></li>
                <li id="profile_navbar"><a href="<?php echo site_url('admin_add_recipe/show_add_recipe');?>">Add Recipe</a></li>
				 <li id="add_events_navbar"><a href="<?php echo site_url('');?>">Add events</a></li>
				
				<li id="archieve_navbar"><a href="<?php echo site_url('admin_add_books/show_add_books');?>">Add books</a></li>
				
				<li id="member_navbar"><a href="<?php echo site_url('approve_order/get_order_info');?>">Approve Order</a></li>
				
				



            <?php
            }
            ?>


        </ul>
    </div>
	<div class="span6 offset6">
			<?php
        echo form_open('search/search_recipe');
        ?>
<fieldset>
            
            <label>Select Option
            <select name="search_option" style="width:130px;" font="black" color="black">

                <option value= "recipe" >
                <?php echo "Recipe"; ?></option>

                <option value= "recipe_books" >
                     <?php echo "Recipe Books"; ?></option>
                <option value= "user" >
                     <?php echo "User"; ?></option>
            </select>
            <input type="text" placeholder="search" name="search"/></label>

			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="search" />
  <?php echo form_close(); ?>		
 </div>
</div>
 
<div id="registration" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" color="red"  style="color: green;" >Close</a>  
<h3>Registration</h3>  
</div>  
<div class="modal-body">  
 <?php
        echo form_open('registration/insert_registration_data');
        ?>
           <fieldset>
            
            <label>Username</label>
            <input type="text" placeholder="username" name="username">
			<label>Email</label>
            <input type="text" placeholder="Email" name="email">
            <label>Password</label>
            <input type="password" placeholder="Password" name="password">
			<label>Confirm Password</label>
            <input type="password" placeholder="Confirm Password" name="confirm_password">
            <br/>
			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="Create" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<!--a href="#" class="btn btn-success">Submit</a-->  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  
<div id="login" class="modal hide fade in" style="display: none; ">  
<div class="modal-header">  
<a class="close" data-dismiss="modal" style="color: green;">Close</a>  
<h3>Login</h3>  
</div>  
<div class="modal-body">  
 <?php
        echo form_open('user_auth/login');
        ?>
<fieldset>
            
            <label>Username</label>
            <input type="text" placeholder="username" name="username">
            <label>Password</label>
            <input type="password" placeholder="Password" name="password">
            <br/>
			

        </fieldset>    
 <input type="submit" class ="btn btn-success" value="Login" />
          <?php echo form_close(); ?>		
</div>  
<div class="modal-footer">  
<a href="<?php echo site_url('forgot_password/show_forgot_password');?>" class="btn btn-success">Forgot Password?</a>  
<!--a href="#" class="btn" data-dismiss="modal">Cancel</a-->  
</div>  
</div>  

		