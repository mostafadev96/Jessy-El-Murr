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
                        @if($testimonial!='no')
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$testimonial->id}}</td>
                                        <td>{{$testimonial->name}}</td>
                                        <td>{{$testimonial->description}}</td>
                                        <td><img style="width: 200px;height: 200px;max-width: none;" src="{{ asset($testimonial->photo) }}"></td>
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

                            <form action="{{'/dashboard/testimonial/'.$id}}" method="post" enctype="multipart/form-data"
                                  class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-header">
                                        Edit <strong>Testimonial</strong>
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
                                                <input type="text" id="name" name="name" placeholder="Name"
                                                       class="form-control">
                                                <small class="form-text text-muted">Name of the Testimonial</small>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="description" class=" form-control-label">Testimonial |
                                                    <strong style="color: dodgerblue">Saying</strong></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="description" id="description" rows="9"
                                                          placeholder="Saying..." class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="photo" class=" form-control-label">Photo</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="photo" name="photo" accept="image/*"
                                                       class="form-control-file">
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