	
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if(scroll==0){

        $("header").removeClass("addBkground");

        $(".xs-row").removeClass("addBkground");

        $("header").addClass("removeBkground");

        $(".xs-row").addClass("removeBkground");
    
        $("header .logo").attr('src','img/logo-white.png');
        

    }else{

        $("header").removeClass("removeBkground");

        $(".xs-row").removeClass("removeBkground");

        $("header").addClass("addBkground");

        $(".xs-row").addClass("addBkground");

        $("header .logo").attr('src','img/logo.png');
        
        
    }
    // Do something
});