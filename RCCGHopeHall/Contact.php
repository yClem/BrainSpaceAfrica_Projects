	<html>
	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Contact - RCCG HopeHall</title>


	    <link rel="icon" type="image/x-icon" href="Content/Images/HopeHallLogo.jpg">
        
	    <link href="Content/Site.css" rel="stylesheet">		    
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link href="Content/bootStrap.css" rel="stylesheet">
	    <link href="Content/popUp.css" rel="stylesheet">
	    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Raleway">
        


	<style type="text/css">

			.ToHide
			{
			   display: none;
			}


			.logo {
			 text-align: center;
			 margin-top: 2px;
			 margin-left: 2%;
			 margin-bottom: 2%;

			}

			.line {
				padding-top: 5px;
			 text-align: left;
			 background-color: rgb(73, 30, 50);
			 height: 84px;
			}

	</style>
	
	<!--Ministry Slider css -->
	 <link rel="stylesheet"  href="Content/lightslider.css">		 
     <link rel="stylesheet" href="Content/bootStrap.min.css">
	 
    </head>


	<body onclick="document.getElementById('myModal').style.display='none'"> 
	      		  

			      <nav class="navbar navbar-default" id="navContent">
			        <div class="container-fluid">
			          <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			            <img id="HH" src="Content/Images/HopeHallWhiteBackGround.png">
			           <a class="navbar-brand" href="#"></a>
			          </div>
			          <div id="navbar" class="navbar-collapse collapse">
			            <ul class="nav navbar-nav" id="moveRight">
			              <li><a id="addClassActive" href="Index.php">Home</a></li>
			              <li id="show"><a id="addClassActive" href="About.php">About</a></li>
			              <li><a id="addClassActive" href="">Sermons</a></li>
			              <li id=""><a id="addClassActive" href="">Hope Media</a></li>
			              <li class="dropdown">
			                <a id="addClassActive" href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
			                <ul class="dropdown-menu">
			                  <li id="clearSpaceTop"><a id="addClassActive00" href="Prayer.php">Prayer Request</a></li>
			                  <li><a id="addClassActive00" href="RCCG_Beliefs.php">Our Beliefs</a></li>
			                  <li><a id="addClassActive00" href="">Weekly Activities</a></li>
			                  <li><a id="addClassActive00" href="">Mission & Vision</a></li>
							  <li><a id="addClassActive00" href="">CITH</a></li>
							  <li><a id="addClassActive00" href="">Watch Us Live</a></li>
			                  <li  id="clearSpaceBottom"><a id="addClassActive00" target="_blanck" href="rccg.org">RCCG WorldWide</a></li>
			                </ul>
			              </li>			              
			              <li><a id="addClassActive" href="OpenHeavens.php">Open Heaven's Reflection</a></li>
			              <li><a id="addClassActive" href="">Events</a></li>
			              <li><a id="addClassActive" href="Contact.php">Contact Us</a></li>
			              <li><a id="addClassActive" href="">Blog</a></li>
			            </ul>
			            <ul class="nav navbar-nav navbar-right">

			            	 <a href="https://twitter.com/hopehallrccg" target="_blanck" title="Like us on facebook"><img class="imageProp" src="Content/Images/twitter.png"></a>
					         <img class="imageProp" src="Content/Images/Google.png">
					         <a href="https://facebook.com/hopehallrccg"><img class="imageProp" src="Content/Images/facebook.png"></a>
								                 
			            </ul>
			          </div><!--/.nav-collapse -->
			        </div><!--/.container-fluid -->
			      </nav>

			     <div id="googleMap"></div>
			     <div class="container" id="contactBanner">
			     		<p class="container" id="contactDesc">Contact RCCG Hope Hall</p>
			     		<p class="container" id="mottoDesc">where hope is restored and champions are raised</p>
			     </div>
        
        <div class="container" id="contactBody">

							     <div class="col-sm-6" >
							     			<p id="contactAddress"><span id="HHS221">221,</span> Apapa Road beside national theatre, <br>Iganmu Lagos.</p>
							       		<br>
							        <p id="contactAddress"><span><img src="Content/Images/PhoneImage.png" width="6%"></span>&nbsp+234 8000000000</p>
							        <p id="contactAddress"><span><img src="Content/Images/MailUs.png" width="8%"></span>&nbspmail@rccghopehall.com </p>
							     </div>

							      <div class="col-sm-6" id="padHere">
							      	<p id="contactAddress">Fields marked <span style="color:red">*</span> are required</p><br>
							      		<input type="text" class="form-control bColor container" id="Name" placeholder="FirstName *"><br>
							      		<input type="text" class="form-control bColor container" id="Name" placeholder="LastName *"><br>
							      		<input type="email" class="form-control bColor container" id="Email" placeholder="Email *"><br>
			
							      		<textarea class="form-control bColor container" rows="6" placeholder="Message *"></textarea>
			                <br>
			            <button type="submit" class="btn btn-default btnProp">Send</button>
			               
			                  
							      </div>

			     </div>

			      <!--Footer-->
									<div id="footer">

										 <p id="leftCopyRight">© 2017 <span id="rccghopehall"><a href="https://www.rccghopehall.com">RCCG HopeHall</a></span></p>
							    <p id="rightCopyRight">Designed by <span id="xtrimIt"><a href="#">xTrim.IT</a></span></p>

									</div>

    

	        <script>
		      function initMap() {
		        var uluru = {lat: 6.4774424, lng: 3.3663476};
		        var map = new google.maps.Map(document.getElementById('googleMap'), {
		          zoom: 17,
		          center: uluru,
		          mapTypeId: google.maps.MapTypeId.TERRAIN
		        });

		        var HopeHallLatLng = { lat: 6.4774424, lng: 3.3663476 };

		        var marker = new google.maps.Marker({
		          position: HopeHallLatLng,
		          map: map
		        });
		      }
		    </script>

		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEdYy4znZLtlZoMjEf9bHUPZkeLu_unt4&callback=initMap">
		    </script>
	    	

            <script>
                          
            	(function() { 
                        
						    var dialog = document.getElementById('window');  
						    document.getElementById('show').onclick = function() { 						 
							dialog.show();

							$(window).scrollTop(0);
							event.preventDefault();
						
					    };  

					    document.getElementById('exit').onclick = function() {  
					        dialog.close();  
					    };
							  					      
				})();
            </script>

            <script>
                          
            	(function() { 
                        
						    var dialog = document.getElementById('windowGallery');  
						    document.getElementById('showGallery').onclick = function() { 						 
							
							dialog.show();					
							event.preventDefault();
						
					    };  

					    document.getElementById('exitGallery').onclick = function() {  
					        dialog.close();  
					    };
							  					      
				})();
            </script>

            <script type="text/javascript" src="init.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		  
		 <script>

		    	$(document).ready(function(){



		       // setTimeout(function() {
					    // $("#myImger").trigger('click');
					  	// },10);
		    		});


		    	</script>




	</body>
	</html>
