@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('gas_stations.delete')}}">
        @csrf
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Table
            </div>
            <div class="actions">
                <a href="{{route('gas_stations.create')}}" class="btn btn-success btn-sm">
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
                    <th>Name</th>
                    <th>Number of Columns</th>
                    <th>Earnings, $</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($gas_stations as $index => $gas_station)
                <tr class="odd gradeX">
                    <td>
                        <input type="checkbox" class="checkboxes" value="{{$gas_station['id']}}" name="check[]">
                    </td>
                    <td rowspan="1">{{ ++$index }}</td>
                    <td>{{ $gas_station->name }}</td>
                    <td>{{ $gas_station->gas_columns_count }}</td>
                    <td>{{ $gas_station->earning_histories->sum('earnings')}}</td>
                    <td>
                        <a href="{{route('gas_stations.edit', ['gas_station' => $gas_station['id']])}}"  class="btn btn-info btn-xs purple"> <i class="fa fa-pencil"></i> Edit </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </form>

@endsection