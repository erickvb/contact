<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
<? $this->load->view("layout/header");?>
</head>
<style>
.select--sm {
    height: 32px;
    font-size: 1em;
    line-height: 1.28572;
 }
 
 input{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    outline: 0;
    border: 0;
    background: transparent;
    vertical-align: baseline;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}  
.select{
    display: inline-block;
    position: relative;
    width: 100%;
    min-width: 40px;
    margin: 5px 0;
    vertical-align: middle;
    text-align: left;
    font: 1.143em/1.25 'FS Albert Pro Web',Helvetica,Arial,sans-serif;
}
</style>
<body class=" fixed header-bg sticky-bar allpage-img off-canvas-right">

<div id="jm-allpage">
<div id="jm-allpage-in">

<? //ADD MOVIL?>

<!--TOP MENU-->
<? $this->load->view("layout/top-menu.php");?>
<!--FIN MENU TOP-->
<!--INICIO MENU-->
<? $this->load->view("layout/menu.php");?>
<!--FIN  MENU-->
<!--INICIO HEADER-->
<? //include("header-large.php");?>
<!-- fin header-->


<section id="jm-main">
<div class="container-fluid">

<div class="row-fluid">
<div id="jm-breadcrumbs" class="span12 ">

<ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
	<li class="active">You are here: &#160;</li>
	<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a itemprop="item" href="jm-dating/" class="pathway">
		<span itemprop="name"> Home </span>
		</a>
		<span class="divider">
		<img src="<?=base_url()?>public/jm-dating/templates/jm-dating/images/system/arrow.png" alt="" /></span>
		 <meta itemprop="position" content="1" />
	</li>
	
	<li  class="active">
		<span > Register </span>
	
	</li>
</ul>

</div>
</div>

<div class="row-fluid">
<div id="jm-content" class="span9 offset3" data-xtablet="span12" data-tablet="span12" data-mobile="span12">
<div id="jm-maincontent"><div
class="login">
<div class="page-header"><h1>Perfil</h1> </div>

<?=form_open('/account/doRegisterProfile',array('class' => 'form-validate form-horizontal well', 'id' => 'frmProfileEdit'))?>
<fieldset>
<div class="control-group">
	<div class="control-label">
	<label id="presentacion-lbl" for="presentacion" class="required">
	Presentaci&oacute;n 
	<span class="star">&#160;*</span></label>
	</div>
	<div class="controls">
<!-- 	<input type="text" name="email" id="email" value="" class="validate-username required" size="25" required aria-required="true" autofocus /> -->
 	<input type="text" name="presentacion" placeholder="Titulo presentacion"/>
	
	</div>
</div>
<div class="control-group">
	<div class="control-label">
		<label id="detalle-lbl" for="detalle">
			Detalle <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<textarea rows="4" name="detalle" placeholder="Detalle su presentacion"></textarea>
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Peso <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboPeso" id="" placeholder="Tu peso">
		<option value="60">60kg</option>
		<option value="70">70kg</option>
		</select>
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="peso-lbl" for="peso" class="required">
			 Estatura <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboEstatura" id="" placeholder="Tu estatura">
		<option value="0">Seleccione</option>
		<option value="1390">&lt;139 cm</option>
		<option value="1400">140 cm (&lt;4' 7'')</option>
		<option value="1410">141 cm</option>
		<option value="1420">142 cm (4' 8'')</option>
		<option value="1430">143 cm</option>
		<option value="1440">144 cm</option>
		<option value="1450">145 cm (4' 9'')</option>
		<option value="1460">146 cm</option>
		<option value="1470">147 cm (4' 10'')</option>
		<option value="1480">148 cm</option>
		<option value="1490">149 cm</option>
		<option value="1500">150 cm (4' 11'')</option>
		<option value="1510">151 cm</option>
		<option value="1520">152 cm (5' 0'')</option> 
	 <option value="1530">153 cm</option> 
	 <option value="1540">154 cm</option> 
	 <option value="1550">155 cm (5' 1'')</option> 
	 <option value="1560">156 cm</option> 
	 <option value="1570">157 cm (5' 2'')</option> 
	 <option value="1580">158 cm</option> 
	 <option value="1590">159 cm</option> 
	 <option value="1600">160 cm (5' 3'')</option> 
	 <option value="1610">161 cm</option> 
	 <option value="1620">162 cm</option> 
	 <option value="1630">163 cm (5' 4'')</option> 
	 <option value="1640">164 cm</option> 
	 <option value="1650">165 cm (5' 5'')</option> 
	 <option value="1660">166 cm</option> 
	 <option value="1670">167 cm</option> 
	 <option value="1680">168 cm (5' 6'')</option> 
	 <option value="1690">169 cm</option> 
	 <option value="1700">170 cm (5' 7'')</option>
	  <option value="1710">171 cm</option> 
	  <option value="1720">172 cm</option> 
	  <option value="1730">173 cm (5' 8'')</option> 
	  <option value="1740">174 cm</option> 
	  <option value="1750">175 cm (5' 9'')</option> 
	  <option value="1760">176 cm</option> 
	  <option value="1770">177 cm</option> 
	  <option value="1780">178 cm (5' 10'')</option> 
	  <option value="1790">179 cm</option> 
	  <option value="1800">180 cm (5' 11'')</option> 
	  <option value="1810">181 cm</option> 
	  <option value="1820">182 cm</option> 
	  <option value="1830">183 cm (6' 0'')</option> 
	  <option value="1840">184 cm</option> 
	  <option value="1850">185 cm (6' 1'')</option> 
	  <option value="1860">186 cm</option> 
	  <option value="1870">187 cm</option> 
	  <option value="1880">188 cm (6' 2'')</option> 
	  <option value="1890">189 cm</option> 
	  <option value="1900">190 cm</option> 
	  <option value="1910">191 cm (6' 3'')</option> 
	  <option value="1920">192 cm</option> 
	  <option value="1930">193 cm (6' 4'')</option> 
	  <option value="1940">194 cm</option> 
	  <option value="1950">195 cm</option> 
	  <option value="1960">196 cm (6' 5'')</option> 
	  <option value="1970">197 cm</option> 
	  <option value="1980">198 cm (6' 6'')</option> 
	  <option value="1990">199 cm</option> 
	  <option value="2000">200 cm</option> 
	  <option value="2010">201 cm (6' 7'')</option> 
	  <option value="2020">202 cm</option> 
	  <option value="2030">203 cm (6' 8'')</option> 
	  <option value="2040">204 cm</option> 
	  <option value="2050">205 cm</option> 
	  <option value="2060">206 cm (6' 9'')</option> 
	  <option value="2070">207 cm</option> 
	  <option value="2080">208 cm (6' 10'')</option> 
	  <option value="2090">209 cm</option> 
	  <option value="2100">210 cm</option> 
	  <option value="2110">211 cm (6' 11'')</option> 
	  <option value="2120">212 cm</option> 
	  <option value="2130">213 cm (7' 0'')</option> 
	  <option value="2140">214 cm</option> 
	  <option value="2150">215 cm</option> 
	  <option value="2160">216 cm (7' 1'')</option> 
	  <option value="2170">217 cm</option> 
	  <option value="2180">218 cm (7' 2'')</option> 
	  <option value="2190">219 cm</option> 
	  <option value="2200">&gt;220 cm (&gt;7' 3'')</option> 
	 </select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="contextura-lbl" for="contextura" class="required">
			 Contextura <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboContextura" id="" placeholder="Tu contextura">
		<option value="seleccione">Seleccione</option>
		<option value="ancho">Ancho</option>
		<option value="delgado">Delgado</option>
		</select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="color-lbl" for="Color" class="required">
			 Color de piel <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboColorPiel" id="" >
		<option value="seleccione">Seleccione</option>
		<option value="blanco">Blanco</option>
		<option value="trigenio">Trigenio</option>
		</select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="color-lbl" for="Color" class="required">
			 Color de ojo <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboColorOjo" id="">
		<option value="seleccione">Seleccione</option>
		<option value="marron">Marron</option>
		<option value="negro">Negro</option>
		</select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="color-lbl" for="Color" class="required">
			 Color de pelo <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<select name="cboColorCabello" id="" >
		<option value="seleccione">Seleccione</option>
		<option value="marron">Marron</option>
		<option value="rubio">Rubio</option>
		</select>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="bustolbl" for="busto" class="required">
			 Medidas <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
		<input type="text" name="busto" placeholder="busto"/>
		<input type="text" name="cintura" placeholder="cintura"/>
		<input type="text" name="cadera" placeholder="cadera"/>
	</div>
</div>


<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Servicios <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	A <input type="checkbox" name="a"/> V <input type="checkbox" name="v"/> OR<input type="checkbox" name="or"/>
	</div>
</div>

<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Precio <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<select name="cboMoneda" id="">
	<option value="seleccione">Seleccione</option>
	<option value="soles">Soles</option>
	<option value="dolares">Dolares</option>
	</select>
	<input  type="text" name="precioDesde" placeholder="desde"/> 
	 <input  type="text" name="precioHasta" placeholder="hasta"/>
	</div>
</div>



<div class="control-group">
	<div class="control-label">
		<label id="estatura-lbl" for="estatura" class="required">
			Horario <span class="star">&#160;*</span>
		</label>
	</div>
	<div class="controls">
	<input type="text" name="horario"/>
	</div>
</div>

<div class="control-group">
	<div class="controls">
	<button type="submit" class="btn btn-primary" id="btnSaveProfile">Guardar</button>
	<button type="submit" class="btn btn-primary">Cancelar</button>
	</div>
</div>

</fieldset>
<?=form_close()?>
</div>
</div>
</div>

<aside id="jm-left" class="span3 offset-12" data-xtablet="span12 first-span" data-tablet="span12 first-span" data-mobile="span12 first-span">

<div class="">

<div class="row-fluid">
	<div class="span0">
	<div class="jm-module ">
	<div class="jm-module-in">
	
	<div class="jm-title-wrap">
	 <h3 class="jm-title "><span>Mi cuenta</span></h3>
	</div>
	<div class="jm-module-content clearfix ">
		<ul class="nav menu">
			<li class="item-646"><a href="<?=site_url('/account/information')?>" >Mi informaci&oacute;n</a></li>
			<li class="item-572  current active"><a href="<?=site_url('/user/profile')?>" >Mi perfil</a></li>
			<li class="item-573"><a href="jm-dating/registration-form" >Mis fotos</a></li>
			<li class="item-647"><a href="jm-dating/search" >Licencia</a></li>
			<li class="item-589"><a href="jm-dating/user-profile" >Seguridad</a></li>
		</ul>
	
	</div>
	</div>
	
	</div>
	</div>

</div>
</div>
</aside>

</div>
</div>
</section>

<!-- section localizacion top personaas-->

<!-- section red social-->

<? $this->load->view("layout/footer.php")?>
</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	var user = new User();
	user.init();
});
</script>
</html>



