$(document).ready( function()
{
   PEPS.rollover.init();
});

PEPS = {};

PEPS.rollover = 
{
   init: function()
   {
      this.preload();
      
      $(".ro").hover(
         function () { $(this).attr( 'src', PEPS.rollover.newimage($(this).attr('src')) ); }, 
         function () { $(this).attr( 'src', PEPS.rollover.oldimage($(this).attr('src')) ); }
      );
   },

   preload: function()
   {
      $(window).bind('load', function() {
         $('.ro').each( function( key, elm ) { $('<img>').attr( 'src', PEPS.rollover.newimage( $(this).attr('src') ) ); });
      });
   },
   
   newimage: function( src )
   { 
      return src.substring( 0, src.search(/(\.[a-z]+)$/) ) + '_o' + src.match(/(\.[a-z]+)$/)[0]; 
   },

   oldimage: function( src )
   { 
      return src.replace(/_o\./, '.'); 
   }
};


/* 

This is a email masking script to prevent spam. It's implemented like this:

href="javascript:sendMailTo('walt.wright','eclipsemarketing','com')" 

*/
function sendMailTo(name, company, domain) {
  locationstring = 'mai' + 'lto:' + name + '@' + company + '.' + domain;
  window.location.replace(locationstring);
}