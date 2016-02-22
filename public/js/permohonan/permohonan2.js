$(document).ready(function(){


	if($('#semasa1').val() == 0 ) $('#semasa1').hide();
	if($('#semasa2').val() == 0 ) $('#semasa2').hide();
	if($('#semasa3').val() == 0 ) $('#semasa3').hide();
	if($('#semasa4').val() == 0 ) $('#semasa4').hide();
	if($('#semasa5').val() == 0 ) $('#semasa5').hide();

	if($('#biasa1').val() == 0) $('#biasa1').hide();
	if($('#biasa2').val() == 0) $('#biasa2').hide();
	if($('#biasa3').val() == 0) $('#biasa3').hide();

	if($('#tetap1').val() == 0) $('#tetap1').hide();
	if($('#tetap2').val() == 0) $('#tetap2').hide();
	if($('#tetap3').val() == 0) $('#tetap3').hide();
	if($('#tetap4').val() == 0) $('#tetap4').hide();
	if($('#tetap5').val() == 0) $('#tetap5').hide();

	calc();

	$('#semasa1Select').change(function() {
		$('#semasa1').show();

		if($('#semasa1Select').val() == '') {
			$('#semasa1').hide();
			$('#semasa1').val('');
			calc();
		}
	});

	$('#semasa2Select').change(function() {
		$('#semasa2').show();

		if($('#semasa2Select').val() == '') {
			$('#semasa2').hide();
			$('#semasa2').val('');
			calc();
		}
	});

	$('#semasa3Select').change(function() {
		$('#semasa3').show();

		if($('#semasa3Select').val() == '') {
			$('#semasa3').hide();
			$('#semasa3').val('');
			calc();
		}
	});

	$('#semasa4Select').change(function() {
		$('#semasa4').show();

		if($('#semasa4Select').val() == '') {
			$('#semasa4').hide();
			$('#semasa4').val('');
			calc();
		}
	});

	$('#semasa5Select').change(function() {
		$('#semasa5').show();

		if($('#semasa5Select').val() == '') {
			$('#semasa5').hide();
			$('#semasa5').val('');
			calc();
		}
	});




	
	$('#biasa1Select').change(function() {
		$('#biasa1').show();

		if($('#biasa1Select').val() == ''){
			$('#biasa1').hide();
			$('#biasa1').val('');
			calc()
		}
	});

	$('#biasa2Select').change(function() {
		$('#biasa2').show();

		if($('#biasa2Select').val() == ''){
			$('#biasa2').hide();
			$('#biasa2').val('');
			calc()
		}
	});

	$('#biasa3Select').change(function() {
		$('#biasa3').show();

		if($('#biasa3Select').val() == ''){
			$('#biasa3').hide();
			$('#biasa3').val('');
			calc()
		}
	});


	$('#tetap1Select').change(function() {
		$('#tetap1').show();

		if($('#tetap1Select').val() == ''){
			$('#tetap1').hide();
			$('#tetap1').val('');
			calc();
		}
	});

	$('#tetap2Select').change(function() {
		$('#tetap2').show();

		if($('#tetap2Select').val() == ''){
			$('#tetap2').hide();
			$('#tetap2').val('');
			calc();
		}
	});

	$('#tetap3Select').change(function() {
		$('#tetap3').show();

		if($('#tetap3Select').val() == ''){
			$('#tetap3').hide();
			$('#tetap3').val('');
			calc();
		}
	});

	$('#tetap4Select').change(function() {
		$('#tetap4').show();

		if($('#tetap4Select').val() == ''){
			$('#tetap4').hide();
			$('#tetap4').val('');
			calc();
		}
	});

	$('#tetap5Select').change(function() {
		$('#tetap5').show();

		if($('#tetap5Select').val() == ''){
			$('#tetap5').hide();
			$('#tetap5').val('');
			calc();
		}
	});




	$("input[type='number']").change( function() {
  		calc();
	});

	function calc() {

		ditangan = $('#ditangan').val();

		semasa1 = $('#semasa1').val();
		semasa2 = $('#semasa2').val();
		semasa3 = $('#semasa3').val();
		semasa4 = $('#semasa4').val();
		semasa5 = $('#semasa5').val();

		biasa1 = $('#biasa1').val();
		biasa2 = $('#biasa2').val();
		biasa3 = $('#biasa3').val();

		tetap1 = $('#tetap1').val();
		tetap2 = $('#tetap2').val();
		tetap3 = $('#tetap3').val();
		tetap4 = $('#tetap4').val();
		tetap5 = $('#tetap5').val();

		simpananAhli = $('#simpananAhli').val();
		terimaanTerdahulu = $('#terimaanTerdahulu').val();

		jumlahPembahagian = $('#jumlahPembahagian').val();

		jumlahAtas = $('#jumlahAtas').val();
		jumlahBawah = $('#jumlahBawah').val();


		if(isNaN(ditangan) || ditangan == '')
			ditangan = parseFloat(0);
		else
			$('#ditangan').val(parseFloat(ditangan).toFixed(2));


		if(isNaN(semasa1) || semasa1 == '')
			 semasa1 = parseFloat(0);
		else
			$('#semasa1').val(parseFloat(semasa1).toFixed(2));

		if(isNaN(semasa2) || semasa2 == '')
			semasa2 = parseFloat(0);
		else
			$('#semasa2').val(parseFloat(semasa2).toFixed(2));

		if(isNaN(semasa3) || semasa3 == '')
			semasa3 = parseFloat(0);
		else
			$('#semasa3').val(parseFloat(semasa3).toFixed(2));

		if(isNaN(semasa4) || semasa4 == '')
			semasa4 = parseFloat(0);
		else
			$('#semasa4').val(parseFloat(semasa4).toFixed(2));

		if(isNaN(semasa5) || semasa5 == '')
			semasa5 = parseFloat(0);
		else
			$('#semasa5').val(parseFloat(semasa5).toFixed(2));




		if(isNaN(biasa1) || biasa1 == '')
			biasa1 = parseFloat(0);
		else
			$('#biasa1').val(parseFloat(biasa1).toFixed(2));

		if(isNaN(biasa2) || biasa2 == '')
			biasa2 = parseFloat(0);
		else
			$('#biasa2').val(parseFloat(biasa2).toFixed(2));

		if(isNaN(biasa3) || biasa3 == '')
			biasa3 = parseFloat(0);
		else
			$('#biasa3').val(parseFloat(biasa3).toFixed(2));



		if(isNaN(tetap1) || tetap1 == '')
			tetap1 = parseFloat(0);
		else
			$('#tetap1').val(parseFloat(tetap1).toFixed(2));

		if(isNaN(tetap2) || tetap2 == '')
			tetap2 = parseFloat(0);
		else
			$('#tetap2').val(parseFloat(tetap2).toFixed(2));

		if(isNaN(tetap3) || tetap3 == '')
			tetap3 = parseFloat(0);
		else
			$('#tetap3').val(parseFloat(tetap3).toFixed(2));

		if(isNaN(tetap4) || tetap4 == '')
			tetap4 = parseFloat(0);
		else
			$('#tetap4').val(parseFloat(tetap4).toFixed(2));

		if(isNaN(tetap5) || tetap5 == '')
			tetap5 = parseFloat(0);
		else
			$('#tetap5').val(parseFloat(tetap5).toFixed(2));


		if(isNaN(simpananAhli) || simpananAhli == '')
			simpananAhli = parseFloat(0);
		else
			$('#simpananAhli').val(parseFloat(simpananAhli).toFixed(2));

		if(isNaN(terimaanTerdahulu) || terimaanTerdahulu == '')
			terimaanTerdahulu = parseFloat(0);
		else
			$('#terimaanTerdahulu').val(parseFloat(terimaanTerdahulu).toFixed(2));


		if(isNaN(jumlahPembahagian) || jumlahPembahagian == '')
			jumlahPembahagian = parseFloat(0);
		else
			$('#jumlahPembahagian').val(parseFloat(jumlahPembahagian).toFixed(2));


		if(isNaN(jumlahAtas) || jumlahAtas == '')
			jumlahAtas = parseFloat(0);
		else
			$('#jumlahAtas').val(parseFloat(jumlahAtas).toFixed(2));

		if(isNaN(jumlahBawah) || jumlahBawah == '')
			jumlahBawah = parseFloat(0);
		else
			$('#jumlahBawah').val(parseFloat(jumlahBawah).toFixed(2));

	

		var total = parseFloat(parseFloat(ditangan) + 
					parseFloat(semasa1) + parseFloat(semasa2) + parseFloat(semasa3) + parseFloat(semasa4) + parseFloat(semasa5) + 
					parseFloat(biasa1) + parseFloat(biasa2) + parseFloat(biasa3) + 
					parseFloat(tetap1) + parseFloat(tetap2) + parseFloat(tetap3) + parseFloat(tetap4) + parseFloat(tetap5));

		var totalIV = parseFloat(parseFloat(simpananAhli) + parseFloat(terimaanTerdahulu));

		var totalAtas = parseFloat(parseFloat(total) - parseFloat(jumlahPembahagian) - parseFloat(totalIV));
		var totalBawah = parseFloat(parseFloat(total) - parseFloat(totalIV));
		var nisbah = parseFloat(totalAtas/totalBawah);
		
		
		$('#jumlahA').val(total.toFixed(2));
		$('#jumlahA').val(total.toFixed(2));
		$('#jumlahI').val(total.toFixed(2));
		$('#jumlahIV').val(totalIV.toFixed(2));
		$('#jumlahAtas').html(totalAtas.toFixed(2));
		$('#jumlahBawah').html(totalBawah.toFixed(2));
		$('#nisbah').html("1 : " + nisbah.toFixed(2));
		
		if(nisbah <= 0)
			markah = 0;

		if(nisbah.toFixed(2) >= 0.01 && nisbah.toFixed(2) <= 0.09)
			markah = 1.5;
		
		if(nisbah.toFixed(2) >= 0.10 && nisbah.toFixed(2) <= 0.19)
			markah = 3.0;

		if(nisbah.toFixed(2) >= 0.20 && nisbah.toFixed(2) <= 0.29)
			markah = 4.5;

		if(nisbah.toFixed(2) >= 0.30 && nisbah.toFixed(2) <= 0.39)
			markah = 6.0;
		
		if(nisbah.toFixed(2) >= 0.40 && nisbah.toFixed(2) <= 0.49)
			markah = 7.5;

		if(nisbah.toFixed(2) >= 0.50 && nisbah.toFixed(2) <= 0.59)
			markah = 9.0;

		if(nisbah.toFixed(2) >= 0.60 && nisbah.toFixed(2) <= 0.69)
			markah = 10.5;

		if(nisbah.toFixed(2) >= 0.70 && nisbah.toFixed(2) <= 0.79)
			markah = 12.0;

		if(nisbah.toFixed(2) >= 0.80 && nisbah.toFixed(2) <= 0.89)
			markah = 13.5;

		if(nisbah.toFixed(2) >= 0.90)
			markah = 15.0;

		$('#markah').val(markah.toFixed(1));
		
		
	}

});