@extends('layouts.app')


@section('content')


    <div class="flex justity-center flex-wrap p-4 ">
        @include('productos.form')
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@stop
@section('js')
    <script src="{{asset('js/form.js')}}"></script>
@stop