@extends('Admin_pages.adminmaster')
@section('custom_style')
    <link href={{ secure_asset("AdminStyles/css/searchstyle.css") }} rel="stylesheet" media="all" />
@endsection
@section('custom_js')
    <script src=" {{ secure_asset("AdminStyles/js/search.js") }}"></script>
@endsection
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="search_bar large">
                            <div class="search_dropdown" style="width: 16px;">
                                <span>Personal</span>
                                <ul>
                                    <li class="selected">Personal</li>
                                    <li>Biography</li>
                                    <li>Video</li>
                                    <li>Guest</li>
                                    <li>Episode</li>
                                    <li>Gallery</li>
                                    <li>Testimonial</li>
                                </ul>
                            </div>
                            <input id="query" type="text" placeholder="No need to write search item" disabled/>
                            <button id="submitquery" type="button" value="Search">Search</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection