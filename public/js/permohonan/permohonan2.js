$(document).ready(function(){

	$('#semasa1').hide();
	$('#semasa2').hide();
	$('#semasa3').hide();

	$('#semasa1Select').change(function() {
		$('#semasa1').show();

		if($('#semasa1Select').val() == '')
			$('#semasa1').hide();
	});

	$('#semasa2Select').change(function() {
		$('#semasa2').show();

		if($('#semasa2Select').val() == '')
			$('#semasa2').hide();
	});

	$('#semasa3Select').change(function() {
		$('#semasa3').show();

		if($('#semasa3Select').val() == '')
			$('#semasa3').hide();
	});

	// $('#ditangan').keyup(function() {
	// 	calc();
	// });

	// $('#semasa1').keyup(function() {
	// 	calc();
	// });

	// $('#semasa2').keyup(function() {
	// 	calc();
	// });

	// $('#semasa3').keyup(function() {
	// 	calc();
	// });

	$("input[type='number']").keyup( function() {
  		calc();
	});

	function calc() {

		ditangan = document.getElementById('ditangan').value;
		semasa1 = document.getElementById('semasa1').value;
		semasa2 = document.getElementById('semasa2').value;
		semasa3 = document.getElementById('semasa3').value;

		jumlahA = parseFloat(ditangan) + parseFloat(semasa1) + parseFloat(semasa2) + parseFloat(semasa3);
		
		document.getElementById('jumlahA').value = parseFloat(jumlahA).toFixed(2);
		document.getElementById('jumlahI').value = jumlahA.toFixed(2);
	}

});