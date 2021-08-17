<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>City Add</title>
  </head>
  <body>

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
                <form action="{{ route('update-city', [ 'id' => $city->id ]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="cityId" class="form-label">City</label>
                        <input type="text" name="city_name" value="{{ old('city_name', $city->city_name) }}" class="form-control" id="cityId" aria-describedby="emailHelp">
						@error('city_name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <div class="mb-3">
                        <label for="stateId" class="form-label">State</label>
                        <input type="text" name="state_name" value="{{ old('state_name', $city->state_name) }}" class="form-control" id="stateId">
						@error('state_name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <div class="mb-3">
                        <label for="countryId" class="form-label">Country</label>
                        <input type="text" name="country_name" value="{{ old('country_name', $city->country_name) }}" class="form-control" id="countryId">
						@error('country_name')
							<small class="text-danger">{{ $message }}</small>
						@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
      </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>