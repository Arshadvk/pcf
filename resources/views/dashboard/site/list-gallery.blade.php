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
                            <h4 class="mb-sm-0">gallery List</h4>



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
                                            <th>Image</th>
                                            <th>Date Added</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $gallery->id }}</td>
                                                <td>{{ $gallery->title }}</td>
                                                <td><img src="{{ $gallery->image }}" class="img-thumbnail"
                                                        style="width:60px;" alt="gallery"></td>
                                                 <td>{{ $gallery->created_at->format('F j Y') }}</td>
                                                <td>
                                                     <button class="btn btn-primary waves-effect waves-light me-1">
                                                        <a class="text-white" href="{{ route('edit-gallery', $gallery->id) }}">view</a>
                                                     </button>
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
