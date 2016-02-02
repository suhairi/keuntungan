@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-4 col-xs-offset-1">

        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Kemaskini Pengguna</h4></div>
            <div class="panel-body">

                {{ Form::model($user, ['route' => 'ppk.rekod.users.kemaskini']) }}
                {{ Form::hidden('id', $user->id) }}
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <td>{{ Form::text('name', $user->name, ['class' => 'form-control']) }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ Form::email('email', $user->email, ['class' => 'form-control']) }}</td>
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