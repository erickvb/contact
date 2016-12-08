/**
 * 
 */
function User(){
	
	
}

User.prototype.init = function(){
	
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
