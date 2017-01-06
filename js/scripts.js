$(document).ready( function()
{
    
   if($("#main-photo-slider").length) {
      $("#main-photo-slider").codaSlider();
   }  
   
   $navthumb = $(".nav-thumb");
   $crosslink = $(".cross-link");
   
   $navthumb
   .click(function() {
      var $this = $(this);
      theInterval($this.parent().attr('href').slice(1) - 1);
      return false;
   });
   
   theInterval();
   initMenus();


}); //end document.ready


 function initMenus() {
     $('ul.menu ul').hide();
     $.each($('ul.menu'), function(){
      $('#' + this.id + '.expandfirst ul:first').show();
   });

     $('ul.menu li a').click(
        function() {
           var checkElement = $(this).next();
           var parent = this.parentNode.parentNode.id;

           $('ul.menu li a').removeClass('open');
         $(this).addClass('open');

         
           if($('#' + parent).hasClass('noaccordion')) {
               $(this).next().slideToggle('fast');
               return false;
            }
         if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
           if($('#' + parent).hasClass('collapsible')) {
            $('#' + parent + ' ul:visible').slideUp('fast');
         }
         return false;
         }
         if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#' + parent + ' ul:visible').slideUp('fast').removeClass("active");
            checkElement.slideDown('fast').addClass("active");
            return false;
         }
      }
   );

  }

//  slider  
var theInt = null;
var $crosslink, $navthumb;
var curclicked = 0;

theInterval = function(cur){
   clearInterval(theInt);

   var totalNumber = $("#movers-row > div").length;
   
   if( typeof cur != 'undefined' )
      curclicked = cur;
   
   $crosslink.removeClass("active-thumb");
   $navthumb.eq(curclicked).parent().addClass("active-thumb");
      $(".stripNav ul li a").eq(curclicked).trigger('click');
   
   theInt = setInterval(function(){
      $crosslink.removeClass("active-thumb");
      $navthumb.eq(curclicked).parent().addClass("active-thumb");
      $(".stripNav ul li a").eq(curclicked).trigger('click');
      curclicked++;
      if( 8 == curclicked )
         curclicked = 0;
      
   }, 7000);
};



function sendMailTo(name, company, domain) {
  locationstring = 'mai' + 'lto:' + name + '@' + company + '.' + domain;
  window.location.replace(locationstring);
}