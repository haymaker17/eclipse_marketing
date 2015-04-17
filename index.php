<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Eclipse Marketing Group</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link rel="stylesheet" type="text/css" media="all" href="css/global.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/home.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/slider.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.1/swfobject.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" >

function initMenus() {
	$('ul.menu ul').hide();
	$.each($('ul.menu'), function(){
	  $('#' + this.id + '.expandfirst ul:first').show();
	});
	$('ul.menu li a').click(
	function() {
   	var checkElement = $(this).next();
   	var parent = this.parentNode.parentNode.id;
   	if($('#' + parent).hasClass('noaccordion')) {
   	$(this).next().slideToggle('normal');
   	return false;
	}
	if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
	if($('#' + parent).hasClass('collapsible')) {
	  $('#' + parent + ' ul:visible').slideUp('normal');
	}
	return false;
	}
	if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
	  $('#' + parent + ' ul:visible').slideUp('normal').removeClass("active");;
	  checkElement.slideDown('normal').addClass("active");
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
		if( 9 == curclicked )
			curclicked = 0;
		
	}, 7000);
};

$(function(){
	
	$("#main-photo-slider").codaSlider();
	
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
});


/*
removeClass(“active”)
addClass(“active”)
*/


/* swfobject.embedSWF("frontPage.swf", "flashContent", "1024", "326", "9","expressInstall.swf", false, {wmode:"transparent"}, false); */
	

</script>

<!--[if lte IE 6]>
<script type="text/javascript" src="js/supersleight-min.js"></script>
<![endif]-->

</head>


