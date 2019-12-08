@extends('layouts.app')
@section('content')

<br>
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

      <!-- <div class="container"> -->
	<div class="card">
		 <!-- <div class="card-header">
		 	<h3 align="center">FREEDOM CHRISTIAN CENTRE - HIS PRAISE SANCTUARY</h3>
		</div> -->
		<div class="card-body">
       
			<!-- <div class="container"> -->
   <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <!-- <div class="jumbotron" style="background-color:brown;"> -->
      <div class="carousel-inner">
      	 <div class="carousel-item">
          <img class="mx-auto d-block img-fluid" src= "{{ asset('img/slide/banner 4.jpg') }}" alt="slide 4" style="width:100%">
        </div>

        <div class="carousel-item active">
          <!-- <img src="" alt="slide 1" style="background-image: url('img/slide/banner 1.jpg');"> -->
          <img class="mx-auto d-block img-fluid" src= "{{ asset('img/slide/banner 1.jpg') }}" alt="slide 1" class="img-responsive" style="width:100%;">

        </div>
        <div class="carousel-item">
          <img class="mx-auto d-block img-fluid" src= "{{ asset('img/slide/banner 2.jpg') }}" alt="slide 2" style="width:100%;"> 
        </div>

        <div class="carousel-item">
          <img class="mx-auto d-block img-fluid" src= "{{ asset('img/slide/banner.jpg') }}" alt="slide 3" style="width:100%">
        </div>

          <img class="mx-auto d-block img-fluid" src= "{{ asset('img/slide/banner 3.jpg') }}" alt="slide 3" style="width:100%">
        </div>

      </div>
    </div>
    <!-- Left and right controls -->
    <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a> -->

  <!-- </div>
</div> -->
		</div>

	</div>

	<br>
  @include('shortcuts.social-media-handles')	
  
  <br><br>
 
<br>
<div class="container" style="background-color: #fff;">
<br>
  <h5 align="center" style="color: goldenrod;"><strong>FEATURED VIDEOS</strong></h5>
  <hr>

  @if(count($video) > 0)
	
		<div class="row">
		@foreach($video as $videos)
		<div class="col-md-4">
	<div class="card">
		<div class="card-header">
			<h5 align="center"><strong>{{ $videos->title}}</strong></h5>
			<!-- <small>Posted - {{$videos->created_at->diffForHumans()}} by Admin</small> -->

		</div>
		<div class="card-body">
	
				<p>{!! $videos->body !!}</p>
		</div>
	</div><br>
</div>
		@endforeach
	</div>
		
	 <h5 align="center"> {{ $video->links() }} </h5>
	<br>

	<p style="text-align: center;"><a href="{{ route('videos') }}" class="btn btn-secondary btn-lg" style="background-color:goldenrod;">Other Videos</a></p>

	@else

	<h4 align="center">Check Later!</h4>

	@endif
<br>

<div class="card">
	<div class="card-header">
		<h5 align="center" style="color:grey;  background-image: url(img/the-cross.jpg);">
          <a href="https://www.youtube.com/channel/UCn0GUg5PzQafVpXjgeK5xMg" class="btn btn-info btn-lg" style="background-color:goldenrod;">
           <i class="fa fa-youtube"></i> Click to Watch More Videos              
         </a> 
         Got Message For Us? <a href="{{ route('contact-us') }}" class="btn btn-info btn-lg" style="background-color:goldenrod;">
          <i class="fa fa-envelope"></i> Contact Us              
        </a>
      </h5>
	</div>
</div>
<br>
<h5 align="center" style="color: goldenrod;"><strong>JOIN US TODAY</strong></h5>
<hr>

@if(count($post) > 0)
	
		<div class="row">
		@foreach($post as $posts)
		<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<h4 align="center"><strong><a href="{{ route('posts', $posts->slug) }}">{{ $posts->title}}</a></strong></h4>
			<small>Updated - {{$posts->created_at->diffForHumans()}}</small>

		</div>
		<div class="card-body">
			<a href="{{ route('posts', $posts->slug) }}">
			<img class="mx-auto d-block img-fluid" src= "{{ asset('posts_images/'.$posts->image) }}" alt="post-image" class="img-responsive" style="width:100%;"></a>
			<hr>
				<p>{!!substr(strip_tags($posts->body), 0, 25) !!}... <a class="btn btn-default" href="{{ route('posts', $posts->slug) }}" style="background-color:goldenrod;"> Read More &raquo;</a></p></p>
			
		</div>
	</div><br>
</div>
		@endforeach
	</div>

	<h5 align="center"> {{ $post->links() }} </h5>
		
<br>
		<p style="text-align: center;"><a href="{{ route('posts') }}" class="btn btn-secondary btn-lg" style="background-color:goldenrod;"> All Events</a></p>
<br>
	@else

	<h4 align="center">No Event Found</h4>

	@endif


</div>
<br>

 <!-- <div class="jumbotron"style="background-image: url(img/worship-image.jpg);"> -->
    @include('shortcuts.shortnote')
<!-- </div> -->



@endsection