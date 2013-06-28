
<div class="navbar">
    <div class="navbar-inner">
	
	<img src="..img/new.png" alt="" class="img-circle pull-right"/>
	<div class="span3 offset5" >
	
        <a class="brand" href="<?php echo site_url(); ?>">
		<font face="Digital" size="7" color="red">I C </font>
		 <img border="0" src="<?php echo base_url().'/img/logo.png'; ?>" >
		<font face="Digital" size="7" color="red">N</font>
		</a>
		</div>
		</br></br></br>
        <ul class="nav">

            
            <?php
           
            $is_logged_in_user = $this->session->userdata('is_logged_in_user');
			 $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');

            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //NOT LOGGED  IN admin and user
            ?>
			
			    <li id="home_navbar"><a href="<?php echo site_url('welcome');?>">HOME</a></li> 
				<li id="home_navbar"><a href="<?php echo site_url('');?>">ICON SPEECH</a></li>
				<li id="archieve_navbar"><a href="<?php echo site_url('archieve/show_archieve_image');?>">Archieve</a></li>
				<li id="contact_navbar"><a href="<?php echo site_url('contact_us');?>">Contact Us</a></li>
				<li id="registration_navbar"><a href="<?php echo site_url('registration/registration_form');?>">Registration</a></li>
                <li class="dropdown"  id="topics_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      LogIn
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="<?php echo site_url('user_auth/login');?>">Already A Member</a></li>
                          <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('registration/registration_form');?>">Registration</a></li>
                    </ul>

                </li>
				 


                
            <?php
            } else if((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (isset($is_logged_in_user) || $is_logged_in_user = true)) {
                //USER LOGGED IN
            ?>

             
                <li id="home_navbar"><a href="<?php echo site_url('Welcome');?>">HOME</a></li>
				 <li id="home_navbar"><a href="<?php echo site_url('');?>">Comitte</a></li>
				
                <li id="profile_navbar"><a href="<?php echo site_url('profile/get_profile_info/'.$this->session->userdata('username'))?>">Profile</a></li>				
				<li id="archieve_navbar"><a href="<?php echo site_url('archieve/show_archieve_image');?>">Archieve</a></li>
				<li id="events_navbar"><a href="<?php echo site_url('show_events/show_events_user');?>">Events</a></li>
				<li class="dropdown"  id="topics_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Discussion
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="<?php echo site_url('topics/add_topics');?>">Add Topics</a></li>
                          <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('topics/my_topics');?>">My Topics</a></li>
						   <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('topics/show_topics');?>">View Topics</a></li>
                    </ul>

                </li>
				<li class="dropdown"  id="message_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Message
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
					<li><a tabindex="-1" href="<?php echo site_url('message/inbox_message');?>">Inbox</a></li>
                          <li class="divider"></li>
                        <li><a tabindex="-1" href="<?php echo site_url('message/send_message_new');?>">Write new</a></li>
                          <li class="divider"></li>
                          <li><a tabindex="-1" href="<?php echo site_url('message/sent_message');?>">Sent Message</a></li>
                    </ul>

                </li>
				<li id="member_navbar"><a href="<?php echo site_url('show_member/show_member_list');?>">Show Members</a></li>
				<li id="member_navbar"><a href="<?php echo site_url('setting/user_setting_tab');?>">Settings</a></li>
				<li id="logout_navbar"><a href="<?php echo site_url('user_auth/logout');?>"> Log Out!! </a></li>



            
			<?php
            } else if((isset($is_logged_in_admin) || $is_logged_in_admin = true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //ADMIN LOGGED IN
            ?>

             
                <li id="home_navbar"><a href="<?php echo site_url('welcome');?>">HOME</a></li>
                <li id="profile_navbar"><a href="">Upload Image</a></li>				
				<li id="archieve_navbar"><a href="<?php echo site_url('archieve/show_archieve_image');?>">Archieve</a></li>
				<li id="event_navbar"><a href="<?php echo site_url('approve_member/show_membership_request_list');?>">Approve Member</a></li>
				<li class="dropdown"  id="topics_navbar">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Discussions
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        
                          <li><a tabindex="-1" href="<?php echo site_url('topics/show_topics');?>">View Topics</a></li>
						
                    </ul>

                </li>
				
				<li id="member_navbar"><a href="<?php echo site_url('show_member/show_member_list');?>">Show Members</a></li>
				<li id="member_navbar"><a href="<?php echo site_url('admin_setting/change_password');?>">Settings</a></li>
				
				<li id="logout_navbar"><a href="<?php echo site_url('admin_auth/logout');?>"> Log Out!! </a></li>



            <?php
            }
            ?>


        </ul>
    </div>
</div>


		