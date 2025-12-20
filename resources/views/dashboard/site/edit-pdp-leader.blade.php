@extends('dashboard.base')

@section('title')
    Edit PDP Leader | P C F - People Culture Forum
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Edit PDP Leader</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST" action="/store-committee"
                                      enctype="multipart/form-data">
                                    @csrf

                                    {{-- ID for update --}}
                                    <input type="hidden" name="id" value="{{ $committee->id }}">
                                    <input type="hidden" name="committee_type" value="{{ $committee->committee_type }}">

                                    {{-- Validation Errors --}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="row">
                                        {{-- Name --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                <input type="text"
                                                       name="name"
                                                       class="form-control"
                                                       value="{{ old('name', $committee->name) }}">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Image --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Photo</label>

                                                @if ($committee->image)
                                                    <div class="mb-2">
                                                        <img src="{{ $committee->image }}"
                                                             alt="Current Image"
                                                             style="width:100px; height:100px; object-fit:cover;">
                                                    </div>
                                                @endif

                                                <input type="file"
                                                       name="image"
                                                       class="form-control"
                                                       accept="image/*">

                                                <small class="text-muted">Leave empty to keep existing image</small>

                                                @error('image')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{-- Position --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Position</label>
                                                <select name="position_id" class="form-control">
                                                    <option value="">Select Position</option>
                                                    @foreach ($positions as $pos)
                                                        <option value="{{ $pos->id }}"
                                                            {{ old('position_id', $committee->position_id) == $pos->id ? 'selected' : '' }}>
                                                            {{ $pos->name_mal }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('position_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                            Cancel
                                        </a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
