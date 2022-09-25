@extends('layouts.app')
@section('title', 'Employees Detail')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-start">
                        <img src="{{ $employee->profile_image_path() }}" class="detail_profile_img" />
                        <div class="py-3 px-2">
                            <h3>{{ $employee->name }}</h3>
                            <p class="mb-1 text-muted">{{ $employee->employee_id }}</p>
                            <p class="mb-1 text-muted">{{ $employee->department ? $employee->department->title : '-' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 dash_border px-2">

                    <p class="mb-1"><strong>Name</strong> : <span class="text-muted">{{ $employee->name }}</span></p>
                    <p class="mb-1"><strong>Phone</strong> : <span class="text-muted">{{ $employee->phone }}</span>
                    </p>
                    <p class="mb-1"><strong>Email</strong> : <span class="text-muted">{{ $employee->email }}</span>
                    </p>
                    <p class="mb-1"><strong>NRC Number</strong> : <span
                            class="text-muted">{{ $employee->nrc_number }}</span></p>
                    <p class="mb-1"><strong>Gender</strong> : <span
                            class="text-muted">{{ ucfirst($employee->gender) }}</span></p>
                    <p class="mb-1"><strong>Birthday</strong> : <span class="text-muted">{{ $employee->birthday }}</span>
                    </p>
                    <p class="mb-1"><strong>Address</strong> : <span class="text-muted">{{ $employee->address }}</span>
                    </p>
                    <p class="mb-1"><strong>Date of Join</strong> : <span
                            class="text-muted">{{ $employee->date_of_join }}</span></p>
                    <p class="mb-1"><strong>Is Present</strong> :
                        @if ($employee->is_present == 1)
                            <span class="badge badge-pill badge-success">Present</span>
                        @else
                            <span class="badge badge-pill badge-danger">Leave</span>
                        @endif
                    </p>

                </div>
            </div>


        </div>
    </div>
@endsection
