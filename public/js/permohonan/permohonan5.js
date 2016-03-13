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

		if(jumlah >= 0)
			$('#markah2').val(-3.0);
	});

	$('#7b').change(function() {

		var jumlah = parseFloat($('#7b').val());
		$('#7b').val(jumlah.toFixed(2));

		var markah3 = $('#markah3').val();

		if(jumlah > 0)
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

		if(jumlah >= 60.0)
			$('#markah5').val(3.0);
		else if(jumlah >= 50.0 && jumlah <= 59.0)
			$('#markah5').val(-1.0)
		else if(jumlah >= 40.0 && jumlah <= 49.0)
			$('#markah5').val(-2.0);
		else
			$('#markah5').val(-3);
	});

	$('#7e1').change(function() {

		var jumlah7e1 = parseFloat($('#7e1').val());
		$('#7e1').val(jumlah7e1.toFixed(2));

		var jumlah7e2 = parseFloat($('#7e2').val());

		if(jumlah7e1 == '' || isNaN(jumlah7e1))
			jumlah7e1 = 0.00;

		if(jumlah7e2 == '' || isNaN(jumlah7e2))
			jumlah7e2 = 0.00;

		var total = parseFloat(jumlah7e1 - jumlah7e2);

		$('#jumlah7e').html("RM " + total.toFixed(2));

	});

	$('#7e2').change(function() {

		var jumlah7e1 = parseFloat($('#7e1').val());		
		
		var jumlah7e2 = parseFloat($('#7e2').val());
		$('#7e2').val(jumlah7e2.toFixed(2));


		if(jumlah7e1 == '' || isNaN(jumlah7e1))
			jumlah7e1 = 0.00;

		if(jumlah7e2 == '' || isNaN(jumlah7e2))
			jumlah7e2 = 0.00;

		var total = parseFloat(jumlah7e1 - jumlah7e2);

		if(total < 0.00)
			$('#markah6').val(-3.0);
		else
			$('#markah6').val(3.0);

		$('#jumlah7e').html(total.toFixed(2));

	});








});