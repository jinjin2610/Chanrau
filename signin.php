<?php
  require_once('header.php');
 ?>
<div id="sign_in">
    <div class="header_signin">
        <p>SIGN IN <i class="fa fa-sign-in" aria-hidden="true"></i></p>
    </div>
    <div class="info_signin">
        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> Username</p>
        <input type="text" name=""/>
        <p><i class="fa fa-lock" aria-hidden="true"></i> Password</p>
        <input type="password"/>
        <a href="shop.php" style="background:tomato;margin:15px 0;"><input type="submit" value="SIGN IN" style="border:none;color:white;background:tomato;padding:10px 20px;"></a>
        <a href="signup.php"><p style="color:#80bfff;font-style:italic;font-size:80%;">no accounts yet?</p></a>
    </div>
</div>
  <?php
	require_once('footer.php');
 ?>