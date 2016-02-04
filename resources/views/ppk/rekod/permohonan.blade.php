@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
    <h4>Peratusan Kemajuan Permohonan</h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
            <span class="sr-only">10% Complete</span>
        </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-3 col-xs-offset-1">



        <div class="panel panel-default">
            <div class="panel-heading"><h4>Tarikh bagi Tahun Berakhir</h4></div>
            <div class="body" style="margin: 5px">

                {{ Form::open(['route' => 'ppk.rekod.permohonan2']) }}
                <div class="form-group">
                    <label for="tarikh">Tarikh bagi Tahun Berakhir</label>
                    {{ Form::date('tarikh', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
                </div>
                <div class="form-group" align="right">
                    <label for="submit"></label>
                    @include('buttons._next', ['value' => 'Seterusnya'])
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>

@stop