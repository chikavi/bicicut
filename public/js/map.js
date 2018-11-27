	$(document).ready(function(){
    $('.modal').modal();
  });

      var map;
      function initMap() {
      	cutCenter = {lat: 20.5665124, lng: -103.2285866};

        map = new google.maps.Map(document.getElementById('map'), {
          center: cutCenter,
          zoom: 18
        });

  		var coords = [
  			{lat:20.566365, lng: -103.225614},
			{lat:20.565820, lng: -103.226942},
			{lat:20.565719, lng: -103.227489},
			{lat:20.566248, lng: -103.228345},
			{lat:20.566318, lng: -103.230098},
			{lat:20.566717, lng: -103.230101},
			{lat:20.566750, lng: -103.230229},
			{lat:20.567116, lng: -103.230207},
			{lat:20.567166, lng: -103.230025},
			{lat:20.567175, lng: -103.229339},
			{lat:20.567053, lng: -103.229183},
			{lat:20.567056, lng: -103.228406},
			{lat:20.567094, lng: -103.227622},
			{lat:20.567144, lng: -103.227420},
			{lat:20.567126, lng: -103.226049},
			{lat:20.566616, lng: -103.225763}


  		];

  		  var bermudaTriangle = new google.maps.Polygon({
	    	paths: coords,
		    strokeColor: '#17202f',
		    strokeOpacity: 0.6,
		    strokeWeight: 10,
		    fillOpacity: 0
	  });
  		  bermudaTriangle.setMap(map);
     


	     var modules = [
	     {
	     	id: 1,
	     	title: " Biblioteca",
	     	position: new google.maps.LatLng(20.567025, -103.228707)
	     },
	      {
	      	id: 2,
	      	title: "Modulo Medicina",
	     	position: new google.maps.LatLng(20.565797, -103.226828)
	     },
	      {
	      	id: 3,
	      	title: "Modulo de Energia",
	     	position: new google.maps.LatLng(20.566203, -103.229004)
	     },
	      {
	      	id: 4,
	      	title: "Modulo de las Canchas",
	     	position: new google.maps.LatLng(20.567252, -103.229550)
	     },
	      {
	     	id: 5,
	      	title: "Modulo de la entrada",
	     	position: new google.maps.LatLng(20.566323, -103.225816)
	     }
	     ];


	     modules.forEach(function(module){
	     	var marker = new google.maps.Marker({
		    position: module.position,
		    map: map,
		    title: module.title,
		     icon: 'img/ico_opt.png'
		  });


	     	   var contentString = 
          '<div id="content">'+
	        '<div id="siteNotice">'+
	        '</div>'+
		    '<div id="bodyContent" >'+
		    '<h4 class="center">'+ module.title +'</h4>'+
		     `<a class=" waves-effect waves-light btn blue modal-trigger" style="width:100%;" href="#modal`+module.id+`">Ver Detalles</a>`+
		    '</div>'+
	      '</div>';
	     	
		  var infowindow = new google.maps.InfoWindow({
		    content: contentString
		  });
		  marker.addListener('click', function() {
		    infowindow.open(map, marker);
		  });
	     });





      }