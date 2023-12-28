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
                <a href="{{ url('task') }}" class="btn btn-outline-secondary">
                    <i class="menu-icon fa fa-mail-reply-all"></i> <strong class="card-title">Back</strong>
                </a>
            </div>
            {{-- <div class="card-body">
                <div>
                    <h3 class="text-center"><b>TAMBAH DATA PRODUK</b></h3>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="col-lg-14">
        <div class="card">
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <form action="{{ url('task') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="project_id" class="control-label mb-1">Name Project</label>
                                <select class="form-control" name="project_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id_project }}">
                                            {{ $project->name_project }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('project_id'))
                                    <span class="text-danger">{{ $errors->first('project_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name_task" class="control-label mb-1">Name Task</label>
                                <input id="name_task" name="name_task" type="text" class="form-control">
                                @if ($errors->has('name_task'))
                                    <span class="text-danger">{{ $errors->first('name_task') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description_task" class=" form-control-label mb-1">Description
                                    Task</label>
                                <textarea name="description_task" id="description_task" rows="3" class="form-control"></textarea>
                                @if ($errors->has('description_task'))
                                    <span class="text-danger">{{ $errors->first('description_task') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="deadline_date" class="control-label mb-1">Deadline Date</label>
                                <input id="deadline_date" name="deadline_date" type="date" class="form-control">
                                @if ($errors->has('deadline_date'))
                                    <span class="text-danger">{{ $errors->first('deadline_date') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="status_id" class="control-label mb-1">Status</label>
                                <select class="form-control" name="status_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($statuss as $status)
                                        <option value="{{ $status->id_status }}">
                                            {{ $status->name_status }}</option>
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
