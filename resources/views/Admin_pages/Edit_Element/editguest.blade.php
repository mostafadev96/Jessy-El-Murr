@extends('Admin_pages.adminmaster')
@section('custom_style')
@endsection
@section('custom_js')
@endsection
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            @if($guest!='no')
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>Telegram</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Photo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$guest->id}}</td>
                                        <td>{{$guest->name}}</td>
                                        <td>{{$guest->job}}</td>
                                        <td>{{$guest->plane}}</td>
                                        <td>{{$guest->facebook}}</td>
                                        <td>{{$guest->twitter}}</td>
                                        <td><img style="width: 200px;height: 200px;max-width: none;" src="{{ asset($guest->photo) }}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                             </div>
                                @if (\Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ \Session::get('success') }}
                                    </div>
                                    <br>
                                @endif

                                <form action="{{'/dashboard/guest/'.$id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">
                                        <div class="card-header">
                                            Edit <strong>Guest</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="name" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name" name="name" placeholder="Name" class="form-control">
                                                    <small class="form-text text-muted">Name of the Guest</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="job" class=" form-control-label">Job</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="job" name="job" placeholder="Job" class="form-control">
                                                    <small class="form-text text-muted">Job of the Guest</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="plane" class=" form-control-label">Telegram</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="plane" name="plane" placeholder="Telegram Link" class="form-control">
                                                    <small class="form-text text-muted">Telegram link</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="facebook" class=" form-control-label">Facebook</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="facebook" name="facebook" placeholder="Facebook Link" class="form-control">
                                                    <small class="form-text text-muted">Facebook link</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="twitter" class=" form-control-label">Twitter</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="twitter" name="twitter" placeholder="Twitter Link" class="form-control">
                                                    <small class="form-text text-muted">Twitter link</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="photo" class=" form-control-label">Photo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="photo" name="photo" accept="image/*" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            @if(Auth::guard('admin')->user()->role=="v")
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                            @else
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                            @endif
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <div class="alert alert-danger">
                                    <h1 style="color: blueviolet">There is no sentence with ID = {{$id}}</h1>
                                </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection