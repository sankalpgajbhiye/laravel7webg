@extends('layouts.admintemplate')

@section('title') List @endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Add</h3>
                        <a href="{{ route('user') }}">
                            <button class="btn btn-default btn-sm ml-2">Back</button>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('store-user') }}" method="POST">
                    @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputFirstName">First Name</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" id="exampleInputFirstName" placeholder="Enter first name">
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputLastName">Last Name</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" id="exampleInputLastName" placeholder="Enter last name">
                                        @error('last_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputMobileNo">Mobile Number</label>
                                        <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" id="exampleInputMobileNo" placeholder="Enter mobile number">
                                        @error('mobile')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select name="role_id" class="form-control">
                                            <option>Please select role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" @if($role->id == old('role_id')) selected @endif>{{ $role->role_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option>Please select gender</option>
                                            @foreach ($genderArr as $key => $gender)
                                                <option value="{{ $key }}" @if($key == old('gender')) selected @endif>{{ $gender }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" >Is Active</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection