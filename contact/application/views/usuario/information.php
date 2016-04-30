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

<div>
<?=form_open('/usuario/login')?>

Nacionalidad :<select name="cboPais" id="">
<option value="peru">Peru</option>
<option value="peru">Colombia</option>
</select><br/>

Ubicacion :<select name="cboUbicacion" id="">
<option value="peru">Peru</option>
<option value="peru">Colombia</option>
</select>
Ciudad :<select name="cboCiudad" id="">
<option value="lima">Lima</option>
<option value="peru">San martin</option>
</select><br/>

Provincia :<select name="cboProvincia" id="">
<option value="lima">Lima</option>
<option value="tarapoto">Tarapoto</option>
</select><br/>

Distrito :<select name="cboDistrito" id="">
<option value="miraflores">Peru</option>
<option value="tarapoto">tarapoto</option>
</select><br/>

Nombre:<input type="text" name="nombre"/><br/>
Apellidos:<input type="text" name="apellidos"/><br/>
Sexo: Varon <input  type="radio" name="sexo"/> Mujer <input  type="radio" name="sexo"/><br/>
Fecha Nacimiento:<input type="text" name="fechaNacimiento"/><br/>
Nick apodo:<input type="text" name="nickApodo"/><br/>
Email personal:<input type="text" name="email"/><br/>
Telefono personal:<input type="text" name="telefono"/><br/>
<input type="submit" value="Guardar" />
<input type="reset" value="Cancelar" />

<?=form_close()?>
</div>

<script type="text/javascript">
   $(document).ready(function(){
	   
	 // initMain(); 
	 });
	 
	
	  
 </script>
 <? $this->load->view('layout/footer');?>