<body>
	<div id="wrapper">
      <?php include("inc/header.html"); ?>

			
			
			<!-- slider -->
			<div id="page-wrap">
			<div class="slider-wrap">
      		<div id="main-photo-slider" class="csw">
      			<div class="panelContainer">
      
      				<div class="panel caplugs" title="Panel 1"> <!-- Caplugs http://www.caplugs.com -->
      					<div class="slider_wrapper">
      						<img src="i/caplugs/Caplugs_product_1.png" class="product" alt="Caplugs" height="140" width="300" /> 
      						<div class="info">
      						   <img src="i/caplugs/logo_75.png"/>
      							<p>Caplugs manufactures premium protection products including caps, plugs, tubing, edge liners, fasteners, and netting. Specializing in injection molding, vinyl-dip molding, and extrusion, our product offering can provide any plastic product protection you're looking for.</p>
      							<p><a href="http://www.caplugs.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>
      				<div class="panel fastener_specialty" title="Panel 2"> <!-- Fastener Specialty http://www.fastenerspecialty.com/ -->
      					<div class="slider_wrapper">
      						<img src="i/fastener_specialty/product1.png" class="product" alt="fastener"  /> 
      						<div class="info">
      						   <img src="i/fastener_specialty/logo_75.png"/>
      							<p>We manufacture high quality nut ring mounting brackets for all military and commercial cylindrical connectors and other Aerospace/Industrial mounting needs. Fastener Specialty, Inc. is currently listed on the QPL for MIL-C-85049/94, /95, and /96.</p>
      							<p><a href="http://www.fastenerspecialty.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>		
      				<div class="panel hirose" title="Panel 3"> <!-- Hirose http://www.hiroseusa.com/ -->
      					<div class="slider_wrapper">
      						<img src="i/hirose/hirose_product1.png" class="product" alt="hirose"  /> 
      						<div class="info">
      						   <img src="i/hirose/logo_75.png"/>
      							<p>Specializing in the manufacture of connectors, Hirose Electric commands a leading position as a top-brand in Japan and the export ratio of its sales has also registered a dramatic increase, expanding the scope of our activities to the international stage.</p>
      							<p><a href="http://www.hiroseusa.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>
      				<div class="panel honeywell" title="Panel 4"> <!-- Honeywell http://sensing.honeywell.com -->
      					<div class="slider_wrapper">
      						<img src="i/honeywell/honeywell_product1.png" class="product" alt="honeywell"  /> 
      						<div class="info">
      						   <img src="i/honeywell/honeywell_color.svg" width="250"/>
      							<p>With more than 50,000 products ranging from snap action, limit, toggle and pressure switches to position, speed and airflow sensors, Honeywell S&C has a product to meet any industry’s requirements, any company’s needs.</p>
      							<p><a href="http://sensing.honeywell.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>	
      				<div class="panel judd" title="Panel 5"> <!-- Judd http://www.juddwire.com -->
      					<div class="slider_wrapper">
      						<img src="i/judd/judd_product1.png" class="product" alt="judd"  /> 
      						<div class="info">
      						   <img src="i/judd/logo_75.png"/>
      							<p>By applying irradiation cross-linked technology to insulating materials, Judd Wire meets the needs of the wire and cable industry for economical, high-performance products.</p>
      							<p><a href="http://www.juddwire.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>
      				<div class="panel nic" title="Panel 6"> <!-- NIC http://www.niccomp.com -->
      					<div class="slider_wrapper">
      						<img src="i/nic/nic_product1.png" class="product" alt="nic"  /> 
      						<div class="info">
      						   <img src="i/nic/logo_75.png"/>
      							<p>NIC Components Corp. in partnership with Nippon Industries Co., Ltd. has been manufacturing and designing passive components for over thirty years. By integrating design, raw materials and production expertise, NIC has established itself as a leader in passive component technology.</p>
      							<p><a href="http://www.niccomp.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>
      				<div class="panel power_one" title="Panel 7"> <!-- Bel Power Solutions http://www.power-one.com -->
      					<div class="slider_wrapper">
      						<img src="i/power_one/powerone_product1.png" class="product" alt="power_one"  /> 
      						<div class="info">
      						   <img src="i/bel_power_solutions/bel_power_sol_white.svg" width="250"/>
      							<p>With its focus on Renewable Energy and “Green” power solutions, Bel Power Solutions has established itself as the world's second largest provider of solar inverters.</p>
      							<p><a href="http://belpowersolutions.com/power" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>	
      				<div class="panel radiall" title="Panel 8"> <!-- Radiall http://www.radiall.com -->
      					<div class="slider_wrapper">
      						<img src="i/radiall/radiall_product1.png" class="product" alt="radiall"  /> 
      						<div class="info">
      						   <img src="i/radiall/logo_75.png"/>
      							<p>Radiall is a global manufacturer of interconnect components including RF/coaxial connectors and cable assemblies, antennas, fiber optic components, microwave components and multi pin connectors.</p>
      							<p><a href="http://www.radiall.com" class="button">Learn More</a></p>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      
      		<a href="#1" class="cross-link active-thumb"><img src="i/caplugs/logo_tn.png" class="nav-thumb" alt="temp-thumb" /></a>
      		<div id="movers-row">
      			<div><a href="#2" class="cross-link"><img src="i/fastener_specialty/logo_tn.png" class="nav-thumb" alt="temp-thumb" /></a></div>
      			<div><a href="#3" class="cross-link"><img src="i/hirose/logo_tn.png"             class="nav-thumb" alt="temp-thumb" /></a></div>
      			<div><a href="#4" class="cross-link"><img src="i/honeywell/honeywell_color.svg"  height="19" width="102" class="nav-thumb honeywell" alt="temp-thumb" /></a></div>
      			<div><a href="#5" class="cross-link"><img src="i/judd/logo_tn.png"               class="nav-thumb" alt="temp-thumb" /></a></div>
      			<div><a href="#6" class="cross-link"><img src="i/nic/logo_tn.png"                class="nav-thumb" alt="temp-thumb" /></a></div>
      			<div><a href="#7" class="cross-link"><img src="i/bel_power_solutions/bel_power_sol_white.svg" height="24" width="95" class="nav-thumb bel_power_sol" alt="temp-thumb" /></a></div>
      			<div><a href="#8" class="cross-link"><img src="i/radiall/logo_tn.png"            class="nav-thumb" alt="temp-thumb" /></a></div>
      		</div>
      
      	</div>
      	</div>

			
			
			
			<div id="content" class="clearfix">

			<!-- ************** left side ************** -->
			<div class="leftNav">
			   <h1>Product Index</h1>            
            <ul id="navigation" class="menu collapsible">
				
				<!--
            <li>
					<a class="head" href="?p=1.1.1">Data Storage</a>
					<ul>
						<li><a href="http://www.pentair-ep.com/">Pentair</a></li>
					</ul> 
				</li>

            <li>
					<a class="head" href="?p=1.1.2">Electronic Packaging</a>
					<ul>
						<li><a href="http://www.pentair-ep.com/">Pentair</a></li>
					</ul> 
				</li>
            -->
				<li>
					<a class="head" href="?p=1.1.3">Flat Flex Cable</a>
					<ul>
						<li><a href="http://www.juddwire.com/page.php?id=11">Judd</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="?p=1.1.5">Interconnect</a>
					<ul>
						<li><a href="http://www.hiroseusa.com/">Hirose</a></li>
						<!--
                  <li><a href="http://www.kingselectronics.com/">Kings</a></li>
						<li><a href="http://www.winchesterelectronics.com/">Winchester</a></li>
                  -->
						<li><a href="http://www.radiall.com/">Radiall</a></li>
						<li><a href="http://www.fastenerspecialty.com/">Fastener Specialty</a></li>
					</ul> 
				</li>
				<!-- <li>
					<a class="head" href="?p=1.1.6">Labels/Nameplates</a>
					<ul>
						<li><a href="http://nelson-miller.com/">Nelson-Miller</a></li>
						<li><a href="http://www.seipusa.com/">Sumitomo Heatshrink</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="?p=1.1.8">Membrane Switches</a>
					<ul>
						<li><a href="http://nelson-miller.com/">Nelson-Miller</a></li>
					</ul> 
				</li> -->
                <li>
                    <a class="head" href="?p=1.1.8">Masking Products</a>
                    <ul>
                        <li><a href="http://www.caplugs.com/">Caplugs</a></li>
                    </ul> 
                </li>
				<li>
					<a class="head" href="?p=1.1.9">Passive Component</a>
					<ul>
						<li><a href="http://www.niccomp.com/">NIC Components</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="?p=1.1.10">Power Supplies and Inverters</a>
					<ul>
						<li><a href="http://belpowersolutions.com/power">Bel Power Solutions</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="?p=1.1.10">Product Protection and Packaging</a>
					<ul>
						<li><a href="http://www.caplugs.com/">Caplugs</a></li>
					</ul> 
				</li>
				<li>
					<a class="head" href="?p=1.1.10">Sensors & Controls</a>
					<ul>
						<li><a href="http://sensing.honeywell.com/">Honeywell</a></li>
					</ul> 
				</li>
			</ul>
			
			</div>
			
			
			<!-- ************** Right Side ************** -->
         <div class="rightBlock">
            <h1>About Eclipse</h1>
            <p>
               <img class="img" src="i/eclipse_small.jpg" alt="eclipse" width="115" height="115"/> Exceeding expectations and working beyond the average rep boundaries sets Eclipse apart as a manufacturers Rep. Read on to understand what makes Eclipse the right choice for your company...<br />
               <a href="about.php">Learn More</a>
            </p>
         
         </div>
         
         <div class="rightBlock">
            <h1>Get a Sample</h1>
            <p>
               <!-- <img class="img" src="i/sample.gif" alt="chairs" width="115" height="115"/> --> We understand that seeing is believing. Order a sample online and we’ll send you something you can see and feel for yourself. <br />
               <a href="samples.php">Learn More</a>
            </p>
         
         </div>
         
                                    
			</div>
			
			<?php include("inc/footer.html"); ?>
        
		</div>
      
</body>
</html>