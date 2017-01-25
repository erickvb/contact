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


<!-- section localizacion top personaas-->


<section id="jm-main">
<div class="container-fluid">


<div class="row-fluid">
   <div id="jm-breadcrumbs" class="span12 ">
      <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
         <li class="active"> You are here: &#160;</li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="jm-dating/" class="pathway">
            <span itemprop="name">Home</span></a>
            <span class="divider">
            <img src="jm-dating/templates/jm-dating/images/system/arrow.png" alt="" /></span>
            <meta itemprop="position" content="1">
         </li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="jm-dating/meet" class="pathway">
            <span itemprop="name"> Meet somebody</span>
            </a>
            <span class="divider">
            <img src="jm-dating/templates/jm-dating/images/system/arrow.png" alt="" /></span>
            <meta itemprop="position" content="2">
         </li>
         <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="active">
            <span itemprop="name"> She's looking for Him</span>
            <meta itemprop="position" content="3">
         </li>
      </ul>
   </div>
</div>


<!-- INICIO LISTA -->
<div class="row-fluid">
   <div id="jm-content" class="span9 offset3">

   
      <div id="jm-maincontent">
<div id="dj-classifieds" class="clearfix djcftheme-jm-dating">
<div class="djcf-ad-top clearfix">
   <div class="moduletable">
      <div class="custom">
         <p style="margin: 0; text-align: center;"><a href="http://dj-extensions.com/faq/dj-classifieds-faq/how-to-place-a-banner-adsense-into-dj-classifieds" target="_blank"><img src="./detalle-ellas_files/banner.png" alt="Custom Banner" border="0"></a></p>
      </div>
   </div>
</div>
<div class="dj-item item_auction">
<div class="title_top info">
   <h2><?=$nick?></h2>
   <span class="type_button" style="display:inline-block;
      border:0px solid #DEDEDE;background:#6B4ECC;color:#FFFFFF;font-size: 10px;font-weight: bold;line-height: 20px;margin: 2px;padding: 0 5px;vertical-align:middle;">FREEKY</span><a class="fav_icon_link fav_icon_link_na" title="Add to Favourites" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids?task=addFavourite"><span class="fav_icon fav_icon_na"></span><span class="nfav_label">Add to Favourites</span></a>
   <span class="sb_top">
      <div class="addthis_toolbox addthis_default_style ">
         <a class="addthis_button_facebook addthis_button_preferred_1 at300b" title="Facebook" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#">
            <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px; background-color: rgb(59, 89, 152);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Facebook" alt="Facebook" class="at-icon at-icon-facebook" style="width: 16px; height: 16px;">
                  <g>
                     <path d="M21 6.144C20.656 6.096 19.472 6 18.097 6c-2.877 0-4.85 1.66-4.85 4.7v2.62H10v3.557h3.247V26h3.895v-9.123h3.234l.497-3.557h-3.73v-2.272c0-1.022.292-1.73 1.858-1.73h2V6.143z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
         </a>
         <a class="addthis_button_twitter addthis_button_preferred_2 at300b" title="Tweet" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#">
            <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px; background-color: rgb(29, 161, 242);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Twitter" alt="Twitter" class="at-icon at-icon-twitter" style="width: 16px; height: 16px;">
                  <g>
                     <path d="M26.67 9.38c-.78.35-1.63.58-2.51.69.9-.54 1.6-1.4 1.92-2.42-.85.5-1.78.87-2.78 1.06a4.38 4.38 0 0 0-7.57 3c0 .34.04.68.11 1-3.64-.18-6.86-1.93-9.02-4.57-.38.65-.59 1.4-.59 2.2 0 1.52.77 2.86 1.95 3.64-.72-.02-1.39-.22-1.98-.55v.06c0 2.12 1.51 3.89 3.51 4.29a4.37 4.37 0 0 1-1.97.07c.56 1.74 2.17 3 4.09 3.04a8.82 8.82 0 0 1-5.44 1.87c-.35 0-.7-.02-1.04-.06a12.43 12.43 0 0 0 6.71 1.97c8.05 0 12.45-6.67 12.45-12.45 0-.19-.01-.38-.01-.57.84-.62 1.58-1.39 2.17-2.27z"></path>
                  </g>
               </svg>
            </span>
         </a>
         <a class="addthis_button_email addthis_button_preferred_3 at300b" target="_blank" title="Email" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#">
            <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px; background-color: rgb(132, 132, 132);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Email" alt="Email" class="at-icon at-icon-email" style="width: 16px; height: 16px;">
                  <g>
                     <g fill-rule="evenodd"></g>
                     <path d="M26 22.006c0 1.1-.898 1.994-1.99 1.994H7.99C6.89 24 6 23.105 6 22.006V14.03c0-.55.388-.77.872-.486l7.887 4.6c.71.415 1.77.415 2.48 0l7.888-4.6c.482-.28.872-.052.872.485v7.976z"></path>
                     <path d="M26 9.994C26 8.894 25.11 8 24.01 8H7.99C6.9 8 6 8.893 6 9.994v.303c0 .553.385 1.226.86 1.504l8.655 5.05c.243.14.727.14.97 0l8.654-5.05c.474-.277.86-.943.86-1.503v-.303z"></path>
                  </g>
               </svg>
            </span>
         </a>
         <a class="addthis_button_print addthis_button_preferred_4 at300b" title="Print" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#">
            <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px; background-color: rgb(115, 138, 141);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Print" alt="Print" class="at-icon at-icon-print" style="width: 16px; height: 16px;">
                  <g>
                     <path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path>
                  </g>
               </svg>
            </span>
         </a>
         <a class="addthis_button_compact at300m" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#">
            <span class="at-icon-wrapper" style="line-height: 16px; height: 16px; width: 16px; background-color: rgb(255, 101, 80);">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" title="Compact" alt="Compact" class="at-icon at-icon-addthis" style="width: 16px; height: 16px;">
                  <g>
                     <path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path>
                  </g>
               </svg>
            </span>
         </a>
         <a class="addthis_counter addthis_bubble_style" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#" style="display: inline-block;"><a class="addthis_button_expanded" target="_blank" title="View more services" href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#">2</a><a class="atc_s addthis_button_compact"><span></span></a></a>
         <div class="atclear"></div>
      </div>
     
   </span>
