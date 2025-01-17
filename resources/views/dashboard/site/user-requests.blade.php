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
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<style>
    .membership-edit {
        width: 100px;
        padding: 5px;
        font-size: 14px;
    }
</style>

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
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Expiry</th>
                                            <th>View</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($members as $member)
                                            <tr>
                                                @if ($user->type === 'super')
                                                    <td>
                                                        <span class="membership-number" id="display-{{ $member->id }}"
                                                            onclick="editMembershipNumber({{ $member->id }})">
                                                            {{ $member->membership_number }}
                                                        </span>
                                                        <input type="text" id="edit-{{ $member->id }}"
                                                            class="membership-edit"
                                                            value="{{ $member->membership_number }}"
                                                            style="display: none;"
                                                            onblur="saveMembershipNumber({{ $member->id }})">
                                                    </td>
                                                @else
                                                    <td>
                                                        {{ $member->membership_number }}
                                                    </td>
                                                @endif

                                                <td> {{ $member->name }}</td>

                                                <td>
                                                    <div>
                                                        @if ($member->status === 'pending' && $user->type === 'admin')
                                                            <div class="dropdown">
                                                                <!-- Dropdown Button -->
                                                                <a class="btn btn-warning waves-effect waves-light dropdown-toggle"
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#confirmModal">
                                                                    Verified
                                                                </a>
                                                            </div>
                                                            <div class="modal fade" id="confirmModal" tabindex="-1"
                                                                aria-labelledby="confirmModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="confirmModalLabel">Confirm Action
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <!-- Modal Body -->
                                                                        <div class="modal-body">
                                                                            Are you sure you want to update the status
                                                                            to "Verified"?
                                                                        </div>
                                                                        <!-- Modal Footer -->
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Cancel</button>
                                                                            <a href="{{ route('update_status', ['id' => $member->id, 'status' => 'verified']) }}"
                                                                                class="btn btn-warning">Confirm</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @elseif ($member->status === 'verified' && $user->type === 'super')
                                                            <!-- Dropdowns for Verify and Reject -->

                                                            <div style="display: flex;">
                                                                <div class="dropdown">
                                                                    <!-- Verify Dropdown -->
                                                                    <button
                                                                        class="btn btn-success waves-effect waves-light dropdown-toggle m-2"
                                                                        type="button" id="dropdownVerifyButton"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <a class="dropdown-item verify-confirm"
                                                                            href="#"
                                                                            data-href="{{ route('update_status', ['id' => $member->id, 'status' => 'approved']) }}">
                                                                            Approved
                                                                        </a>
                                                                    </button>
                                                                </div>

                                                                <div class="dropdown">
                                                                    <!-- Reject Dropdown -->
                                                                    <button
                                                                        class="btn btn-danger waves-effect waves-light dropdown-toggle m-2"
                                                                        type="button" id="dropdownRejectButton"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#rejectModal">
                                                                        Reject
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @elseif ($member->status === 'verified' && $user->type === 'admin')
                                                            Waiting For Approvel
                                                        @else
                                                            <b style="color: red">
                                                                rejected: {{ $member->status }}
                                                            </b>
                                                        @endif


                                                </td>
                                                @if ($member->status === 'pending' && $user->type === 'admin')
                                                <td>
                                                    <form action="{{ route('update_membership_type', ['id' => $member->id]) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="membership_type" class="form-control" onchange="this.form.submit()">
                                                            <option value="active" {{ $member->membership_type === 'active' ? 'selected' : '' }}>Active</option>
                                                            <option value="primary" {{ $member->membership_type === 'primary' ? 'selected' : '' }}>Primary</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                @else
                                                    <td> {{ $member->membership_type }}</td>
                                                @endif

                                                <td>{{ $member->expiry }}</td>
                                                <td>
                                                    <button class="btn btn-primary waves-effect waves-light me-1">
                                                        <a class="text-white"
                                                            href="{{ route('edit.user', $member->id) }}">view</a>
                                                    </button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="rejectModal" tabindex="-1"
                                                aria-labelledby="rejectModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form
                                                        action="{{ route('update_status', ['id' => $member->id, 'status' => 'rejected']) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="rejectModalLabel">Reason
                                                                    for
                                                                    Rejection</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="reason"
                                                                        class="form-label">Reason</label>
                                                                    <textarea class="form-control" id="reason" name="reason" rows="4" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Submit</button>
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
                        </script> © P C F - People Culture Forum
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

    function editMembershipNumber(id) {
        const displayElement = document.getElementById(`display-${id}`);
        const editElement = document.getElementById(`edit-${id}`);

        displayElement.style.display = 'none';
        editElement.style.display = 'inline-block';
        editElement.focus();
    }

    function saveMembershipNumber(id) {
        const displayElement = document.getElementById(`display-${id}`);
        const editElement = document.getElementById(`edit-${id}`);
        const newValue = editElement.value;

        // Send AJAX request to update the membership number
        fetch(`/update-membership-number/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    membership_number: newValue
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    displayElement.textContent = newValue;
                } else {
                    alert('Failed to update membership number');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            })
            .finally(() => {
                editElement.style.display = 'none';
                displayElement.style.display = 'inline';
            });
    }
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
