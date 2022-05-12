@extends('layouts.page')

@section('head-tag')
<title>Users</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('home.index') }}"> {{ trans('title.home.index') }} </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> {{ trans('title.user.index') }} </li>
    </ol>
  </nav>

  <section class="row">
    <section class="col-10 offset-1">
        <section class="main-body-container">
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('user.create') }}"
                   class="btn btn-info btn-sm"> {{ trans('title.user.create') }} </a>
            </section>

            <section class="table-responsive">

                @if($dataTable)
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="table-responsive">

                                <a class="btn btn-success pull-right btn-xs" href="?action=excel" style="margin-left:5px;"><i class="fa fa-file-excel-o"></i> {{ trans('letter.excel') }} </a>

{{--                                <table class="table" id="dataTableBuilder - Ajax"></table>--}}
                                {{$dataTable->table()}}
{{--                                {{dd($dataTable->scripts())}}--}}
                            </div>
                        </div>
                    </div>
                @endif

            </section>
        </section>
    </section>
</section>

@endsection

@push('js')
    {{$dataTable->scripts()}}
@endpush
