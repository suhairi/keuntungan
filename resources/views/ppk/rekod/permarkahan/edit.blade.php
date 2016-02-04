@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-4 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Kemaskini Pengguna</h4></div>
                <div class="panel-body">

                    {{ Form::model($mark, ['route' => 'ppk.rekod.permarkahan.edit']) }}
                    {{ Form::hidden('id', $mark->id) }}
                    <table class="table table-striped">
                        <tr>
                            <th>Nama</th>
                            <td>{{ Form::text('name', $mark->position, ['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ Form::email('email', $mark->mark, ['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop