var map;

function initMap(cep, $lat, $lng) {
    if(cep == null){
		cep = "01018-020"; 
	}
	var lat;
	var lng;
	var url = "https://maps.google.com/maps/api/geocode/json?address="+cep+"&sensor=false"; 
	$.getJSON(url, function (data) { 
	    for(var i=0;i<data.results.length;i++) 
	    { 
	         lat = data.results[i].geometry.location.lat;
	         lng = data.results[i].geometry.location.lng;

	        if($lat != null && $lng.length != null){
	        	lat = parseFloat($lat);
	        	lng = parseFloat($lng);
	        }  
	   
		    var mapOptions = {
		        zoom: 8,
		        scrollwheel: false,
		        streetViewControl: false,
		        center: new google.maps.LatLng(lat, lng),
		    };
		    map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
		    var marker = new google.maps.Marker({
		        map: map,
		        position: new google.maps.LatLng(lat, lng),
		        icon: 'http://devwill.000webhostapp.com/wp-content/themes/Theme Test/images/icons/marker.png'
		    });
		    google.maps.event.addDomListener(window, "resize", function() {
		        var center = map.getCenter();
		        google.maps.event.trigger(map, "resize");
		        map.setCenter(center);
		    });

		    var styles=[{"featureType":"all","elementType":"labels.text","stylers":[{"color":"#f20404"},{"weight":"0.76"},{"saturation":"56"},{"lightness":"47"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#f4ddd9"},{"visibility":"on"}]}];

			var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

			map.mapTypes.set('map_style', styledMap);
		    map.setMapTypeId('map_style');
	    } 
	});
}

$(document).ready(function(){
	
	$(".search_form_cep").submit(function(){
		var cep = $(this).find("#cep").val();

		if(cep.length >= 8){

			var url = "https://viacep.com.br/ws/"+cep+"/json/"; 
			$.getJSON(url, function(data){
			    $.each(data, function (index, value) {
			        if (!("erro" in data)) {
			        	map = "";
	  					initMap(cep);
	  					$(".localization").css("display", "none"); 
			        }else{
			        	alert("CEP Não encontrado ou inválido");	
			        }
			    });      
			});
		}else{
			alert("CEP inválido");
		}
		return false;
	});

	$(".search_geo").click(function(){
		getLocation();
		$(".localization").css("display", "none");
	});


});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation não é suportada nesse dispositivo");
    }
}
function showPosition(position) {
    
	var lat = ""+position.coords.latitude+"";
	var lng = ""+position.coords.longitude+"";

    map = "";
	initMap(null, lat, lng);
}