</div>
<div class="dj-item-in">
<div class="djcf_images_generaldet_box">
   <div class="images_wrap" style="width:500px">
      <div class="images">
         <div class="djc_images">
            <div class="djc_mainimage">
               <a id="djc_mainimagelink" rel="djc_lb_0" title="Vivian White" href="./detalle-ellas_files/78_i14_thb.jpg">
               
               <img id="djc_mainimage" alt="Vivian White" src="<?=base_url()."public/static/image/".$fotoPrincipal?>">
               
               </a>
            </div>
            <!--  detalles imagenes-->
            <div class="djc_thumbnails djc_thumbs_gal3 " id="djc_thumbnails">
               <? foreach ($listaFotosPublico as $galeria){?>
               <div class="djc_thumbnail djc_thumb_row">
                  <a title="<?=$nombre?>" href="<?=base_url()."public/static/image/".$galeria->imagen?>">
                  <img alt="<?=$nombre?>" src="<?=base_url()."public/static/image/".$galeria->imagen?>">
                  </a>
               </div>
            <?}?>
              
               <div class="clear_both"></div>
            </div>
            
            <a id="djc_lb_0" rel="lightbox-djitem" title="i14" href="./detalle-ellas_files/78_i14_thb.jpg" style="display: none;"></a>
            <a id="djc_lb_1" rel="lightbox-djitem" title="headphone-mp3-music-3088-825x550" href="http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/images/item/78_headphone-mp3-music-3088-825x550_thb.jpg" style="display: none;"></a>
            <a id="djc_lb_2" rel="lightbox-djitem" title="backpack-blur-bus-1714-819x550" href="http://templates.joomla-monster.com/joomla30/jm-dating/components/com_djclassifieds/images/item/78_backpack-blur-bus-1714-819x550_thb.jpg" style="display: none;"></a>
         </div>
      </div>
   </div>
   <div class="general_det" style="width: 369px;">
      <div class="general_det_in">
         <div class="intro-description">
            <h2>My motto</h2>
            <div class="intro_desc_content">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</div>
         </div>
         <div class="row_gd">
            <div class="price_wrap">
               <span class="row_label">Price:</span>
               <span class="row_value">
               <span class="price_unit">$</span>46				</span>
               <a href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids#djauctions" class="auctions_link">
               Current bids					</a>
               <div class="clear_both"></div>
            </div>
         </div>
         <div class="row_gd djcf_contact">
            <div class="contact_mainrow">
               <span class="row_label">Contact</span>
               <span class="row_value">1-999-000-222<br><a target="_blank" rel="nofollow" href="http://www.joomla-monster.com/">www.joomla-monster.com</a></span>
            </div>
         </div>
         <div class="row_gd added">
            <span class="row_label">Added</span>
            <span class="row_value">
            2014-11-26 12:53:15				</span>
         </div>
         <div class="clear_both"></div>
         <div class="ask_form_abuse_outer">
            <button id="ask_form_button" class="button" type="button">Contact this advertiser</button>
            <button id="abuse_form_button" class="button" type="button">Report abuse</button>
            <div class="clear_both"></div>
         </div>
         <div class="clear_both"></div>
      </div>
   </div>
