@extends('layouts.master')

@section('content')
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('addings.update', ['adding' => $adding['id']])}}" class="form-horizontal" >
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Gas Column</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Gas Column" name="gas_column" required>
                            <option value=""></option>
                            @foreach($gas_columns as $gas_column)
                                @if($gas_column == $adding->gas_column)
                                    <option value="{{$gas_column->id}}" selected>{{ $gas_column->gas_station->name }} {{ $gas_column->serial_number }}</option>
                                @else <option value="{{$gas_column->id}}">{{ $gas_column->gas_station->name }} {{ $gas_column->serial_number }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Fuel</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Fuel" name="fuel" required>
                            <option value=""></option>
                            @foreach($fuels as $fuel)
                                @if($fuel == $adding->fuel)
                                    <option value="{{$fuel->id}}" selected>{{ $fuel->type }}</option>
                                @else <option value="{{$fuel->id}}">{{ $fuel->type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Added Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="1" value="{{$adding->amount}}" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('addings')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
@endsection