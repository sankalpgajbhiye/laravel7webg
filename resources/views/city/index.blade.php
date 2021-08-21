@extends('layouts.dash')
<!-- @dump($allCities) -->
@section('title') List @endsection

@section('content')
    <a href="{{ route('add-city') }}">
        <button class="btn btn-success btn-sm">Add City</button>
    </a>
    <a href="{{ route('home') }}">
        <button class="btn btn-warning btn-sm">Back</button>
    </a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Country</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allCities as $key => $city)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $city->city_name }}</td>
                <td>{{ $city->state_name }}</td>
                <td>{{ $city->country_name }}</td>
                <td>{{ $city->created_at }}</td>
                <td>
                    <form
                        onsubmit="return confirm('Are you sure to delete ?');"
                        action="{{ route('delete-city', $city->id) }}"
                        method="POST"
                    >
                        @csrf
                        @method('DELETE')

                        <a href="{{ route('edit-city', $city->id) }}">
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        </a>

                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection