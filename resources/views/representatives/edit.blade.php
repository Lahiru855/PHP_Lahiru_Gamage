@extends('representatives.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Details Update</div>
  <div class="card-body">
  <button onclick="history.back()"  class="btn btn-success" style="float: right;">Back to List</button></br>
      <form action="{{ url('representatives/' .$representatives->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$representatives->id}}" id="id" />
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" value="{{$representatives->name}}" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" value="{{$representatives->email}}" class="form-control"></br>
        <label>Telephone</label></br>
        <input type="text" name="telephone" id="telephone" value="{{$representatives->telephone}}" class="form-control"></br>
        <label>Joined Date</label></br>
        <input type="text" name="created_at" id="created_at" value="{{$representatives->created_at}}" class="form-control"></br>
        <label>Current Route</label></br>
        <!-- <input type="text" name="route" id="route" value="{{$representatives->route}}" class="form-control"></br>
        <label>Current Route</label></br> -->
        <!-- <input type="text" name="route" id="route" class="form-control"></br> -->
        <select name="route"  id="route" value="{{$representatives->route}}" class="btn btn-primary btn-sm">
            <option value="Barnes Place">Barnes Place</option>
            <option value="Rosmid Place">Rosmid Place</option>
            <option value="Cambridge Place">Cambridge Place</option>
            <option value="Gregory Road">Gregory Road</option>
        </select>
        </br></br>
        <label>Comments</label></br>
        <input type="text" name="comments" id="comments" value="{{$representatives->comments}}" class="form-control"></br>
        <!-- <textarea name="comments" id="comments" value="{{$representatives->comments}}" class="form-control"></textarea></br></br> -->
        <input type="submit" value="Update" class="btn btn-success" style="float: right;"></br>
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