@extends('master')

@section('content')

<div class="container">
  <div class="card bg-light">
    <div class="card-body">
      @if(session()->get('msg'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <span>
            {{ session()->get('msg') }}
          </span>

        </div>
      @endif
      <form action="check" method="post">
        @csrf
        <div class="row">

          <div class="col-md-6">
            <label>Enter Email </label>
            <input type="text" name="uemail" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label>Enter Password </label>
            <input type="text" name="upass" class="form-control" required>
          </div>

        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>

      </form>
    </div>
  </div>
</div>
@stop
