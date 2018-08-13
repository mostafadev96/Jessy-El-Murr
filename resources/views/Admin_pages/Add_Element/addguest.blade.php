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
                            <form action="/dashboard/guest" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                            <div class="card">
                            <div class="card-header">
                                Add <strong>Guest</strong>
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
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
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