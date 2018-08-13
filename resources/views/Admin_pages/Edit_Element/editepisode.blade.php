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
                            @if($episode!='no')
                            <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$episode->id}}</td>
                                        <td>{{$episode->title}}</td>
                                        <td>{{$episode->link}}</td>
                                        <td>{{$episode->srtdesc}}</td>
                                        <td><img style="width: 200px;height: 200px;max-width: none;" src="{{ asset($episode->photo) }}"></td>
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
                                <form action="{{'/dashboard/episode/'.$id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">
                                        <div class="card-header">
                                            Edit <strong>Episode</strong>
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
                                                    <label for="title" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="title" name="title" placeholder="Title" class="form-control">
                                                    <small class="form-text text-muted">Title of the episode</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="link" class=" form-control-label">Episode Link</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="link" name="link" placeholder="Link" class="form-control">
                                                    <small class="form-text text-muted">Embedded link of the Episode</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="description" class=" form-control-label">Short Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="photo" class=" form-control-label">Thumbnail</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="photo" name="photo" accept="image/*" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
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