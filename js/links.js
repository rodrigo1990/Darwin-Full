var currentPage = document.location.href.match(/[^\/]+$/)[0];

		if(currentPage=="index.php")
			$("#link-gal").attr("href","#galeria");
		else
			$("#link-gal").attr("href","index.php#galeria");