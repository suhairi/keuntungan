$(document).ready(function() {

	// Initialize

	// Awal
	var jumlah1 = parseFloat($('#ahliawal').val());
	var jumlah2 = parseFloat($('#amawal').val());
	var jumlah3 = parseFloat($('#pendidikanawal').val());
	var jumlah4 = parseFloat($('#pemajuanawal').val());

	var jumlahawal = parseFloat(jumlah1 + jumlah2 + jumlah3 + jumlah4);
	$('#awal').html('<strong>' + jumlahawal.toFixed(2) + '</strong>');
	$('#jumlahawal').val(jumlahawal.toFixed(2));

	// Semasa
	var jumlah1 = parseFloat($('#ahlisemasa').val());
	var jumlah2 = parseFloat($('#amsemasa').val());
	var jumlah3 = parseFloat($('#pendidikansemasa').val());
	var jumlah4 = parseFloat($('#pemajuansemasa').val());

	var jumlahawal = parseFloat(jumlah1 + jumlah2 + jumlah3 + jumlah4);
	$('#semasa').html('<strong>' + jumlahawal.toFixed(2) + '</strong>');
	$('#jumlahsemasa').val(jumlahawal.toFixed(2));

	// Penggunaan Semasa
	var jumlah1 = parseFloat($('#ahlipenggunaansemasa').val());
	var jumlah2 = parseFloat($('#ampenggunaansemasa').val());
	var jumlah3 = parseFloat($('#pendidikanpenggunaansemasa').val());
	var jumlah4 = parseFloat($('#pemajuanpenggunaansemasa').val());

	var jumlahawal = parseFloat(jumlah1 + jumlah2 + jumlah3 + jumlah4);
	$('#penggunaansemasa').html('<strong>' + jumlahawal.toFixed(2) + '</strong>');
	$('#jumlahpenggunaansemasa').val(jumlahawal.toFixed(2));


	// Baki Akhir
	var jumlah1 = parseFloat($('#ahlibakiakhir').val());
	var jumlah2 = parseFloat($('#ambakiakhir').val());
	var jumlah3 = parseFloat($('#pendidikanbakiakhir').val());
	var jumlah4 = parseFloat($('#pemajuanbakiakhir').val());

	var jumlahawal = parseFloat(jumlah1 + jumlah2 + jumlah3 + jumlah4);
	$('#bakiakhir').html('<strong>' + jumlahawal.toFixed(2) + '</strong>');
	$('#jumlahbakiakhir').val(jumlahawal.toFixed(2));

	// Jumlah Peratus
	var jumlah1 = parseFloat($('#jumlahawal').val());
	var jumlah2 = parseFloat($('#jumlahsemasa').val());
	var jumlah3 = parseFloat($('#jumlahpenggunaansemasa').val());

	var peratusPenggunaan = parseFloat(jumlah3 / (jumlah1 + jumlah2) * 100);
	$('#peratuspenggunaan').html('<strong>' + peratusPenggunaan.toFixed(2) + '</strong>');

	// Purata Peratus
	var jumlah1 = parseFloat($('#ahliperatuspenggunaan').val());
	var jumlah2 = parseFloat($('#amperatuspenggunaan').val());
	var jumlah3 = parseFloat($('#pendidikanperatuspenggunaan').val());
	var jumlah4 = parseFloat($('#pemajuanperatuspenggunaan').val());

	var purataperatus = parseFloat((jumlah1 + jumlah2 + jumlah3 + jumlah4) / 4);
	$('#purataperatus').html('<strong>' + purataperatus.toFixed(2) + '</strong>');


	/**********************************************
	*                   First Column
	***********************************************/

	$('#ahliawal').change(function() {

		var total = parseFloat($('#ahliawal').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;


		$('#ahliawal').val(total.toFixed(2));

		calcAwal();

	});

	$('#amawal').change(function() {

		var total = parseFloat($('#amawal').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#amawal').val(total.toFixed(2));

		calcAwal();

	});

	$('#pendidikanawal').change(function() {

		var total = parseFloat($('#pendidikanawal').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#pendidikanawal').val(total.toFixed(2));

		calcAwal();

	});

	$('#pemajuanawal').change(function() {

		var total = parseFloat($('#pemajuanawal').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#pemajuanawal').val(total.toFixed(2));

		calcAwal();

	});


	function calcAwal() {
		var ahli = parseFloat($('#ahliawal').val());
		if(ahli == '' || ahli == null || isNaN(ahli))
			ahli = 0.00;

		var am = parseFloat($('#amawal').val());
		if(am == '' || am == null || isNaN(am))
			am = 0.00;

		var pendidikan = parseFloat($('#pendidikanawal').val());
		if(pendidikan == '' || pendidikan == null || isNaN(pendidikan))
			pendidikan = 0.00;

		var pemajuan = parseFloat($('#pemajuanawal').val());
		if(pemajuan == '' || pemajuan == null || isNaN(pemajuan))
			pemajuan = 0.00;

		
		var total = parseFloat(ahli + am + pendidikan + pemajuan);

		$('#awal').html('<strong>' + total.toFixed(2) + '</strong>');
		$('#jumlahawal').val(total.toFixed(2));

		calcBakiAkhir();
	}


	/**********************************************
	*                   Second Column
	***********************************************/

	$('#ahlisemasa').change(function() {

		var total = parseFloat($('#ahlisemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;


		$('#ahlisemasa').val(total.toFixed(2));

		calcsemasa();

	});

	$('#amsemasa').change(function() {

		var total = parseFloat($('#amsemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#amsemasa').val(total.toFixed(2));

		calcsemasa();

	});

	$('#pendidikansemasa').change(function() {

		var total = parseFloat($('#pendidikansemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#pendidikansemasa').val(total.toFixed(2));

		calcsemasa();

	});

	$('#pemajuansemasa').change(function() {

		var total = parseFloat($('#pemajuansemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#pemajuansemasa').val(total.toFixed(2));

		calcsemasa();

	});


	function calcsemasa() {
		var ahli = parseFloat($('#ahlisemasa').val());
		if(ahli == '' || ahli == null || isNaN(ahli))
			ahli = 0.00;

		var am = parseFloat($('#amsemasa').val());
		if(am == '' || am == null || isNaN(am))
			am = 0.00;

		var pendidikan = parseFloat($('#pendidikansemasa').val());
		if(pendidikan == '' || pendidikan == null || isNaN(pendidikan))
			pendidikan = 0.00;

		var pemajuan = parseFloat($('#pemajuansemasa').val());
		if(pemajuan == '' || pemajuan == null || isNaN(pemajuan))
			pemajuan = 0.00;

		
		var total = parseFloat(ahli + am + pendidikan + pemajuan);

		$('#semasa').html('<strong>' + total.toFixed(2) + '</strong>');
		$('#jumlahsemasa').val(total.toFixed(2));

		calcBakiAkhir();
	}

	/**************************************************************
	*                           Third Column
	***************************************************************/

	$('#ahlipenggunaansemasa').change(function() {

		var total = parseFloat($('#ahlipenggunaansemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;


		$('#ahlipenggunaansemasa').val(total.toFixed(2));

		calcpenggunaansemasa();

	});

	$('#ampenggunaansemasa').change(function() {

		var total = parseFloat($('#ampenggunaansemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#ampenggunaansemasa').val(total.toFixed(2));

		calcpenggunaansemasa();

	});

	$('#pendidikanpenggunaansemasa').change(function() {

		var total = parseFloat($('#pendidikanpenggunaansemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#pendidikanpenggunaansemasa').val(total.toFixed(2));

		calcpenggunaansemasa();

	});

	$('#pemajuanpenggunaansemasa').change(function() {

		var total = parseFloat($('#pemajuanpenggunaansemasa').val());

		if(total == '' || total == null || isNaN(total))
			total = 0.00;

		$('#pemajuanpenggunaansemasa').val(total.toFixed(2));

		calcpenggunaansemasa();

	});


	function calcpenggunaansemasa() {
		var ahli = parseFloat($('#ahlipenggunaansemasa').val());
		if(ahli == '' || ahli == null || isNaN(ahli))
			ahli = 0.00;

		var am = parseFloat($('#ampenggunaansemasa').val());
		if(am == '' || am == null || isNaN(am))
			am = 0.00;

		var pendidikan = parseFloat($('#pendidikanpenggunaansemasa').val());
		if(pendidikan == '' || pendidikan == null || isNaN(pendidikan))
			pendidikan = 0.00;

		var pemajuan = parseFloat($('#pemajuanpenggunaansemasa').val());
		if(pemajuan == '' || pemajuan == null || isNaN(pemajuan))
			pemajuan = 0.00;

		
		var total = parseFloat(ahli + am + pendidikan + pemajuan);

		$('#penggunaansemasa').html('<strong>' + total.toFixed(2) + '</strong>');
		$('#jumlahpenggunaansemasa').val(total.toFixed(2));

		calcBakiAkhir();
	}


	function calcBakiAkhir() {

		var grandTotal = 0.00;

		/*****************************************
		*				First Row
		******************************************/

		var ahliawal = parseFloat($('#ahliawal').val());
		if(ahliawal == '' || ahliawal == null || isNaN(ahliawal))
			ahliawal = 0.00;

		var ahlisemasa = parseFloat($('#ahlisemasa').val());
		if(ahlisemasa == '' || ahlisemasa == null || isNaN(ahlisemasa))
			ahlisemasa = 0.00;

		var ahlipenggunaansemasa = parseFloat($('#ahlipenggunaansemasa').val());
		if(ahlipenggunaansemasa == '' || ahlipenggunaansemasa == null || isNaN(ahlipenggunaansemasa))
			ahlipenggunaansemasa = 0.00;

		var total = parseFloat((ahliawal + ahlisemasa) - ahlipenggunaansemasa);
		grandTotal += total;

		$('#ahlibakiakhir').val(total.toFixed(2));

		var peratus1 = parseFloat(ahlipenggunaansemasa / (ahliawal + ahlisemasa) * 100);

		$('#ahliperatuspenggunaan').val(peratus1.toFixed(2));

		/**********************************************************
		*				           Second Row
		***********************************************************/

		var amawal = parseFloat($('#amawal').val());
		if(amawal == '' || amawal == null || isNaN(amawal))
			amawal = 0.00;

		var amsemasa = parseFloat($('#amsemasa').val());
		if(amsemasa == '' || amsemasa == null || isNaN(amsemasa))
			amsemasa = 0.00;

		var ampenggunaansemasa = parseFloat($('#ampenggunaansemasa').val());
		if(ampenggunaansemasa == '' || ampenggunaansemasa == null || isNaN(ampenggunaansemasa))
			ampenggunaansemasa = 0.00;

		var total = parseFloat((amawal + amsemasa) - ampenggunaansemasa);
		grandTotal += total;

		$('#ambakiakhir').val(total.toFixed(2));
		var peratus2 = parseFloat(ampenggunaansemasa / (amawal + amsemasa) * 100);

		$('#amperatuspenggunaan').val(peratus2.toFixed(2));


		/***********************************************************
		*				           Third Row
		************************************************************/

		var pendidikanawal = parseFloat($('#pendidikanawal').val());
		if(pendidikanawal == '' || pendidikanawal == null || isNaN(pendidikanawal))
			pendidikanawal = 0.00;

		var pendidikansemasa = parseFloat($('#pendidikansemasa').val());
		if(pendidikansemasa == '' || pendidikansemasa == null || isNaN(pendidikansemasa))
			pendidikansemasa = 0.00;

		var pendidikanpenggunaansemasa = parseFloat($('#pendidikanpenggunaansemasa').val());
		if(pendidikanpenggunaansemasa == '' || pendidikanpenggunaansemasa == null || isNaN(pendidikanpenggunaansemasa))
			pendidikanpenggunaansemasa = 0.00;

		var total = parseFloat((pendidikanawal + pendidikansemasa) - pendidikanpenggunaansemasa);
		grandTotal += total;

		$('#pendidikanbakiakhir').val(total.toFixed(2));

		var peratus3 = parseFloat(pendidikanpenggunaansemasa / (pendidikanawal + pendidikansemasa) * 100);

		$('#pendidikanperatuspenggunaan').val(peratus3.toFixed(2));

		/******************************************************************
		*				              Fourth Row
		*******************************************************************/

		var pemajuanawal = parseFloat($('#pemajuanawal').val());
		if(pemajuanawal == '' || pemajuanawal == null || isNaN(pemajuanawal))
			pemajuanawal = 0.00;

		var pemajuansemasa = parseFloat($('#pemajuansemasa').val());
		if(pemajuansemasa == '' || pemajuansemasa == null || isNaN(pemajuansemasa))
			pemajuansemasa = 0.00;

		var pemajuanpenggunaansemasa = parseFloat($('#pemajuanpenggunaansemasa').val());
		if(pemajuanpenggunaansemasa == '' || pemajuanpenggunaansemasa == null || isNaN(pemajuanpenggunaansemasa))
			pemajuanpenggunaansemasa = 0.00;

		var total = parseFloat((pemajuanawal + pemajuansemasa) - pemajuanpenggunaansemasa);
		grandTotal += total;

		$('#pemajuanbakiakhir').val(total.toFixed(2));

		var peratus4 = parseFloat(pemajuanpenggunaansemasa / (pemajuanawal + pemajuansemasa) * 100);

		$('#pemajuanperatuspenggunaan').val(peratus4.toFixed(2));


		$('#bakiakhir').html('<strong>' + grandTotal.toFixed(2) + '</strong>');

		var jumlahPeratus = 0.00;

		var a = parseFloat($('#jumlahawal').val());
		var b = parseFloat($('#jumlahsemasa').val());
		var c = parseFloat($('#jumlahpenggunaansemasa').val());

		var jumlahPeratus = parseFloat(c / (a + b) * 100);

		$('#peratuspenggunaan').html('<strong>' + jumlahPeratus.toFixed(2) + '</strong>');

		var purataperatus = parseFloat((peratus1 + peratus2 + peratus3 + peratus4) / 4);

		$('#purataperatus').html('<strong>' + purataperatus.toFixed(2) + '</strong>');



	}





});