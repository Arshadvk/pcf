@extends('dashboard.base')

@section('title')
    Edit Users | P C F - People Culture Forum
@endsection

@section('content')

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Edit User</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST" action="{{ route('admin.users.update', $user->id) }}"
                                      enctype="multipart/form-data">
                                    @csrf

                                    {{-- ID for update --}}
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    

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
                                        <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Name <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Type something"  value="{{ $user->name}}"required />
                                                </div>
                                            </div>
                                            <input type="hidden" name="email" class="form-control"
                                                        placeholder="Type something" value="{{ $user->email}}" required />
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="emirates_id" class="form-label">Emirate</label>
                                                <select name="emirates_id" id="emirates_id"  class="form-control">
                                                    <option value="">Select Emirate</option>
                                                    @foreach ($emirates as $emirate)
                                                        <option value="{{ $emirate->id }}"
                                                            {{ old('emirates', $user->emirates_id) == $emirate->id ? 'selected' : '' }}>
                                                            {{ $emirate->name }}
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
