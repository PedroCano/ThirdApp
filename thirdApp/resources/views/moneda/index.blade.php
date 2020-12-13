@extends('moneda.layout')
@section('content')
    
    <br><br><br><br><br>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Simbolo</th>
          <th scope="col">Pais</th>
          <th scope="col">Valor</th>
          <th scope="col">Fecha</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
    @foreach ($monedas as $moneda)
        <tr class="table-info">
          <th scope="row">{{ $moneda->id }}</th>
          <td>{{ $moneda->nombre }}</td>
          <td>{{ $moneda->simbolo }}</td>
          <td>{{ $moneda->pais }}</td>
          <td>{{ $moneda->valor }}</td>
          <td>{{ $moneda->fecha }}</td>
          <td>
          <form action="{{ route('moneda.destroy',$moneda->id) }}" method="POST">
            
            <a class="btn btn-info" href="{{ route('moneda.show',$moneda->id) }}">Show</a>
    
            <a class="btn btn-primary" href="{{ route('moneda.edit',$moneda->id) }}">Edit</a>
    
            @csrf
            @method('DELETE')
    
            <button type="submit" class="btn btn-danger">Delete</button><br><br>
            </form>
          </td>
        </tr>
    @endforeach
      </tbody>
    </table>
    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('moneda.create') }}" style="background-color:#bee5eb;color:black;border-color:white;"> Crear nueva moneda</a><br>
                </div>
            </div>
    </div>
    
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif
    {{ $monedas->links() }}
@endsection