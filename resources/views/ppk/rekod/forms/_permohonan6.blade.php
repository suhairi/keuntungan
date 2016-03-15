@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                <span class="sr-only">90% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::model($lampiranenam, ['route' => 'ppk.rekod.permohonan7']) }}
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <table class="table table-bordered">

            <tr>
                <th width="15">Tahap Asas</th>
                <th width="600">Butir-butir Diperlukan</th>
                <th width="100">Markah Diperolehi</th>
            </tr>

            <!-- ###########################################     6      ############################################## -->

            <tr>
                <td>7(iii)(d)</td>
                <td>
                    <p>Penggunaan Kumpulan-kumpulan wang</p>
                    <table border="1">
                        <tr>
                            <td>KUMPULAN WANG</td>
                            <td>BAKI AWAL TAHUN 2014 (RM)</td>
                            <td>PENERIMAAN SEMASA (RM)</td>
                            <td>PENGGUNAAN SEMASA (RM)</td>
                            <td>BAKI AKHIR TAHUN 2014 (RM)</td>
                            <td>PERATUS PENGGUNAAN (%)</td>
                        </tr>
                        <tr>
                            <td>Kebajikan Ahli</td>
                            <td>{{ Form::number('ahliawal', $lampiranenam->ahliawal, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ahliawal']) }}</td>
                            <td>{{ Form::number('ahlisemasa', $lampiranenam->ahlisemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ahlisemasa']) }}</td>
                            <td>{{ Form::number('ahlipenggunaansemasa', $lampiranenam->ahlipenggunaansemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ahlipenggunaansemasa']) }}</td>
                            <td>{{ Form::number('ahlibakiakhir', $lampiranenam->ahlibakiakhir, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'ahlibakiakhir']) }}</td>
                            <td>{{ Form::number('ahliperatuspenggunaan', $lampiranenam->ahliperatuspenggunaan, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'ahliperatuspenggunaan']) }}</td>
                        </tr>
                        <tr>
                            <td>Kebajikan Am</td>
                            <td>{{ Form::number('amawal', $lampiranenam->amawal, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'amawal']) }}</td>
                            <td>{{ Form::number('amsemasa', $lampiranenam->amsemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'amsemasa']) }}</td>
                            <td>{{ Form::number('ampenggunaansemasa', $lampiranenam->ampenggunaansemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ampenggunaansemasa']) }}</td>
                            <td>{{ Form::number('ambakiakhir', $lampiranenam->ambakiakhir, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'ambakiakhir']) }}</td>
                            <td>{{ Form::number('amperatuspenggunaan', $lampiranenam->amperatuspenggunaan, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'amperatuspenggunaan']) }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ Form::number('pendidikanawal', $lampiranenam->pendidikanawal, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'pendidikanawal']) }}</td>
                            <td>{{ Form::number('pendidikansemasa', $lampiranenam->pendidikansemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'pendidikansemasa']) }}</td>
                            <td>{{ Form::number('pendidikanpenggunaansemasa', $lampiranenam->pendidikanpenggunaansemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'pendidikanpenggunaansemasa']) }}</td>
                            <td>{{ Form::number('pendidikanbakiakhir', $lampiranenam->pendidikanbakiakhir, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'pendidikanbakiakhir']) }}</td>
                            <td>{{ Form::number('pendidikanperatuspenggunaan', $lampiranenam->pendidikanperatuspenggunaan, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'pendidikanperatuspenggunaan']) }}</td>
                        </tr>
                        <tr>
                            <td>Pemajuan</td>
                            <td>{{ Form::number('pemajuanawal', $lampiranenam->pemajuanawal, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'pemajuanawal']) }}</td>
                            <td>{{ Form::number('pemajuansemasa', $lampiranenam->pemajuansemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'pemajuansemasa']) }}</td>
                            <td>{{ Form::number('pemajuanpenggunaansemasa', $lampiranenam->pemajuanpenggunaansemasa, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 
                            'pemajuanpenggunaansemasa']) }}</td>
                            <td>{{ Form::number('pemajuanbakiakhir', $lampiranenam->pemajuanbakiakhir, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'pemajuanbakiakhir']) }}</td>
                            <td>{{ Form::number('pemajuanperatuspenggunaan', $lampiranenam->pemajuanperatuspenggunaan, ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'pemajuanperatuspenggunaan']) }}</td>
                        </tr>
                        <tr>
                            <td>JUMLAH</td>
                            <td align="center">
                                <div id="awal">0.00</div>
                                {{ Form::hidden('awal', '', ['id' => 'jumlahawal'] )}}
                            </td>
                            <td align="center">
                                <div id="semasa">0.00</div>
                                {{ Form::hidden('semasa', '', ['id' => 'jumlahsemasa']) }}
                            </td>
                            <td align="center">
                                <div id="penggunaansemasa">0.00</div>
                                {{ Form::hidden('penggunaansemasa', '', ['id' => 'jumlahpenggunaansemasa']) }}
                            </td>
                            <td align="center"><div id="bakiakhir">0.00</div></td>
                            <td align="center"><div id="peratuspenggunaan">0.00</div></td>
                        </tr>
                        <tr>
                            <td>Peratus</td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td align="center"><div id="purataperatus">0.00</div></td>
                        </tr>


                    </table>
                </td>
                
                {{--MAIN TABLE - Second Row --}}
                <td valign="bottom" align="center"></td>
            </tr>

            <!-- #############################################    spaces/gutter    ######################################### -->
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                {{--MAIN TABLE - Second Column--}}
                <td align="center"><strong>{{ $totalMarkah }}</strong></td>
            </tr>

        </table>
    </div>
    <div class="col-xs-1">&nbsp;</div>
</div>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="pull-left"><a href="{{ route('ppk.rekod.permohonan6') }}">@include('buttons._previous', ['value' => 'Kembali'])</a></div>
        <div class="pull-right">
            <input class="btn btn-success" type="submit" value="Simpan & Seterusnya" />
        </div>
    </div>
</div>
{{ Form::close() }}



<script src={{ asset('js/permohonan/permohonan6_.js')}}></script>

@stop