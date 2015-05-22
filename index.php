<?php
	$ui = array ();
	// Default (unless overridden by GET variables)
	$ui ['on'] = 'yellow';
	$ui ['off'] = 'orange';
	$ui ['over'] = 'red';
	$ui ['text'] = 'purple';
	$ui ['font'] = 'Arial';
	$ui ['text'] = 'black'; // black or white
	$ui ['border'] = 'pink';
	$ui ['ui_folder'] = 'jquery-ui-1.11.4.custom/';
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Customisable JQuery UI</title>
		<meta name="viewport" content="width=device-width">
		<script src="<?php print $ui ['ui_folder'];?>external/jquery/jquery.js"></script>
		<script src="<?php print $ui ['ui_folder'];?>jquery-ui.js"></script>
		<script src="cui.js"></script>
		<link href="<?php print $ui ['ui_folder'];?>jquery-ui.css" rel="stylesheet">
	</head>
	<body>
<div id="cui">
	<h1><a href="/">Customising a JQuery UI theme with PHP</a></h1>
	<h3>Ever wished you could use PHP to change the colours of
	a jQuery UI Theme dynamically? This project does just that</h3>
	
	<div id="cui_right">
		<button id="button">A button element</button>
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
</div>
		
	</div>
	
	
	<div id="cui_left">
		<form method="get">
			<p>Configure UI Theme</p>
			<input type="hidden" name="hidethis" value="dwqeqw" />
			<ul>
				<li>Default Button Background Colour</li>
				<li>Active Button Background Colour</li>
				<li>Over Button Background Colour</li>
				<li>Text Colour</li>
				<li>Icon Colour</li>
				<li>Border Colour</li>
				<li>Font</li>
			</ul>
			<input type="submit" value="Configure Now" />
		</form>
	
	</div>
	<div style="clear:both;"></div>
	<div id="cui_foot">
		
		<h3>Getting Started</h3>
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
		<h4>Download Source Code</h4>
		<a href="https://github.com/listingslab/Customisable_JQuery_UI/archive/master.zip" target="_blank">
		<img src="img/github_download_zip.png" alt="github_download_zip" width="148" height="30" />
		</a>
	</div>
</div>
	</body>
</html>