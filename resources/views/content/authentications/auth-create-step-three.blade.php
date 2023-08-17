@extends('layouts/blankLayout')

@section('title', 'Register Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])</span>
              <span class="app-brand-text demo text-body fw-bolder">{{config('variables.templateName')}}</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Adventure starts here 🚀</h4>
          <p class="mb-4">Make your app management easy and fun!</p>
          <form action="{{ route('auth-register-basic-create-step-three-post') }}" method="POST">
                @csrf
                
                <div class="card">
                    <div class="card-header">Step 3: company</div>
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-red">:message</div>')) !!}
                    @endif
  
                    <div class="card-body">
  
                           
                        <div class="mb-3">
                            <label for="campanyActivity" class="form-label">Campany Activity</label>
                            <input type="text" class="form-control @error('campanyActivity') is-invalid @enderror" id="campanyActivity" name="campanyActivity" value="{{ old('campanyActivity') }}" placeholder="Enter your Company Activity" autofocus >
                            @error('campanyActivity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control @error('companyName') is-invalid @enderror" id="companyName" name="companyName" value="{{ old('companyName') }}" placeholder="Enter your Business Name" autofocus >
                            @error('companyName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="companyUrl" class="form-label">Site Web URL</label>
                            <input type="text" class="form-control @error('companyUrl') is-invalid @enderror" id="companyUrl" name="companyUrl" value="{{ old('companyUrl') }}" placeholder="Enter your business site web url" autofocus >
                            @error('companyUrl')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="professionalCode" class="form-label">Profesionnal Email</label>
                            <input type="text" class="form-control @error('professionalCode') is-invalid @enderror" id="professionalCode" name="professionalCode" value="{{ old('professionalCode') }}" placeholder="Enter your Business Email" autofocus >
                            @error('professionalCode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="businessPhoneNumber" class="form-label">Business Phone Number</label>
                            <input type="text" class="form-control @error('businessPhoneNumber') is-invalid @enderror" id="businessPhoneNumber" name="businessPhoneNumber" value="{{ old('businessPhoneNumber') }}" placeholder="Enter your Business number" autofocus >
                            @error('businessPhoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                          <div class="mb-3">
                              <label for="postalCode" class="form-label">Postal Code</label>
                              <input type="text" class="form-control @error('postalCode') is-invalid @enderror" id="postalCode" name="postalCode" value="{{ old('postalCode') }}" placeholder="Enter your Business Postal code" autofocus >
                              @error('postalCode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div> 
                            <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}" placeholder="Enter your Business Country" autofocus >
                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="Enter your Business address" autofocus >
                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>          
                            <div class="mb-3">
                                <label for="picture" class="form-label">User Picture</label>
                                <input type="text" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" value="{{ old('picture') }}" placeholder="" autofocus>
                                @error('picture')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>       
  
                        </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('auth-register-basic-create-step-one') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                  I agree to
                  <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
              </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
              Sign up
            </button>
                           
                        </div>
                    </div>
                </div>
            </form>
            <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{url('auth/login-basic')}}">
              <span>Sign in instead</span>
            </a>
          </p>
        </div>
    </div>
</div>
<script>
   const phoneInputField = document.querySelector("#businessPhoneNumber");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
@endsection