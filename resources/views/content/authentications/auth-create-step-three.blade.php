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
                        <h4 class="mb-2">Adventure starts here 🚀with your Business</h4>
                        <p class="mb-4">Your business will reach its potential through the use of the best tools!!</p>
                        <form action="{{ route('auth-register-basic-create-step-three-post') }}" method="POST" id="form">
                            @csrf

                            <div class="card">
                                <div class="card-header">Step 3: Business Information</div>
                                @if ($errors->any())
                                    {!! implode('', $errors->all('<div class="text-red">:message</div>')) !!}
                                @endif

                                <div class="card-body">


                                    <div class="mb-3">
                                        <label for="campanyActivity" class="form-label">Campany Activity</label>
                                        <input type="text"
                                            class="form-control @error('campanyActivity') is-invalid @enderror"
                                            id="campanyActivity" name="campanyActivity" value="{{ old('campanyActivity') }}"
                                            placeholder="Enter your Company Activity" autofocus>
                                        @error('campanyActivity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="companyName" class="form-label">Company Name</label>
                                        <input type="text"
                                            class="form-control @error('companyName') is-invalid @enderror" id="companyName"
                                            name="companyName" value="{{ old('companyName') }}"
                                            placeholder="Enter your Business Name" autofocus>
                                        @error('companyName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="companyUrl" class="form-label">Site Web URL</label>
                                        <input type="text" class="form-control @error('companyUrl') is-invalid @enderror"
                                            id="companyUrl" name="companyUrl" value="{{ old('companyUrl') }}"
                                            placeholder="Enter your business site web url" autofocus>
                                        @error('companyUrl')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="professionalCode" class="form-label">Profesionnal Email</label>
                                        <input type="text"
                                            class="form-control @error('professionalCode') is-invalid @enderror"
                                            id="professionalCode" name="professionalCode"
                                            value="{{ old('professionalCode') }}" placeholder="Enter your Business Email"
                                            autofocus>
                                        @error('professionalCode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="businessPhoneNumber" class="form-label">Business Phone Number</label>
                                        <input type="tel"
                                            class="form-control @error('businessPhoneNumber') is-invalid @enderror"
                                            id="businessPhoneNumber" name="businessPhoneNumber"
                                            value="{{ old('businessPhoneNumber') }}"
                                            placeholder="Enter your Business number" autofocus>
                                            <span id="valid-msg" class="hide">✓ Valid</span>
                                            <span id="error-msg" class="hide"></span>
                                            <p id="message"></p>

                                        @error('businessPhoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="postalCode" class="form-label">Postal Code</label>
                                        <input type="text" class="form-control @error('postalCode') is-invalid @enderror"
                                            id="postalCode" name="postalCode" value="{{ old('postalCode') }}"
                                            placeholder="Enter your Business Postal code" autofocus>
                                        @error('postalCode')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-select" id="country" name="country">

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            id="address" name="address" value="{{ old('address') }}"
                                            placeholder="Enter your Business address" autofocus>
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="picture" class="form-label">User Picture</label>
                                        <input type="text" class="form-control @error('picture') is-invalid @enderror"
                                            id="picture" name="picture" value="{{ old('picture') }}" placeholder=""
                                            autofocus>
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
                                            <a href="{{ route('auth-register-basic-create-step-one') }}"
                                                class="btn btn-danger pull-right">Previous</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                      <br/>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="terms-conditions"
                                                    name="terms">
                                                <label class="form-check-label" for="terms-conditions">
                                                    I agree to
                                                    <a href="javascript:void(0);">privacy policy & terms</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ url('auth/login-basic') }}">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
<script>
// get the country data from the plugin
const countryData = window.intlTelInputGlobals.getCountryData();
const input = document.querySelector("#businessPhoneNumber");
const addressDropdown = document.querySelector("#country");
const errorMsg = document.querySelector("#error-msg");
const validMsg = document.querySelector("#valid-msg");
const message = document.querySelector("#message");
// here, the index maps to the error code returned from getValidationError - see readme
const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
const ip =callback => {
    fetch("https://ipapi.co/json")
      .then(res => res.json())
      .then(data => callback(data.country_code))
      .catch(() => callback("us"));
  }
// init plugin
const iti = window.intlTelInput(input, {
  utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
  initialCountry:"cm",
  autoInsertDialCode:true,
  autoPlaceholder:"polite",
  geoIpLookup:ip,
  separateDialCode:true,
  hiddenInput: "full_phone",
  preferredCountries: ["cm","ru","us", "co", "in", "de"],

});

const reset = () => {
	input.classList.remove("error");
	errorMsg.innerHTML = "";
	errorMsg.classList.add("hide");
	validMsg.classList.add("hide");
};

// populate the country dropdown
for (let i = 0; i < countryData.length; i++) {
  const country = countryData[i];
  const optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  const textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
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
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', () => {
  addressDropdown.value = iti.getSelectedCountryData().iso2;
});

// listen to the address dropdown for changes
addressDropdown.addEventListener('change', () => {
  iti.setCountry(this.value);
});

</script>
@endsection
