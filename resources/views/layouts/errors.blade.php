@if ($errors->any())
    <div class="form-group ">
        <div class="col-md-3"></div>
        <div class="alert alert-danger col-md-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif