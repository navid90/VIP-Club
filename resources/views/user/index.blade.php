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

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            @foreach( $userColumns as $userColumn)
                                @if(isset($userColumn['show_index']) && $userColumn['show_index'])
                                    <th> {{ trans('letter.'.$userColumn['name']) }} </th>
                                @endif
                            @endforeach
                            @foreach( $userDataSet as $userData)
                                @if(isset($userData['show_index']) && $userData['show_index'])
                                    <th> {{ trans('letter.'.$userData['name']) }} </th>
                                @endif
                            @endforeach
                            <th><i class="fa fa-cogs"></i> {{trans('letter.configuration')}} </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($users as $user)
                            <tr>
                                <th> {{ $user -> id  }} </th>
                                @foreach( $userColumns as $userColumn)
                                    @if(isset($userColumn['show_index']) && $userColumn['show_index'])
                                        <th>{{ $user[$userColumn['name']] }} </th>
                                    @endif
                                @endforeach

                                @foreach( $userDataSet as $userData)
                                    @if(isset( $userData['show_index'] ) && $userData['show_index'] )
                                        @if(isset($userData['choices']))
                                            <th>{{ $user[$userData['name'].'_in_letter'] }} </th>
                                        @else
                                            <th>{{ $user->data[$userData['name']] }} </th>
                                        @endif
                                    @endif
                                @endforeach


                                <td class="width-22-rem text-left">

                                    <a href="{{ route( 'user.edit' , $user -> id ) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> {{ trans('letter.edit') }} </a>

                                    <form class="d-inline" id="destroy_user_form" action="{{ route( 'user.destroy' ,$user -> id ) }}" enctype="multipart/form-data" method="post">
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

@endpush
