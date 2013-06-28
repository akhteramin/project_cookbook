

                            <?php
            $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');
            $is_logged_in_user = $this->session->userdata('is_logged_in_user');

            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //NOT LOGGED  IN admin and employee
            ?>





            <?php
            } else {
                //LOGGED IN
            ?>

                      <?php if (!isset($is_logged_in_admin) || $is_logged_in_admin != true)
                            {
                          $name=$this->session->userdata('username');
                          //user is logged in user nabbars
                            ?>



          <div class="well sidebar-nav">
            <ul class="nav nav-list">
			 <li id="profile_navbar"><a href="<?php echo site_url('profile/get_profile_info')?>">Profile</a></li>
			 <li class="nav-header"><a href="<?php echo site_url('favourites/user_favourites'); ?>"><?php  echo $name."'s Favourites"; ?></li>
			 
              <li class="nav-header"><a href="<?php echo site_url('order/order_view'); ?>"><?php  echo $name."'s Order List"; ?></a></li>
              <li id="issued_books_navbar"><a href="<?php echo site_url('favourites/approved_orderlist'); ?>">Approved Ordered Books</a></li>
             <li id="user_fine_navbar"><a href="<?php echo site_url('favourites/unapproved_orderlist'); ?>">Unapproved Ordered Books</a></li>
			  <li class="nav-header"><?php  echo "Edit Profile"; ?></li>
              <li id="edit_profile_navbar"><a  href="<?php echo site_url('setting/user_setting'); ?>">Setting</a></li>
			   <li id="edit_profile_navbar"><a  href="<?php echo site_url('user_auth/logout'); ?>">Log Out</a></li>


            </ul>
          </div><!--/.well -->






                                  <?php } else  {
                      //admin is logged in
                      ?>

                    <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Preview</li>
              <li  id="book_list_admin_navbar"><a href="<?php echo site_url('admin_add_recipe/show_recipe_details'); ?>">Recipe List</a></li>
             <li id="booking_data_navbar"><a href="<?php echo site_url('admin_add_recipe/show_recipe_books'); ?>">Recipe Books List</a></li>
              <li id="booking_extend_navbar"><a href="<?php echo site_url(''); ?>">Event List</a></li>
              <li class="nav-header">Manage users</li>
              <li id="user_list_navbar"><a href="<?php echo site_url('user_list/show_user_list'); ?>">User list</a></li>
              <li class="nav-header">Settings</li>
              <li id="edit_profile_navbar"><a href="<?php echo site_url('admin_add_recipe/change_password'); ?>">Change password</a></li>
			  <li id="logout_navbar"><a href="<?php echo site_url('admin_auth/logout');?>"> Log Out!! </a></li>
            </ul>
          </div><!--/.well -->




                          <?php  }?>

                          <?php
                }
                ?>









