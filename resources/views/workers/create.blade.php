@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('workers.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Birthday</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-inline date-picker" size="16" type="text" data-date-format="dd-mm-yyyy" value="" id="birthday" name="birthday"/>
                    </div>
                </div>

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
                    <label class="control-label col-md-3">Position</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Position" name="position">
                            <option value=""></option>
                            @foreach($positions as $position)
                                <option value="{{$position->id}}">{{ $position->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('workers')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>

@endsection