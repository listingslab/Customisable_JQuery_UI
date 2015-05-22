$(document).ready(function () {
	try {
		_cui ();
		_cui_nav ();
	}catch (err){
		console.log ('Document.ready Error' + err);	
	}
});
function _cui (){
	try {
		console.log ('Customising a JQuery UI theme with PHP');
		_cui_css ($('#cui'), 'font-family', 'Arial' );
		_cui_css ($('#cui'), 'width', '90%' );
		_cui_css ($('#cui'), 'margin', 'auto' );
		_cui_css ($('#cui h1'), 'font-weight', 'normal' );
		_cui_css ($('#cui h2'), 'font-weight', 'normal' );
		_cui_css ($('#cui h3'), 'font-weight', 'normal' );
		_cui_css ($('#cui h4'), 'font-weight', 'normal' );
		_cui_css ($('#cui a'), 'text-decoration', 'none' );
		_cui_css ($('#cui header'), 'margin-bottom', '25px' );
		
		_cui_css ($('#cui #cui_left'), 'float', 'left' );
		_cui_css ($('#cui #cui_left'), 'width', '39%' );
		_cui_css ($('#cui #cui_right'), 'float', 'right' );
		_cui_css ($('#cui #cui_right'), 'width', '59%' );
		
		
		_cui_css ($('#cui .padded'), 'margin', '10px' );
		_cui_css ($('#cui #cui_info'), 'margin-top', '15px' );
		_cui_css ($('#cui #cui_info'), 'background', '#e7e7e7' );
		_cui_css ($('#cui #cui_info'), 'border', '1px solid #d3d3d3' );
		$('#cui #cui_info').addClass('ui-state- ui-corner-all');
	}catch (err){
		console.log ('_cui ()' + err);	
	}
}

function _cui_nav (){
	try {
		$('#cui #cui_info').hide ();
		_cui_btn ('#cui .github', 'person', true);
		_cui_btn ('#cui .more', 'plus', true);
		
		$('#cui .more').click (function (){
			$('#cui #cui_info').fadeIn ();
			$(this).hide ();
			return false;
		});
	}catch (err){
		console.log (err);
	}
}

function _cui_css (selector, css, value){
// Uses jQuery to set CSS
	try {
		$(selector).css (css,value);
	}catch (err){
		console.log (err);
	}
}

function _cui_btn (selector, icon, showtext){
// Uses jQueryui to create buttons
	try {
		new_button = $(selector).button ({
			icons: {
				primary: "ui-icon-"+icon
			},
			text: showtext 
		});
		new_button.click (function(){
			return true;
		});
	}catch (err){	
		console.log (err);
	}
}
