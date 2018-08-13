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

                        @if(count($bio)==0)
                            <h1 style="color: red">No data in this table</h1>
                        @else
                            @if (\Session::has('delete'))
                                <div class="alert alert-success" role="alert">
                                    {{ \Session::get('delete') }}
                                </div>
                                <br>
                            @endif
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Phrase</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($bio as $bi)
                                        <tr>
                                            <td>{{$bi->id}}</td>
                                            <td>{{$bi->phrase}}</td>
                                            <td><a href="{{'/dashboard/biography/'.$bi->id.'/edit'}}" class='au-btn au-btn-icon au-btn--green au-btn--small'>Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{'/dashboard/biography/'.$bi->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="text-center">
                    {{ $bio->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection