@extends('layouts.app')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <a href="create" ><button class="btn btn-primary">Create</button></a>
    </div>
</div>    
<hr>
<div class="card">
    <div class="card-body">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Item Code</th>
            <th scope="col">Description</th>
            <th scope="col">UOM</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($obatmodel as $key => $obm)
                <tr>
                    <td>{{ $key +1 }}</td>
                    <td>{{ $obm->item_code }}</td>
                    <td>{{ $obm->description }}</td>
                    <td>{{ $obm->uom}}</td>
                    <td>{{ $obm->stock }}</td>
                    <td>


                        
                        {{-- <form action="{{ route('obat.show', $obm->id) }}">
                            <button type="submit" class="btn btn-dark">Detail</button>
                        </form> --}}
                        <form method="POST" action="{{ route('obat.del',  $obm->id) }}">
                            <a class="btn btn-dark" href="{{ route('obat.show', $obm->id) }}"> detail</a>
                            @csrf
                            @method('delete')
                            <a class="btn btn-primary" href="{{ route('obat.edit', $obm->id) }}"> Edit</a>
                            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">
                    Data Post belum Tersedia.
                </div>
            @endforelse
        </tbody>
    </table>  
    </div>
</div>    
@stop
