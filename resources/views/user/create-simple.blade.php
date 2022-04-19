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

                <section class="form-group">

                <form id="create_user_form" action="{{ route('user.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <section class="row">

                        first_name
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="first_name"> {{trans('letter.first_name') }} <span style="color:#ff0000">*</span></label>
                                <input
                                    id="first_name"
                                    type="text"
                                    class="form-control form-control-sm @error('first_name') is-invalid @enderror"
                                    name="first_name"
                                    value="{{ old('first_name') }}"
                                    autocomplete="first_name"
                                    autofocus
                                    required>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        last_name
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="first_name"> {{ trans('letter.last_name') }} <span style="color:#ff0000">*</span></label>
                                <input
                                    id="last_name"
                                    type="text"
                                    class="form-control form-control-sm @error('last_name') is-invalid @enderror"
                                    name="last_name"
                                    value="{{ old('last_name') }}"
                                    autocomplete="last_name"
                                    autofocus
                                    required>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        email
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="email"> {{ trans('letter.email') }} <span style="color:#ff0000">*</span></label>
                                <input
                                    id="email"
                                    type="text"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    autofocus
                                    required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        mobile
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="mobile"> {{ trans('letter.mobile') }} </label>
                                <input
                                    id="mobile"
                                    type="text"
                                    class="form-control form-control-sm @error('mobile') is-invalid @enderror"
                                    name="mobile"
                                    value="{{ old('mobile') }}"
                                    autocomplete="mobile"
                                    autofocus>
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        national_code
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="national_code"> {{ trans('letter.national_code') }} </label>
                                <input
                                    id="national_code"
                                    type="text"
                                    class="form-control form-control-sm @error('national_code') is-invalid @enderror"
                                    name="national_code"
                                    value="{{ old('national_code') }}"
                                    autocomplete="national_code"
                                    autofocus>
                                @error('national_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        slug
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="slug"> {{ trans('letter.slug') }} </label>
                                <input
                                    id="slug"
                                    type="text"
                                    class="form-control form-control-sm @error('slug') is-invalid @enderror"
                                    name="slug"
                                    value="{{ old('slug') }}"
                                    autocomplete="slug"
                                    autofocus>
                                @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        password
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="password"> {{ trans('letter.password') }}  <span style="color:#ff0000">*</span></label>
                                <input
                                    id="password"
                                    type="password"
                                    class="form-control form-control-sm  @error('password') is-invalid @enderror"
                                    name="password"
                                    value="{{ old('password') }}"
                                    autocomplete="password"
                                    autofocus
                                    required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        password_confirmation
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation"> {{ trans('letter.password_confirmation') }}  <span style="color:#ff0000">*</span></label>
                                <input
                                    id="password_confirmation"
                                    type="password"
                                    class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation"
                                    value="{{ old('password_confirmation') }}"
                                    autocomplete="password_confirmation"
                                    autofocus
                                    required>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        profile_photo
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="profile_photo"> {{ trans('letter.profile_photo') }}  </label>
                                <input
                                    id="profile_photo"
                                    type="file"
                                    class="form-control form-control-sm @error('profile_photo') is-invalid @enderror"
                                    name="profile_photo"
                                    value="{{ old('profile_photo') }}"
                                    autocomplete="profile_photo">
                                @error('profile_photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        activation
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="activation"> {{ trans('letter.activation') }} </label>
                                <select
                                    name="activation"
                                    id="activation"
                                    class="form-control form-control-sm">
                                    <option value="0" @if(old('activation')==0){{'selected'}}@endif> {{ trans('letter.inactive') }} </option>
                                    <option value="1" @if(old('activation')==1){{'selected'}}@endif> {{ trans('letter.active') }} </option>
                                </select>

                                @error('activation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        user_type
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="user_type"> {{ trans('letter.user_type') }} </label>
                                <select
                                    name="user_type"
                                    id="user_type"
                                    class="form-control form-control-sm">
                                    <option value="0" @if(old('user_type')==0){{'selected'}}@endif> {{ trans('letter.customer') }} </option>
                                    <option value="1" @if(old('user_type')==1){{'selected'}}@endif> {{ trans('letter.admin') }} </option>
                                </select>

                                @error('user_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </section>

                        submit
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm" onsubmit="create_user_form"> {{ trans('letter.submit') }} </button>
                            <input type="submit" class="btn btn-primary btn-sm" value="Submit">
                        </section>

                    </section>
                </form>

                </section>

            </section>
        </section>
    </section>

@endsection
@section('js')
@endsection
