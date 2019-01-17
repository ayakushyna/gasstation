@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('fuels.delete')}}">
        @csrf
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Table
            </div>
            <div class="actions">
                <a href="{{route('fuels.create')}}" class="btn btn-success btn-sm">
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
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($fuels as $index => $fuel)
                <tr class="odd gradeX">
                    <td>
                        <input type="checkbox" class="checkboxes" value="{{$fuel['id']}}" name="check[]">
                    </td>
                    <td rowspan="1">{{ ++$index }}</td>
                    <td>{{ $fuel->type }}</td>
                    <td>{{ $fuel->amount }}</td>
                    <td>{{ $fuel->price }}</td>
                    <td>
                        <a href="{{route('fuels.edit', ['fuel' => $fuel['id']])}}"  class="btn btn-info btn-xs purple"> <i class="fa fa-pencil"></i> Edit </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </form>

@endsection