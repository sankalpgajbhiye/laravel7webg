@extends('layouts.admintemplate')

@section('title') List @endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users List</h3>
                        <a href="{{ route('add-user') }}" class="float-right">
                            <button class="btn btn-success btn-sm ml-2">Add</button>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Role</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allUsers as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->role->role_name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit-user', $user->id) }}">
                                        <button type="button" class="btn btn-outline-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Role</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
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