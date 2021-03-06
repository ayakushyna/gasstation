@extends('layouts.master')

@section('content')
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form method="POST" action="{{route('provisioners.update', ['client' => $provisioner['id']])}}" class="form-horizontal">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-4">
                        <input type="text" value="{{$provisioner->first_name}}" class="form-control" id="first_name" name="first_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-4">
                        <input type="text" value="{{$provisioner->last_name}}" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email</label>
                    <div class="col-md-4">
                        <input type="email" value="{{$provisioner->email}}" class="form-control form-control-line" name="email" id="email" required>
                    </div>
                </div>

                @include('layouts.errors')

            </div>
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <a href="{{route('provisioners')}}" class="btn btn-default"> Cancel </a>
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
@endsection