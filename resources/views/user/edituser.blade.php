@extends('layouts.admintemplate')

@section('title') Edit User @endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Edit</h3>
                        <a href="{{ route('user') }}" class="float-right">
                            <button class="btn btn-default btn-sm ml-2">Back</button>
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('store-user') }}" method="POST">
                        @csrf
                        @include('user.userform')
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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