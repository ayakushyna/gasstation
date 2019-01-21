@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('fuels.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Type</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="type" name="type" placeholder="Enter type" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Total Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="1" value="0" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Price per L, $</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="0.01" value="0" class="form-control form-control-line" id="price" name="price" required>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('fuels')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>

@endsection