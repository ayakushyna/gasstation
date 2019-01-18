@extends('layouts.master')

@section('content')
    <form method="POST" action="{{route('clients.delete')}}">
        @csrf
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-user"></i>Table
            </div>
            <div class="actions">
                <a href="{{route('clients.create')}}" class="btn btn-success btn-sm">
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
                    <th>Full Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $index => $client)
                <tr class="odd gradeX">
                    <td>
                        <input type="checkbox" class="checkboxes" value="{{$client['id']}}" name="check[]">
                    </td>
                    <td rowspan="1">{{ ++$index }}</td>
                    <td>{{ $client->last_name }} {{ $client->first_name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>
                        <a href="{{route('clients.edit', ['client' => $client['id']])}}"  class="btn btn-info btn-xs purple"> <i class="fa fa-pencil"></i> Edit </a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </form>

@endsection