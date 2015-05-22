<?php
	/* Creates an inline CSS stylesheet which overides the 
	 * default jQuery UI styles in certain certain situations */
 	$ui ['icon'] = $ui ['ui_folder'].'images/ui-icons_ffffff_256x240.png'; // black or white
	$ui ['toolbar_bg'] = '#3299cc'; //a3a7b2
	$ui ['toolbar_text'] = '#fff'; //c8d7ff
	$ui ['content_bg'] = '#000'; //f4f6fa
	$ui ['content_text'] = '#fff'; //434672
	$ui ['btn_text'] = '#96e5ff'; //d8dff1
	$ui ['border'] = '#3cff00'; //ff451a
	
	
	$ui ['default'] = '#358489'; //883589
	$ui ['hover'] = '#'; //b86eb9
	$ui ['active'] = '#'; //631064
	$ui ['highlight'] = '#'; //fffc00
	$ui ['error'] = '#'; //cd0a0a
	
?>

<style>
	/* Dynamically change jQuery UI colours with inline CSS
	 * Find out how here http://wp.me/P5Q8N9-1eS */
	
	/* Border Color */
	
	/* Button Text Color */
	.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus { color: <?php print $ui ['btn_text'];?>;}
	.ui-state-hover a,.ui-state-hover a:hover,.ui-state-hover a:link,.ui-state-hover a:visited,.ui-state-focus a,.ui-state-focus a:hover,.ui-state-focus a:link,.ui-state-focus a:visited {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-active a,.ui-state-active a:link,.ui-state-active a:visited {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default {color: <?php print $ui ['btn_text'];?>;}
	.ui-state-default a,.ui-state-default a:link,.ui-state-default a:visited {color: <?php print $ui ['btn_text'];?>;}
	
	/* Content */
	.ui-widget-content { background: <?php print $ui ['content_bg'];?>; color: <?php print $ui ['content_text'];?>;}
	.ui-widget-content a { color: <?php print $ui ['content_text'];?>;}
	
	/* Toolbar */
	.ui-widget-header {background: <?php print $ui ['toolbar_bg'];?>;}
	.ui-widget-header {color: <?php print $ui ['toolbar_text'];?>}
	.ui-widget-header a {color: <?php print $ui ['toolbar_text'];?>;}
	/* Icons */
	.ui-icon,.ui-widget-content .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-widget-header .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-default .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-hover .ui-icon, .ui-state-focus .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-active .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-highlight .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-error .ui-icon, .ui-state-error-text .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	/* Turn off annoying outlines */
	.ui-widget * { outline: none; }​
</style>


