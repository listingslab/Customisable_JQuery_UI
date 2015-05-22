<?php
	$ui = array ();
	// Default (unless overridden by GET variables)
	$ui ['on'] = '';
	$ui ['off'] = '';
	$ui ['over'] = '';
	$ui ['text'] = '';
	$ui ['text'] = 'black'; // black or white
	$ui ['border'] = '';
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
		<link href="<?php print $ui ['ui_folder'];?>jquery-ui.css" rel="stylesheet">
	</head>
	<body>
<h1><a href="/">Customisable JQuery UI</a></h1>
<h3>Ever wished you could use PHP to change the colours of
a jQuery UI Theme dynamically? This project does just that</h3>

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
	</ul>
	<input type="submit" value="Configure Now" />
</form>

<p>We strip down a <a target="_blank" href="http://jqueryui.com/themeroller/">jQuery UI theme</a> 
	to the bare essentials and change the CSS with PHP 
	dynamically. Starting with a simple theme, 
	we keep the theme variables and files to a minimum. 
	There are only 2 colours for icons, black and white.
	There are no background images, just the basics</p>
	

	
	<h4>Project Resources</h4>
	<ul>
	<li><a href="http://jqueryui.com/themeroller/" target="_blank">jQuery UI Themeroller</a>
		 - jQuery UI is a curated set of user interface interactions widgets</li>
	<li><a href="https://bgrins.github.io/spectrum/" target="_blank">Spectrum</a>
		 - The No Hassle jQuery Colorpicker</li>
	</ul>
	</body>
</html>