@extends('layouts.page')

@section('head-tag')

    <title> {{ trans('title.user.edit') }} </title>

@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="{{ route('home.index') }}"> {{ trans('title.home.index') }} </a></li>
            <li class="breadcrumb-item font-size-12"> <a href="{{ route('user.index') }}"> {{ trans('title.user.index') }} </a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> {{ trans('title.user.edit') }} </li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-10 offset-1">
            <section class="main-body-container container-fluid">

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('user.index')}}" class="btn btn-info btn-sm"> {{ trans('letter.return') }} </a>
                </section>

                <section class="form-group">

                    {!! form($form) !!}
{{--                    <form id="edit_user_form" action="{{ route('user.update' , $user->id) }}" enctype="multipart/form-data" method="post">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}
{{--                        <section class="row">--}}

{{--                        first_name--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="first_name"> {{trans('letter.first_name') }} <span style="color:#ff0000">*</span></label>--}}
{{--                                    <input--}}
{{--                                        id="first_name"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control form-control-sm @error('first_name') is-invalid @enderror"--}}
{{--                                        name="first_name"--}}
{{--                                        value="@if(old('first_name')){{old('first_name')}}@elseif($user->first_name){{$user->first_name}}@endif"--}}
{{--                                        autocomplete="first_name"--}}
{{--                                        autofocus--}}
{{--                                        required>--}}
{{--                                    @error('first_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        last_name--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="last_name"> {{ trans('letter.last_name') }} <span style="color:#ff0000">*</span></label>--}}
{{--                                    <input--}}
{{--                                        id="last_name"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control form-control-sm @error('last_name') is-invalid @enderror"--}}
{{--                                        name="last_name"--}}
{{--                                        value="@if(old('last_name')){{old('last_name')}}@elseif($user->last_name){{$user->last_name}}@endif"--}}
{{--                                        autocomplete="last_name"--}}
{{--                                        autofocus--}}
{{--                                        required>--}}
{{--                                    @error('last_name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        email--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email"> {{ trans('letter.email') }} <span style="color:#ff0000">*</span></label>--}}
{{--                                    <input--}}
{{--                                        id="email"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control form-control-sm @error('email') is-invalid @enderror"--}}
{{--                                        name="email"--}}
{{--                                        value="@if(old('email')){{old('email')}}@elseif($user->email){{$user->email}}@endif"--}}
{{--                                        autocomplete="email"--}}
{{--                                        autofocus--}}
{{--                                        required>--}}
{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        mobile--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="mobile"> {{ trans('letter.mobile') }} </label>--}}
{{--                                    <input--}}
{{--                                        id="mobile"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control form-control-sm @error('mobile') is-invalid @enderror"--}}
{{--                                        name="mobile"--}}
{{--                                        value="@if(old('mobile')){{old('mobile')}}@elseif($user->mobile){{$user->mobile}}@endif"--}}
{{--                                        autocomplete="mobile"--}}
{{--                                        autofocus>--}}
{{--                                    @error('mobile')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        national_code--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="national_code"> {{ trans('letter.national_code') }} </label>--}}
{{--                                    <input--}}
{{--                                        id="national_code"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control form-control-sm @error('national_code') is-invalid @enderror"--}}
{{--                                        name="national_code"--}}
{{--                                        value="@if(old('national_code')){{old('national_code')}}@elseif($user->national_code){{$user->national_code}}@endif"--}}
{{--                                        autocomplete="national_code"--}}
{{--                                        autofocus>--}}
{{--                                    @error('national_code')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        slug--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="slug"> {{ trans('letter.slug') }} </label>--}}
{{--                                    <input--}}
{{--                                        id="slug"--}}
{{--                                        type="text"--}}
{{--                                        class="form-control form-control-sm @error('slug') is-invalid @enderror"--}}
{{--                                        name="slug"--}}
{{--                                        value="@if(old('slug')){{old('slug')}}@elseif($user->slug){{$user->slug}}@endif"--}}
{{--                                        autocomplete="slug"--}}
{{--                                        autofocus>--}}
{{--                                    @error('slug')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        password--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="password"> {{ trans('letter.password') }}  </label>--}}
{{--                                    <input--}}
{{--                                        id="password"--}}
{{--                                        type="password"--}}
{{--                                        class="form-control form-control-sm  @error('password') is-invalid @enderror"--}}
{{--                                        name="password"--}}
{{--                                        autocomplete="password"--}}
{{--                                        autofocus>--}}
{{--                                    @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        password_confirmation--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="password_confirmation"> {{ trans('letter.password_confirmation') }}  </label>--}}
{{--                                    <input--}}
{{--                                        id="password_confirmation"--}}
{{--                                        type="password"--}}
{{--                                        class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror"--}}
{{--                                        name="password_confirmation"--}}
{{--                                        autocomplete="password_confirmation"--}}
{{--                                        autofocus>--}}
{{--                                    @error('password_confirmation')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        profile_photo--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="profile_photo"> {{ trans('letter.profile_photo') }}  </label>--}}
{{--                                    <input--}}
{{--                                        id="profile_photo"--}}
{{--                                        type="file"--}}
{{--                                        class="form-control form-control-sm @error('profile_photo') is-invalid @enderror"--}}
{{--                                        name="profile_photo"--}}
{{--                                        autocomplete="profile_photo">--}}
{{--                                    @error('profile_photo')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        activation--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="activation"> {{ trans('letter.activation') }} </label>--}}
{{--                                    <select--}}
{{--                                        name="activation"--}}
{{--                                        id="activation"--}}
{{--                                        class="form-control form-control-sm">--}}
{{--                                        @if( old('activation') )--}}
{{--                                            @if(old('activation') === 0)--}}
{{--                                                <option value="0" selected> {{ trans('letter.inactive') }} </option>--}}
{{--                                                <option value="1" > {{ trans('letter.active') }} </option>--}}
{{--                                            @else--}}
{{--                                                <option value="0" > {{ trans('letter.inactive') }} </option>--}}
{{--                                                <option value="1" selected> {{ trans('letter.active') }} </option>--}}
{{--                                            @endif--}}
{{--                                        @else--}}
{{--                                            @if($user->activation === 0)--}}
{{--                                                <option value="0" selected> {{ trans('letter.inactive') }} </option>--}}
{{--                                                <option value="1" > {{ trans('letter.active') }} </option>--}}
{{--                                            @else--}}
{{--                                                <option value="0" > {{ trans('letter.inactive') }} </option>--}}
{{--                                                <option value="1" selected> {{ trans('letter.active') }} </option>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        user_type--}}
{{--                            <section class="col-12 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="user_type"> {{ trans('letter.user_type') }} </label>--}}
{{--                                    <select--}}
{{--                                        name="user_type"--}}
{{--                                        id="user_type"--}}
{{--                                        class="form-control form-control-sm">--}}
{{--                                        @if( old('user_type') )--}}
{{--                                            @if(old('user_type') === 0)--}}
{{--                                                <option value="0" selected> {{ trans('letter.customer') }} </option>--}}
{{--                                                <option value="1" > {{ trans('letter.admin') }} </option>--}}
{{--                                            @else--}}
{{--                                                <option value="0" > {{ trans('letter.customer') }} </option>--}}
{{--                                                <option value="1" selected> {{ trans('letter.admin') }} </option>--}}
{{--                                            @endif--}}
{{--                                        @else--}}
{{--                                            @if($user->user_type === 0)--}}
{{--                                                <option value="0" selected> {{ trans('letter.customer') }} </option>--}}
{{--                                                <option value="1" > {{ trans('letter.admin') }} </option>--}}
{{--                                            @else--}}
{{--                                                <option value="0" > {{ trans('letter.customer') }} </option>--}}
{{--                                                <option value="1" selected> {{ trans('letter.admin') }} </option>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    </select>--}}

{{--                                    @error('user_type')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </section>--}}

{{--                        submit--}}
{{--                            <section class="col-12">--}}
{{--                                <button class="btn btn-primary btn-sm" onsubmit="edit_edit_form"> {{ trans('letter.submit') }} </button>--}}
{{--                            </section>--}}
{{--                        </section>--}}
{{--                    </form>--}}
                </section>
            </section>
        </section>
    </section>

@endsection
@section('js')
@endsection
