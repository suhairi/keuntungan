$(document).ready(function() {

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

		$('#awal').html(total.toFixed(2));

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

		$('#semasa').html(total.toFixed(2));

		calcBakiAkhir();
	}

	/**********************************************
	*                   Third Column
	***********************************************/

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

		$('#penggunaansemasa').html(total.toFixed(2));

		calcBakiAkhir();
	}


	function calcBakiAkhir() {

		var grandTotal = 0.00;
		var grandPeratus = 0.00;

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

		var peratus = parseFloat(ahlipenggunaansemasa / (ahliawal + ahlisemasa) * 100);
		grandPeratus += peratus;

		$('#ahliperatuspenggunaan').val(peratus.toFixed(2));

		/*****************************************
		*				Second Row
		******************************************/

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
		var peratus = parseFloat(ampenggunaansemasa / (amawal + amsemasa) * 100);
		grandPeratus += peratus;

		$('#amperatuspenggunaan').val(peratus.toFixed(2));


		/*****************************************
		*				Third Row
		******************************************/

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

		var peratus = parseFloat(pendidikanpenggunaansemasa / (pendidikanawal + pendidikansemasa) * 100);
		grandPeratus += peratus;

		$('#pendidikanperatuspenggunaan').val(peratus.toFixed(2));

		/*****************************************
		*				Fourth Row
		******************************************/

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

		var peratus = parseFloat(pemajuanpenggunaansemasa / (pemajuanawal + pemajuansemasa) * 100);
		grandPeratus += peratus;

		$('#pemajuanperatuspenggunaan').val(peratus.toFixed(2));


		$('#bakiakhir').html(grandTotal.toFixed(2));
		$('#peratuspenggunaan').html(grandPeratus.toFixed(2));


	}





});