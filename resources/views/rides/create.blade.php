@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4 class="font-weight-bold">{{ __('Create Ride') }}</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('rides.store') }}">
            @csrf
            <div class="form-group">
              <label for="source">{{ __('Source') }}</label>
              <input id="source" type="text" class="form-control @error('source') is-invalid @enderror" name="source" value="{{ old('source') }}" required autocomplete="source" autofocus>
              @error('source')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="destination">{{ __('Destination') }}</label>
              <input id="destination" type="text" class="form-control @error('destination') is-invalid @enderror" name="destination" value="{{ old('destination') }}" required autocomplete="destination" autofocus>
              @error('destination')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="departure_time">{{ __('Departure Time') }}</label>
              <input id="departure_time" type="datetime-local" class="form-control @error('departure_time') is-invalid @enderror" name="departure_time" value="{{ old('departure_time') }}" required autocomplete="departure_time">
              @error('departure_time')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="number_of_seats">{{ __('Number of Seats') }}</label>
              <input id="number_of_seats" type="number" class="form-control @error('number_of_seats') is-invalid @enderror" name="number_of_seats" value="{{ old('number_of_seats') }}" required autocomplete="number_of_seats">
              @error('number_of_seats')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">{{ __('Create Ride') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    body {
        background-color: #f8f9fa;
    }
    
    .card {
        margin-top: 50px;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,.2);
    }
    
    .card-header {
        background-color: #343c44;
        color: #fff;
        font-size: 2.5rem;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }
    
    .card-body {
        padding: 30px;
    }
    
    .form-group label {
        font-size: 1.2rem;
        font-weight: bold;
    }
    
    .form-control {
        border-radius: 0;
    }
    
    .btn-primary {
        background-color: #4f5861;
        border-color: #161718;
        border-radius: 0;
        width: 100%;
    }
    
    .btn-primary:hover {
        background-color: #f56767;
        border-color: #393d42;
    }
    
    @media (min-width: 768px) {
        .card {
            width: 50%;
            margin: 100px auto;
        }
    }
    
    @media (max-width: 767px) {
        .card {
            width: 100%;
            margin: 50px auto;
        }
    }
</style>
@endsection