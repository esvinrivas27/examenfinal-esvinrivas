@extends('layouts.plantilla')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <b><div class="card-header">{{ __('CONSULTA DE MENUS') }}</div></b>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table col-12">
                        <thread>
                            
                                <tr>
                                    
                                    <td><b>MENU DEL DIA</b></td>
                                    <td><b>MENU 1</b></td>
                                    <td><b>MENU 2</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($libros as $libro)
                            
                            <tr>
                                <td>{{$libro->nombre}}</td>
                                <td>{{$libro->genero}}</td>
                                <td>{{$libro->editorial}}</td>
                                
                                <td>
                                <a href="{{route('eliminarlibro',$libro->id)}}" class="btn btn-danger">Borrar</a>
                              </td>
                              <td>
                                  <a href="{{route('muestralibro',$libro->id)}}" class="btn btn-warning">Editar</a>
                              </td>
                            </tr>
                            

                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection