@extends('representatives.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2>Representatives Page</h2></div>
  <div class="card-body">
      
      <form action="{{ url('representatives') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" class="form-control"></br>
        <label>Current Route</label></br>
        <!-- <input type="text" name="route" id="route" class="form-control"></br> -->
        <select name="route"  id="route" class="btn btn-primary btn-sm">
            <option value="Barnes Place">Barnes Place</option>
            <option value="Rosmid Place">Rosmid Place</option>
            <option value="Cambridge Place">Cambridge Place</option>
            <option value="Gregory Road">Gregory Road</option>
        </select>
        </br></br>
        <label>Comments</label></br>
        <textarea name="comments" id="comments" class="form-control"></textarea></br>
        <input type="submit" value="Save" class="btn btn-success" style="float: right;"></br>
    </form>
   
  </div>
</div>
 
@stop
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif