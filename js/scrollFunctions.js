	
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if(scroll==0){

        $("header").removeClass("addBkground");

        $("header").addClass("removeBkground");
    
        $("header .logo").attr('src','img/logo-black.png');
        

    }else{

        $("header").removeClass("removeBkground");

        $("header").addClass("addBkground");

        $("header .logo").attr('src','img/logo.png');
        
        
    }
    // Do something
});