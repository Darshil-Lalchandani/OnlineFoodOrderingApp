@extends('master')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-body">
      @if(session()->get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <span>
            {{ session()->get('success') }}
          </span>

        </div>
      @endif
      <form action="add_data" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label> Name </label>
            <input type="text" name="uname" class="form-control" required>

          </div>
          <div class="col-md-6">
            <label> Email </label>
            <input type="text" name="uemail" class="form-control" required>

          </div>
          <div class="col-md-6">
            <label> Password </label>
            <input type="text" name="upass" class="form-control" required>

          </div>
          <div class="col-md-6">
            <label> Confirm Password </label>
            <input type="text" name="upass2" class="form-control" required>

          </div>

        </div>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>

      </form>
    </div>
  </div>
</div>
@stop
