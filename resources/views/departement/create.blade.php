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
                <a href="{{ url('departement') }}" class="btn btn-outline-secondary">
                    <i class="menu-icon fa fa-mail-reply-all"></i> <strong class="card-title">Back</strong>
                </a>
            </div>
            <div class="card-body">
                <!-- Credit Card -->
                <div id="pay-invoice">

                    <div class="card-body">
                        <form action="{{ url('departement') }}" method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="name_departements" class="control-label mb-1">Name Departement</label>
                                <input id="name_departements" name="name_departements" type="text" class="form-control">
                                @if ($errors->has('name_departements'))
                                    <span class="text-danger">{{ $errors->first('name_departements') }}</span>
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