</div>
<div class="auction row_content" id="djauctions">
   <div class="auction_bids">
      <div class="bids_title">
         <h2>Current bids</h2>
      </div>
      <div class="bids_list">
         <div class="bids_row bids_row_title">
            <div class="bids_col bids_col_name">Name:</div>
            <div class="bids_col bids_col_date">Date:</div>
            <div class="bids_col bids_col_bid">Bid:</div>
            <div class="clear_both"></div>
         </div>
         <div class="bids_row">
            <div class="bids_col bids_col_name">
               John Williams
            </div>
            <div class="bids_col bids_col_date">2015-02-06 14:06:11</div>
            <div class="bids_col bids_col_bid">
               <span class="price_unit">$</span>46.00
            </div>
            <div class="clear_both"></div>
         </div>
         <div class="bids_row">
            <div class="bids_col bids_col_name">
               Jane Johnson
            </div>
            <div class="bids_col bids_col_date">2015-02-06 14:05:26</div>
            <div class="bids_col bids_col_bid">
               <span class="price_unit">$</span>45.00
            </div>
            <div class="clear_both"></div>
         </div>
         <div class="bids_row">
            <div class="bids_col bids_col_name">
               John Williams
            </div>
            <div class="bids_col bids_col_date">2015-02-06 14:04:51</div>
            <div class="bids_col bids_col_bid">
               <span class="price_unit">$</span>30.00
            </div>
            <div class="clear_both"></div>
         </div>
         <div class="clear_both"></div>
      </div>
   </div>
   <div class="bids_form" id="djbids_form">
      <div class="bids_login_info"><a href="http://templates.joomla-monster.com/joomla30/jm-dating/login-form?return=aHR0cDovL3RlbXBsYXRlcy5qb29tbGEtbW9uc3Rlci5jb20vam9vbWxhMzAvam0tZGF0aW5nL3NpbmdsZS1hZC12aWV3LXdpdGgtYmlkcw==">Login</a> to post bids</div>
      <div class="clear_both"></div>
   </div>
   <div id="djbid_alert"></div>
   <div id="djbid_message"></div>
</div>
<div class="description">
   <h2>About me</h2>
   <div class="intro_desc_content">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</div>
   <div class="desc_content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nisi dolor, convallis ac pellentesque nec, semper suscipit nisi. Aenean non tempus purus. Pellentesque aliquam tortor nec mi tempus eget fermentum quam placerat. Fusce vitae tortor justo. Suspendisse a vestibulum urna. Nullam rutrum erat consequat orci rutrum a suscipit mi pretium. Nam nisl lacus, vulputate vel cursus a, tincidunt non lorem.</p>
   </div>
</div>
<div class="custom_det">
   <h2>Specific details</h2>
   <div class="row row_interests">
      <span class="row_label">Interests:</span>
      <span class="row_value" >
      Music, Animals, Food, Travels, Party					</span>
   </div>
   <div class="row row_im_looking_for">
      <span class="row_label">I'm looking for:</span>
      <span class="row_value" >
      Love, Adventure, Friendship					</span>
   </div>
   <div class="row row_age">
      <span class="row_label">Age:</span>
      <span class="row_value" >
      28					</span>
   </div>
   <div class="row row_physique">
      <span class="row_label">Physique:</span>
      <span class="row_value" >
      slim					</span>
   </div>
   <div class="row row_hair_color">
      <span class="row_label">Hair color:</span>
      <span class="row_value" >
      dark					</span>
   </div>
   <div class="row row_height">
      <span class="row_label">Height:</span>
      <span class="row_value" >
      165 cm					</span>
   </div>
   <div class="row row_children">
      <span class="row_label">Children:</span>
      <span class="row_value" >
      1					</span>
   </div>
   <div class="row row_marital_status">
      <span class="row_label">Marital status:</span>
      <span class="row_value" >
      Married					</span>
   </div>
   <div class="row row_education">
      <span class="row_label">Education:</span>
      <span class="row_value" >
      High school					</span>
   </div>
   <div class="row row_language">
      <span class="row_label">Language:</span>
      <span class="row_value" >
      English					</span>
   </div>
   <div class="row row_profession">
      <span class="row_label">Profession:</span>
      <span class="row_value" >
      Own business					</span>
   </div>
   <div class="row row_alcohol">
      <span class="row_label">Alcohol</span>
      <span class="row_value" >
      Do not like					</span>
   </div>
   <div class="row row_cigarettes">
      <span class="row_label">Cigarettes:</span>
      <span class="row_value" >
      I like					</span>
   </div>
