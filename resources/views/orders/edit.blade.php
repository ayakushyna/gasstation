@extends('layouts.master')

@section('content')
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('orders.update', ['order' => $order['id']])}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3" >Fuel</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="fuel" data-placeholder="Select Fuel" required>
                            @foreach($fuels as $fuel)
                                @if($fuel == $order->$fuel)
                                    <option value="{{$fuel->id}}" selected>{{ $fuel->type }}</option>
                                @else <option value="{{$fuel->id}}">{{ $fuel->type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" >Client</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="client" data-placeholder="Select Client" required>
                            @foreach($clients as $client)
                                @if($client == $order->$client)
                                    <option value="{{$client->id}}" selected>{{ $client->last_name }} {{ $client->first_name }}</option>
                                @else <option value="{{$client->id}}">{{ $client->last_name }} {{ $client->first_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" >Worker</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" name="worker" data-placeholder="Select Worker" required>
                            @foreach($workers as $worker)
                                @if($worker == $order->$worker)
                                    <option value="{{$worker->id}}" selected>{{ $worker->last_name }} {{ $worker->first_name }}</option>
                                @else <option value="{{$worker->id}}">{{ $worker->last_name }} {{ $worker->first_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Total Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" value="{{ $order->amount }}" min="0" step="1" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Price per L, $</label>
                    <div class="col-md-2">
                        <input type="number" value="{{ $order->price }}" min="0" step="0.01" class="form-control form-control-line" id="price" name="price" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Date</label>
                    <div class="col-md-3">
                        <input class="form-control form-control-inline date-picker" size="16" type="text" data-date-format="dd-mm-yyyy" value="{{ \Carbon\Carbon::parse($order->birthday)->format('d-m-Y') }}" id="date" name="date"/>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('orders')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
@endsection