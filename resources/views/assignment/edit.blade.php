@extends('layout.app')

@section('content')
    @if (session()->has('error_message'))
        <div class="alert alert-danger">
            <!-- mencetak error message -->
            {{ session()->get('error_message') }}
        </div>
    @endif

    <div class="col-lg-14">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('assignment') }}" class="btn btn-outline-secondary">
                    <i class="menu-icon fa fa-mail-reply-all"></i> <strong class="card-title">Back</strong>
                </a>
            </div>
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <form action="{{ url("assignment/$assignment->id_assignment") }}" method="post"
                            novalidate="novalidate">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="task_id" class="control-label mb-1">Name Task</label>
                                <select class="form-control" name="task_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($task as $tsk)
                                        <option value="{{ $tsk->id_task }}"
                                            {{ $tsk->id_task == $assignment->task_id ? 'selected' : '' }}>
                                            {{ $tsk->name_task }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('task_id'))
                                    <span class="text-danger">{{ $errors->first('task_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="employee_id" class="control-label mb-1">Name Employee</label>
                                <select class="form-control" name="employee_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($employee as $emp)
                                        <option value="{{ $emp->id_employee }}"
                                            {{ $emp->id_employee == $assignment->employee_id ? 'selected' : '' }}>
                                            {{ $emp->user->name }} - {{ $emp->position->name_position }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('employee_id'))
                                    <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="assignment_date" class="control-label mb-1">Assignment Date</label>
                                <input id="assignment_date" name="assignment_date" type="date" class="form-control"
                                    value="{{ $assignment->assignment_date }}">
                                @if ($errors->has('assignment_date'))
                                    <span class="text-danger">{{ $errors->first('assignment_date') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="status_id" class="control-label mb-1">Status</label>
                                <select class="form-control" name="status_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($status as $sts)
                                        <option value="{{ $sts->id_status }}"
                                            {{ $sts->id_status == $assignment->status_id ? 'selected' : '' }}>
                                            {{ $sts->name_status }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('status_id'))
                                    <span class="text-danger">{{ $errors->first('status_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Save</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> <!-- .card -->

    </div>
    <!--/.col-->
@endsection
