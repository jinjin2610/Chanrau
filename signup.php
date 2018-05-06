<?php
  require_once('header.php');
 ?>
<div id="sign_in">
    <div class="header_signup">
        <p>SIGN UP <i class="fa fa-user-plus" aria-hidden="true"></i></p>
    </div>
    <div class="info_signin">
        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> Username</p>
        <input type="text" name="" placeholder="Name that you choose for sign-in"/>
        <p><i class="fa fa-lock" aria-hidden="true"></i> Password</p>
        <input type="password"/>
         <p><i class="fa fa-lock" aria-hidden="true"></i> Confirm password</p>
         <input type="password"/>
        <a href="signin.php" style="background:tomato;margin-top:15px;"><input type="submit" value="SIGN UP" style="border:none;color:white;background:tomato;padding:10px 20px;"></a>
    </div>
</div>
  <?php
	require_once('footer.php');
 ?>