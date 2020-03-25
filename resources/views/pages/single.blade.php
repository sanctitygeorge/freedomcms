@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container" style="background-color: #fff;">

	<div class="card">
		<div class="card-header">
			<h3 align="center" style="color: goldenrod;"><strong> OUR EVENTS</strong></h3>
		</div>
	</div>
	
<br>
	
		<div class="row">
		<div class="col-md-12 col-md-offset-2">
	<div class="card">
		<div class="card-header">
			<h4 align="center"><strong>{{ $post->title}}</strong></h4>
			<!-- <small>Updated - {{$post->created_at->diffForHumans()}}</small> -->

		</div>
		<div class="card-body">
			<img class="mx-auto d-block img-fluid" src= "{{ asset('posts_images/'.$post->image) }}" alt="post-image" class="img-responsive" style="width:100%;">
			<hr>
			<!-- <div class="jumbotron"> -->
				<p>{!! $post->body !!}</p>
			<!-- </div> -->
		</div>
	</div><br>
</div>
	</div>

</div>
<br>

@include('shortcuts.shortnote')


@endsection