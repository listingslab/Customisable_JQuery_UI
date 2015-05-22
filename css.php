<?php
/*
 * Create an inline CSS stylesheet which overides the 
 * default jQuery UI styles in certain certain situations
 * 
 */ 
 global $ui;
 $ui_default = '#3299cc';
 $ui_text = 'blue'; // #ffffff
?>

<style>
	/* Dynamically Changing jQuery UI Colours?
	 * Want to find out how? http://wp.me/P5Q8N9-1eS
	 */
	
.ui-widget-header .ui-state-default {
	background: <?php print $ui_default;?> url("images/ui-bg_flat_0_cd1acf_40x100.png") 50% 50% repeat-x;
}

.ui-widget-header {
	color: <?php print $ui_text;?>;
}
.ui-widget-header a {
	color: <?php print $ui_text;?>;
}
.ui-widget-header .ui-state-default {
	color: <?php print $ui_text;?>;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited {
	color: <?php print $ui_text;?>;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
	color: <?php print $ui_text;?>;
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited {
	color: <?php print $ui_text;?>;
}

.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	color: <?php print $ui_text;?>;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: <?php print $ui_text;?>;
}
	
</style>