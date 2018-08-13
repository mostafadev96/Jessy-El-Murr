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
                        @if(count($guests)==0)
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
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>Telegram</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Photo</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($guests as $guest)
                                        <tr>
                                            <td>{{$guest->id}}</td>
                                            <td>{{$guest->name}}</td>
                                            <td>{{$guest->job}}</td>
                                            <td>{{$guest->plane}}</td>
                                            <td>{{$guest->facebook}}</td>
                                            <td>{{$guest->twitter}}</td>
                                            <td><img style="width: 200px;height: 200px;max-width: none;" src="{{asset($guest->photo)}}"></td>
                                            <td><a href="{{'/dashboard/guest/'.$guest->id.'/edit'}}" class='au-btn au-btn-icon au-btn--green au-btn--small'>Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{'/dashboard/guest/'.$guest->id}}" method="post">
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
                    {{ $guests->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection