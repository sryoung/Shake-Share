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
	
	<body>
	
	
	 <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <h3>
                    Settings
                </h3>
            </div>
            <div data-role="content">
                <div data-role="collapsible-set">
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            Profile
                        </h3>
                        <div style="width: 100px; height: 100px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;">
                            <img src="http://codiqa.com/static/images/v2/image.png" alt="image" style="position: absolute; top: 50%; left: 50%; margin-left: -16px; margin-top: -18px" />
                        </div>
                        <a data-role="button" href="#page1">
                            Change photo
                        </a>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="textinput1">
                                    Name
                                </label>
                                <input name="" id="textinput1" placeholder="" value="" type="text" />
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="textarea1">
                                    Status
                                </label>
                                <textarea name="" id="textarea1" placeholder="">
                                </textarea>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="textinput2">
                                    Email
                                </label>
                                <input name="" id="textinput2" placeholder="" value="" type="text" />
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="textinput3">
                                    Region
                                </label>
                                <input name="" id="textinput3" placeholder="" value="" type="text" />
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="textarea2">
                                    password
                                </label>
                                <textarea name="" id="textarea2" placeholder="">
                                </textarea>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch7">
                                    Gender
                                </label>
                                <select name="toggleswitch7" id="toggleswitch7" data-theme="" data-role="slider">
                                    <option value="off">
                                        Male
                                    </option>
                                    <option value="on">
                                        Female
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            General
                        </h3>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch2">
                                    Notification
                                </label>
                                <select name="toggleswitch2" id="toggleswitch2" data-theme="" data-role="slider" data-mini="true">
                                    <option value="off">
                                        Off
                                    </option>
                                    <option value="on">
                                        On
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch4">
                                    Sound
                                </label>
                                <select name="toggleswitch4" id="toggleswitch4" data-theme="" data-role="slider" data-mini="true">
                                    <option value="off">
                                        Off
                                    </option>
                                    <option value="on">
                                        On
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch5">
                                    Vibration
                                </label>
                                <select name="toggleswitch5" id="toggleswitch5" data-theme="" data-role="slider" data-mini="true">
                                    <option value="off">
                                        Off
                                    </option>
                                    <option value="on">
                                        On
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch10">
                                    Auto save photos
                                </label>
                                <select name="toggleswitch10" id="toggleswitch10" data-theme="" data-role="slider" data-mini="true">
                                    <option value="off">
                                        Off
                                    </option>
                                    <option value="on">
                                        On
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            Privacy
                        </h3>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch8">
                                    Profile
                                </label>
                                <select name="toggleswitch8" id="toggleswitch8" data-theme="" data-role="slider">
                                    <option value="off">
                                        Private
                                    </option>
                                    <option value="on">
                                        Public
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch11">
                                    Find me by photos
                                </label>
                                <select name="toggleswitch11" id="toggleswitch11" data-theme="" data-role="slider">
                                    <option value="off">
                                        Off
                                    </option>
                                    <option value="on">
                                        On
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="toggleswitch12">
                                    Find me by ID
                                </label>
                                <select name="toggleswitch12" id="toggleswitch12" data-theme="" data-role="slider">
                                    <option value="off">
                                        Off
                                    </option>
                                    <option value="on">
                                        On
                                    </option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div data-role="collapsible" data-collapsed="false">
                        <h3>
                            Filter
                        </h3>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="slider2">
                                    Pick Up Maxium Size
                                </label>
                                <input type="range" name="slider" value="2" min="0" max="5" data-highlight="false" />
                            </fieldset>
                        </div>
                        <div data-role="fieldcontain">
                            <fieldset data-role="controlgroup">
                                <label for="slider1">
                                    Default Distance
                                </label>
                                <input type="range" name="slider" value="5" min="0" max="10" data-highlight="false" />
                            </fieldset>
                        </div>
                    </div>
                <div data-role="collapsible" data-collapsed="false">
                <a data-role="button" href="#page1">
                    Log Out
                </a>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
        
		
		
		<div data-role="content">	
		
	
	</div><!-- /content -->
		
		
		<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
			<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		
		<ul>
			<li><a href="home.php" id="home" data-icon="custom">Home</a></li>
			<li><a href="contacts.php" id="key" data-icon="custom">Contacts</a></li>
			<li><a href="gallery.php" id="beer" data-icon="custom">Gallery</a></li>
			<li><a href="settings.php" id="skull" data-icon="custom"  class="ui-btn-active">Settings</a></li>
		</ul>
			</div>
		</div><!-- /footer -->	
	</body>
	
	
	
</html>