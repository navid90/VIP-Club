@extends('adminlte::page')

@section('title', 'Dashboard')


@section('adminlte_css')

@endsection


@section('content')
    @if( \Illuminate\Support\Facades\Session::has('success') )
        <div class="alert alert-primary" role="alert">
            {{ request()->session()->get('success') }}
        </div>
    @endif
    @if( $errors->any() )
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
