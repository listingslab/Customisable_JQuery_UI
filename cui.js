$(document).ready(function () {
	try {
		_cui ();
	}catch (err){
		console.log ('Document.ready Error' + err);	
	}
});

function _cui (){
	try {
		console.log ('Customising a JQuery UI theme with PHP');
		_cui_css ($('#cui'), 'width', '90%' );
		_cui_css ($('#cui'), 'margin', 'auto' );
		_cui_css ($('#cui'), 'font-family', 'Arial' );
		
		_cui_css ($('#cui #cui_left'), 'float', 'left' );
		_cui_css ($('#cui #cui_left'), 'width', '49%' );
		//_cui_css ($('#cui #cui_left'), 'border', '1px solid black' );
		_cui_css ($('#cui #cui_right'), 'float', 'right' );
		_cui_css ($('#cui #cui_right'), 'width', '49%' );
		//_cui_css ($('#cui #cui_right'), 'border', '1px solid black' );
	}catch (err){
		console.log ('_cui ()' + err);	
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
