	var currentPage = document.location;
	
	/*alert(currentPage.toString().length);

	alert(currentPage);*/

	var array = currentPage.toString().split('/');

	//alert(array[5].toString());

		if(array[array.length-1].toString()=="index.php" || array[array.length-1].toString()=="" || array[array.length-1].toString()=="index.php#galeria-planos"){
			$(".link-gal").attr("href","#galeria-planos");
			$(".link-gal").addClass('scroll-spy');
		}else{
			$(".link-gal").attr("href","index.php#galeria-planos");
			$(".link-gal").removeClass('scroll-spy');
		}  
