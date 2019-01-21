@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('orders.delete')}}">
        @csrf
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Table
            </div>
            <div class="actions">
                <a href="{{route('orders.create')}}" class="btn btn-success btn-sm">
                    <i class="fa fa-pencil"></i> Add </a>
                <button class="btn btn-danger btn-sm" type="submit" >
                    <i class="fa fa-trash-o"></i> Delete
                </button>
            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_2">
                <thead>
                <tr>
                    <th class="table-checkbox">
                        <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
                    </th>
                    <th>#</th>
                    <th>Fuel</th>
                    <th>Client</th>
                    <th>Worker</th>
                    <th>Amount</th>
                    <th>Price per L</th>
                    <th>Date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $index => $order)
                <tr class="odd gradeX">
                    <td>
                        <input type="checkbox" class="checkboxes" value="{{$order['id']}}" name="check[]">
                    </td>
                    <td rowspan="1">{{ ++$index }}</td>
                    <td>{{ $order->fuel->type }}</td>
                    <td>{{ $order->client->last_name }} {{ $order->client->first_name }}</td>
                    <td>{{ $order->worker->last_name }} {{ $order->worker->first_name }}</td>
                    <td>{{ $order->amount}}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->date)->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{route('orders.edit', ['order' => $order['id']])}}"  class="btn btn-info btn-xs purple"> <i class="fa fa-pencil"></i> Edit </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </form>

@endsection