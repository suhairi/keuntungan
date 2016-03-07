$(document).ready(function() {

	var untungBersih = parseFloat($('#untungBersih').val());
	$('#untungBersih').val(untungBersih.toFixed(2));

	$('#untungRugi').change(function() {

		var untungRugi = parseFloat($('#untungRugi').val());
		$('#untungRugi').val(untungRugi.toFixed(2));

		var jumlah = parseFloat(parseFloat($('#untungRugi').val()) + parseFloat(untungBersih));
		

		if($('#untungRugi').val() > 0 && $('#untungBersih').val() > 0 && jumlah > 0) {
			$('#keputusan').html('<u>(a)</a>&nbsp;&nbsp;&nbsp;&nbsp;' + jumlah.toFixed(2));
			$('#markah1').val(5.0);
		}

		if($('#untungRugi').val() < 0 && $('#untungBersih').val() > 0 && jumlah > 0) {
			$('#keputusan').html('<u>(b)</a>&nbsp;&nbsp;&nbsp;&nbsp;' + jumlah.toFixed(2));
			$('#markah1').val(3.0);
		}

		if(jumlah < 0) {
			$('#keputusan').html('<u>(c)</a>&nbsp;&nbsp;&nbsp;&nbsp;' + jumlah.toFixed(2));
			$('#markah1').val(1.0);
		}


	});


});