@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 ">
                            <p>Name: {{Auth::user()->name}}</p>
                            <p>Email: {{Auth::user()->email}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            <a href="{{ url('/profile/edit/'.Auth::user()->id) }}"><div class="btn btn-primary pull-right">Edit Profile</div></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Arduino</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- TODO: DIT statement aanpassen -->
                                @if(Session('cart'))
                                    @foreach(Session('cart') as $item)
                                        <p>Item ID: {{$item}}</p>
                                    @endforeach
                                @else
                                    {{-- FAKE IT TILL YOU MAKE IT--}}
                                    <table id="userTable" class="display">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Edit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Living Room</td>
                                            <td><i class="fa fa-edit"></i></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                {{--<a href="{{ url('/profile/')}}"><div class="btn btn-primary pull-right">Add Arduino</div></a>--}}
                            </div>
                        </div>




                </div>
            </div>
        </div>


    </div>
@endsection

@section('footer')
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                responsive: true
            });
        });
    </script>
@endsection