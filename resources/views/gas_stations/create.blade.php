@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('gas_stations.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                </div>

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                    </div>
                </div>
            </div>
            @include('layouts.errors')
        </form>
        <!-- END FORM-->
    </div>

@endsection