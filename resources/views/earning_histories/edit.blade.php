@extends('layouts.master')

@section('content')
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('earning_histories.update', ['earning_history' => $earning_history['id']])}}" class="form-horizontal" >
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3" >Gas Station</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="gas_station" required>
                            @foreach($gas_stations as $gas_station)
                                @if($gas_station == $earning_history->gas_station)
                                    <option value="{{$gas_station->id}}" selected>{{ $gas_station->name }}</option>
                                @else <option value="{{$gas_station->id}}">{{ $gas_station->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Earnings</label>
                    <div class="col-md-2">
                        <input type="number" value="{{ $earning_history->earnings }}" step="0.1" class="form-control form-control-line" id="earnings" name="earnings" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Date</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-inline date-picker" size="16" type="text" data-date-format="dd-mm-yyyy" value="{{ \Carbon\Carbon::parse($earning_history->date)->format('d-m-Y') }}" id="date" name="date"/>
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