$(document).ready(function() {

	three();
	four();


	function three() {

		var item2 = $('#item2').val();
		var item3 = $('#item3').val();
		var item4 = $('#item4').val();
		var item5 = $('#item5').val();
		var untungBersih = $('#untungBersih').val();
		var jumlah = $('#jumlah').val();

		if(item2 == '')
			$('#item2').val(parseFloat(0).toFixed(2));

		if(item3 == '')
			$('#item3').val(parseFloat(0).toFixed(2));

		if(item4 == '')
			$('#item4').val(parseFloat(0).toFixed(2));

		if(item5 == '')
			$('#item5').val(parseFloat(0).toFixed(2));

		var jumlah = parseFloat(item2 + item3 + item4 + item5)

		var jumlahAtas = parseFloat(untungBersih - jumlah);
		var jumlahBawah = parseFloat(untungBersih);

		var nisbah = parseFloat(jumlahAtas/jumlahBawah);

		$('#jumlah').val(jumlah.toFixed(2));
		$('#jumlahAtas').html(parseFloat(jumlahAtas).toFixed(2));
		$('#jumlahBawah').html(parseFloat(jumlahBawah).toFixed(2));
		$('#nisbah').html("1 : " + nisbah.toFixed(2));

		if(nisbah <= 0)
			markah = 0;

		if(nisbah.toFixed(2) >= 0.01 && nisbah.toFixed(2) <= 0.09)
			markah = 1;

		if(nisbah.toFixed(2) >= 0.10 && nisbah.toFixed(2) <= 0.19)
			markah = 2;

		if(nisbah.toFixed(2) >= 0.20 && nisbah.toFixed(2) <= 0.29)
			markah = 3;

		if(nisbah.toFixed(2) >= 0.30 && nisbah.toFixed(2) <= 0.39)
			markah = 4;

		if(nisbah.toFixed(2) >= 0.40 && nisbah.toFixed(2) <= 0.49)
			markah = 5;

		if(nisbah.toFixed(2) >= 0.50 && nisbah.toFixed(2) <= 0.59)
			markah = 6;

		if(nisbah.toFixed(2) >= 0.60)
			markah = 7;

		$('#markah').val(markah.toFixed(1));
	}

	function four() {

		// Initialize

		var _4Item1 = $('#_4Item1').val();
		var _4Item2 = $('#_4Item2').val();		

		if(_4Item1 == '')
			$('#_4Item1').val(parseFloat(0).toFixed(2));

		if(_4Item2 == '')
			$('#_4Item2').val(parseFloat(0).toFixed(2));
		
		// On change

		$('#_4Item1').change(function() {

			var _4jumlahAtas = $('#_4Item1').val();
			
			alert(_4jumlahAtas);
			$('#_4jumlahAtas').html(_4jumlahAtas.toFixed(2));
		});

	}


});