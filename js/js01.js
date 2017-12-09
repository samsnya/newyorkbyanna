$("li img").hover(function(){
    $("#main-img").attr("src",$(this).attr("src"));
    
});


$('.carousel').carousel({
    
    interval: 3000 
});

/*https://getbootstrap.com/docs/4.0/components/carousel/*/
