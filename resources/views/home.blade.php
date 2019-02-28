@extends('layouts.app')

@section('content')

<br><br><br><br>

<!-- The sidebar -->
<div class="sidebar">
    <br>
  <a href="{{ route('home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
  <!-- <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a> -->
  <!-- <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a> -->
  <a href="{{ route('videos.index') }}"><i class="fa fa-fw fa-youtube"></i> Videos</a>
  <a href="{{ route('audios.index') }}"><i class="fa fa-fw fa-music"></i> Audios</a>
  <a href="{{ route('posts.index') }}"><i class="fa fa-fw fa-book"></i> Posts</a>
  <a href="{{ route('feedbacks.index') }}"><i class="fa fa-fw fa-envelope"></i> Feedbacks</a>
  <!-- <a href="{{ route('teams.index') }}"><i class="fa fa-fw fa-family"></i> Teams</a> -->
  <a href="{{ route('password.form') }}"><i class="fa fa-fw fa-key"></i> Change Password</a>
</div>

<!-- Page content -->
<div class="content">
  
<div class="jumbotron" style="background-image: url(img/background.jpg);">
  <div class ="container">


    @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
</div>
  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 align="center">
                Freedom Christian Centre - His Priase Sanctuary</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                {!! Form::open(['url'=>'upload','files'=>true]) !!}
                {!! Form::file('music') !!}
                {!! Form::submit('Submit') !!}
                {!! Form::close()  !!}

                <br>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection
