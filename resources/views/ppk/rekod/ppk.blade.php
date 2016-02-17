@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class=" panel panel-info">
                <div class="panel-heading"><h4>Maklumat PPK</div>
                <div class="panel-body">
                    <table class="table table-condensed table-bordered">   
                        <tr>
                            <th>Kod PPK</th>
                            <th>Nama</th>
                            <th>Nama Penuh</th>
                            <th>Alamat Penuh</th>
                            <th>No Tel 1</th>
                            <th>No Tel 2</th>
                            <th>Faks</th>
                        </tr>
                        <tr>
                            <td>{{ $ppk->code }}</td>
                            <td>{{ $ppk->name }}</td>
                            <td>{{ $ppk->fullname }}</td>
                            <td>{{ $ppk->address }}</td>
                            <td>{{ $ppk->notel1 }}</td>
                            <td>{{ $ppk->notel2 }}</td>
                            <td>{{ $ppk->fax }}</td>
                        </tr>

                    </table>
                </div>
                
            </div>
        </div>      
    </div>

    <div class="row">
        <div class="col-xs-6 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Kemaskini Maklumat PPK</h4></div>
                <div class="panel-body">

                    {{ Form::model($ppk, ['route' => 'ppk.rekod.ppk', 'method' => 'post']) }}
                    {{ Form::hidden('id', $ppk->id)}}

                    <table class="table table-condensed">
                        <tr>
                            <th>Kod PPK</th>
                            <td>{{ Form::text('code', null, ['class' => 'form-control', 'required' => 'true', 'readonly']) }}</td>
                        </tr>
                        <tr>
                            <th>*Nama</th>
                            <td>{{ Form::text('name', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*Nama penuh</th>
                            <td>{{ Form::text('fullname', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*Alamat</th>
                            <td>{{ Form::text('address', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*No Telefon 1</th>
                            <td>{{ Form::text('notel1', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>No Telefon 2</th>
                            <td>{{ Form::text('notel2', null, ['class' => 'form-control']) }}</td>
                        </tr>
                        <tr>
                            <th>Fax</th>
                            <td>{{ Form::text('fax', null, ['class' => 'form-control']) }}</td>
                        </tr>
                        


                        <tr>
                            <td colspan="2" align="right">@include('buttons._kemaskini', ['value' => 'Kemaskini Maklumat PPK'])</td>
                        </tr>
                    </table>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    

@stop