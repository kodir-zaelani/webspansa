@extends('layouts.appb')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">{{$title}}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('backend.dashboard') }}">
                                <i class="fa fa-home"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('backend.users.index') }}">Users</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit a user</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12 col-12">
            <div class="box box-bordered border-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">@yield('title')</h4>
                </div>
                <div class="box-body">
                    <form id="post-form" enctype="multipart/form-data"
                    action="{{ route('backend.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">{{ __('Full Name')}} </label> <br/>
                                <label for="name">{{ $user->name }} </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">{{ __('Email') }} </label><br/>
                                <label for="email">{{ $user->email }} </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">{{ __('Username') }} </label><br/>
                                <label for="username">
                                    {{ $user->username ?? 'No Username' }}
                                    {{-- {{ $user->username }} --}}
                                 </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="celuller_no">{{ __('Whatapps') }}</label><br/>
                                <label for="celuller_no">
                                    {{-- {{ $user->celuller_no }}  --}}
                                    {{ $user->celuller_no ?? 'No Whatapps' }}
                                </label>
                            </div>
                        </div>


                        <div class="col-md-12">
                            @if ($user->masterstatus == config('cms.default_masteruser'))
                            <div class="form-group">
                                <label class="form-label">Status : {!! $user->statustext !!}</label>
                                <input type="text" name="status" value="1" hidden>
                            </div>
                            @else
                            <div class="form-group">
                                <label class="form-label">Status :</label>
                                <div class="demo-radio-button">
                                    <input {{ $user->status == 1 ? 'checked' : '' }} value="1" name="status"
                                    type="radio" id="radio_30" class="with-gap radio-col-success"
                                    checked />
                                    <label for="radio_30">Active</label>
                                    <input {{ $user->status == 0 ? 'checked' : '' }} value="0" name="status"
                                    type="radio" id="radio_32" class="with-gap radio-col-success" />
                                    <label for="radio_32">Inactive</label>
                                </div>
                            </div>
                            @endif
                        </div>
                         {{-- <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Reset Password :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="rolesetpassword" id="resetpassword" value="1">
                                        <label class="form-check-label" for="resetpassword">
                                        Reset
                                        </label>
                                    </div>
                            </div>
                        </div> --}}
                        <div class="col-md-12">
                            @if ($user->masterstatus == config('cms.default_masteruser'))
                            <div class="form-group">
                                <label class="form-label">Role : <span class="fw-bold">Superadmin</span></label>
                                @foreach ($roles as $role)
                                <input class="form-check-input" type="checkbox" name="roles[]"
                                value="{{ $role->name }}" id="check-{{ $role->id }}"
                                {{ $user->roles->contains($role->id) ? 'checked' : '' }} hidden>
                                @endforeach
                            </div>
                            @else
                            <div class="form-group">
                                <label class="font-weight-bold">{{ __('ROLE') }} : <span
                                    class="text-danger">*</span></label><br />

                                    @foreach ($roles as $role)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                        value="{{ $role->name }}" id="check-{{ $role->id }}"
                                        {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="check-{{ $role->id }}">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>


                            @if ($user->masterstatus == config('cms.default_masteruser'))
                            <div class="form-group">
                                <label for="current_password_for_password">{{ __('Current Password')}} <span
                                    class="text-danger">*</span></label>
                                    <input name="current_password_for_password" type="password"
                                    class="form-control @error('current_password_for_password') is-invalid @enderror"
                                    placeholder="Current Password" />
                                    <span class="form-text text-muted">{{ __('Your Password') }} <code>{{ __('in system') }}</code></span>
                                    @error('current_password_for_password')
                                    <div class="form-control-feedback"><small> <code>{{ $message }}</code>
                                    </small></div>
                                    @enderror
                                </div>
                                @endif
                                <div class="col-md-12">
                                    <a href="{{ route('backend.users.index') }}" class="btn btn-warning me-2">
                                        {{ __('Cancel') }}
                                    </a>
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
