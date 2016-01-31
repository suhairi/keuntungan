@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-4 col-xs-offset-1">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Kemaskini Markah</h4></div>
                <div class="panel-body">

                    <form method="post" action="{{ route('admin.preset.markah.kemaskini') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $mark->id }}" />
                    <table class="table table-hover">
                        <tr>
                            <th>Jawatan</th>
                            <td><input type="text" value="{{ $mark->position }}" name="position" class="form-control" placeholder="Contoh: Pengurus Besar" autofocus="" /></td>
                        </tr>
                        <tr>
                            <th>Markah</th>
                            <td><input type="number" value="{{ $mark->mark }}" name="mark" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td align="right" colspan="2">@include('buttons._kemaskini', ['value' => 'Kemaskini'])</td>
                        </tr>
                    </table>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop