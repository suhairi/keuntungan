@extends('layouts.app')

@section('content')

{{--Progress Bar--}}

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h4>Penunjuk Kemajuan Permohonan</h4>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                <span class="sr-only">85% Complete</span>
            </div>
        </div>
    </div>
</div>


{{--The MAIN table--}}
{{ Form::open(['route' => 'ppk.rekod.permohonan7']) }}
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
                            <td>{{ Form::number('ahliawal', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ahliawal']) }}</td>
                            <td>{{ Form::number('ahlisemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ahlisemasa']) }}</td>
                            <td>{{ Form::number('ahlipenggunaansemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'id' => 'ahlipenggunaansemasa']) }}</td>
                            <td>{{ Form::number('ahlibakiakhir', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'ahlibakiakhir']) }}</td>
                            <td>{{ Form::number('ahliperatuspenggunaan', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly', 'id' => 'ahliperatuspenggunaan']) }}</td>
                        </tr>
                        <tr>
                            <td>Kebajikan Am</td>
                            <td>{{ Form::number('amawal', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('amsemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('ampenggunaansemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('ambakiakhir', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly']) }}</td>
                            <td>{{ Form::number('amperatuspenggunaan', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly']) }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ Form::number('pendidikanawal', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('pendidikansemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('pendidikanpenggunaansemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('pendidikanbakiakhir', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly']) }}</td>
                            <td>{{ Form::number('pendidikanperatuspenggunaan', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly']) }}</td>
                        </tr>
                        <tr>
                            <td>Pemajuan</td>
                            <td>{{ Form::number('pemajuanawal', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('pemajuansemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('pemajuanpenggunaansemasa', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required']) }}</td>
                            <td>{{ Form::number('pemajuanbakiakhir', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly']) }}</td>
                            <td>{{ Form::number('pemajuanperatuspenggunaan', '', ['class' => 'form-control', 'placeholder' => '0.00', 'required', 'readonly']) }}</td>
                        </tr>
                        <tr>
                            <td>JUMLAH</td>
                            <td align="center"><div id="awal">0.00</div></td>
                            <td align="center"><div id="semasa">0.00</div></td>
                            <td align="center"><div id="penggunaansemasa">0.00</div></td>
                            <td align="center"><div id="bakiakhir">0.00</div></td>
                            <td align="center"><div id="peratuspenggunaan">0.00</div></td>
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
                <td><strong>Jumlah</strong></td>
            </tr>

        </table>
    </div>
    <div class="col-xs-1">&nbsp;</div>
</div>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="pull-left"><a href="{{ redirect()->back() }}">@include('buttons._previous', ['value' => 'Kembali'])</a></div>
        <div class="pull-right">
            <input class="btn btn-success" type="submit" value="Seterusnya" />
        </div>
    </div>
</div>
{{ Form::close() }}



<script src={{ asset('js/permohonan/permohonan6.js')}}></script>

@stop