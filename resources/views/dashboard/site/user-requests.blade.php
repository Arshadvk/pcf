<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>PEOPLES CULTURAL FORUM - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta name="robots" content="noindex, nofollow">
    <meta content="Arshad" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>



<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    @include('dashboard.layouts._header')


    @include('dashboard.layouts._sidebar')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">User Requests</h4>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Expiry</th>
                                            <th>View</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($members as $member)
                                            <tr>
                                                <td>{{ $member->id }}</td>
                                                <td>
                                                    <img src="{{ $member->image }}" class="img-thumbnail"
                                                        style="width:60px;" alt="Blog">
                                                    <br>
                                                    {{ $member->name }}
                                                </td>
                                                <td>{{ $member->email }}</td>

                                                <td>
                                                    @if ($member->status === 'pending' && $user->type === 'admin')
                                                        <div class="dropdown">
                                                            <!-- Dropdown Button -->
                                             
                                                                <a class="btn btn-warning waves-effect waves-light dropdown-toggle"
                                                                    href="{{ route('update_status', ['id' => $member->id, 'status' => 'approved']) }}">Approve</a>
                                                       

                                                        </div>
                                                    @elseif ($member->status === 'approved' && $user->type === 'super')
                                                        <!-- Dropdowns for Verify and Reject -->
                                                        <div class="dropdown">
                                                            <!-- Verify Dropdown -->
                                                            <button
                                                                class="btn btn-success waves-effect waves-light dropdown-toggle m-2"
                                                                type="button" id="dropdownVerifyButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <a class="dropdown-item verify-confirm" href="#"
                                                                    data-href="{{ route('update_status', ['id' => $member->id, 'status' => 'verified']) }}">
                                                                    Verified
                                                                </a>
                                                            </button>
                                                        </div>

                                                        <div class="dropdown">
                                                            <!-- Reject Dropdown -->
                                                            <button
                                                                class="btn btn-danger waves-effect waves-light dropdown-toggle m-2"
                                                                type="button" id="dropdownRejectButton"
                                                                data-bs-toggle="modal" data-bs-target="#rejectModal">
                                                                Reject
                                                            </button>
                                                        </div>
                                                    @else
                                                        {{ $member->status }}
                                                    @endif

                                                </td>
                                                <td>{{ $member->expiry }}</td>
                                                <td>
                                                    <button class="btn btn-primary waves-effect waves-light me-1">
                                                        <a class="text-white"
                                                            href="{{ route('edit.user', $member->id) }}">view</a>
                                                    </button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{ route('update_status', ['id' => $member->id, 'status' => 'rejected']) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="rejectModalLabel">Reason for Rejection</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="reason" class="form-label">Reason</label>
                                                                    <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
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
<!-- END layout-wrapper -->

<!-- Reject Modal -->


<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // SweetAlert for Verify
        document.querySelectorAll('.verify-confirm').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                const url = event.target.getAttribute('data-href');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Do you want to verify this member?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Verify!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                });
            });
        });
    });
</script>

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

<script src="assets/js/app.js"></script>
