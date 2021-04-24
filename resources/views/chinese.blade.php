@extends('masterLoggedIn')

@section('content')

<div class="card-deck">
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/manchurian.jpg')}}" alt="manchurian">
    <div class="card-body">
      <h5 class="card-title">Manchurian</h5>
      <p class="card-text">An Exotic dish made of mixed vegetable steamed formed into dumplings deep fried and cooked in a tangy sauce.</p>
      <h6>₹150</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">New</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/momos.jpg')}}" alt="momos">
    <div class="card-body">
      <h5 class="card-title">Momos</h5>
      <p class="card-text">Momo is a type of steamed dumpling with fresh vegetable filling.</p>
      <h6>₹80</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">New</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/noodles.jpg')}}" alt="noodles">
    <div class="card-body">
      <h5 class="card-title">Noodles</h5>
      <p class="card-text">A narrow strip of unleavened egg dough that has been rolled thin and dried and boiled.</p>
      <h6>₹150</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/fried_rice.jpg')}}" alt="fried rice">
    <div class="card-body">
      <h5 class="card-title">Fried Rice</h5>
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
