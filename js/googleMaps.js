function myMap() {



		var mapOptions = {
	        center: new google.maps.LatLng(-34.477751, -58.519464),
	        zoom: 15,
	        mapTypeId: google.maps.MapTypeId.HYBRID,
	        mapTypeId: 'roadmap'
	  	}




	 	var bounds = new google.maps.LatLngBounds();




		var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);


		var infowindow = new google.maps.InfoWindow({
		    content: "<span>Estudio Darwin <br><br>  <b><i>Avenida Bernabé Márquez 504, San Isidro, Buenos Aires</i></b></span>"
		});



		 var position = new google.maps.LatLng(-34.477751, -58.519464);



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