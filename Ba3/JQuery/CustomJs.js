

$(document).ready(function(){

	$('#CarSlide').hide();
	$('#InverterSlide').hide();

});


$('#showCar').click(function(){
	$('.bodyDesign').hide();
	$('#CarSlide').slideUp().show();

	window.location.hash='#CarSlide';

}); 

$('#showInverter').click(function(){
	$('.bodyDesign').hide();
	$('#InverterSlide').slideUp().show();

	window.location.hash='#InverterSlide';

}); 

$('#showTrailer').click(function(){

	$('.bodyDesign').hide();
	$('#InverterSlide').slideUp().show();

	window.location.hash='#InverterSlide';

}); 


$('#btnRemove').click(function()
{
	$('.bodyDesign').show();
	$('#CarSlide').hide();
	
})

$('#btnClose').click(function()
{
	$('.bodyDesign').show();
	$('#InverterSlide').hide();
})

