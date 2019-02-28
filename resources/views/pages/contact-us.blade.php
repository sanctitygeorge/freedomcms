@extends('layouts.app')
@section('content')

<br><br><br>

<div class="container">
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


<div class="container" style="display:table; background-color: #fff;">
    <br>
   <div class="card">
        <div class="card-header">
            <h3 align="center" style="color: goldenrod;"><strong> CONTACT US</strong></h3>
        </div>
    </div>
    <br>
        <div class="row">
            <div class="col-lg-6">
                <br>
                <p class="jumbotron" style="align:center;background-color:#fff;">
                    The chaplaincy is open for enquiries, prayers and counseling between the hours of 9.00am and 3.00pm WAT (Monday - Friday). 
                    If you reside within the city of Lagos, Nigeria, you are invited to worship with us or call for prayers and counseling.
                </p>

                <div class="jumbotron">
                    <h3 style="color:goldenrod;">OUR CHURCH BRANCHES</h3>
                    <hr>

                    <a class="btn btn-default" type="button" data-toggle="collapse" href="#lagos-island" aria-expanded="true" aria-controls="lagos-island" style="background-color:goldenrod;">
                        <i class="fa fa-home" style="padding:2px; font-size:20px; width:30px;"></i> LAGOS ISLAND 
                    </a>
                    <a class="btn btn-default" type="button" data-toggle="collapse" href="#lagos-mainland" aria-expanded="true" aria-controls="lagos-mainland" style="background-color:goldenrod;">
                        <i class="fa fa-home" style="padding:2px; font-size:20px; width:30px;"></i> LAGOS MAINLAND
                    </a>


                    <div class="collapse in" id="lagos-mainland">
                      <div class="well">
                        <br>
                        <p>
                            Freedom Christian Centre,
                            No. 3 Layode Street, off Wilmer Crescent,
                            Olodi Apapa - Lagos State, Nigeria.
                                        </p>
                    </div>
                </div>

                <div class="collapse in" id="lagos-island">
                  <div class="well">
                    <br>
                    <p>
                         Freedom Christian Centre,
                        No. 5/7 Kamoru Ogunlana Street, 
                        Behind Ace Purple Event Center,
                        Awoyaya, Lekki - Lagos State, Nigeria.
                    </p>
                </div>
            </div>   
        </div>

        <div class="jumbotron" style="background-color:#fff;">

            <div class="row">
                    <div class="col-md-6">
                        <h4 style="color:goldenrod;">Telephone</h4>
                        <p>+2348023223616 (9.00am - 3.00pm WAT)</p>
                    </div>
                    <div class="col-md-6">
                        <h4 style="color:goldenrod;">Email</h4>
                        <p>info@freedomchristiancenter.org.ng</p>
                    </div>
                </div>
            <hr>

            @include('shortcuts.social-media-handles')
            
        </div>

    </div>



    <!-- <div class="right-half" style="background-color:#fff; position:absolute; right:0px; width:50%; padding-left:50px;"> -->
        <div class="col-lg-6">
            <br>
            <h4 style="color:goldenrod; align:center;">Got Message For Us?</h4>
            <hr>
           <form class="form-horizontal" method="POST" action="{{ route('feedbacks.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-6 control-label"><i class="fa fa-user" style="padding:2px; font-size:20px; width:30px;"></i>Full Name</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                        <label for="subject" class="col-md-6 control-label">Subject</label>

                        <div class="col-md-8">
                            <input id="subject" type="subject" class="form-control" name="subject" required>

                            @if ($errors->has('subject'))
                            <span class="help-block">
                                <strong>{{ $errors->first('subject') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message" class="col-md-4 control-label">Your Message</label>

                        <div class="col-md-8">
                            <textarea id="message" type="textarea" class="form-control" name="message" required></textarea>

                            @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label"><i class="fa fa-phone" style="padding:2px; font-size:20px; width:30px;"></i>Phone Number</label>

                        <div class="col-md-8">
                            <input id="phone" type="phone" class="form-control" name="phone" required>

                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope" style="padding:2px; font-size:20px; width:30px;"></i>E-Mail</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>


                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success btn-lg" style="background-color:goldenrod;">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>

</div>
    
<!-- <div class="jumbotron"style="background-image: url(img/cloud-background.jpg);"> -->
    @include('shortcuts.shortnote')
</div>


@endsection