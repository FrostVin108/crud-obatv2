@extends('layouts.app')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            {{-- <th scope="col">id</th> --}}
            <th scope="col">Item Code</th>
            <th scope="col">Description</th>
            <th scope="col">UOM</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
           
            
                <tr>
                    {{-- <td>{{ $id }}</td> --}}
                    <td>{{ $obatmodel->item_code }}</td>
                    <td>{{ $obatmodel->description }}</td>
                    <td>{{ $obatmodel->uom}}</td>
                    <td>{{ $obatmodel->stock }}</td>
                    <td>

                        <form method="POST" onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('obat.del',  $obatmodel->id) }}">
                          
                            @csrf
                            @method('delete')
                            <a class="btn btn-primary" href="{{ route('obat.edit', $obatmodel->id) }}"> Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
        </tbody>
    </table>
    <a href="{{ route('obat.home') }}" ><button class="btn btn-warning">Return</button></a> 
    </div>
</div>  
@stop