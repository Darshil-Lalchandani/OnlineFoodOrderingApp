@extends('masterLoggedIn')

@section('content')

<div class="card-deck">
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/dosa.jpg')}}" alt="dosa">
    <div class="card-body">
      <h5 class="card-title">Dhosa</h5>
      <p class="card-text">Exotic flattened dough with potato stuffings indside. Served with chutney and sambhar.</p>
      <h6>₹100</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/punjabi-thali.png')}}" alt="punjabi-thali">
    <div class="card-body">
      <h5 class="card-title">Punjabi Thali</h5>
      <p class="card-text">1 Paneer Butter Masala, 6 kulcha, Dal, Jeera Rice, Buttermilk.</p>
      <h6>₹280</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">New</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/gujarati-thali.jfif')}}" alt="gujarati-thali">
    <div class="card-body">
      <h5 class="card-title">Gujarati Thali</h5>
      <p class="card-text">1 Undhyu, 6 butter roti, dal, rice, papad, Buttermilk.</p>
      <h6>₹250</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/rasgulla.jpg')}}" alt="rasgulla">
    <div class="card-body">
      <h5 class="card-title">Rasgulla</h5>
      <p class="card-text">Fried rice is a dish of cooked rice that has been stir-fried in a frying pan and is mixed with other ingredients such as eggs, vegetables, seafood, or meat.</p>
      <h6>₹40</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
</div>

@stop
