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

<form action="<?=site_url('/usuario/login')?>" method="post">
Usuario :<input type="text" name="usuario"/></br>
Clave :<input type="text" name="clave"/>
<input type="submit" value="Iniciar" /> 

</form>
<?php

?>
</body>
</html>