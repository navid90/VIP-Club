@extends('layouts.page')

@section('head-tag')
<title>Users</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="{{ route('home.index') }}"> Home </a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page">Users</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-10 offset-1">
        <section class="main-body-container">
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('user.create') }}"
                   class="btn btn-info btn-sm"> Create account </a>
                <div class="max-width-16-rem">
                    <input type="text"
                           class="form-control form-control-sm form-text"
                           placeholder="Search">
                </div>
            </section>

            <section class="table-responsive">

{{--                @if($dataTable)--}}
{{--                    <div class="ibox float-e-margins">--}}
{{--                        <div class="ibox-content">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <a class="btn btn-success pull-right btn-xs" href="?action=excel" style="margin-left:5px;"><i class="fa fa-file-excel-o"></i> خروجی اکسل </a>--}}
{{--                                {!! $dataTable->table() !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @push('scripts')--}}
{{--                        {!! $dataTable->scripts() !!}--}}
{{--                    @endpush--}}
{{--                @endif--}}







                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
{{--                            <th>#</th>--}}
                            <th> Full Name </th>
                            <th> E-mail </th>
                            <th> Mobile Number </th>
                            <th> National Code </th>
                            <th> User's Type </th>
                            <th> Activation </th>
                            <th><i class="fa fa-cogs"></i> Configuration </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
{{--                                <th> {{ $user -> id }} </th>--}}
                                <td> {{ $user -> full_name }} </td>
                                <td> {{ $user -> email }} </td>
                                <td> {{ $user -> mobile }} </td>
                                <td> {{ $user -> national_code }} </td>
                                <td> {{ $user -> user_type_in_letter }} </td>
                                <td> {{ $user -> activation_in_letter }} </td>
                                <td class="width-22-rem text-left">

                                    <a href="{{ route( 'user.edit' , $user -> id ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a>

                                    <form class="d-inline" id="destroy_user_form" action="{{ route( 'user.destroy' , $user -> id ) }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Recycle" class="btn btn-danger btn-sm">
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </section>
    </section>
</section>

@endsection
