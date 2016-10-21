@extends('layouts.app')

@section('title')
    Edit Profile
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">Profile</div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('profile/update/'.$user->id) }}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="text" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Update Profile
                                </button>
                            </div>
                        </div>

                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
