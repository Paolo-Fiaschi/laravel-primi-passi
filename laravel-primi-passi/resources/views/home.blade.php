@extends('welcome')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.ytimg.com/vi/fH2waR4iJ7E/hqdefault.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/03/Oasis_Noel_and_Liam_WF.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://a6p8a2b3.stackpathcdn.com/f_TRCaK0Sx8a0VnMYobL28W2svQ=/414x310/smart/rockol-img/img/foto/upload/noelgallagher-pb19-sebastiano-11.jpg" class="d-block w-100" alt="...">
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
