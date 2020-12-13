@extends('moneda.layout')
@section('content')

<br><br><br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Visualización de la moneda</h2>
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

  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" value="{{ $moneda->nombre }}" placeholder="Introduce nombre" name ="nombre" readonly>
  </div>
  <div class="form-group">
    <label for="simbolo">Símbolo</label>
    <input type="text" class="form-control" value="{{ $moneda->simbolo }}" placeholder="Introduce nombre" name ="simbolo" readonly>
  </div>
  <div class="form-group">
    <label for="pais">País</label>
    <input type="text" class="form-control" value="{{ $moneda->pais }}" placeholder="Introduce nombre" name ="pais" readonly>
  </div>
  <div class="form-group">
    <label for="valor">Valor</label> 
    <input type="text" class="form-control" value="{{ $moneda->valor }}" placeholder="Introduce nombre" name ="valor" readonly>
  </div>
  <div class="form-group">
    <label for="fecha">Fecha</label>
    <input type="text" class="form-control" value="{{ $moneda->fecha }}" placeholder="Introduce nombre" name ="fecha" readonly>
  </div>

@endsection