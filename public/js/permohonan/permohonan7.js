
$(document).ready(function() {

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


});