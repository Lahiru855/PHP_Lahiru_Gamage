@extends('representatives.layout')
@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Detail View of Sales Representative</h3>
                    </div>
                    <div class="card-body">
                        
                        <br/>
                        <br/>
                        <!-- With time limitations just changed the index blade..... -->
                        <button onclick="history.back()"  class="btn btn-success" style="float: right;">Back to List</button></br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Current Route</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $representatives->id }}</td>
                                        <td>{{ $representatives->name }}</td>
                                        <td>{{ $representatives->email }}</td>
                                        <td>{{ $representatives->telephone }}</td>
                                        <td>{{ $representatives->route }}</td>
                                        <td>{{ $representatives->comments }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection