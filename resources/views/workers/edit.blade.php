@extends('layouts.master')

@section('content')
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('workers.update', ['worker' => $worker['id']])}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-4">
                        <input type="text" value="{{$worker->first_name}}" class="form-control" id="first_name" name="first_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-4">
                        <input type="text" value="{{$worker->last_name}}" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Birthday</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-inline date-picker" size="16" type="text" data-date-format="dd-mm-yyyy" value="{{ \Carbon\Carbon::parse($worker->birthday)->format('d-m-Y') }}" id="birthday" name="birthday"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" >Gas Station</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="gas_station">
                            @foreach($gas_stations as $gas_station)
                                @if($gas_station == $worker->gas_station)
                                    <option value="{{$gas_station->id}}" selected>{{ $gas_station->name }}</option>
                                @else <option value="{{$gas_station->id}}">{{ $gas_station->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" >Position</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="position">
                            @foreach($positions as $position)
                                @if($position == $worker->position)
                                    <option value="{{$position->id}}" selected>{{ $position->title }}</option>
                                @else <option value="{{$position->id}}">{{ $position->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('workers')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
            @include('layouts.errors')
        </form>
        <!-- END FORM-->
    </div>
@endsection