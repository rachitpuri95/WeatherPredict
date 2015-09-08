<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rachit's whether reporter</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    
    
    <style> 
    
     html,body {
    
    height: 100%;
    
    }
    

    
    .background {
    
    
    background-image: url("grass.jpeg");
    background-size: cover;
    width: 100%;
    height: 100%;
    background-position: center;
    }
    
    
    .center {
  	   text-align: center;
  	 	color: 
    }
    
   .movedown {
   
   margin-top: 15px;
   }
   
   .small {
   
   font-size:1.1em;
   
   }
   
   #result 
   {
   
	
   margin-top: 100px;
   font-size: 1.1em; 
   color: black;
  
   }
   
   .top {
   
   margin-top: 100px;
   
   }
   
   
  
    </style>
      </head>
  <body>
    
    <div class="container background"> 

		<div class="row"> 
	
			<div class="col-md-6 col-md-offset-3 center white"> 
			<h2>  Weather Forecast </h2> 
			<p class="lead small movedown" > Enter your city below to get a Forecast of the Weather</p> 
			
			
			<form> 	
				<div class="form-group"> 
				<input type="text" name="city" id="city" class="form-control" placeholder ="Eg. London, Paris, San Francisco..."/>		
				</div> 
				
				
				<input type="submit" class="btn btn-success movedown" value=" Find My Weather" id="sUbmit"/> 
				
			
				
				
				
			</form> 
			
			<div class="alert alert-success" id="result">  </div> 
			<div class="alert alert-danger top" id="error"></div> 
			</div>
			
			
	
		</div> 


	</div> 
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script> 
	var height = $(window).height();
	height=height/4.5; 
	$(".center").css("padding-top",height+"px");
    
    
    $("#result").hide();
    $("#error").hide();
    $("#sUbmit").click(function(event) {
    event.preventDefault();
    
   
   
    if( $("#city").val() =="" )
    {
    	$("#result").hide();
    	$("#error").html("Please enter a city");
    	$("#error").fadeIn(1000); 
    }
    
    else
    {
    
    $.get("scraper.php?city="+$("#city").val(), function(data)
    {		$("#error").hide();
			$("#result").hide();
		
		if(data==" ")
		{
		$("#error").html("Could not find whether forecast for this city, please try again.");
		$("#error").fadeIn(1000); 
		}
		
		else 
		{
	
		$("#result").html(data);
		$("#result").fadeIn(1000);
    
    	}
    });
    
    }
    
    
    
    });
    
    
    </script> 
  </body>
  
  
</html>
