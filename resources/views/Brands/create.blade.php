@extends('main')
@section('content')
<div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Add Brand</strong>
         
        </div>
        
        <div class="card-body">
          <form class="form-inline" action="{{ route('brands.store') }}" method="POST">
              @csrf
            <label class="sr-only" for="inlineFormInputName2">brand</label>
            <input type="text" name="brandName" required class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Add Brand Name">      
            <button type="submit" class="btn btn-primary mb-2">Add Brand Name</button>
           
          </form>
          <a href="{{ route('brands.index') }}"><button style="margin-top: 10px" class="btn btn-dark mb-2">Back To All Brands</button></a> 
        </div>
        
      </div>
    </div>
  </div> <!-- end section -->
@endsection