</div>
<div class="localization_det">
<h2>Location</h2>
<div class="row">
   <span class="row_value" style="display:inline-block;">
   New York, United States, North America<br>777 Avenue Of The Americas			</span>
</div>
<div id="google_map_box" style="display: block;">
   <div id="map" style="width: 320px; height: 210px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
      <div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
         <div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
            <div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                  <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                     <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 23px; top: -121px;"></div>
                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 23px; top: 135px;"></div>
                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -233px; top: -121px;"></div>
                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -233px; top: 135px;"></div>
                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 279px; top: -121px;"></div>
                        <div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 279px; top: 135px;"></div>
                     </div>
                  </div>
               </div>
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                  <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                     <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 23px; top: -121px;">
                           <canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                        </div>
                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 23px; top: 135px;"></div>
                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -233px; top: -121px;"></div>
                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -233px; top: 135px;"></div>
                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 279px; top: -121px;"></div>
                        <div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 279px; top: 135px;"></div>
                     </div>
                  </div>
               </div>
               <div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;">
                  <div style="overflow: hidden; width: 320px; height: 210px;"><img src="./detalle-ellas_files/StaticMapService.GetMapImage" style="width: 320px; height: 210px;"></div>
               </div>
               <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                  <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                     <div style="transform: translateZ(0px); position: absolute; left: 23px; top: -121px; transition: opacity 200ms ease-out;"><img src="./detalle-ellas_files/vt" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                     <div style="transform: translateZ(0px); position: absolute; left: 23px; top: 135px; transition: opacity 200ms ease-out;"><img src="./detalle-ellas_files/vt(1)" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                     <div style="transform: translateZ(0px); position: absolute; left: 279px; top: 135px; transition: opacity 200ms ease-out;"><img src="./detalle-ellas_files/vt(2)" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                     <div style="transform: translateZ(0px); position: absolute; left: -233px; top: 135px; transition: opacity 200ms ease-out;"><img src="./detalle-ellas_files/vt(3)" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                     <div style="transform: translateZ(0px); position: absolute; left: 279px; top: -121px; transition: opacity 200ms ease-out;"><img src="./detalle-ellas_files/vt(4)" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                     <div style="transform: translateZ(0px); position: absolute; left: -233px; top: -121px; transition: opacity 200ms ease-out;"><img src="./detalle-ellas_files/vt(5)" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                  </div>
               </div>
            </div>
            <div class="gm-style-pbc" style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;">
               <p class="gm-style-pbt">Para mover el mapa, utiliza dos dedos</p>
            </div>
            <div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div>
            <div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
               <div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
            </div>
         </div>
         <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
            <a target="_blank" href="https://maps.google.com/maps?ll=40.745281,-73.991422&amp;z=10&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=apiv3" title="Haz clic aquí para visualizar esta zona en Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
               <div style="width: 66px; height: 26px; cursor: pointer;"><img src="./detalle-ellas_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
            </a>
         </div>
         <div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 10px; top: 15px; background-color: white;">
            <div style="padding: 0px 0px 10px; font-size: 16px;">Datos de mapas</div>
            <div style="font-size: 13px;">Datos de mapas ©2016 Google</div>
            <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./detalle-ellas_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
         </div>
         <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 228px; bottom: 0px; width: 85px;">
            <div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;">
               <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                  <div style="width: 1px;"></div>
                  <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
               </div>
               <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Datos de mapas</a><span style="display: none;">Datos de mapas ©2016 Google</span></div>
            </div>
         </div>
         <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
            <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Datos de mapas ©2016 Google</div>
         </div>
         <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 142px; bottom: 0px;">
            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
               <div style="width: 1px;"></div>
               <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
            </div>
            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/es-ES_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Términos de uso</a></div>
         </div>
         <div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./detalle-ellas_files/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
         <div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
               <div style="width: 1px;"></div>
               <div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div>
            </div>
            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Informar a Google acerca de errores en las imágenes o en el mapa de carreteras" href="https://www.google.com/maps/@40.7452805,-73.9914222,10z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar de un error de Maps</a></div>
         </div>
         <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;">
            <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;">
               <div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);">
                  <div title="Acerca la imagen" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                     <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./detalle-ellas_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                  </div>
                  <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div>
                  <div title="Aleja la imagen" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                     <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./detalle-ellas_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                  </div>
               </div>
            </div>
            <div class="gm-svpc" controlwidth="28" controlheight="28" style="box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);">
               <div style="position: absolute; left: 1px; top: 1px;"></div>
               <div style="position: absolute; left: 1px; top: 1px;">
                  <div aria-label="Control del hombrecito naranja de Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="./detalle-ellas_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                  <div aria-label="El hombrecito naranja está en la parte superior del mapa." style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./detalle-ellas_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                  <div aria-label="Control del hombrecito naranja de Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./detalle-ellas_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
               </div>
            </div>
            <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
               <div title="Girar el mapa 90 grados" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"><img src="./detalle-ellas_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
               <div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./detalle-ellas_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
            </div>
         </div>
         <div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
            <div class="gm-style-mtc" style="float: left;">
               <div draggable="false" title="Muestra el callejero" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 28px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Mapa</div>
               <div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 34px; text-align: left; display: none; background-color: white;">
                  <div draggable="false" title="Muestra el callejero con relieve" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);">
                     <span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
                        <div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="./detalle-ellas_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div>
                     </span>
                     <label style="vertical-align: middle; cursor: pointer;">Relieve</label>
                  </div>
               </div>
            </div>
            <div class="gm-style-mtc" style="float: left;">
               <div draggable="false" title="Muestra las imágenes de satélite" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left-width: 0px; min-width: 37px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satélite</div>
               <div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 34px; text-align: left; display: none; background-color: white;">
                  <div draggable="false" title="Muestra las imágenes con los nombres de las calles" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);">
                     <span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);">
                        <div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="./detalle-ellas_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div>
                     </span>
                     <label style="vertical-align: middle; cursor: pointer;">Etiquetas</label>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="geo_coordinates">Geographic coordinates:<span>
      (40.7452805,-73.9914222)					</span>
   </div>
   <div class="map_info">Map location might not be exact</div>
   <form action="http://templates.joomla-monster.com/joomla30/jm-dating//index.php" method="post" class="gm_drive_dir" target="_blank">
      <label>Drive Directions</label>
      <input type="hidden" name="option" value="com_djclassifieds">
      <input type="hidden" name="view" value="item">
      <input type="hidden" name="task" value="driveDirections">
      <input type="hidden" name="id" value="78">
      <input type="text" class="inputbox" name="saddr" value="Enter address" onblur="if (this.value==&#39;&#39;) this.value=&#39;Enter address&#39;;" onfocus="if(this.value==&#39;Enter address&#39;) this.value=&#39;&#39;;">
      <input class="button" type="submit" value="Search">
      <input type="hidden" name="address" value="United States, New York, 777 Avenue Of The Americas">
   </form>
   <span class="gm_drive_dir_l"><button class="button" onclick="getDJDriveLocation()">Or use localization</button><span></span></span> 
   <div class="video_box">
      <h2>Video</h2>
      <div class="row">
         <span class="row_value">
            <div class="videoWrapper">
               <div class="videoWrapper-in">
                  
               </div>
            </div>
         </span>
      </div>
   </div>
   <div class="additional">
      <h2>Advert details</h2>
      <div class="row">
         <span class="row_label">Advert ID:</span>
         <span class="row_value">78</span>
      </div>
      <div class="row">
         <span class="row_label">Displayed:</span>
         <span class="row_value">2819</span>
      </div>
      <div class="row">
         <span class="row_label">Expires:</span>
         <span class="row_value">
         2025-12-03 12:50:00			</span>
      </div>
   </div>
   <div class="clear_both"></div>
   <div class="djcf_comments fb_comments_box">
      <h2>Comments</h2>
      <div id="fb-root" class=" fb_reset">
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div>
            
            </div>
         </div>
         <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div></div>
         </div>
      </div>
   </div>
</div>
      
  
      
   </div>
   <!--SLIDER LEFT-->
   <!-- FIN SLIDER -->
</div>
<!--Fin  lista-->
</div>
</section>
<!-- footer slider -->
<!-- fin footer slider -->

<!-- section red social-->

<? $this->load->view("layout/footer.php")?>
<script type="text/javascript">
$(document).ready(function(){
var myUser = new User();

});
</script>



</div>
</div>
</body>
</html>