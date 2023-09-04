@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('page-script')
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
@endsection
<style>
    .hide {
        display: none;
    }

    #valid-msg {
        color: #00c900;
    }
</style>
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">

                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">@include('_partials.macros', ['width' => 25, 'withbg' => '#696cff'])</span>
                                <span
                                    class="app-brand-text demo text-body fw-bolder">{{ config('variables.templateName') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Your success will also depend on it</h4>
                        <p class="mb-4">your safety and that of your customers are very important to us!</p>
                        <form action="{{ route('auth-register-basic-create-step-two-post') }}" method="POST"
                            id="form">
                            @csrf

                            <div class="card">
                                @if ($errors->any())
                                    {!! implode('', $errors->all('<div class="text-red">:message</div>')) !!}
                                @endif
                                <div class="card-header">Step 2: Account Information</div>

                                <div class="card-body">



                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            id="username" name="username" value="{{ old('username') }}"
                                            placeholder="Enter your username" autofocus>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}"
                                            placeholder="Enter your email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="userPhoneNumber" class="form-label">Personnal Phone Number</label>
                                        <input type="tel"
                                            class="form-control @error('userPhoneNumber') is-invalid @enderror"
                                            id="userPhoneNumber" name="userPhoneNumber" value="{{ old('userPhoneNumber') }}"
                                            placeholder="Enter your Personnal number" autofocus>
                                        <span id="valid-msg" class="hide">✓ Valid</span>
                                        <span id="error-msg" class="hide"></span>
                                        <p id="messageIsocode"></p>
                                        @error('userPhoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label " for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                value="{{ old('password') }}"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="password">Confirmation Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password_confirmation" value="{{ old('password_confirmation') }}"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <a href="{{ route('auth-register-basic') }}"
                                                class="btn btn-danger pull-right">Previous</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                const countryData = window.intlTelInputGlobals.getCountryData();
                const input = document.querySelector("#userPhoneNumber");
                const errorMsg = document.querySelector("#error-msg");
                const validMsg = document.querySelector("#valid-msg");
                const form = document.querySelector("#form");
                const message = document.querySelector("#messageIsocode");
                // here, the index maps to the error code returned from getValidationError - see readme
                const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
                const ip = callback => {
                    fetch("https://ipapi.co/json")
                        .then(res => res.json())
                        .then(data => callback(data.country_code))
                        .catch(() => callback("us"));
                }
                // init plugin
                const iti = window.intlTelInput(input, {
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
                    initialCountry: "cm",
                    autoInsertDialCode: true,
                    autoPlaceholder: "polite",
                    geoIpLookup: ip,
                    separateDialCode: true,
                    hiddenInput: "full_phone",
                    preferredCountries: ["cm", "us", "ru", "co", "in", "ch", "ko", "ma", "ng"],

                });

                const reset = () => {
                    input.classList.remove("error");
                    errorMsg.innerHTML = "";
                    errorMsg.classList.add("hide");
                    validMsg.classList.add("hide");
                };

                input.addEventListener('blur', () => {
                    reset();
                    if (input.value.trim()) {
                        if (iti.isValidNumber()) {
                            validMsg.classList.remove("hide");
                        } else {
                            input.classList.add("error");
                            const errorCode = iti.getValidationError();
                            errorMsg.innerHTML = errorMap[errorCode];
                            errorMsg.classList.remove("hide");
                        }
                    }
                });

                // on keyup / change flag: reset
                input.addEventListener('change', reset);
                input.addEventListener('keyup', reset);
            </script>
        @endsection
