@extends('dashboard.base')
@section('title')
    Add Menu | P C F - People Culture Forum
@endsection

@section('content')

<div id="layout-wrapper">

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">News List</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Date Added</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($news as $news)
                                            <tr>
                                                <td>{{ $news->id }}</td>
                                                <td><img src="{{ $news->image }}" class="img-thumbnail"
                                                        style="width:60px;" alt="news"></td>
                                                <td>{{ $news->created_at->format('F j Y') }}</td>
                                                <td>
                                                     @if (!$user->emirate)
                                                        <button class="btn btn-danger waves-effect waves-light me-1"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal-{{ $news->id }}">
                                                            <a class="text-white">delete</a>
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="deleteModal-{{ $news->id }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel-{{ $news->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel-{{ $news->id }}">Confirm
                                                                Deletion</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this news?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <a class="btn btn-danger"
                                                                href="{{ route('delete.news', $news->id) }}">Confirm</a>
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
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © P C F -  People Culture Forum
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
</div>

@endsection
