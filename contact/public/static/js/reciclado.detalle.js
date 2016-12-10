(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script> 
				<div class="fb-comments fb_iframe_widget" data-href="http://templates.joomla-monster.com/joomla30/jm-dating/single-ad-view-with-bids" data-num-posts="10" data-width="550px" fb-xfbml-state="rendered"><span style="height: 180px; width: 550px;"><iframe id="f3414936c1189" name="f7f24e4cb60ee4" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="./detalle-ellas_files/comments.html" style="border: none; overflow: hidden; height: 180px; width: 550px;"></iframe></span></div></div><div class="clear_both"></div></div></div>
				<div class="djcf-ad-item-bottom clearfix"><div class="moduletable"><div class="custom"><p style="margin: 0; text-align: center;">
				<a href="http://dj-extensions.com/faq/dj-classifieds-faq/how-to-place-a-banner-adsense-into-dj-classifieds" target="_blank">
				<img src="./detalle-ellas_files/banner.png" alt="Custom Banner" border="0"></a></p>
				</div></div></div>
				</div> 
				<script type="text/javascript">this.DJCFShowValueOnClick = function (){
			var fields = document.id('dj-classifieds').getElements('.djsvoc');
			if(fields) {
				fields.each(function(field,index){
					field.addEvent('click', function(evt) {
						var f_rel = field.getProperty('rel');
						if(f_rel){
							field.innerHTML = '<a href="'+f_rel+'">'+field.title+'</a>';
						}else{
							field.innerHTML = field.title;
						}							
						return true;
					});
				});				
			}			
		}; 
								 
		window.addEvent('domready', function(){		
			DJCFShowValueOnClick();
		});
		
		
		
		function getDJDriveLocation(){
			  if(navigator.geolocation){
				  navigator.geolocation.getCurrentPosition(showDJDrivePosition);
			   }else{
				   x.innerHTML="Geolocation is not supported by this browser";}
			 }
			function showDJDrivePosition(position){
			  	var exdate=new Date();
			  	exdate.setDate(exdate.getDate() + 1);
				var lc = position.coords.latitude+'_'+position.coords.longitude;
				var ll = position.coords.latitude+','+position.coords.longitude;
			  	document.cookie = "djcf_latlon=" + lc + "; expires=" + exdate.toUTCString();						  	
			  	window.open("http://maps.google.com/maps?saddr="+ll+"&daddr=United States, New York, 777 Avenue Of The Americas");						  							  				 
		  	}</script> </div></div> <script type="text/javascript">window.addEvent('load', function(){ 
mapaStart();
});
  var map;
var map_marker = new google.maps.InfoWindow();
var geokoder = new google.maps.Geocoder();

function addMarker(position,txt,icon)
{
  var MarkerOpt =  
  { 
      position: position, 
      icon: icon,	
      map: map
  } 
  var marker = new google.maps.Marker(MarkerOpt);
  marker.txt=txt;
   
  google.maps.event.addListener(marker,"click",function()
  {
      map_marker.setContent(marker.txt);
      map_marker.open(map,marker);
  });
  return marker;
}
  	
function mapaStart()    
{   		 	 
   	              		 var icon = '';  	
      	                
   	
						document.getElementById("google_map_box").style.display='block';
		var adLatlng = new google.maps.LatLng(40.745280500000000,-73.991422200000000);
		    var MapOptions = {
		       zoom: 10,
		  		center: adLatlng,
		  		mapTypeId: google.maps.MapTypeId.ROADMAP,
		  		navigationControl: true
		    };
		    map = new google.maps.Map(document.getElementById("map"), MapOptions); 				   
	    	var marker = addMarker(adLatlng,'<div style=\"width:200px\"><div style=\"margin-bottom:5px;\"><strong>Vivian White</strong></div>Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.<br /><div style=\"margin-top:10px;\"><img width=\"60px\" src=\"/joomla30/jm-dating/components/com_djclassifieds/images/item/78_i14_ths.jpg\" /> <img width=\"60px\" src=\"/joomla30/jm-dating/components/com_djclassifieds/images/item/78_headphone-mp3-music-3088-825x550_ths.jpg\" /> <img width=\"60px\" src=\"/joomla30/jm-dating/components/com_djclassifieds/images/item/78_backpack-blur-bus-1714-819x550_ths.jpg\" /> </div></div>',icon);
	      
}

window.addEvent('load', function() {
	var djcfpagebreak_acc = new Fx.Accordion('.djcf_tabs .accordion-toggle',
			'.djcf_tabs .accordion-body', {
				alwaysHide : false,
				display : 0,
				duration : 100,
				onActive : function(toggler, element) {
					toggler.addClass('active');
					element.addClass('in');
				},
				onBackground : function(toggler, element) {
					toggler.removeClass('active');
					element.removeClass('in');
				}
			});
	var djcfpagebreak_tab = new Fx.Accordion('.djcf_tabs li.nav-toggler',
			'.djcf_tabs div.tab-pane', {
				alwaysHide : true,
				display : 0,
				duration : 150,
				onActive : function(toggler, element) {
					toggler.addClass('active');
					element.addClass('active');
				},
				onBackground : function(toggler, element) {
					toggler.removeClass('active');
					element.removeClass('active');
				}
			});
});


window.addEvent('load', function(){	
	
	document.id('ask_form_button').addEvent('click', function(){
		alert('Please login');						
	});

	document.id('abuse_form_button').addEvent('click', function(){
	alert('Please login');						
});


});

this.DJCFImageSwitcher = function (){
	var mainimagelink = document.id('djc_mainimagelink');
	var mainimage = document.id('djc_mainimage');
	var thumbs = document.id('djc_thumbnails') ? document.id('djc_thumbnails').getElements('img') : null;
	var thumblinks = document.id('djc_thumbnails') ? document.id('djc_thumbnails').getElements('a') : null;
	
	if(mainimagelink && mainimage) {
		mainimagelink.removeEvents('click').addEvent('click', function(evt) {
			var rel = mainimagelink.rel;
			document.id(rel).fireEvent('click', document.id(rel));

			if(!/android|iphone|ipod|series60|symbian|windows ce|blackberry/i.test(navigator.userAgent)) {
				return false;
			}
			return true;
		});
	}
	
	if (!mainimage || !mainimagelink || !thumblinks || !thumbs) return false;
	
	thumblinks.each(function(thumblink,index){
		var fx = new Fx.Tween(mainimage, {link: 'cancel', duration: 200});

		thumblink.addEvent('click',function(event){
			event.preventDefault();
			//new Event(element).stop();
			/*
			mainimage.onload = function() {
				fx.start('opacity',0,1);
			};
			*/
			var img = new Image();
			img.onload = function() {
				fx.start('opacity',0,1);
			};
			
			fx.start('opacity',1,0).chain(function(){
				mainimagelink.href = thumblink.href;
				mainimagelink.title = thumblink.title;
				mainimagelink.rel = 'djc_lb_'+index;
				img.src = thumblink.rel;
				mainimage.src = img.src;
				mainimage.alt = thumblink.title;
			});
			return false;
		});
	});
}; 
						 
window.addEvent('load', function(){	
	var img_width = document.id('dj-classifieds').getElement('.djc_images').getSize().x;
	var dj_item = document.id('dj-classifieds').getElement('.djcf_images_generaldet_box').getSize().x;
	var general_det = dj_item-img_width-1; 
	if(general_det<150){
		document.id('dj-classifieds').getElement('.general_det').addClass('general_det_s');
	}		
	if(general_det<301){
		document.id('dj-classifieds').getElement('.general_det').addClass('general_det_m');
	}	
	document.id('dj-classifieds').getElement('.general_det').setStyle('width',general_det) ; 		
});
window.addEvent('domready', function(){		
	DJCFImageSwitcher();
});
