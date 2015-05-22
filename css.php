<?php
	/* Creates an inline CSS stylesheet which overides the 
	 * default jQuery UI styles in certain certain situations */
 	$ui ['icon'] = $ui ['ui_folder'].'images/ui-icons_ffffff_256x240.png'; // black or white
	$ui ['font'] = 'Courier';
	
	$ui ['default'] = '#358489'; //883589
	$ui ['hover'] = '#'; //b86eb9
	$ui ['active'] = '#'; //631064
	$ui ['btn_text'] = '#'; //d8dff1
	$ui ['content_bg'] = '#'; //f4f6fa
	$ui ['content_text'] = '#'; //434672
	$ui ['toolbar_bg'] = '#'; //a3a7b2
	$ui ['toolbar_text'] = '#'; //434672
	$ui ['border'] = '#1a45ff'; //ff451a
	$ui ['highlight'] = '#'; //fffc00
	$ui ['error'] = '#'; //cd0a0a
	
	$ui ['font'] = 'Courier'; 
?>
<style>
	/* Dynamically change jQuery UI colours with inline CSS
	 * Find out how here http://wp.me/P5Q8N9-1eS */
	.ui-widget * { outline: none; }​
	/* Icons */
	.ui-icon,.ui-widget-content .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-widget-header .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-default .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-hover .ui-icon, .ui-state-focus .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-active .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-highlight .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-error .ui-icon, .ui-state-error-text .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	/* Icons */
</style>


