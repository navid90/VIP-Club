@extends('layouts.page')

@section('head-tag')

    <title> {{ trans('title.user.create') }} </title>

@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item font-size-12"> <a href="{{ route('home.index') }}"> {{ trans('title.home.index') }} </a></li>
          <li class="breadcrumb-item font-size-12"> <a href="{{ route('user.index') }}"> {{ trans('title.user.index') }} </a></li>
          <li class="breadcrumb-item font-size-12 active" aria-current="page"> {{ trans('title.user.create') }} </li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-10 offset-1">
            <section class="main-body-container container-fluid">

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('user.index')}}" class="btn btn-info btn-sm"> {{ trans('letter.return') }} </a>
                </section>

                <section class="form-group ">

                    {!! form($form) !!}

                </section>

            </section>
        </section>
    </section>

@endsection

@section('js')
@endsection
