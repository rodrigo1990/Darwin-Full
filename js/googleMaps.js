function myMap() {



		var mapOptions = {
	        center: new google.maps.LatLng(-34.454237, -58.762260),
	        zoom: 15,
	        mapTypeId: google.maps.MapTypeId.HYBRID,
	        mapTypeId: 'roadmap',
	        
	  	}




	 	var bounds = new google.maps.LatLngBounds();




		var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);


		var infowindow = new google.maps.InfoWindow({
		    content: "<span>Estudio Darwin <br><br>  <b><i>Hipólito Yrigoyen 1600, B1664 Manuel Alberti, Buenos Aires</i></b></span>"
		});



		 var position = new google.maps.LatLng(-34.454237, -58.762260);



		 	bounds.extend(position);



			marker = new google.maps.Marker({
            position: position,
            map: map,
		  	 icon:"img/iso-black-10.png"
        });
        






        google.maps.event.addListener(marker, 'click', (function() {
            return function() {
                infowindow.open(map, marker);
            }
        })());

		}