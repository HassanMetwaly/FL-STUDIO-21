@extends('layout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item">
        <img src="{{ asset('images') }}/roblox-bg.jpeg">
        <div class="carousel-caption d-none d-md-block">
            <h2>راحتك تهمنا</h2>
            <p>اهلا بك في متجري الرائع</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="{{ asset('images') }}/roblox-bg.jpeg">
        <div class="carousel-caption d-none d-md-block">
            <h2>راحتك تهمنا</h2>
            <p>اهلا بك في متجري الرائع</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="{{ asset('images') }}/roblox-bg.jpeg">
        <div class="carousel-caption d-none d-md-block">
            <h2>راحتك تهمنا</h2>
            <p>اهلا بك في متجري الرائع</p>
        </div>
    </div>
   </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection