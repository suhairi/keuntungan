@extends('layouts.app')

@section('content')

<div class="row">

    {{--Merekod Penerima Bonus dan Honororium--}}
    <div class="col-xs-4 col-xs-offset-1">

        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Daftar Permarkahan</h4></div>
            <div class="panel-body">

                {{ Form::open(['route' => 'ppk.rekod.permarkahan']) }}

                <table class="table table-condensed">
                    <tr>
                        <th>*Jawatan</th>
                        <td>{{ Form::text('position', '', ['class' => 'form-control', 'required' => 'true', 'placeholder' => 'Jawatan']) }}</td>
                    </tr>
                    <tr>
                        <th>markah</th>
                        <td>{{ Form::number('mark', '', ['class' => 'form-control', 'required' => 'true', 'placeholder' => 'Markah']) }}</td>
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
    <div class="col-xs-6 col-xs-offset-1">

        <div class="panel panel-primary">
            <div class="panel-heading"><h4>Senarai Semak Jawatan dan Permarkahan</h4></div>
            <div class="panel-body">


                <table class="table table-striped">
                    <tr>
                        <th>Bil</th>
                        <th>Jawatan</th>
                        <th>Markah</th>
                        <th>Pilihan</th>
                    </tr>
                    <?php $bil = 1; ?>
                    @foreach($marks as $mark)
                    <tr>
                        <td>{{ $bil++ }}</td>
                        <td>{{ $mark->position }}</td>
                        <td>{{ $mark->mark }}</td>
                        <td align="right">
                            <a href="{{ url('ppk/rekod/permarkahan', ['id' => $mark->id]) }}">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</a>
                            <a href="{{ url('ppk/rekod/permarkahan/hapus', ['id' => $mark->id]) }}">@include('buttons._hapus', ['value' => 'Hapus'])</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>

@stop