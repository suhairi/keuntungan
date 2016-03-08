$(document).ready(function() {

	var untungBersih = parseFloat($('#untungBersih').val());
	$('#untungBersih').val(untungBersih.toFixed(2));

	$('#untungRugi').change(function() {

		var untungRugi = parseFloat($('#untungRugi').val());
		$('#untungRugi').val(untungRugi.toFixed(2));

		var jumlah = parseFloat(parseFloat($('#untungRugi').val()) + parseFloat(untungBersih));
		

		if($('#untungRugi').val() > 0 && $('#untungBersih').val() > 0 && jumlah > 0) {
			$('#keputusan').html('Keputusan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>(a)</u>&nbsp;&nbsp;&nbsp;&nbsp;' + jumlah.toFixed(2));
			$('#markah1').val(5.0);
		}

		if($('#untungRugi').val() < 0 && $('#untungBersih').val() > 0 && jumlah > 0) {
			$('#keputusan').html('Keputusan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>(b)</u>&nbsp;&nbsp;&nbsp;&nbsp;' + jumlah.toFixed(2));
			$('#markah1').val(3.0);
		}

		if(jumlah < 0) {
			$('#keputusan').html('Keputusan : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>(c)</u>&nbsp;&nbsp;&nbsp;&nbsp;' + jumlah.toFixed(2));
			$('#markah1').val(1.0);
		}
	});

	$('#markah2').val(3.0);
	$('#markah3').val(3.0);
	$('#markah5').val(3.0);

	$('#7a').change(function() {

		var jumlah = parseFloat($('#7a').val());
		$('#7a').val(jumlah.toFixed(2));

		var markah2 = $('#markah2').val();

		if(jumlah <= 0)
			$('#markah2').val(-3.0);
	});

	$('#7b').change(function() {

		var jumlah = parseFloat($('#7b').val());
		$('#7b').val(jumlah.toFixed(2));

		var markah3 = $('#markah3').val();

		if(jumlah <= 0)
			$('#markah3').val(-3.0);
	});

	$('#7c').change(function() {

		var jumlah = parseFloat($('#7c').val());

		var markah4 = $('#markah4').val();

		if(jumlah == 1)
			$('#markah4').val(-3.0);
		else
			$('#markah4').val(3.0);
	});

	$('#7d').change(function() {

		var jumlah = parseFloat($('#7d').val());
		$('#7d').val(jumlah.toFixed(2));

		if(jumlah > 0)
			$('#markah5').val(3.0);
		else
			$('#markah5').val(-3.0);
	});








});