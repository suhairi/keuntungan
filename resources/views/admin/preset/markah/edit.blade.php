@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-4 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Kemaskini Markah</h4></div>
                <div class="panel-body">

                    {{ Form::model($mark, ['route' => 'admin.preset.markah.kemaskini']) }}

                        <table class="table table-hover">
                            <tr>
                                <th>Jawatan</th>
                                <td>{{ Form::text('position', $mark->position, ['class' => 'form-control', 'required' => 'true']) }}</td>
                            </tr>
                            <tr>
                                <th>Markah</th>
                                <td>{{ Form::number('mark', $mark->mark, ['class' => 'form-control', 'required' => 'true']) }}</td>
                            </tr>
                            <tr>
                                <td align="right" colspan="2">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</td>
                            </tr>
                        </table>

                    {{ Form::close() }}

                    <form method="post" action="{{ route('admin.preset.markah.kemaskini') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $mark->id }}" />


                    </form>

                </div>
            </div>
        </div>
    </div>

@stop