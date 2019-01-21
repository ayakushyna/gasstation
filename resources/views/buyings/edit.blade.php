@extends('layouts.master')

@section('content')
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('buyings.update', ['buying' => $buying['id']])}}" class="form-horizontal" >
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Provisioner</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Provisioner" name="provisioner" required>
                            <option value=""></option>
                            @foreach($provisioners as $provisioner)
                                @if($provisioner == $buying->provisioner)
                                    <option value="{{$provisioner->id}}" selected>{{ $provisioner->last_name }} {{ $provisioner->first_name }}</option>
                                @else <option value="{{$provisioner->id}}">{{ $provisioner->last_name }} {{ $provisioner->first_name }}</option>
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
                                @if($fuel == $buying->fuel)
                                    <option value="{{$fuel->id}}" selected>{{ $fuel->type }}</option>
                                @else <option value="{{$fuel->id}}">{{ $fuel->type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Bought Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="1" value="{{$buying->amount}}" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Price, $</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="0.1" value="{{$buying->price}}" class="form-control form-control-line" id="price" name="price" required>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('buyings')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
            @include('layouts.errors')
        </form>
        <!-- END FORM-->
    </div>
@endsection