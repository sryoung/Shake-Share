<!DOCTYPE html>
<html>
<head>
	<title>VoteCasterFail</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head> 

<body onload="document.refresh();">


<div data-role="page" id="one" data-add-back-btn="true">

	<div data-role="header" id="shake">
		<h1>Shake</h1>
	</div><!-- /header -->
	
    <div data-role ="content">
    
        <div id="guide"><h2>Shake your phone!</h2></div>
    
            
        <div id="output">
        </div>
        
        <div id="debugdiv">
        </div>
      
    </div><!-- /content -->
</div>

    <script type="text/javascript" src="jquery.ios-shake.js"></script>
    
 
    <script type="text/javascript">
    	
    	var shakecount = 0;
        $(document).ready(function() {
            function onShake() {
            	if (shakecount == 0) {
            		$('#guide').remove();
            		$('#output').append("<h2>Droping off your photo</h2>");
             		$('#output').append("<p><a href='home.php' data-role ='button'>Back Home</a></p>");
             		
             		shakecount++;
            	}
            }

	
            $.shake({
            	// debug: "#debugdiv",             // debug div id
    			// supported: "#notsupporteddiv",  // not supported message div	
            	violence: 3.0,                  // single shake sensitivity
    			hf: 0.2,                        // high-pass filter constant
    			shakethreshold: 5,              // number of single shakes required to fire a shake event
   				debounce: 1000,                 // delay between shake events (in ms)
                callback: function() {
                    onShake();
                }
            });
        });
        
     
        
       
    </script>
    
   
</body>
</html>