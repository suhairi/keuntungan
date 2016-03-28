@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                <span class="sr-only">95% Complete</span>
            </div>
        </div>
    </div>
</div>

{{ Form::open() }}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">

		<table width="100%" border="0">
			<tr>
				<td colspan="4" align="center">
					<h4>
						KELULUSAN PERMOHONAN PEMBAHAGIAN KEUNTUNGAN <br />
						BERASASKAN PENCAPAIAN MARKAH YANG DIPEROLEHI <br />
						PERTUBUHAN PELADANG KAWASAN D III TITI HAJI IDRIS <br />
						<u>BAGI TAHUN BERAKHIR PADA {{ $tahunBerakhir }}</u>
					</h4>
				</td>
			</tr>
			<tr>
				<td width="15">i) </td>
				<td width="370">Markah Perolehi</td>
				<td width="55">:</td>
				<td><strong>{{ $markah }}</strong></td>
			</tr>
			<tr>
				<td>ii)</td>
				<td>Kelulusan Diberi Mengikut Ketetapan</td>
				<td>:</td>
				<td><strong>{{ $para }}</strong></td>
			</tr>
			<tr>
				<td colspan="4">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="4">
				<!-- ##################### -->

					<table width="100%" style="border: 1px solid #333333">
						<tr>
							<td rowspan="2" align="center"><strong>Butir-butir Pembahagian Keuntungan</strong></td>
							<td colspan="2" align="center" style="border-left: 1px solid #333333; border-bottom: 1px solid #333333"><strong>Dipohon</strong></td>
							<td colspan="2" align="center" style="border-left: 1px solid #333333; border-bottom: 1px solid #333333"><strong>Dilulus</strong></td>
						</tr>
						<tr>
							<td width="150" align="center" style="border-left: 1px solid #333333; border-bottom: 1px solid #333333"><strong>Had</strong></td>
							<td width="150" align="center" style="border-left: 1px solid #333333; border-bottom: 1px solid #333333"><strong>Amaun</strong></td>
							<td width="150" align="center" style="border-left: 1px solid #333333; border-bottom: 1px solid #333333"><strong>Had</strong></td>
							<td width="150" align="center" style="border-left: 1px solid #333333; border-bottom: 1px solid #333333"><strong>Amaun</strong></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>UNTUNG BERSIH SEBELUM CUKAI</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							{{ Form::hidden('untungBersih', $untungBersih, ['id' => 'untungBersih']) }}
							<td align="right" style="border-left: 1px solid #333333"><div id="untungBersih_"></div></td>							
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>CAMPUR / TOLAK : ITEM LUAR BIASA</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							<td align="right" style="border-left: 1px solid #333333">{{ Form::number('luarbiasa', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'id' => 'luarbiasa', 'disabled']) }}</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>TOLAK : REZAB BERKANUN (25 %)</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							<td align="right" style="border-left: 1px solid #333333">{{ Form::number('rezabBerkanun', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'id' => 'rezabBerkanun', 'readonly']) }}</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>TOLAK / TAMBAH : YAYASAN PELAJARAN PELADANG (2 %)</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							<td align="right" style="border-left: 1px solid #333333">{{ Form::number('yayasan', '', ['class' => 'form-control', 'value' => '0.00', 'id' => 'yayasan', 'disabled']) }}</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>TOLAK : PERUNTUKAN CUKAI PENDAPATAN</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							<td align="right" style="border-left: 1px solid #333333">{{ Form::number('cukaiPendapatan', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'required', 'id' => 'cukaiPendapatan', 'value' => '0.00']) }}</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>TOLAK : PELARASAN AKAUN TAHUN LEPAS</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							<td align="right" style="border-left: 1px solid #333333">{{ Form::number('pelarasan', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'id' => 'pelarasan', 'disabled']) }}</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>BAKI KEUNTUNGAN BERSIH YANG BOLEH DIBAHAGIKAN</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>	
							<td align="right" style="border-left: 1px solid #333333">{{ Form::number('bakiKeuntungan', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'id' => 'bakiKeuntungan', 'readonly']) }}</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td style="border-bottom: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333; border-bottom: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333; border-bottom: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333; border-bottom: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333; border-bottom: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td><u>TOLAK : PEMBAHAGIAN KEUNTUNGAN</u></td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>

						<tr>
							<td>
								Dividen Atas Saham pada {{ $tahunBerakhir }} 
								{{ Form::number('dividenSaham', '', ['class' => 'form-control', 'id' => 'dividenSaham', 'placeholder' => 'RM 0.00']) }}								
							</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) Dividen Tunai</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('dividenTunaiPercent', $maxDividen, '', ['class' => 'form-control', 'id' => 'dividenTunaiPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('dividenTunai', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'dividenTunai']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>

						<tr>
							<td>Honorarium Kepada Pegawai-pegawai</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('honorariumPercent', $maxHonorarium, '', ['class' => 'form-control', 'id' => 'honorariumPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('honorarium', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'honorarium']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Bonus kepada pekerja-pekerja</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('bonusPercent', $maxBonus, '', ['class' => 'form-control', 'id' => 'bonusPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('bonus', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'bonus']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Hadiah Atas Langganan</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('hadiahPercent', $maxHadiah, '', ['class' => 'form-control', 'id' => 'hadiahPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('hadiah', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'hadiah']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Kumpulanwang Kebajikan Ahli</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('ahliPercent', $maxKumpulan, '', ['class' => 'form-control', 'id' => 'ahliPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('ahli', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'ahli']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Kumpulanwang Kebajikan Am</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('amPercent', $maxKumpulan, '', ['class' => 'form-control', 'id' => 'amPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('am', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'am']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Kumpulanwang Pendidikan</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('pendidikanPercent', $maxKumpulan, '', ['class' => 'form-control', 'id' => 'pendidikanPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('pendidikan', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'pendidikan']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Kumpulanwang Pemajuan </td>
							<td style="border-left: 1px solid #333333">{{ Form::select('pemajuanPercent', $maxKumpulan, '', ['class' => 'form-control', 'id' => 'pemajuanPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('pemajuan', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'pemajuan']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Kumpulanwang Menebus Saham</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('menebusSahamPercent', $maxSaham, '', ['class' => 'form-control', 'id' => 'menebusSahamPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('menebusSaham', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'menebusSaham']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>
						<tr>
							<td>Hadiah Pesaraan Pekerja</td>
							<td style="border-left: 1px solid #333333">{{ Form::select('pesaraanPercent', $maxPesaraan, '', ['class' => 'form-control', 'id' => 'pesaraanPercent']) }}</td>
							<td style="border-left: 1px solid #333333">{{ Form::number('pesaraan', '', ['class' => 'form-control', 'placeholder' => 'RM 0.00', 'readonly', 'id' => 'pesaraan']) }}</td>
							<td style="border-left: 1px solid #333333"></td>
							<td style="border-left: 1px solid #333333"></td>
						</tr>






						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
							<td style="border-left: 1px solid #333333">&nbsp;</td>
						</tr>


					</table>
				<!-- ##################### -->
				</td>
			</tr>
		</table>
	
	</div>
</div>

{{ Form::close() }}


<script src={{ asset('js/permohonan/permohonan7.js')}}></script>

@stop