<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? $this->load->view('layout/header');?>
 
</head>
<body>
<? $this->load->view('layout/menu');?>
<div id="wrapper">
<? $this->load->view('layout/sidebar');?>
<div class="wait_operacion"></div>
<? //$this->load->view('template/ofertas');?>
<div class="wait_operacion"></div>
</div>
<? $this->load->view('layout/footer');?>

<script type="text/javascript">
   $(document).ready(function(){
	   
	 // initMain(); 
	 });
	 
	
	  
 </script>
 <div>
 <h2>PROFILE</h2>
 <div>
 
 <a href="#">mi cuenta</a><br>
 <a>mi informacion</a><br>
 <a>mi pefil</a><br>
 <a>mis fotos</a><br>
 <a>licencia</a><br>
 <a>seguridad</a>
 </div>
 
 </div>
</body>
</html>
