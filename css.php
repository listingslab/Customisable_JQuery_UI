<?php
	/* Creates an inline CSS stylesheet which overides the 
	 * default jQuery UI styles in certain certain situations */ 
?>
<style>
	/* Dynamically change jQuery UI colours with inline CSS
	 * Find out how here http://wp.me/P5Q8N9-1eS */
	.ui-widget * { outline: none; }​
	.ui-icon,.ui-widget-content .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-widget-header .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-default .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-hover .ui-icon, .ui-state-focus .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-active .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-highlight .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
	.ui-state-error .ui-icon, .ui-state-error-text .ui-icon { background-image: url("<?php print $ui ['icon'];?>");}
</style>


