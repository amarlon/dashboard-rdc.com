$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
$('.message span').click(function(){
   $('.confidentialite').animate({height: "toggle", opacity: "toggle"}, "slow");
});
$('.fermer').click(function(){
   $('.confidentialite').animate({height: "toggle", opacity: "toggle"}, "slow");
});
