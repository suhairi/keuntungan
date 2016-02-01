@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-4 col-xs-offset-1">

        <h3>Preset Markah</h3>
        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Preset Markah</h4></div>
            <div class="panel-body">

                {{ Form::open(['method' => 'post', 'route' => 'admin.preset.markah']) }}

                <table class="table table-hover">
                    <tr>
                        <th>Jawatan</th>
                        <td>{{ Form::text('position', '', ['class' => 'form-control', 'placeholder' => 'Contoh : Pengerusi Jemaah Pengarah']) }}</td>
                    </tr>
                    <tr>
                        <th>Markah</th>
                        <td>{{ Form::number('mark', '', ['class' => 'form-control']) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">@include('buttons._record', ['value' => 'Rekod'])</td>
                    </tr>
                </table>

                {{ Form::close() }}


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-6 col-xs-offset-1">


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Bil</th>
                <th>Jawatan</th>
                <th>Markah</th>
                <th>Pilihan</th>
            </tr>
            </thead>
            <tbody>
            <?php $bil = 1; ?>
            @foreach($marks as $mark)
            <tr>
                <td>{{ $bil++ }}</td>
                <td>{{ $mark->position }}</td>
                <td>{{ $mark->mark }}</td>
                <td align="right">
                    <a href="{{ url('admin/preset/markah', $mark->id) }}">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</a>
                    <a href="{{ url('#', $mark->id) }}">@include('buttons._hapus', ['value' => 'Hapus'])</a>

                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

    </div>
</div>

@stop