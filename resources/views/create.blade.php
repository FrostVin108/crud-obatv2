@extends('layouts.app')

@section('content_header')
    <h1>Create</h1>
  
@stop

@section('content')

    <div class="card">
        <div class="card-body">
                <form method="POST" action="{{ route('obat.create') }}">
                @csrf
                @method('post')
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" placeholder="Enter Description" name="description">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">UOM</label>
                    <input type="text" class="form-control" placeholder="Enter UOM" name="uom">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Code</label>
                    <input type="number" class="form-control" placeholder="Enter Item Code" name="item_code">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" class="form-control" placeholder="Enter Stock On Hand" name="stock">
                  </div>

                      <button type="submit" class="btn btn-success">Submit</button>
                      
                </form>    
                <a href="{{ route('obat.home') }}" ><button class="btn btn-warning">Return</button></a>
        </div>
    </div>
        
            

            




@stop