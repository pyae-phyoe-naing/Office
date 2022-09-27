@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-start">
                        <img src="{{ $employee->profile_image_path() }}" class="detail_profile_img" />
                        <div class="py-3 px-3">
                            <h3>{{ $employee->name }}</h3>
                            <p class="mb-2 text-muted">{{ $employee->employee_id }}</p>
                            <p class="mb-2 text-muted"><span
                                    class="badge badge-pill badge-light border">{{ $employee->department ? $employee->department->title : '-' }}</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection
