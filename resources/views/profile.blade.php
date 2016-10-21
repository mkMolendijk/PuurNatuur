@extends('layouts.app')

@section('title')
    Profile
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
                            <div class="col-md-6 ">
                                <!-- TODO: DIT statement aanpassen -->
                                @if(Session('cart'))
                                    @foreach(Session('cart') as $item)
                                        <p>Item ID: {{$item}}</p>
                                    @endforeach
                                @else
                                    Je hebt geen Arduino's
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
