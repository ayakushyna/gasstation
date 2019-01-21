@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('gas_columns.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Gas Station</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Gas Station" name="gas_station" required>
                            <option value=""></option>
                            @foreach($gas_stations as $gas_station)
                                <option value="{{$gas_station->id}}">{{ $gas_station->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Serial Number</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="1" value="0" class="form-control form-control-line" id="serial_number" name="serial_number" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Total Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="0.01" value="0" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('gas_columns')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>

@endsection