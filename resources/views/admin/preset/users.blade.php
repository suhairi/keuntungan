@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-4 col-xs-offset-1">

            <h3>Preset Users</h3>

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Record a User</h4></div>
                <div class="panel-body">

                    {{ Form::open(['method' => 'post', 'route' => 'admin.preset.users']) }}

                    <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <td>{{ Form::text('name', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ Form::email('email', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>{{ Form::text('password', '', ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>Level</th>
                            <td>{{ Form::select('level_id', $level, null, ['class' => 'form-control', 'placeholder' => 'User Level', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>PPK</th>
                            <td>{{ Form::select('ppk_id', $ppk, null, ['class' => 'form-control', 'placeholder' => 'User PPK', 'required' => 'true']) }}</td>
                        </tr>

                        <tr>
                            <td colspan="2" align="right">@include('buttons._record', ['value' => 'Add a user'])</td>
                        </tr>

                    </table>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-xs-offset-1">
            <h3>List of Users</h3>

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Senarai Pengguna</h4></div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Bil</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>PPK</th>
                            <th><div  align="center">Pilihan</div></th>
                        </tr>
                        <?php $bil = 1; ?>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $bil++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->level->name }}</td>
                            <td>{{ $user->ppk->name }}</td>
                            <td align="right">
                                <a href="{{ url('admin/preset/users', ['id' => $user->id]) }}">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</a>
                                <a href="{{ url('admin/preset/users/hapus', ['id' => $user->id]) }}">@include('buttons._hapus', ['value' => 'Hapus'])</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>




@stop