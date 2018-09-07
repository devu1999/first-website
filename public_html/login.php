<?php
session_start(); $username = $password = $userError = $passError = '';
if(isset($_POST['sub'])){
  $username = $_POST['username']; $password = $_POST['password'];
  if($username === 'admin' && $password === 'password'){
    $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
  }
  else if($username === 'mhrd' && $password === 'mhrd123'){
     $_SESSION['login'] = true; header('  LOCATION:mhrd.php'); die();
  }
  if($username !== 'admin' && $username !== 'mhrd')$userError = 'Invalid Username';
  if($password !== 'password' && $password !== 'mhrd123')$passError = 'Invalid Password';
}
?>
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <style type='text.css'>
       @import common.css;
     </style>
          <link rel="STYLESHEET" type="text/css" href="php/style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>

   </head>
<body>
  <legend>Login </legend>
  <form name='input' action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>

    *Username:<br>
    <label for='username'></label><input type='text' value='<?php echo $username;?>' id='username' name='username' />
    <div class='error'><?php echo $userError;?></div>
    *Password:<br>
    <label for='password'></label><input type='password' value='<?php echo $password;?>' id='password' name='password' />
    <div class='error'><?php echo $passError;?></div>
    <input type='submit' value='Submit' name='sub' />
  </form>
  <script type='text/javascript' src='common.js'></script>
</body>
</html>