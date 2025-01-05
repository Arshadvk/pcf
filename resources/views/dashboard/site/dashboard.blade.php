@extends('dashboard.base')
@section('title')
Dashboard | P C F -  People Culture Forum
@endsection
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                @if ($emirates->isNotEmpty())
                    @foreach ($emirates as $emirate)
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex text-muted">
                                        <div class="flex-shrink-0 me-3 align-self-center">
                                            <img src="assets/img/logo.png" style="width: 50px" alt="" srcset="">
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">{{ $emirate->name }}</p>
                                            <h5 class="mb-3">{{ $emirate->count }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center">No Emirates Found</p>
                @endif
            </div>
         </div>
    </div>
</div>
@endsection
