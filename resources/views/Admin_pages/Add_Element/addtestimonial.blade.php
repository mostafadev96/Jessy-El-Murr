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
                        @if (\Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ \Session::get('success') }}
                            </div>
                            <br>
                        @endif
                            <form action="/dashboard/testimonial" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                            <div class="card">
                            <div class="card-header">
                                Add <strong>Testimonial</strong>
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
                                            <small class="form-text text-muted">Name of the Testimonial</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="description" class=" form-control-label">Testimonial | <strong style="color: dodgerblue">Saying</strong></label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="description" id="description" rows="9" placeholder="Saying..." class="form-control"></textarea>
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
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Mostafa Elsayed. All rights reserved. This template id developed by Mostafa Elsayed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection