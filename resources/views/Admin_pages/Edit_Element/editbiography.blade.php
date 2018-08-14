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
                        @if($bio!='no')
                        <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Phrase</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$bio->id}}</td>
                                        <td>{{$bio->phrase}}</td>
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

                            <form action="{{'/dashboard/biography/'.$id}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-header">
                                        Edit <strong>Biography</strong> phrase
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
                                                <label for="phrase" class=" form-control-label">Phrase</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="phrase" name="phrase" placeholder="statement" class="form-control">
                                                <small class="form-text text-muted">statement about <strong>Jessy</strong></small>
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