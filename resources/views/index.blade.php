@extends('layout.template')
@section('title')
articleplus
@stop
@section('main')

<div class="row">
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail" >
      <img src="{{URL::to('img/corgi.jpg')}}" alt="corgi.png" class="img-responsive">
      <div class="caption">
        <h3>Corgi</h3>
        <p>Hi guys, I want to learn human language</p>
        <div class="clearfix">
          <a href="#" class="btn btn-primary pull-left" role="button">Button</a>
        </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-8" >
    <ul class="nav nav-tabs">
  	  <li class="nav-item">
  	    <a class="nav-link active" href="#">Active</a>
  	  </li>
  	  <li class="nav-item">
  	    <a class="nav-link" href="#">Link</a>
  	  </li>
  	  <li class="nav-item">
  	    <a class="nav-link" href="#">Link</a>
  	  </li>
  	  <li class="nav-item">
  	    <a class="nav-link disabled" href="#">Disabled</a>
  	  </li>
    </ul>

  </div>
</div>
@stop
