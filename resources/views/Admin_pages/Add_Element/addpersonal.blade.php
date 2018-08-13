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
                            <form action="/dashboard/personal" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                            <div class="card">
                            <div class="card-header">
                                Add <strong>Personal</strong> Information
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
                                            <label for="type" class=" form-control-label">Type</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="type" name="type" placeholder="Type" class="form-control">
                                            <small class="form-text text-muted">Type of information about <strong>Jessy</strong></small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="info" class=" form-control-label">Information</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="info" id="info" rows="9" placeholder="Content..." class="form-control"></textarea>
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