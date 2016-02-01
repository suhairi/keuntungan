@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-4 col-xs-offset-1">

        <div class="panel panel-primary">
            <div class="panel panel-heading"><h4>Kemaskini Pengguna</h4></div>
            <div class="panel panel-body">

                {{ Form::model($user, ['method' => 'post', 'route' => 'admin.preset.users.kemaskini']) }}

                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{ Form::text('name', $user->name, ['class' => 'form-control']) }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ Form::text('email', $user->email, ['class' => 'form-control']) }}</td>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <td>{{ Form::select('level_id', $level, $user->level_id, ['class' => 'form-control']) }}</td>
                    </tr>
                    <tr>
                        <th>PPK</th>
                        <td>{{ Form::select('ppk_id', $ppk, $user->ppk_id, ['class' => 'form-control']) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">@include('buttons._kemaskini', ['value' => 'Kemaskini Pengguna'])</td>
                    </tr>
                </table>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@stop