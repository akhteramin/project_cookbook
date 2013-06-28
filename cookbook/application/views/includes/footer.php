
  <footer class="footer">
 
<div>
<div>
<div>
<p> </p>
<p> </p>

<center class="">
Designed & Developed By
<a href="">CODEVICTOR Official Team</a>
</center>
<center> © copyright reserved by CODEVICTOR.</br>
  <?php
           
            $is_logged_in_user = $this->session->userdata('is_logged_in_user');
			 $is_logged_in_admin = $this->session->userdata('is_logged_in_admin');

            if ((!isset($is_logged_in_admin) || $is_logged_in_admin != true) && (!isset($is_logged_in_user) || $is_logged_in_user != true)) {
                //NOT LOGGED  IN admin and user
            ?>

<?php }?>
<p></p>
</div>
</div>
</div>
</footer>
  </div>
		
</html>