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
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<style>
    .text-warning {
        color: #FFA500;
        /* Orange color for expiry in the next month */
    }
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
                            <h4 class="mb-sm-0">User List</h4>
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
                                            <th>Gender</th>
                                            <th>Type</th>
                                            <th>Expiry</th>
                                            <th>View</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($users as $member )
                                            <tr>
                                                @if (!$user->emirate)
                                                <td>
                                                    <span class="membership-number" id="display-{{ $member->id }}"
                                                        onclick="editMembershipNumber({{ $member->id }})">
                                                        {{ $member->membership_number }}
                                                    </span>
                                                    <input type="text" id="edit-{{ $member->id }}"
                                                        class="membership-edit" value="{{ $member->membership_number }}"
                                                        style="display: none;"
                                                        onblur="saveMembershipNumber({{ $member->id }})">
                                                </td>
                                                @else
                                                <td>
                                                    {{ $member->membership_number }}
                                                </td>
                                                @endif
                                                <td>  {{ $member->name }} </td>
                                                <td>{{ $member->gender }}</td>
                                                <td>
                                                    @if ($member->membership_type === 'primary')
                                                        <a class="text-black"
                                                            href="{{ route('single.user', $member->id) }}">
                                                            <span
                                                                style="background-color: #D0C22F;border-radius:50%;width:5px; padding:5px; color:#D0C22F">22</span>
                                                            <b>{{ $member->membership_type }}</b>
                                                        </a>
                                                    @else
                                                        <a class="text-black"
                                                            href="{{ route('single.user', $member->id) }}">
                                                            <span
                                                                style="background-color: #C0C0C0;border-radius:50%;width:5px; padding:5px; color:#D0C22F">22</span>
                                                            <b>{{ $member->membership_type }}</b>
                                                        </a>
                                                    @endif
                                                </td>
                                                @php
                                                    try {
                                                        $expiryDate = \Carbon\Carbon::createFromFormat(
                                                            'd/m/Y',
                                                            $member->expiry,
                                                        );
                                                    } catch (\Carbon\Exceptions\InvalidFormatException $e) {
                                                        $expiryDate = null;
                                                    }
                                                @endphp

                                                @if ($expiryDate && $expiryDate->isBetween(\Carbon\Carbon::now(), \Carbon\Carbon::now()->addMonth()))
                                                    <td>
                                                        <span
                                                            style="background-color: #ef8809;border-radius:50%;width:5px; padding:5px; color:#2fd02f">22</span>
                                                        <span>
                                                            {{ $member->expiry }}
                                                        </span>
                                                    </td>
                                                @elseif ($expiryDate && $expiryDate->isPast())
                                                    <td>
                                                        <span
                                                            style="background-color: #d02f2f;border-radius:50%;width:5px; padding:5px; color:#2fd02f">22</span>
                                                        <span class="p-2 rounded-1">
                                                            {{ $member->expiry }}
                                                        </span>
                                                    </td>
                                                @else
                                                    <td>
                                                        <span
                                                            style="background-color: #2fd02f;border-radius:50%;width:5px; padding:5px; color:#2fd02f">22</span>
                                                        <span class="p-2 rounded-1">
                                                            {{ $member->expiry }}
                                                        </span>

                                                    </td>
                                                @endif



                                                <td>
                                                    <button class="btn btn-primary waves-effect waves-light me-1">
                                                        <a class="text-white"
                                                            href="{{ route('edit.user', $member->id) }}">view</a>
                                                    </button>

                                                    <button class="btn btn-primary waves-effect waves-light me-1">
                                                        <a class="text-white"
                                                            href="{{ route('single.user', $member->id) }}">id</a>
                                                    </button>
                                                    @if(!$user->emirate)
                                                    <button class="btn btn-danger waves-effect waves-light me-1"  data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $member->id }}">
                                                        <a class="text-white"
                                                            >delete</a>
                                                    </button>
                                                    @endif
                                                </td>
                                            </tr>


                                            <div class="modal fade" id="deleteModal-{{ $member->id }}" tabindex="-1" aria-labelledby="deleteModalLabel-{{ $member->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel-{{ $member->id }}">Confirm Deletion</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this user?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                            <a class="btn btn-danger" href="{{ route('delete.user', $member->id) }}">Confirm</a>
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
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                        <div class="d-flex justify-content-between">
                            @csrf
                            <input class="form-control" type="file" placeholder="upload Excel File" name="file" />
                            <button style="margin-left: 10px" class="btn btn-success"
                                type="submit">Upload&nbsp;Excel</button>
                        </div>
                    </form>

                    <form action="{{ route('export.users') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between mb-3">
                            <select name="emirates" id="emirates" class="form-control" required>
                                <option value="all" disabled selected>All Emirates</option>
                                <option value="all">All Emirates</option>
                                <option value="Abu Dhabi">Abu Dhabi</option>
                                <option value="Dubai">Dubai</option>
                                <option value="Sharjah">Sharjah</option>
                                <option value="Ajman">Ajman</option>
                                <option value="Umm Al Quwain">Umm Al-Quwain</option>
                                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                <option value="Fujairah">Fujairah</option>
                            </select>
                            <button style="margin-left: 10px" class="btn btn-success">
                                Download&nbsp;Excel
                            </button>
                        </div>
                    </form>


                </div>

                <!-- end row -->
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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
