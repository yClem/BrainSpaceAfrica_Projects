

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Ba3.com | Sell Your Old-Use-Condemned Car, Trailer & Inverter Batteries</title>

  <!-- Bootstrap -->
  <link href="BootStrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="StyleSheet/Custom.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <!-- Nav Section -->

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

         <div class="row">
          <div class="col-md-4">

            <div><img src="Images/BatteryLogo.png" id="batterylogo"></div>

          </div>

          <div class="col-md-4" id="config0">

           <ul class="nav navbar-nav">

            <li><a href="Index.php"><span id="config3">Home</span></a></li>
            <li><a href="#Battery_Types"><span id="config3">Battery Types</span></a></li>
            <li><a href="#CallWhatsAApp"><span id="config3">About</span></a></li>
            <li><a href="#CallWhatsAApp"><span id="config3">Contact</span></a></li>

          </ul>  

        </div>

        <div class="col-md-4">

          
          <img class="imageProp" src="Images/twitter.png">
          <img class="imageProp" src="Images/Google.png">
          <a href="https://www.facebook.com/OldUsedCondemnedBatteries" target="_blank"><img class="imageProp" src="Images/facebook.png"></a>


        </div>
      </div>



    </div>
  </nav><br>

  <!-- Slider Section -->
  <br><br>
  <div class="container-fluid SlideBackGround">
    <div id="carousel-example-generic" class=" carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="#"><img class ="mydiv" src="Images/ImageStart.png" alt="..."></a>
          <div class="carousel-caption">
           ...
         </div>
       </div>

       <div class="item">
        <a href=""><img class ="mydiv" src="Images/Imagea.png" alt="..."></a>
        <div class="carousel-caption">
          <h1 id="captionFont">Old/Used/Condemned Batteries</h1>
        </div>
      </div>

      <div class="item">
        <a href=""><img class ="mydiv" src="Images/Imageb.png" alt="..."></a>
        <div class="carousel-caption">
          <h1 id="captionFont">Old/Used/Condemned Batteries</h1>
        </div>
      </div>

    </div>
  </div>
</div>
  
  <div class="container">

     <h2 id="summary">These batteries include but are not limited to: car, industrial fork-lift, 
        inverter and other heavy duty commercial batteries. We recycle by grinding them, neutralizing the acid, and separating
        the polymers from the lead. The recovered materials are used in a variety of applications, including new batteries.</h2>

  </div>


     <!-- Battery Types -->
<div id="Battery_Types"></div>
<div class="bodyDesign" id="BodyDesignId">

<br>
<h1 id="captionFont" class="alignFont">Battery Types</h1>
  <div class="row">

    <div class="col-md-4">

        <div class="center3" id="showInverter">
            <img src="Images/InverterBattery.png" id="batterylogoInDiv" alt="Inverter Battery">
            <br><br>
            <p class="baterryName">Inverter Batteries</p>
            <p id="batteryContent">Though depending on usage and maintenance,
              most manufacturers give between one to two years warranty on inverter batteries.
              After installation, use battery on a regular basis. If the power cut does not occur, discharge the battery completely
              once every month and then recharge it.
            </p>
        </div>

    </div>
    <div class="col-md-4">

        <div class="center3" id="showCar">
            <img src="Images/CarBattery.png" id="batterylogoInDiv" alt="Car Battery">
            <br><br>
            <p class="baterryName">Car Batteries</p>
            <p id="batteryContent">The average car battery lasts for approximately four years of normal driving. When the battery is no longer 
            capable of being recharged or can’t hold a proper charge, it must be replaced. 
            When the vehicle is driven for short trips everyday, the battery never gets to the right working temperature and never achieves a full charge
          </p>


        </div>

    </div>
    <div class="col-md-4">

        <div class="center3" id="showTrailer">
            <img src="Images/TrailerBattery.png" id="batterylogoInDiv" alt="Trailer Battery">
            <br><br>
            <p class="baterryName">Trailer Batteries</p>
             <p id="batteryContent">Same as Car bateries. Temperature, humidity and other factors affect the lifespan. Under ideal conditions
              a trailer battery could last up to six years.
              The most effective way to extend the life of a battery is to keep it charged near 100 percent.
          </p>

        </div>

    </div>

  </div>

</div>





<!-- Battery Details Display Div -->
<!-- Car Battery-->
<div class="BatteryDetails" id="CarSlide">

  <button id="btnRemove" type="button" class="btn btn-default" title="Close">
       <span class="glyphicon glyphicon-remove"></span>
  </button>

  <img src="Images/CarBattery.png" id="CarBatteryInDesign" alt="Car Battery">
            <br><br>
  <p class="baterryName">Car Batteries</p>
            <br><br>
  <img src="Images/CarBatteries.png" id="All" alt="Car Batteries">          
</div>

<!-- Inverter Battery-->
<div class="BatteryDetails" id="InverterSlide">

  <button id="btnClose" type="button" class="btn btn-default" title="Close">
       <span class="glyphicon glyphicon-remove"></span>
  </button>

  <img src="Images/InverterBattery.png" id="CarBatteryInDesign" alt="Inverter Battery">
            <br><br>
  <p class="baterryName">Inverter/Trailer Batteries</p>
            <br><br>
  <img src="Images/InverterBatteries.png" id="All2" alt="Inverter Batteries">          
</div><br>

<!-- Call/Whatsapp -->
<div class="container" id="CallWhatsAApp">
  <img src="Images/CallWhatsapp.png" id="call_whatsapp">
</div><br>

<!-- Down Section -->
<div class="container-fluid downDesign">

    <div class="row">
     
      <div class="col-md-4 footerContent">
           <div><img src="Images/Ba3.png" id="footerbatterylogo"></div>
           <p id="alignparagraph">Make money; sell your<br> 
            Old/Used/Condemned Batteries</p>
      </div>

      <div class="col-md-4 footerContent">
            <p id="alignaboutparagraph">About</p>
            <p id="alignparagraph2">We buy all kinds of Old/Used/Condemned but still intact car, Trailer, UPS and Inverter Batteries. These batteries are recycled for further use.</p>
      </div>

      <div class="col-md-4 footerContent">
             <p id="alignaboutparagraph">Contact</p>
            <p id="alignparagraph2">Mobile No/Whatsapp:- +2348087883678</p>
            <p id="alignparagraph2"><span style="font-weight: bold">E-mail</span>: - info@Ba3.com</p>
            
          <img class="imagePropfooter" src="Images/twitter.png">
          <img class="imagePropfooter" src="Images/Google.png">
          <a href="https://www.facebook.com/OldUsedCondemnedBatteries" target="_blank"><img class="imagePropfooter" src="Images/facebook.png"></a>
      </div>

    </div>


</div>


<footer class="container-fluid copyright"><br>
  <hr>
  <p class="pull-right" id="pull-in"><a href="#" class="copyrightFont">Back to top</a></p>
  <p class="container"><a href="#" target="_blanck">&copy; <span class="copyrightFont"></a>2017 Ba3.com</span> &middot;
      <img src="Images/xTrimIT.png" height="50px">
  </p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="BootStrap/js/bootstrap.min.js"></script>

<script src="JQuery/jquery-3.1.1.min.js"></script>
<script src="JQuery/CustomJs.js"></script>

<!-- Ba3.com 
        By 
     Doubra C. Ebijuoworih   
 -->
</body>
</html>
