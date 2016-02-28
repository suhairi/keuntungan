$(document).ready(function() {

	$("input[type='number']").change( function() {
			calc();
	});	

	calc();




	function calc() {

		var item1 = $('#item1').val();
		var item2 = $('#item2').val();
		var item3 = $('#item3').val();
		var item4 = $('#item4').val();
		var item5 = $('#item5').val();

		var untungBersih = $('#untungBersih').val();
		var jumlahAtas = $('#jumlahAtas').val();
		var jumlahBawah = $('#jumlahBawah').val();

		if(isNaN(item1) || item1 == '')
			item1 = parseFloat(0);
		else
			$('#item1').val(parseFloat(item1).toFixed(2));

		if(isNaN(item2) || item2 == '')
			item2 = parseFloat(0);
		else
			$('#item2').val(parseFloat(item2).toFixed(2));

		if(isNaN(item3) || item3 == '')
			item3 = parseFloat(0);
		else
			$('#item3').val(parseFloat(item3).toFixed(2));

		if(isNaN(item4) || item4 == '')
			item4 = parseFloat(0);
		else
			$('#item4').val(parseFloat(item4).toFixed(2));

		if(isNaN(item5) || item5 == '')
			item5 = parseFloat(0);
		else
			$('#item5').val(parseFloat(item5).toFixed(2));

		if(isNaN(untungBersih) || untungBersih == '')
			untungBersih = parseFloat(0);
		else
			$('#untungBersih').val(parseFloat(untungBersih).toFixed(2));


		if(isNaN(jumlahAtas) || jumlahAtas == '')
			jumlahAtas = parseFloat(0);
		else
			$('#jumlahAtas').val(parseFloat(jumlahAtas).toFixed(2));

		if(isNaN(jumlahBawah) || jumlahBawah == '')
			jumlahBawah = parseFloat(0);
		else
			$('#jumlahBawah').val(parseFloat(jumlahBawah).toFixed(2));


		var jumlah = parseFloat(parseFloat(item1) + parseFloat(item2) + parseFloat(item3) + parseFloat(item4) + parseFloat(item5));
		var jumlahAtas = parseFloat(parseFloat(untungBersih) - parseFloat(jumlah));
		var jumlahBawah =parseFloat(untungBersih);
		var nisbah = parseFloat(jumlahAtas/jumlahBawah);

		$('#jumlah').val(jumlah.toFixed(2));

		$('#jumlahAtas').html(jumlahAtas.toFixed(2));
		$('#jumlahBawah').html(jumlahBawah.toFixed(2));
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

		if(nisbah.toFixed(2) >= 0.60 && nisbah.toFixed(2) <= 0.69)
			markah = 7;

		if(nisbah.toFixed(2) >= 0.70 && nisbah.toFixed(2) <= 0.79)
			markah = 8;

		if(nisbah.toFixed(2) >= 0.80 && nisbah.toFixed(2) <= 0.89)
			markah = 9;

		if(nisbah.toFixed(2) >= 0.90)
			markah = 10;

		$('#markah').val(markah.toFixed(1));

	}






});