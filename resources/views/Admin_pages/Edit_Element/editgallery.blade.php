@extends('Admin_pages.adminmaster')

@section('custom_style')
    <link href="http://rvera.github.io/image-picker/image-picker/image-picker.css" rel="stylesheet" media="all" />
    <style type="text/css">
        .thumbnails li img{
            width: 200px;
            height: 200px;
        }
    </style>
@endsection
@section('custom_js')
    <script src=" {{ asset("AdminStyles/js/ImagePicker.js") }}"></script>
    <script src=" http://rvera.github.io/image-picker/image-picker/image-picker.min.js"></script>
    <script src=" https://imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>
@endsection
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            @if($album!='no')
                            <div class="table-responsive table--no-card m-b-30">
                                  <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Size</th>
                                        <th>Description</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$album->id}}</td>
                                        <td>{{$album->title}}</td>
                                        <td>{{$album->size}}</td>
                                        <td>{{$album->description}}</td>
                                        <td><a href="{{'/dashboard/gallery/'.$album->id.'/edit'}}" class='au-btn au-btn-icon au-btn--green au-btn--small'>Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{'/dashboard/gallery/'.$album->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small">Delete</button>
                                            </form>
                                        </td>
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

                            <form action="{{'/dashboard/gallery/'.$id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">
                                        <div class="card-header">
                                            Edit <strong>Album</strong>
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
                                                    <small class="form-text text-muted">Title of the album in gallery</small>
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
                                                    <label for="photos" class=" form-control-label">Selected Photos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input id="selectedPhotos" name="selectedPhotos" type="hidden" value="">
                                                    @if(count($album->photos)==0)
                                                        <h4>There is no photos in this album</h4>
                                                    @else
                                                    <select id="selectImage" multiple="multiple" class="image-picker">
                                                        @php($counter=1)
                                                        @foreach($album->photos as $photo)
                                                            <option data-img-src="{{asset($photo->photo)}}" value="{{$photo->id}}">{{'photo-'.$photo->id}}</option>
                                                            @php($counter++)
                                                        @endforeach
                                                    </select>
                                                        <small class="form-text" style="color:red;">Click on selected photos to delete them</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="photos" class=" form-control-label">New Photos</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="photos" name="photos[]" multiple="" accept="image/*" class="form-control-file">
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