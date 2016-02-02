@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-4 col-xs-offset-1">

        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Daftar Kerani Akaun</h4></div>
            <div class="panel-body">

                {{ Form::open(['route' => 'ppk.rekod.users']) }}

                <table class="table table-condensed">
                    <tr>
                        <th>*Nama Penuh</th>
                        <td>{{ Form::text('name', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                    </tr>
                    <tr>
                        <th>*Email</th>
                        <td>{{ Form::email('email', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                    </tr>
                    <tr>
                        <th>*Password</th>
                        <td>{{ Form::text('password', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">@include('buttons._record', ['value' => 'Daftar'])</td>
                    </tr>
                </table>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-7 col-xs-offset-1">

        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
            <div class="panel-body">

                <table class="table table-striped">
                    <tr>
                        <th>Bil</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jawatan</th>
                        <th>Pilihan</th>
                    </tr>
                    <?php $bil = 1; ?>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $bil++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level->name }}</td>
                        <td align="right">
                            <a href="{{ url('ppk/rekod/users', ['id' => $user->id]) }}">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</a>
                            <a href="{{ url('ppk/rekod/users/hapus', ['id' => $user->id]) }}">@include('buttons._hapus', ['value' => 'Hapus'])</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>

@stop