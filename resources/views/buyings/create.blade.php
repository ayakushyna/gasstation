@extends('layouts.master')

@section('content')
    <div class="portlet-body form" >
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('buyings.store')}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">Provisioner</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Provisioner" name="provisioner" required>
                            <option value=""></option>
                            @foreach($provisioners as $provisioner)
                                <option value="{{$provisioner->id}}">{{ $provisioner->last_name }} {{ $provisioner->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Fuel</label>
                    <div class="col-md-4">
                        <select class="form-control select2me" data-placeholder="Select Fuel" name="fuel" required>
                            @foreach($fuels as $fuel)
                                <option value="{{$fuel->id}}">{{ $fuel->type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Bought Amount, L</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="1" value="0" class="form-control form-control-line" id="amount" name="amount" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Price, $</label>
                    <div class="col-md-2">
                        <input type="number" min="0" step="0.1" value="0" class="form-control form-control-line" id="price" name="price" required>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('buyings')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>

@endsection