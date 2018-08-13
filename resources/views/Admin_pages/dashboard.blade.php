@extends('Admin_pages.adminmaster')
@php($data = json_decode($data))
@section('custom_style')
    <link href={{ secure_asset("AdminStyles/vendor/vector-map/jqvmap.min.css") }} rel="stylesheet" media="all"/>
@endsection
@section('custom_js')
@endsection
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($data as $key=>$item)
                                @if($key=="personal")
                                <li class="nav-item">
                                    <a class="nav-link active" id="{{$key."-tab"}}" data-toggle="tab" href="{{'#'.$key}}" role="tab" aria-controls="{{$key}}" aria-selected="true">{{$key}}</a>
                                </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" id="{{$key."-tab"}}" data-toggle="tab" href="{{'#'.$key}}" role="tab" aria-controls="{{$key}}" aria-selected="true">{{$key}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content pl-3 p-1" id="myTabContent">
                            @foreach($data as $key=>$item)

                                @if($key=="personal")


                                    <div class="tab-pane fade show active" style="margin-top: 36px" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key."-tab"}}">
                                        <!-- DATA TABLE -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h1 class="title-5 m-b-35">{{$key}}</h1>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="table-data__tool">
                                                    <div class="table-data__tool-left" style="
    text-align:  center;
">
                                                        <a href="{{'/dashboard/'.$key.'/create'}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                            <i class="fas fa-plus"></i>add item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if(count($item)==0)
                                            <h1 style="color: red">No data in this table</h1>
                                        @else
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
                                        @endif
                                    </div>



                                @else
                                    <div class="tab-pane fade " style="margin-top: 36px" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key."-tab"}}">
                                        <!-- DATA TABLE -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h1 class="title-5 m-b-35">{{$key}}</h1>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="table-data__tool">
                                                    <div class="table-data__tool-left" style="
    text-align:  center;
">
                                                        <a href="{{'/dashboard/'.$key.'/create'}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                            <i class="fas fa-plus"></i>add item</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if(count($item)==0)
                                            <h1 style="color: red">No data in this table</h1>
                                        @else
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
                                        @endif
                                    </div>
                                @endif
                            @endforeach

                        </div>
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