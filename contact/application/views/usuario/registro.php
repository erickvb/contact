<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
</head>
<body>
<?=site_url()?></br>
<?=site_url('/usuario/login')?></br>
<?=base_url()?></br>
<?=base_url('/usuario/login')?></br>
<?=anchor()?>

<form action="<?=site_url('/usuario/doRegistrar')?>" method="post">
Email :<input type="text" name="email"/></br>
Usuario :<input type="text" name="usuario"/></br>
Password :<input type="text" name="password"/></br>
<input type="submit" value="Registrar" /> 

</form>
<?php

?>
</body>
</html>