@extends('layouts.app')

@section('content_header')
    <h1>Edit</h1>
  
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('obat.update', $obatmodel->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control @error('stock') is-invalid @enderror" placeholder="Enter Description" name="description" value="{{ old('description', $obatmodel->description) }}">
          </div>
          @error('description')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror

          <div class="form-group">
            <label for="exampleInputEmail1">UOM</label>
            <input type="text" class="form-control @error('stock') is-invalid @enderror" placeholder="Enter UOM" name="uom"  value="{{ old('uom', $obatmodel->uom) }}">
          </div>
          @error('uom')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror

          <div class="form-group">
            <label for="exampleInputEmail1">Item Code</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" placeholder="Enter Item Code" name="item_code" value="{{ old('item_code', $obatmodel->item_code) }}">
          </div>
          @error('item_code')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror

          <div class="form-group">
            <label for="exampleInputEmail1">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" placeholder="Enter Stock On Hand" name="stock" value="{{ old('stock', $obatmodel->stock) }}">
          </div>
            @error('stock')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
            @enderror

              <button type="submit" class="btn btn-secondary">Update</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <a href="{{ route('obat.home') }}" class="btn btn-warning">Return</a>
        </form>    
        
</div>
</div>

@stop