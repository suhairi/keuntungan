@extends('layouts.app')

@section('content')

    <div class="row">

        {{--Merekod Penerima Bonus dan Honororium--}}
        <div class="col-xs-4 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Daftar Kerani Akaun</h4></div>
                <div class="panel-body">

                    {{ Form::open(['route' => 'ppk.rekod.penerima']) }}

                    <table class="table table-condensed">
                        <tr>
                            <th>*Nama Penuh</th>
                            <td>{{ Form::text('name', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*Jawatan</th>
                            <td>{{ Form::select('markah_id', $markah, '', ['class' => 'form-control', 'required' => 'true', 'placeholder' => 'Pilih Jawatan']) }}</td>
                        </tr>
                        <tr>
                            <th>Tempoh Berkhidmat (bulan)</th>
                            <td>{{ Form::number('service_duration', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ Form::select('status', ['PILIHAN' => 'PILIHAN', 'PELANTIKAN' => 'PELANTIKAN'], '', ['class' => 'form-control', 'required' => 'true', 'placeholder' => 'Pilih Status']) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">@include('buttons._record', ['value' => 'Daftar'])</td>
                        </tr>
                    </table>

                    {{ Form::close() }}
                </div>
            </div>
        </div>

        {{--Senarai Semak Markah--}}
        <div class="col-xs-4 col-xs-offset-2">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Semak Jawatan dan Markah</h4></div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Jawatan</th>
                            <th>Markah</th>
                        </tr>
                        @foreach($marks as $mark)
                            <tr>
                                <td>{{ $mark->position }}</td>
                                <td>{{ $mark->mark }}</td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
                <div class="panel-body">

                    <table class="table table-striped">
                        <tr>
                            <th>Bil</th>
                            <th>Nama</th>
                            <th>Jawatan</th>
                            <th>Tempoh Berkhidmat</th>
                            <th>Status</th>
                            <th>Pilihan</th>
                        </tr>
                        <?php $bil = 1; ?>
                        @foreach($penerimas as $penerima)
                            <tr>
                                <td>{{ $bil++ }}</td>
                                <td>{{ $penerima->name }}</td>
                                <td>{{ $penerima->markah->position }}</td>
                                <td>{{ $penerima->service_duration }}</td>
                                <td>{{ $penerima->status }}</td>
                                <td align="right">
                                    <a href="{{ url('ppk/rekod/users', ['id' => $penerima->id]) }}">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</a>
                                    <a href="{{ url('ppk/rekod/users/hapus', ['id' => $penerima->id]) }}">@include('buttons._hapus', ['value' => 'Hapus'])</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop