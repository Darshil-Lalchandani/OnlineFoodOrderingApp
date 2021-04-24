@extends('masterLoggedIn')

@section('content')

<div class="card-deck">
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/pizza.jpg')}}" alt="pizza" style="height:220px;">
    <div class="card-body">
      <h5 class="card-title">Pizza</h5>
      <p class="card-text">An Exotic dish made of mixed vegetable steamed formed into dumplings deep fried and cooked in a tangy sauce</p>
      <h6>₹250</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/pasta.jpg')}}" alt="pasta" style="height:260px;">
    <div class="card-body">
      <h5 class="card-title">Pasta</h5>
      <p class="card-text">Momo is a type of steamed dumpling with fresh vegetable filling</p>
      <h6>₹280</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">New</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/lasagna.jpg')}}" alt="lasagna" style="height:300px;">
    <div class="card-body">
      <h5 class="card-title">Lasagne</h5>
      <p class="card-text">A narrow strip of unleavened egg dough that has been rolled thin and dried and boiled</p>
      <h6>₹150</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/brushetta.jpg')}}" alt="brushetta">
    <div class="card-body">
      <h5 class="card-title">Brushetta</h5>
      <p class="card-text">Fried rice is a dish of cooked rice that has been stir-fried in a frying pan and is mixed with other ingredients such as eggs, vegetables, seafood, or meat.</p>
      <h6>₹140</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
</div>

@stop
