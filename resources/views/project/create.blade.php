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
                <a href="{{ url('project') }}" class="btn btn-outline-secondary">
                    <i class="menu-icon fa fa-mail-reply-all"></i> <strong class="card-title">Back</strong>
                </a>
            </div>
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <form action="{{ url('project') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="name_project" class="control-label mb-1">Name Project</label>
                                <input id="name_project" name="name_project" type="text" class="form-control">
                                @if ($errors->has('name_project'))
                                    <span class="text-danger">{{ $errors->first('name_project') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description_project" class=" form-control-label mb-1">Description
                                    Project</label>
                                <textarea name="description_project" id="description_project" rows="3" class="form-control"></textarea>
                                @if ($errors->has('description_project'))
                                    <span class="text-danger">{{ $errors->first('description_project') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="start_date" class="control-label mb-1">Start Date</label>
                                <input id="start_date" name="start_date" type="date" class="form-control">
                                @if ($errors->has('start_date'))
                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="date_of_completion" class="control-label mb-1">Date of Completion</label>
                                <input id="date_of_completion" name="date_of_completion" type="date"
                                    class="form-control">
                                @if ($errors->has('date_of_completion'))
                                    <span class="text-danger">{{ $errors->first('date_of_completion') }}</span>
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
