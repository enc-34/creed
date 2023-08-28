@extends('layouts/contentNavbarLayout')

@section('title', 'Campagne statistic - Pages')

@section('content')
<div class="card-footer text-right">
     <a class="dropdown-item" href="{{ route('pages-campagne-template-two') }}">
      <button type="submit" class="btn btn-primary">Next</button>
</a>
</div>
@endsection