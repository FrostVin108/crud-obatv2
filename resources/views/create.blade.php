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
                    <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description" name="description">
                  </div>
                  @error('description')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                  @enderror

                  <div class="form-group">
                    <label for="exampleInputEmail1">UOM</label>
                    <input type="text" class="form-control @error('uom') is-invalid @enderror" placeholder="Enter UOM" name="uom">
                  </div>
                  @error('uom')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
                  @enderror

                  <div class="form-group">
                    <label for="exampleInputEmail1">Item Code</label>
                    <input type="number" class="form-control @error('item_code') is-invalid @enderror" placeholder="Enter Item Code" name="item_code">
                  </div>
                                @error('item_code')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                  <div class="form-group" >
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" class="form-control @error('stock') is-invalid @enderror" placeholder="Enter Stock On Hand" name="stock">
                  </div>
                  @error('stock')
                  <div class="alert alert-danger mt-2">
                      {{ $message }}
                  </div>
                  @enderror

                      <button type="submit" class="btn btn-success">Submit</button>
                      
                </form>    
                <a href="{{ route('obat.home') }}" ><button class="btn btn-warning">Return</button></a>
        </div>
    </div>
        
            

            




@stop