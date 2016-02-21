$(document).ready(function() {

	$("input[type='number']").change( function() {
			calc();
	});	




	function calc() {

		var aItem1 = $('#aItem1').val();
		var aItem2 = $('#aItem2').val();
		var aItem3 = $('#aItem3').val();
		var aItem4 = $('#aItem4').val();
		var aItem5 = $('#aItem5').val();

		var bUntungBersih = $('#bUntungBersih').val();
		var jumlahAtas = $('#jumlahAtas').val();
		var jumlahBawah = $('#jumlahBawah').val();

		if(isNaN(aItem1) || aItem1 == '')
			aItem1 = parseFloat(0);
		else
			$('#aItem1').val(parseFloat(aItem1).toFixed(2));

		if(isNaN(aItem2) || aItem2 == '')
			aItem2 = parseFloat(0);
		else
			$('#aItem2').val(parseFloat(aItem2).toFixed(2));

		if(isNaN(aItem3) || aItem3 == '')
			aItem3 = parseFloat(0);
		else
			$('#aItem3').val(parseFloat(aItem3).toFixed(2));

		if(isNaN(aItem4) || aItem4 == '')
			aItem4 = parseFloat(0);
		else
			$('#aItem4').val(parseFloat(aItem4).toFixed(2));

		if(isNaN(aItem5) || aItem5 == '')
			aItem5 = parseFloat(0);
		else
			$('#aItem5').val(parseFloat(aItem5).toFixed(2));

		if(isNaN(bUntungBersih) || bUntungBersih == '')
			bUntungBersih = parseFloat(0);
		else
			$('#bUntungBersih').val(parseFloat(bUntungBersih).toFixed(2));


		if(isNaN(jumlahAtas) || jumlahAtas == '')
			jumlahAtas = parseFloat(0);
		else
			$('#jumlahAtas').val(parseFloat(jumlahAtas).toFixed(2));

		if(isNaN(jumlahBawah) || jumlahBawah == '')
			jumlahBawah = parseFloat(0);
		else
			$('#jumlahBawah').val(parseFloat(jumlahBawah).toFixed(2));




		var jumlah = parseFloat(parseFloat(aItem1) + parseFloat(aItem2) + parseFloat(aItem3) + parseFloat(aItem4) + parseFloat(aItem5));
		var jumlahAtas = parseFloat(parseFloat(bUntungBersih) - parseFloat(jumlah));
		var jumlahBawah =parseFloat(bUntungBersih);
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