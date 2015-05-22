<?php
 	global $ui;
	$ui = array ();
	// Default (unless overridden by GET variables)
	$ui ['ui_folder'] = 'jquery-ui-1.11.4.custom/';
	$ui ['icon'] = $ui ['ui_folder'].'images/ui-icons_white.png'; // black or white
	$ui ['font'] = 'Courier'; 
	// colours
	$ui ['default'] = '#3299cc'; // ll mid-blue
	$ui ['hover'] = '#00b2ee'; // ll light	-blue
	$ui ['active'] = '#00688b'; // ll dark-blue
	$ui ['border'] = '#164a5b'; // darkest blue
	$ui ['backround'] = '#f4f4f4'; // very light
	$ui ['header'] = '#6bc7f5'; // bluish
	$ui ['btn_text'] = '#ffffff'; // bright red
	$ui ['content_text'] = '#222222'; // bright red
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Customisable JQuery UI</title>
		<meta name="viewport" content="width=device-width">
		<script src="<?php print $ui ['ui_folder'];?>external/jquery/jquery.js"></script>
		<script src="<?php print $ui ['ui_folder'];?>jquery-ui.js"></script>
		
		<link rel="stylesheet" media="screen" type="text/css" href="colorpicker/css/colorpicker.css" />
		<script type="text/javascript" src="colorpicker/js/colorpicker.js"></script>

		<script src="cui.js"></script>
		<link href="<?php print $ui ['ui_folder'];?>jquery-ui.css" rel="stylesheet">
		<?php include 'css.php';?>
	</head>
	<body>
<div id="cui">
<header>
	<h1><a href="/">Customising a JQuery UI theme with PHP</a></h1>
	<a class="more" href="?show=more">
		Learn More</a>
	<a class="github" href="https://github.com/listingslab/Customisable_JQuery_UI/" target="_blank">
		Download</a>
</header>


		
<div id="cui_info"><div class="padded">
	<h3>Ever wished you could use PHP to change the colours of
a jQuery UI Theme dynamically? This project demonstrates how
to do just that.</h3>
	<h4>Getting Started</h4>
		<p>We strip down a <a target="_blank" href="http://jqueryui.com/themeroller/">jQuery UI theme</a> 
		to the bare essentials and change the CSS with PHP 
		dynamically. Starting with a simple theme, 
		we keep the theme variables and files to a minimum. 
		There are only 2 colours for icons, black and white.
		There are no background images, just the basics</p>
			
		<h4>Project Resources</h4>
	<ul>
	<li><a href="http://wp.me/P5Q8N9-1eS" target="_blank">Listingslab Support</a>
	</li>
	<li><a href="http://jqueryui.com/themeroller/" target="_blank">jQuery UI Themeroller</a>
	 - jQuery UI is a curated set of user interface interactions widgets</li>
	<li><a href="https://bgrins.github.io/spectrum/" target="_blank">Spectrum</a>
	 - The No Hassle jQuery Colorpicker</li>
	</ul>
</div></div>
	
	
<div id="cui_right"><div class="padded">
<a class="cui_open_dialog" href="?dialog=show">Show Dialog</a>
<div id="dialog" title="Dialog Title">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<div id="datepicker"></div>

<div id="accordion">
	<h3>First</h3>
	<div>
		Lorem ipsum dolor sit amet. 
		Lorem ipsum dolor sit amet. 
		Lorem ipsum dolor sit amet.
	</div>
	<h3>Second</h3>
	<div>Phasellus mattis tincidunt nibh.</div>
	<h3>Third</h3>
	<div>Nam dui erat, auctor a, dignissim quis.</div>
</div>
	
	
	<!--
	<div class="ui-widget">
		<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
			<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
			<strong>Hey!</strong> Sample ui-state-highlight style.</p>
		</div>
	</div>
		<br>
	<div class="ui-widget">
		<div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
			<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
			<strong>Alert:</strong> Sample ui-state-error style.</p>
		</div>
	</div>-->
</div></div>
	
	
<div id="cui_left"><div class="padded">
<form method="get">
<div style="margin:15px;">
	<p><strong>Main Colours</strong></p>
	<input type='text' class="colour_picker" name="default" value='<?php print $ui ['default'] ;?>' />
	Default		
		<br />
	<input type='text' name="hover" value='<?php print $ui ['hover'] ;?>' />
	Hover
		<br />
	<input type='text' name="active" value='<?php print $ui ['active'] ;?>' />
	Active
		<br />
	<input type='text' name="border" value='<?php print $ui ['border'] ;?>' />
	Border
</div>
<div style="margin:15px;">
	<p><strong>Button Text Colour</strong></p>
	<input type="radio" name="text" value="black" checked />Black
	<input type="radio" name="text" value="white" />White
</div>
<div style="margin:15px;">
	<p><strong>Icon Colour</strong></p>
	<input type="radio" name="icon" value="black" checked />Black
	<input type="radio" name="icon" value="white" />White
</div>
<div style="margin:15px;">
	<p><strong>Font Family</strong></p>
	<input type="radio" name="font" value="Lato" checked />Lato
	<br>
	<input type="radio" name="font" value="Arial" />Arial
	<br>
	<input type="radio" name="font" value="Verdana" />Verdana
</div>
<input type="submit" value="Dynamically Create UI Theme" />
	</form>
</div></div>
	
	<div style="clear:both;"></div>
		
	
</div>
	</body>
</html>