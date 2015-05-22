<?php
global $ui;
$ui = array ();
$ui ['ui_folder'] = 'jquery-ui-1.11.4.custom/';
 	/*
	 * The factory theme has these colors
	 * which we will find and change
	 */
	
	$ui ['border'] = '#'; //ff451a
 	$ui ['highlight'] = '#'; //fffc00
	$ui ['error'] = '#'; //cd0a0a
	$ui ['default'] = '#'; //883589
	$ui ['hover'] = '#'; //b86eb9
	$ui ['active'] = '#'; //631064
	$ui ['btn_text'] = '#'; //d8dff1
	$ui ['content_bg'] = '#'; //f4f6fa
	$ui ['content_text'] = '#'; //434672
	$ui ['toolbar_bg'] = '#'; //a3a7b2
	$ui ['toolbar_text'] = '#'; //434672
	$ui ['icon'] = $ui ['ui_folder'].'images/ui-icons_white.png'; // black or white
	$ui ['font'] = 'Courier'; 	
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
		
		<a target="_blank" href="http://jqueryui.com/themeroller/?ffDefault=Lato&fwDefault=normal&fsDefault=1.1em&cornerRadius=5px&bgColorHeader=%23a3a7b2&bgTextureHeader=flat&bgImgOpacityHeader=0&borderColorHeader=%23ff451a&fcHeader=%23c8d7ff&iconColorHeader=%23000000&bgColorContent=%23f4f6fa&bgTextureContent=flat&bgImgOpacityContent=0&borderColorContent=%23ff451a&fcContent=%23434672&iconColorContent=%23000000&bgColorDefault=%23883589&bgTextureDefault=flat&bgImgOpacityDefault=0&borderColorDefault=%23ff451a&fcDefault=%23d8dff1&iconColorDefault=%23000000&bgColorHover=%23b86eb9&bgTextureHover=flat&bgImgOpacityHover=0&borderColorHover=%23ff451a&fcHover=%23d8dff1&iconColorHover=%23000000&bgColorActive=%23631064&bgTextureActive=flat&bgImgOpacityActive=0&borderColorActive=%23ff451a&fcActive=%23d8dff1&iconColorActive=%23000000&bgColorHighlight=%23fffc00&bgTextureHighlight=flat&bgImgOpacityHighlight=0&borderColorHighlight=%23ff451a&fcHighlight=%23000000&iconColorHighlight=%23000000&bgColorError=%23cd0a0a&bgTextureError=flat&bgImgOpacityError=0&borderColorError=%23ff451a&fcError=%23ffffff&iconColorError=%23ffffff&bgColorOverlay=%23000000&bgTextureOverlay=flat&bgImgOpacityOverlay=0&opacityOverlay=30&bgColorShadow=%23000000&bgTextureShadow=flat&bgImgOpacityShadow=0&opacityShadow=30&thicknessShadow=0px&offsetTopShadow=0px&offsetLeftShadow=0px&cornerRadiusShadow=0px">
			jQuery Theme
		</a>
			
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
<br />
<div id="dialog" title="Dialog Title">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
<br />
<div id="datepicker"></div>
<br />
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
	
<!--
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
</div></div>-->
	
	<div style="clear:both;"></div>
		
	
</div>
	</body>
</html>