$(document).ready(function() {

	three();
	four();
	five();


	function three() {

		var item2 = $('#item2').val();
		var item3 = $('#item3').val();
		var item4 = $('#item4').val();
		var item5 = $('#item5').val();
		var untungBersih = $('#untungBersih').val();
		var jumlah = $('#jumlah').val();

		if(item2 == '' || isNaN(item2)){
			item2 = 0;
			$('#item2').val(item2.toFixed(2));
		}

		if(item3 == '' || isNaN(item3)){
			item3 = 0;
			$('#item3').val(item3.toFixed(2));
		}

		if(item4 == '' || isNaN(item4)){			
			item4 = 0;
			$('#item4').val(item4.toFixed(2));
		}

		if(item5 == '' || isNaN(item5)){
			item5 = 0;
			$('#item5').val(item5.toFixed(2));
		}

		var jumlah = parseFloat(item2 + item3 + item4 + item5);

		$('#jumlah').val(jumlah.toFixed(2));


		var jumlahAtas1 = parseFloat(untungBersih - jumlah);
		var jumlahBawah1 = parseFloat(untungBersih);

		var nisbah1 = parseFloat(jumlahAtas1/jumlahBawah1);


		$('#jumlahAtas1').html(parseFloat(jumlahAtas1).toFixed(2));
		$('#jumlahBawah1').html(parseFloat(jumlahBawah1).toFixed(2));
		$('#nisbah1').html("1 : " + nisbah1.toFixed(2));

		if(nisbah1 <= 0)
			markah1 = 0;

		if(nisbah1.toFixed(2) >= 0.01 && nisbah1.toFixed(2) <= 0.09)
			markah1 = 1;

		if(nisbah1.toFixed(2) >= 0.10 && nisbah1.toFixed(2) <= 0.19)
			markah1 = 2;

		if(nisbah1.toFixed(2) >= 0.20 && nisbah1.toFixed(2) <= 0.29)
			markah1 = 3;

		if(nisbah1.toFixed(2) >= 0.30 && nisbah1.toFixed(2) <= 0.39)
			markah1 = 4;

		if(nisbah1.toFixed(2) >= 0.40 && nisbah1.toFixed(2) <= 0.49)
			markah1 = 5;

		if(nisbah1.toFixed(2) >= 0.50 && nisbah1.toFixed(2) <= 0.59)
			markah1 = 6;

		if(nisbah1.toFixed(2) >= 0.60)
			markah1 = 7;

		$('#markah1').val(markah1.toFixed(1));
	}

	function four() {

		// Initialize

		var harta_semasa = $('#harta_semasa').val();
		var tanggungan_semasa = $('#tanggungan_semasa').val();		

		
		// On change

		$('#harta_semasa').change(function() {
			var jumlahAtas2 = parseFloat($('#harta_semasa').val());	
			jumlahAtas2 = jumlahAtas2.toFixed(2);

			$('#jumlahAtas2').html(jumlahAtas2);
			$('#harta_semasa').val(jumlahAtas2);
			nisbah2();

		});


		$('#tanggungan_semasa').change(function() {
			var jumlahBawah2 = parseFloat($('#tanggungan_semasa').val());	
			jumlahBawah2 = jumlahBawah2.toFixed(2);

			$('#jumlahBawah2').html(jumlahBawah2);
			$('#tanggungan_semasa').val(jumlahBawah2);
			nisbah2();

		});


		function nisbah2() {

			var jumlahAtas2 = parseFloat($('#harta_semasa').val());
			var jumlahBawah2 = parseFloat($('#tanggungan_semasa').val());

			var nisbah2 = parseFloat(jumlahAtas2/jumlahBawah2);

			$('#nisbah2').html('1 : ' + nisbah2.toFixed(2));

			if(nisbah2 <= 1)
				markah2 = 0;

			if(nisbah2.toFixed(2) >= 1.01 && nisbah2.toFixed(2) <= 1.10)
				markah2 = 1;
			
			if(nisbah2.toFixed(2) >= 1.11 && nisbah2.toFixed(2) <= 1.20)
				markah2 = 2;

			if(nisbah2.toFixed(2) >= 1.21 && nisbah2.toFixed(2) <= 1.30)
				markah2 = 3;

			if(nisbah2.toFixed(2) >= 1.31 && nisbah2.toFixed(2) <= 1.40)
				markah2 = 4;
			
			if(nisbah2.toFixed(2) >= 1.41 && nisbah2.toFixed(2) <= 1.50)
				markah2 = 5;

			if(nisbah2.toFixed(2) >= 1.51 && nisbah2.toFixed(2) <= 1.60)
				markah2 = 6;

			if(nisbah2.toFixed(2) >= 1.61)
				markah2 = 7;

			$('#markah2').val(markah2.toFixed(1));			

		}//end nisbah2()

	} //end four()


	// ###################### 5 ##########################

	function five() {

		// Initialize

		var jumlah_tanggungan = $('#jumlah_tanggungan').val();
		var jumlah_harta = $('#jumlah_harta').val();

		$('#jumlah_tanggungan').change(function() {

			var jumlah_tanggungan = parseFloat($('#jumlah_tanggungan').val());
			jumlah_tanggungan = jumlah_tanggungan.toFixed(2);

			$('#jumlah_tanggungan').val(jumlah_tanggungan);
			$('#jumlahAtas3').html(jumlah_tanggungan);
			nisbah3();
		});

		$('#jumlah_harta').change(function() {

			var jumlah_harta = parseFloat($('#jumlah_harta').val());
			jumlah_harta = jumlah_harta.toFixed(2);

			$('#jumlah_harta').val(jumlah_harta);
			$('#jumlahBawah3').html(jumlah_harta);

			nisbah3();
		});

		function nisbah3() {
			
			var jumlahAtas3 = parseFloat($('#jumlah_tanggungan').val());
			var jumlahBawah3 = parseFloat($('#jumlah_harta').val());

			var nisbah3 = parseFloat(jumlahAtas3/jumlahBawah3);

			$('#nisbah3').html('1 : ' + nisbah3.toFixed(2));

			if(nisbah3 >= 0.81)
				markah3 = 0;

			if(nisbah3.toFixed(2) >= 0.71 && nisbah3.toFixed(2) <= 0.80)
				markah3 = 1;
			
			if(nisbah3.toFixed(2) >= 0.61 && nisbah3.toFixed(2) <= 0.70)
				markah3 = 2;

			if(nisbah3.toFixed(2) >= 0.51 && nisbah3.toFixed(2) <= 0.60)
				markah3 = 3;

			if(nisbah3.toFixed(2) >= 0.41 && nisbah3.toFixed(2) <= 0.50)
				markah3 = 4;
			
			if(nisbah3.toFixed(2) <= 0.40)
				markah3 = 6;

			$('#markah3').val(markah3.toFixed(1));
		}




	}


});