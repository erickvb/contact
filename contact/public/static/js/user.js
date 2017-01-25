/**
 * 
 */
function User(){
	this.formProfile=$('#frmProfileEdit');
	
}

User.prototype.init = function(){
	this.registerProfile();
}

User.prototype.loadCountries = function(){
	$.get(URL_WEB+ "/Ubigeo/countries", function( data ) {
		  $( ".result" ).html( data );
		  //alert( "Load was performed." );
	});
}

User.prototype.loadRegions = function(){
	
}
User.prototype.loadCities = function(){
	
}
User.prototype.loadZones = function(){
	
}

User.prototype.listUser = function(){
	
	var source   = $("#user-template").html();
	console.log("source:"+source);
	var template = Handlebars.compile(source);
	var divLista = $("#list-user");
	$.get(URL_WEB+ "/user/show", function( data ) {
		console.log("data:"+data);
		var output = template({users:data});
		console.log("ouput:"+output);
		divLista.append(output);
		  //alert( "Load was performed." );
	},'json');	
}

User.prototype.registerProfile = function(){
	console.log("call update registerProfile");
	var myObjeto = this;
	myObjeto.formProfile.validate({
		rules: {
				presentacion: {
			      required: true,
			      maxlength: 100
			    },
			    detalle:{
			      required: true
			    }
			  },
			 
			  messages: {
				  presentacion:{
					  required: "Ingrese presentacion",
					  maxlength: "Ingrese maximo 100 caracteres"},
				  detalle:{
					  required: "Ingrese su detalle"}	  
					  
			  },
			
		  submitHandler: function(form) {
			  
			$(form).ajaxSubmit({
//				data : {'idUsuario':myObjeto.idUsuario},
				beforeSend : function (){
					$("#btnSaveProfile").attr('disabled', 'disabled');
				},  
				success: function(responseText,statusText,xhr,$form){
//					if(responseText.estado==0){
//						console.log("msg:"+responseText.mensaje);
//						myObjeto.reloadGrid();
//						showExito("exito",responseText,"top-notify");
						
//						myObjeto.clearForm();
//					}else{
//						showError("error",responseText,"top-notify");
//					}
				},
				complete:function(){
					$('#btnSaveProfile').removeAttr('disabled');
				}
			});
		}
	});
	
}