@extends('layouts.app')
@section('title', 'Create Employee')
@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('employee.store') }}" method="POST" id='create-form'>
                @csrf

                <div class="md-form">
                    <label for="">Employee ID</label>
                    <input type="text" name="employee_id" class="form-control" autocomplete="off">
                </div>
                <div class="md-form">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" autocomplete="off">
                </div>
                <div class="md-form">
                    <label for="">Phone</label>
                    <input type="number" name="phone" class="form-control" autocomplete="off">
                </div>
                <div class="md-form">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="off">
                </div>
                 <div class="md-form">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" autocomplete="off">
                </div>
                <div class="md-form">
                    <label for="">NRC Number</label>
                    <input type="text" name="nrc_number" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="md-form">
                    <label for="">Birthday</label>
                    <input type="text" name="birthday" class="form-control" id='birthday'>
                </div>

                <div class="md-form">
                    <label for="">Date Of Join</label>
                    <input type="text" name="date_of_join" class="form-control" id='date_of_join'>
                </div>
                <div class="md-form">
                    <label for="">Address</label>
                    <textarea name="address" class="md-textarea form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Department</label>
                    <select name="department_id" class="form-control">
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Is Present</label>
                    <select name="is_present" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>





                <div class="d-flex justify-content-center">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-sm btn-theme btn-block my-4">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreEmployee', '#create-form') !!}
    <script>

        $('#birthday').daterangepicker({
            "drops": "up",
            "showDropdowns": true,
            "singleDatePicker": true,
            "autoApply": true,
            'maxDate': moment(),
            "locale": {
                "format": "YYYY-MM-DD",

            }
        });
        $('#date_of_join').daterangepicker({
            "drops": "up",
            "showDropdowns": true,
            "singleDatePicker": true,
            "autoApply": true,
            "locale": {
                "format": "YYYY-MM-DD",

            }
        });
    </script>
@endsection
