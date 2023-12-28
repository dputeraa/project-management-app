@extends('layout.app')

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('project/create') }}" class="btn btn-outline-success">
                            <i class="menu-icon fa fa-plus"></i> <strong class="card-title">Add Data</strong>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if (Session::has('warning'))
                                <div class="alert alert-warning">
                                    {{ Session::get('warning') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('success_add'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session('success_add') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('success_update'))
                                <div class="alert alert-success">
                                    {{ session('success_update') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('success_destroy'))
                                <div class="alert alert-danger">
                                    {{ session('success_destroy') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <table id="bootstrap-data-table" class="table table-bordered table-hover text-left">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name Project</th>
                                        <th>Description Project</th>
                                        <th>Start Date</th>
                                        <th>Date of Completion</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        @csrf
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $project->name_project }}</td>
                                            <td>{{ $project->description_project }}</td>
                                            <td>{{ \Carbon\Carbon::parse($project->start_date)->format('l, d F Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($project->date_of_completion)->format('l, d F Y') }}
                                            </td>
                                            <td>{{ $project->status->name_status }}</td>
                                            <td>
                                                <a href="{{ url("project/$project->id_project/edit") }}"
                                                    class="btn btn-outline-primary">
                                                    <i class="fa fa-edit"></i>&nbsp; Edit
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                    data-target="#staticModal">
                                                    <i class="fa fa-trash"></i>&nbsp; Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated">
            <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Delete Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Are you sure you wanna delete this data?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <a href="{{ url("project/$project->id_project/delete") }}" class="btn btn-primary">
                                &nbsp; Confirm
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
