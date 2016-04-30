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
 <h2>PROFILE</h2>

 <div>

<?=form_open('/usuario/login')?>
Presentacion: <input type="text" name="presentacion"/><br/>
Detalle: <textarea rows="4" ></textarea><br/>
Estatura: <input type="text" name="estatura"/> Peso:<input type="text" name="peso"/><br/>


Contextura :<select name="cboPais" id="">

<option value="peru">Peru</option>
<option value="peru">Colombia</option>
</select><br/>

Color de piel :<select name="cboUbicacion" id="">
<option value="peru">Peru</option>
<option value="peru">Colombia</option>
</select>
Color de ojo :<select name="cboCiudad" id="">
<option value="lima">Lima</option>
<option value="peru">San martin</option>
</select><br/>

Color de pelo :<select name="cboProvincia" id="">
<option value="lima">Lima</option>
<option value="tarapoto">Tarapoto</option>
</select><br/>

Medidas:<input type="text" name="busto" value="busto"/><input type="text" name="cintura" value="cintura"/>
<input type="text" name="cadera" value="cadera"/><br/>

Servicios: A <input type="checkbox" name="servicio"/> V <input type="checkbox" name="servicio"/> or<input type="checkbox" name="servicio"/><br/>
Precio : Moneda<select name="cboMoneda" id="">
<option value="soles">Soles</option>
<option value="dolares">Dolares</option>
</select>
<input  type="text" name="precioDesde" value="desde"/>  <input  type="text" name="precioHasta" value="hasta"/><br/>
Horario:<input type="text" name="horario"/><br/>

<input type="submit" value="Guardar" />
<input type="reset" value="Cancelar" />

<?=form_close()?>



 </div>
<? $this->load->view('layout/footer');?>

<script type="text/javascript">
   $(document).ready(function(){
	   
	 // initMain(); 
	 });
	 
	
	  
 </script> 
</body>
</html>
