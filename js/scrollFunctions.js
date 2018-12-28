	
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if(scroll==0){
        $("header").css({
            background:"transparent",
            transition:"background 0.5s"
        });

        $("header .logo").attr('src','img/logo-black.png');
        

    }else{
        $("header").css({
            background:"rgba(45,45,45,0.70)",
            transition:"background 0.5s"
        });

        $("header .logo").attr('src','img/logo.png');
        
        
    }
    // Do something
});