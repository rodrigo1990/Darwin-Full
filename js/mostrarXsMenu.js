

	var isOpen=0;

	function mostrarMenu(){
		$(".overlay-xs-menu").show();
		$(".xs-btn").show();


		setTimeout( function() {
		 isOpen=1;
	  	}, 300);

		
	}


	function cerrarMenu(){
		$(".overlay-xs-menu").fadeOut();
		isOpen=0;
	}



	$(document).mouseup(function (e){

		var container = $(".xs-btn");

		if (!container.is(e.target) && container.has(e.target).length === 0 && isOpen==1){

			$(".overlay-xs-menu").fadeOut();


			console.log(isOpen);
			
		}
	}); 


	$("#cont-xs").click(function(){

		setTimeout( function() {
		 $(".overlay-xs-menu").fadeOut();
		 isOpen=0;
	  	}, 500);



	})


