@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('orders.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">

                <div class="form-group">
                    <label class="control-label col-md-3" >Fuel</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="fuel">
                            @foreach($fuels as $fuel)
                                <option value="{{$fuel->id}}">{{ $fuel->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" >Client</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="client">
                            @foreach($clients as $client)
                                <option value="{{$client->id}}">{{ $client->last_name }} {{ $client->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" >Worker</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="worker">
                            @foreach($workers as $worker)
                                <option value="{{$worker->id}}">{{ $worker->last_name }} {{ $worker->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Total Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" value="0" min="0" step="1" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Price per L, $</label>
                    <div class="col-md-2">
                        <input type="number" value="0" min="0" step="0.01" class="form-control form-control-line" id="price" name="price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Date</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-inline date-picker" size="16" type="text" data-date-format="dd-mm-yyyy" value="" id="date" name="date"/>
                    </div>
                </div>

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('orders')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
            @include('layouts.errors')
        </form>
        <!-- END FORM-->
    </div>

@endsection