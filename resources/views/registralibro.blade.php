@extends('layouts.plantilla')

@section('content')
<br>
<div class="containter">
<div class="row justify-content-center">
      <div class="col-md-8">
           <div class="card">
            <div class="card-header">{{ __('REGISTRAR MENU') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO MENU') }}
                    {{ session('status') }}

             <form action="{{route('guardarlibro')}}" method="POST">
                @csrf
                <label>
                    Menu del dia: <br>
                    <input name="nombre" type="text">
                   </label>
                <label>
                    Menu 1: <br>
                    <input name="genero" type="text">
                </label>   
                <label>
                    Menu 2: <br>
                    <input name="editorial" type="text">
                 </label> 
                 <button type="submit">Guardar</button>
              </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection