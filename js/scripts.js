$(function() {	
   
   //start the smoothscroll script
    $('a').smoothScroll();
   
   
   //form validation
  /* AJAX form sending */
  $('#contactForm').ajaxForm(function(data) {
      if (data==1){
          $('#success').fadeIn("slow");
          $('#bademail').fadeOut("slow");
          $('#contactForm').resetForm();
          $('#contactForm').fadeOut("fast");
      }
      else if (data==2) {
         $('#badserver').fadeIn("slow");
      }
      else if (data==3) {
          $('#bademail').fadeIn("slow");
          $('#email').css("border-color","red");
          $('#emailinput').focus();
      }
  });



   //make the hamburger menu work
   $(".hamburger").on("click", function () {
      $(".nav").toggleClass("open");

      $("header.nav.open a").on("click", function () {
         console.log("test");
         $(".nav").removeClass("open");
      })

   });



    $(window).scroll(function () {

        fadeinElements();

    });


   
   
   
    function fadeinElements() {
        /* Check the location of each desired element */
        $('.fadeinElement').each(function(i) {

            var height_of_object = $(this).outerHeight();
            var bottom_of_object = $(this).offset().top + height_of_object;
            var middle_of_object = bottom_of_object - (height_of_object/2);
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > middle_of_object) {

                // $(this).animate({
                //     'opacity': '1'
                // }, 500);

                $(this).addClass("visible");

            }

        });
    }



fadeinElements();
   



}); //end document.ready





/* 

This is a email masking script to prevent spam. It's implemented like this:

href="javascript:sendMailTo('booking','haymaker','tv')" 

*/
function sendMailTo(name, company, domain) {
  locationstring = 'mai' + 'lto:' + name + '@' + company + '.' + domain;
  window.location.replace(locationstring);
}