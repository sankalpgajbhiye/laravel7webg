@extends('layouts.dash')

@section('title') Add @endsection

@section('content')
<div class="container">
      <div class="row">
      <a href="{{ url('/city') }}">Back</a>
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
          <div class="col-12">
                <form action="{{ route('store-city') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="cityId" class="form-label">City</label>
                        <input type="text" name="city_name" value="{{ old('city_name') }}" class="form-control" id="cityId" aria-describedby="emailHelp">
						@error('city_name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <div class="mb-3">
                        <label for="stateId" class="form-label">State</label>
                        <input type="text" name="state_name" value="{{ old('state_name') }}" class="form-control" id="stateId">
						@error('state_name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <div class="mb-3">
                        <label for="countryId" class="form-label">Country</label>
                        <input type="text" name="country_name" value="{{ old('country_name') }}" class="form-control" id="countryId">
						@error('country_name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
      </div>
  </div>
@endsection