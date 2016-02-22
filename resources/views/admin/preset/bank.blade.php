@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-6 col-xs-offset-1">
            <div class=" panel panel-info">
                <div class="panel-heading"><h4>Bank Akaun Semasa</div>
                <div class="panel-body">
                    <table class="table table-condensed">   
                        <tr>
                            <th>Nama Singkatan</th>
                            <th>Nama Bank</th>
                            <th>Pilihan</th>
                        </tr>
                        @foreach($banks as $bank)
                                <tr>
                                    <td>{{ $bank->short_name }}</td>
                                    <td>{{ $bank->name }}</td>
                                    <td><a href="{{ url('admin/preset/bank', ['id' => $bank->id]) }}">
                                            <!-- @include('buttons._hapus', ['value' => 'Hapus']) -->
                                            <button class="btn btn-danger disabled"><i class="glyphicon glyphicon-erase"></i> Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                        @endforeach

                    </table>
                </div>
                
            </div>
        </div>

        <div class="col-xs-4 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Kemaskini Maklumat Bank</h4></div>
                <div class="panel-body">

                    {{ Form::open(['route' => 'admin.preset.bank', 'method' => 'post']) }}

                    <table class="table table-condensed">
                        <tr>
                            <th>*Nama Singkatan</th>
                            <td>{{ Form::text('short_name', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Maybank', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*Nama Bank</th>
                            <td>{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Malayan Banking Berhad', 'required' => 'true']) }}</td>
                        </tr>                 
                        <tr>
                            <td colspan="2" align="right">@include('buttons._kemaskini', ['value' => 'Kemaskini Maklumat Bank'])</td>
                        </tr>
                    </table>

                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>   

    

@stop