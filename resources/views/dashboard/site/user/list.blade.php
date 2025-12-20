@extends('dashboard.base')
@section('title', 'Committee List | P C F - People Culture Forum')

@section('content')
<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row mb-3">
                    <div class="col-12">
                        <h4>Admin Users List</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Emirate</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->emirate->name ?? "Admin" }} </td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                   <a href="{{ route('admin.users.edit', $user->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('admin.users.reset-password', $user->id) }}"
                                                        method="POST" style="display:inline-block">
                                                        @csrf
                                                        <button class="btn btn-sm btn-warning"
                                                                onclick="return confirm('Reset password for this user?')">
                                                            Reset Password
                                                        </button>
                                                    </form>

                                                    <form action="{{ route('admin.users.delete', $user->id) }}"
                                                        method="POST" style="display:inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this user?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div> <!-- page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © P C F - People Culture Forum
                    </div>
                </div>
            </div>
        </footer>
    </div> <!-- main-content -->
</div> <!-- layout-wrapper -->
@endsection
