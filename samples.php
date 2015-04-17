<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Eclipse Marketing Group | Samples</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" media="all" href="css/global.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/contact.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>

<!--[if lte IE 6]>
<script type="text/javascript" src="js/supersleight-min.js"></script>
<![endif]-->

</head>


<body>
	<div id="wrapper">
      <?php include("inc/header.html"); ?>

			<div id="content">
			
            <h1>Request a sample</h1>
   			<p>For more information, please fill out as much as you can and we'll get back to you within two business days. </p>
   			
   			<p id="success" class="error" style="display:none;">Your request has been sent! Thanks!</p>
            <p id="bademail" class="error" style="display:none;">Please enter a valid email.</p>
            <p id="badserver" class="error" style="display:none;">Your request failed. Try again later.</p>
            
			<form id="contactForm" action="send_sample.php" method="post">
   			<p><label for="name">Name</label><br />
   			<input type="text" id="name"  name="name"/> 
   			</p>
   			<p>
   			<label for="company">Company</label><br />
   			<input type="text"            name="company" />
   			</p>
   			<div class="clear"></div>
   			<p>
   			<label for="email">Email</label><br />
   			<input type="text" id="email" name="email" />
   			</p>
   			<div class="clear"></div>
   			<p>
   			<label for="phone">Phone</label><br />
   			<input type="text"            name="phone" />
   			</p>
   			<div class="clear"></div>
   			<textarea name="comment" cols="5" rows="5" onfocus="clearText(this)">Please leave us a comment</textarea><br />
   			<input id="submit" type="submit" value="submit"/>
			</form>


                
                    
                                    
			</div>
			
			<?php include("inc/footer.html"); ?>
        
		</div>
		
		<script type="text/javascript">

/* Clear out the default text in the form once the user focuses on it */
function clearText(theText) {
     if (theText.value == theText.defaultValue) {
         theText.value = ""
     }
 }


$(document).ready(function(){
  /* AJAX form sending */
  /*
$('#contactForm').ajaxForm(function(data) {
      if (data==1){
          $('#success').fadeIn("slow");
          $('#contactForm').resetForm();
      }
      else if (data==2){
          $('#badserver').fadeIn("slow");
      }
      else if (data==3)
      {
          $('#bademail').fadeIn("slow");
      }
  });
*/
  
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
  
   /* Rollover for the submit button */  
   $("#submit").hover(
		function () {
		$(this).css("background","#2a68d2");
	},
	function () {
		$(this).css("background","#6b96e1");
		}
	);        
});
</script>
           
</body>
</html>