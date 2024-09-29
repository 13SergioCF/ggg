@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ADMINISTRACIÓN DE CLIENTES</h1>
@stop

@section('content')
<p>Ingrese la información del cliente</p>
@php 
if(session()->has('message') && session('message') == 'ok'):
@endphp

<x-adminlte-alert theme="success" title-class="text-uppercase" icon="fa fa-lg fa-check-circle" title="Registro completado" dismissable>
    ¡Registro completado con éxito!
</x-adminlte-alert>

@php 
endif;

@endphp
    <div class="card">
        <div class="card-body">

            <form action="{{route ('cliente.store')}}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        {{-- Apellidos --}}
                        <x-adminlte-input type="text" name="apellido" label="Apellidos" placeholder="Ingrese sus apellidos" label-class="text-lightblue" value="{{old('apellido')}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-6">
                        {{-- Nombres --}}
                        <x-adminlte-input type="text" name="nombre" label="Nombres" placeholder="Ingrese sus nombres" label-class="text-lightblue" value="{{old('nombre')}}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                {{-- Carnet de Identidad --}}
                <x-adminlte-input type="text" name="ci" label="Carnet de Identidad" placeholder="Ingrese su número de carnet de identidad" label-class="text-lightblue" value="{{old('ci')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-id-card text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                {{-- Email --}}
                <x-adminlte-input type="email" name="email" label="Correo Electrónico" placeholder="ejemplo@gmail.com" label-class="text-lightblue" value="{{old('email')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-envelope text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                {{-- Dirección --}}
                <x-adminlte-textarea type="text" name="direccion" label="Dirección" rows=5 label-class="text-lightblue" igroup-size="md" placeholder="Ingrese su dirección..." >
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-dark">
                            <i class="fas fa-map-marker-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    {{old('direccion')}}
                </x-adminlte-textarea>

                {{-- Estado Civil --}}
                <x-adminlte-select type="text" name="estado" label="Estado Civil" label-class="text-lightblue" igroup-size="md" value="{{old('estado')}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-heart text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione su estado civil</option>
                    <option value="Soltero">Soltero/a</option>
                    <option value="Casado">Casado/a</option>
                    <option value="Divorciado">Divorciado/a</option>
                </x-adminlte-select>

                {{-- Botón de Guardar --}}
                <x-adminlte-button class="btn-flat" type="submit" label="Guardar" theme="success" icon="fas fa-save"/>
            </form>
        </div>
    </div>

@stop

@section('css')
    {{-- Add aquí estilos adicionales --}}
    <style>
        .card {
            margin-top: 20px;
        }
    </style>
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
