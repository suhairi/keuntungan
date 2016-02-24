@extends('layouts.app')

@section('content')


@if($lampiranbsatu != null)
    @include('ppk/rekod/forms/__permohonan2')
    <script src={{ asset('js/permohonan/permohonan2_.js')}}></script>
@else
	here...
    @include('ppk/rekod/forms/_permohonan2')
    <script src={{ asset('js/permohonan/permohonan2.js')}}></script>
@endif



@stop