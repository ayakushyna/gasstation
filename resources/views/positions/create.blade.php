@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('positions.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Title</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" >Salary, $</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="1" value="0" class="form-control form-control-line" id="salary" name="salary" required>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('positions')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>

@endsection