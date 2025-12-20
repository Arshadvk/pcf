@extends('dashboard.base')
@section('title', 'Committee List | P C F - People Culture Forum')

@section('content')
<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row mb-3">
                    <div class="col-12">
                        <h4>PDP Leaders List</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($committees as $committee)
                                            <tr>
                                                <td>{{ $committee->id }}</td>
                                                <td>{{ $committee->name }}</td>
                                                <td>{{ $committee->position1->name }}</td>
                                                <td>
                                                    @if($committee->image)
                                                        <img src="{{ $committee->image }}" alt="Image" style="height: 100px;">
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (!$user->emirate)
                                                        <a href="{{ url('/edit-leader/' . $committee->id) }}" class="btn btn-info">
                                                            Edit
                                                        </a>
                                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $committee->id }}">
                                                            Delete
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>

                                            <!-- Delete Confirmation Modal -->
                                            <div class="modal fade" id="deleteModal-{{ $committee->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $committee->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel-{{ $committee->id }}">Confirm Deletion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this committee member?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('delete.committee', $committee->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Confirm</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

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
