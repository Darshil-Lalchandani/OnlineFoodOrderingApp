@extends('masterLoggedIn')

@section('content')

<div class="card-deck">
  <div class="card text-white bg-dark">
    <img class="card-img-top" src="{{URL::asset('/images/pizza.jpg')}}" alt="pizza" style="height:220px;">
    <div class="card-body">
      <h5 class="card-title">Pizza</h5>
      <p class="card-text">A flattened disk of bread dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella or other cheese.</p>
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
      <p class="card-text">Made from wheat flour and water, pasta is the resulting dough (pasta also literally means "dough"!) of which different shapes are rolled and cut. Pasta is boiled in water and served with a sauce.</p>
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
      <p class="card-text">Lasagna is made of stacked layers of thin flat pasta alternating with fillings of ragù (ground meats and tomato sauce) and other vegetables, cheese and seasonings and spices.</p>
      <h6>₹250</h6>
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
      <p class="card-text">Grilled bread rubbed with garlic and topped with olive oil, vegetables and salt.</p>
      <h6>₹140</h6>
      <a href="#" class="btn btn-primary">Add to cart</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Bestseller</small>
    </div>
  </div>
</div>

@stop
