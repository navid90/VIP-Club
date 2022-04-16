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

{{--                @if($dataTable)--}}
{{--                    <div class="ibox float-e-margins">--}}
{{--                        <div class="ibox-content">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <a class="btn btn-success pull-right btn-xs" href="?action=excel" style="margin-left:5px;"><i class="fa fa-file-excel-o"></i>--}}
{{--                                    {{ trans('letter.excel') }} </a>--}}
{{--                                {{ $dataTable->table() }}--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    {{dd($dataTable->scripts())}}--}}
{{--                @endif--}}

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
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
                                <th> {{ $user -> id }} </th>
                                <td> {{ $user -> full_name }} </td>
                                <td> {{ $user -> email }} </td>
                                <td> {{ $user -> mobile }} </td>
                                <td> {{ $user -> national_code }} </td>
                                <td> {{ $user -> user_type_in_letter }} </td>
                                <td> {{ $user -> activation_in_letter }} </td>
                                <td class="width-22-rem text-left">

                                    <a href="{{ route( 'user.edit' , $user -> id ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> {{ trans('letter.edit') }} </a>

                                    <form class="d-inline" id="destroy_user_form" action="{{ route( 'user.destroy' , $user -> id ) }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="{{ trans('recycle') }}" class="btn btn-danger btn-sm">
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

@push('js')
{{--    {{$dataTable->scripts()}}--}}

{{--    <script>--}}
{{--        window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["dataTableBuilder"]=$("#dataTableBuilder").DataTable({--}}
{{--            "serverSide":true,--}}
{{--            "processing":true,--}}
{{--            "ajax":"",--}}
{{--            "columns":[--}}
{{--                {"name":"first_name","data":"first_name","title":"Full Name","searchable":false,"orderable":true},--}}
{{--                {"name":"email","data":"email","title":"E_mail","searchable":false,"orderable":true},--}}
{{--                {"name":"mobile","data":"mobile","title":"Mobile Number","searchable":false,"orderable":true},--}}
{{--                {"name":"national_code","data":"national_code","title":"National Code","searchable":false,"orderable":true},--}}
{{--                {"name":"user_type","data":"user_type","title":"Type of User","searchable":false,"orderable":true},--}}
{{--                {"name":"activation","data":"activation","title":"Activation","searchable":false,"orderable":true},--}}
{{--                {"defaultContent":"","data":"action","name":"action","title":"Configuration","render":null,"orderable":false,"searchable":false}--}}
{{--            ],--}}
{{--            "dom":"frtip",--}}
{{--            "scrollX":false,--}}
{{--            "pageLength":10,--}}
{{--            "language":{--}}
{{--                "sProcessing":"Processing ...",--}}
{{--                "sLengthMenu":"\u0646\u0645\u0627\u06cc\u0634 \u0645\u062d\u062a\u0648\u06cc\u0627\u062a _MENU_",--}}
{{--                "sZeroRecords":"\u0645\u0648\u0631\u062f\u06cc \u06cc\u0627\u0641\u062a \u0646\u0634\u062f",--}}
{{--                "sInfo":"\u0646\u0645\u0627\u06cc\u0634 _START_ \u062a\u0627 _END_ \u0627\u0632 \u0645\u062c\u0645\u0648\u0639 _TOTAL_ \u0645\u0648\u0631\u062f",--}}
{{--                "sInfoEmpty":"\u062a\u0647\u06cc",--}}
{{--                "sInfoFiltered":"(\u0641\u06cc\u0644\u062a\u0631 \u0634\u062f\u0647 \u0627\u0632 \u0645\u062c\u0645\u0648\u0639 _MAX_ \u0645\u0648\u0631\u062f)",--}}
{{--                "sInfoPostFix":"",--}}
{{--                "sSearch":"Search:",--}}
{{--                "sUrl":"",--}}
{{--                "oPaginate":{--}}
{{--                    "sFirst":"\u0627\u0628\u062a\u062f\u0627",--}}
{{--                    "sPrevious":"\u0642\u0628\u0644\u06cc",--}}
{{--                    "sNext":"\u0628\u0639\u062f\u06cc",--}}
{{--                    "sLast":"\u0627\u0646\u062a\u0647\u0627"--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
@endpush
