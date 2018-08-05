@extends('Admin_pages.adminmaster')
@php($data = json_decode($data))
@section('custom_style')
    <link href={{ secure_asset("AdminStyles/vendor/vector-map/jqvmap.min.css") }} rel="stylesheet" media="all"/>
@endsection
@section('custom_js')
@endsection
@section('content')
    <!-- BREADCRUMB-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4" style="
    text-align:  center;
">
                        <a href="/dashboard/search" class="btn btn-danger"> Search For Product</a>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
                <div class="row">
                    @foreach($data as $key=>$item)
                        <div style="margin-bottom: 25px" class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">{{$key}}</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left" style="
    text-align:  center;
">
                                    <a href="{{'/dashboard/'.$key}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</a>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2" style="overflow:scroll;max-height: 500px; ">
                                <table class="table table-data2">
                                    <thead>
                                    <tr>
                                        @foreach($item[0] as $key1=>$tabdata)
                                            <th>{{$key1}}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($item as $key2=>$tabdata)
                                        <tr class="tr-shadow">
                                            @foreach($tabdata as $tabDataItem)
                                                <td>
                                                    @if(strpos($tabDataItem, '.png') || strpos($tabDataItem, '.jbg'))
                                                        <img width="300" height="300" src="{{ asset($tabDataItem) }}" style="max-width: none;height: none;">
                                                        {{--@elseif(strpos($tabDataItem, 'www'))--}}
                                                        {{--<a href="#" data-toggle="modal" data-target={{'#'.$tabdata->id}} ><img class="img-fluid" style="width: auto" src="{{ asset('videoicon.png') }}" alt="Card image cap"></a>--}}
                                                        {{--<div class="modal fade" id={{$tabdata->id}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                                                        {{--<div class="modal-dialog" role="document">--}}
                                                        {{--<div class="modal-content">--}}

                                                        {{--<div class="modal-body">--}}
                                                        {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                                        {{--<iframe class="embed-responsive-item" src={{$tabDataItem}} allowfullscreen></iframe>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--</div>--}}
                                                    @else
                                                        <div style="width: 180px;height: 150px;overflow-y: scroll;">
                                                            <h5>{{$tabDataItem}}</h5>
                                                        </div>
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection