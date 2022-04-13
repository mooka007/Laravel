@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row shadow p-3 mb-5  bg-white rounded  justify-content-center">
        <div class="col-md-sm-6">
            <div class=" card border border-white">
                {{-- <div class="card-header bg-white">{{ __('Register') }}</div> --}}
                <div class="" id="check_Signup"></div>
               <div class="row">
                    <div class="card-body  mt-5  col-md-6">
                        <form method="POST" id="form" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}"  required autocomplete="name" autofocus>
                                    <div class="fs-6 text-danger errorName"></div>
                                    {{-- class="@error('name') is-invalid @enderror" --}}
                                    {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <div class="fs-6 text-danger errorEmail"></div>
                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                                    <div class="fs-6 text-danger errorPassword"></div>
                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <div class="fs-6 text-danger errorConfPassword"></div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body col-md-6 mt-2">
                        <img src="{{asset('/assets/gest.png')}}" style="width: 350px"/>
                    </div>
               </div>
                

            </div>
        </div>
    </div>
</div>

@endsection
