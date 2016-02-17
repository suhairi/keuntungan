@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class=" panel panel-info">
                <div class="panel-heading"><h4>Maklumat PPK</div>
                <div class="panel-body">
                    <table class="table table-condensed">   
                        <tr>
                            <th>Nama Pengurus</th>
                            <th>No KP</th>
                            <th>Nama Jawatan</th>
                            <th>Kod Jawatan</th>
                            <th>No Telefon</th>
                        </tr>

                        @if($pengurus == null)
                        	<tr>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                            <td></td>
	                        </tr>
                        @else
	                        <tr>
	                            <td>{{ $pengurus->name }}</td>
	                            <td>{{ $pengurus->nokp }}</td>
	                            <td>{{ $pengurus->nama_jawatan }}</td>
	                            <td>{{ $pengurus->kod_jawatan }}</td>
	                            <td>{{ $pengurus->notel }}</td>
	                        </tr>
                        @endif

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


                    @if($pengurus != null)
                    	{{ Form::model($pengurus, ['route' => 'ppk.rekod.pengurus', 'method' => 'post']) }}
                    	{{ Form::hidden('id', $pengurus->id)}}

                	@else
                		{{ Form::open(['route' => 'ppk.rekod.pengurus', 'method' => 'post']) }}
                	@endif

                    <table class="table table-condensed">
                        <tr>
                            <th>*Nama Pengurus</th>
                            <td>{{ Form::text('name', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*No Kad Pengenalan</th>
                            <td>{{ Form::text('nokp', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*Jawatan</th>
                            <td>{{ Form::text('nama_jawatan', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>*Kod Jawatan</th>
                            <td>{{ Form::text('kod_jawatan', null, ['class' => 'form-control', 'required' => 'true']) }}</td>
                        </tr>
                        <tr>
                            <th>No Telefon</th>
                            <td>{{ Form::text('notel', null, ['class' => 'form-control']) }}</td>
                        </tr>                      

                        <tr>
                            <td colspan="2" align="right">@include('buttons._kemaskini', ['value' => 'Kemaskini Maklumat Pengurus'])</td>
                        </tr>
                    </table>

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    

@stop