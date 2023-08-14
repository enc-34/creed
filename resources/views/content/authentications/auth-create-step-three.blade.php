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
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                        <div class="mb-3">
                            <label for="campanyActivity" class="form-label">Campany Activity</label>
                            <input type="text" class="form-control" id="campanyActivity" name="campanyActivity" placeholder="Enter your Company Activity" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter your Business Name" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="companyUrl" class="form-label">Site Web URL</label>
                            <input type="text" class="form-control" id="companyUrl" name="companyUrl" placeholder="Enter your business site web url" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="professionalCode" class="form-label">Profesionnal Email</label>
                            <input type="text" class="form-control" id="professionalCode" name="professionalCode" placeholder="Enter your Business Email" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="businessPhoneNumber" class="form-label">Business Phone Number</label>
                            <input type="text" class="form-control" id="businessPhoneNumber" name="businessPhoneNumber" placeholder="Enter your Business number" autofocus>
                        </div>
                          <div class="mb-3">
                              <label for="postalCode" class="form-label">Postal Code</label>
                              <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Enter your Business Postal code" autofocus>
                            </div> 
                            <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="username" name="country" placeholder="Enter your Business Country" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Business address" autofocus>
                        </div>          
                            <div class="mb-3">
                                <label for="picture" class="form-label">User Picture</label>
                                <input type="text" class="form-control" id="picture" name="picture" placeholder="" autofocus>
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
@endsection