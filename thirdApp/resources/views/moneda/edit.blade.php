@extends('moneda.layout')
@section('content')

<br><br><br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar moneda</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('moneda.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your fields.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('moneda.update',$moneda->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="{{ $moneda->nombre }}" placeholder="Introduce nombre" name ="nombre">
  </div>
  <div class="form-group">
    <label for="simbolo">Símbolo</label>
    <input type="text" class="form-control" value="{{ $moneda->simbolo }}" placeholder="Introduce nombre" name ="simbolo">
  </div>
  <div class="form-group">
    <label for="pais">País</label>
    <input type="text" class="form-control" value="{{ $moneda->pais }}" placeholder="Introduce nombre" name ="pais">
  </div>
  <div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" value="{{ $moneda->valor }}" placeholder="Introduce nombre" name ="valor">
  </div>
  <div class="form-group">
    <label for="fecha">Fecha</label>
    <input type="date" class="form-control" value="{{ $moneda->fecha }}" placeholder="Introduce nombre" name ="fecha">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection