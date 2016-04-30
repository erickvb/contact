<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
<? $this->load->view("layout/header");?>
</head>
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
<? $this->load->view("layout/top-search.php");?>

<section id="jm-top2" class="">
<div class="container-fluid">
	<div class="row-fluid jm-flexiblock jm-top2">
	<div class="span12"  data-default="span12" data-wide="span12" data-normal="span12" data-xtablet="span12" data-tablet="span100" data-mobile="span100">
	<div	class="row-fluid">
<div class="span0"><div
class="jm-module  title-border2-ms"><div
class="jm-module-in"><div
class="jm-title-wrap"><h3 class="jm-title "><span>Start</span> dating today !</h3></div><div
class="jm-module-content clearfix "><div
class="custom title-border2-ms"  ><div
class="jm-box col3"><div
class="jm-box-in">

<a class="jm-box-space" href="<?=site_url('/register')?>"> 

<span class="icon"><img src="<?=base_url()?>public/jm-dating/images/modules/front/icon1.png" alt="" /></span><span
class="title">Register for FREE to join ads only</span>
</a>
</div>

<div class="jm-box-in"><a
class="jm-box-space" href="jm-dating/join-us"> 
<span class="icon">
<img src="<?=base_url()?>public/jm-dating/images/modules/front/icon2.png" alt="" /></span>
<span class="title">Add your interests and photos</span></a>
</div>

<div class="jm-box-in">
<a class="jm-box-space" href="<?=base_url()?>public/jm-dating/meet-somebody/ads/blog"> 
<span class="icon">
<img src="<?=base_url()?>public/jm-dating/images/modules/front/icon3.png" alt="" /></span><span
class="title">Meet singles with similar interests</span></a></div></div></div></div></div></div></div></div></div></div></div>
</section>

<!-- section localizacion top personaas-->

<!-- section red social-->

<? $this->load->view("layout/footer.php")?>
</div>
</div>
</body>
</html>