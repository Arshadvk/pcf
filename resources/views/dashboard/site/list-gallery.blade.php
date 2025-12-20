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
                                <h4 class="mb-sm-0">Gallery List</h4>



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
                                                <th>Title</th>
                                                <th>Emirates</th>
                                                <th>Image</th>
                                                <th>Url</th>
                                                <th>Date Added</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($galleries as $gallery)
                                                <tr>
                                                    <td>{{ $gallery->id }}</td>
                                                    <td class="text-break" style="max-width:150px;">{{ $gallery->title }}</td>
                                                    <td>{{ $gallery->emirate && $gallery->emirate->name ? $gallery->emirate->name : 'General' }}</td>
                                                    <td><img src="{{ $gallery->image }}" class="img-thumbnail"
                                                            style="height: 150px" alt="gallery"></td>
                                                    <td class="text-break" style="max-width:150px;">{{ $gallery->url?? "-" }}</td>
                                                    <td>{{ $gallery->created_at->format('F j Y') }}</td>
                                                    <td>


                                                        @if (!$user->emirate)
                                                            <button class="btn btn-danger waves-effect waves-light me-1"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal-{{ $gallery->id }}">
                                                                <a class="text-white">delete</a>
                                                            </button>
                                                        @endif
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="deleteModal-{{ $gallery->id }}" tabindex="-1"
                                                    aria-labelledby="deleteModalLabel-{{ $gallery->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="deleteModalLabel-{{ $gallery->id }}">Confirm
                                                                    Deletion</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this gallery?
                                                            </div>
                                                            
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <form action="{{ route('delete.gallery', $gallery->id) }}"
                                                                    method="POST" style="display:inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Confirm</button>
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
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © P C F - People Culture Forum
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->
    </div>
@endsection
