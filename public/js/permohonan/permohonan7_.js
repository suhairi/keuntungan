
$(document).ready(function() {

	// Initializing populated data

	var value = parseFloat($('#cukaiPendapatan').val());
	$('#cukaiPendapatan').val(value.toFixed(2));


	var untungBersih = parseFloat($('#untungBersih').val());

	$('#untungBersih_').html(untungBersih.toFixed(2));
	

	var rezabBerkanun = parseFloat(untungBersih * 0.25);

	// alert('rezab berkanun : ' + rezabBerkanun);

	$('#rezabBerkanun').val(rezabBerkanun.toFixed(2));

	$('#cukaiPendapatan').change(function() {

		var cukaiPendapatan = parseFloat($('#cukaiPendapatan').val());

		$('#cukaiPendapatan').val(cukaiPendapatan.toFixed(2));

		var bakiKeuntungan = parseFloat(untungBersih - (rezabBerkanun + cukaiPendapatan));

		$('#bakiKeuntungan').val(bakiKeuntungan.toFixed(2));
	});

	$('#dividenSaham').change(function() {

		var value = parseFloat($('#dividenSaham').val());
		$('#dividenSaham').val(value.toFixed(2));

		// Dividen Tunai
		var percentage = parseFloat($('#dividenTunaiPercent').val());
		var total = parseFloat(value * percentage / 100);
		$('#dividenTunai').val(total.toFixed(2));

		// Honorarium
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#honorariumPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#honorarium').val(total.toFixed(2));

		// Bonus
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#bonusPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#bonus').val(total.toFixed(2));

		// Hadiah
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#hadiahPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#hadiah').val(total.toFixed(2));

		// Tabung Kebajikan Ahli
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#ahliPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#ahli').val(total.toFixed(2));

		// Tabung Kebajikan Am
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#amPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#am').val(total.toFixed(2));

		// Tabung Kebajikan Pendidikan
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#pendidikanPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#pendidikan').val(total.toFixed(2));

		// Tabung Kebajikan Pemajuan
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#pemajuanPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#pemajuan').val(total.toFixed(2));

		// Menebus Saham
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#menebusSahamPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#menebusSaham').val(total.toFixed(2));

		// Hadiah Persaraan
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#pesaraanPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#pesaraan').val(total.toFixed(2));

		calcJumlah();

	});


	// Dividen Tunai
	$('#dividenTunaiPercent').change(function() {
		var value = parseFloat($('#dividenSaham').val());
		var percentage = parseFloat($('#dividenTunaiPercent').val());
		var total = parseFloat(value * percentage / 100);
		$('#dividenTunai').val(total.toFixed(2));

		calcJumlah();
	});

	// Honorarium
	$('#honorariumPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#honorariumPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#honorarium').val(total.toFixed(2));

		calcJumlah();

	});

	// Bonus
	$('#bonusPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#bonusPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#bonus').val(total.toFixed(2));

		calcJumlah();

	});

	// Hadiah
	$('#hadiahPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#hadiahPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#hadiah').val(total.toFixed(2));

		calcJumlah();

	});

	// Ahli
	$('#ahliPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#ahliPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#ahli').val(total.toFixed(2));

		calcJumlah();

	});

	// Am
	$('#amPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#amPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#am').val(total.toFixed(2));

		calcJumlah();

	});

	// Pendidikan
	$('#pendidikanPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#pendidikanPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#pendidikan').val(total.toFixed(2));

		calcJumlah();

	});

	// Pemajuan
	$('#pemajuanPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#pemajuanPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#pemajuan').val(total.toFixed(2));

		calcJumlah();

	});

	// Menebus Saham
	$('#menebusSahamPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#menebusSahamPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#menebusSaham').val(total.toFixed(2));

		calcJumlah();

	});

	// Pesaraan
	$('#pesaraanPercent').change(function() {
		var value = parseFloat($('#bakiKeuntungan').val());
		var percentage = parseFloat($('#pesaraanPercent').val());
		var total = parseFloat(value * percentage / 100);		
		$('#pesaraan').val(total.toFixed(2));

		calcJumlah();

	});

	function calcJumlah() {

		var untungBersih = parseFloat($('#untungBersih').val());

		var dividenTunai = parseFloat($('#dividenTunai').val());
		var honorarium = parseFloat($('#honorarium').val());
		var bonus = parseFloat($('#bonus').val());
		var hadiah = parseFloat($('#hadiah').val());
		var ahli = parseFloat($('#ahli').val());
		var am = parseFloat($('#am').val());
		var pendidikan = parseFloat($('#pendidikan').val());
		var pemajuan = parseFloat($('#pemajuan').val());
		var menebusSaham = parseFloat($('#menebusSaham').val());
		var pesaraan = parseFloat($('#pesaraan').val());

		var jumlah = parseFloat(dividenTunai + honorarium + bonus + ahli + am + pendidikan + pemajuan + menebusSaham + pesaraan);
		var bakiDepan = parseFloat(untungBersih - jumlah);

		$('#jumlah').val(jumlah.toFixed(2));	
		$('#bakiDepan').val(bakiDepan.toFixed(2));

	}
	



});