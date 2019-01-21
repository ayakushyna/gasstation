@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('earning_histories.store')}}" class="form-horizontal">
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
                    <label class="col-md-3 control-label">Earnings</label>
                    <div class="col-md-2">
                        <input type="number" step="0.1" value="0" class="form-control form-control-line" id="earnings" name="earnings" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Date</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-inline date-picker" size="16" type="text" data-date-format="dd-mm-yyyy" value="" id="date" name="date"/>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('earning_histories')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>

@endsection