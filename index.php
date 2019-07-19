<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Astronomy Picture of the Day Search</title>

    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel ="stylesheet" href="css/styles.css">
     <link href="https://fonts.googleapis.com/css?family=Notable|Roboto+Slab&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
 
    <div class="container"> <!--start container -->
     <!-- (1) START Heading -- spans across the entire top-->
      <div id="top">
      <header><h1>Astronomy Picture of the Day Search</h1></header>
        <hr>
      </div> 
      <!--END Heading -->
      
      <!-- (2) START resultStatus -- gets filled in by status of ajax call -- spans across the entire page below the heading-->
      <div id="resultStatus"></div> 
      <!--END resultStatuts -->
      
      <!-- (3) START selectionArea -- Takes up the first column and starts on third row-->
      <div id="selectionArea">
        <label for datepicker> &darr; Select Date &darr; </label>  <br> 
        <input type="text" id="datepicker" autocomplete="off" onload="showDatePicker()"> <br>
      </div>
      <!--END selectionArea -->
      
      <!-- (4) START resultsDisplay -- Takes up 2nd and 3rd column and starts on third row-->
      <div id="resultsDisplay">
        <h4 id = "imgTitle"></h4>
        <iframe id="resultVid" type="text/html" width="640" height="385" frameborder="0"></iframe>
        <figure id="results"><a id="hdLink" href=""><img src="" alt="" id="resultImg" width="400px"></a>
        <figcaption id="copyright"></figcaption></figure>
        <span id="description"></span>
      </div> 
       <!--END resultsDisplay -->
      
      <!-- (5) Footer starts on 4th row -->
     <div id="sticky-footer" class="bg-dark text-white font-small">
      
          <img src="img/csumb-logo-white.png" alt="CSUMB logo"> <br>
          CST 336 Internet Programming 2019&copy; Kazemi<br>
          Data from <a href="https://api.nasa.gov/#getting-started">NASA's APOD API</a>
            
      </div>
     <!-- End footer -->
      
     </div> <!--end container -->
    
    
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script src="js/scripts.js"></script>
  </body>
</html>