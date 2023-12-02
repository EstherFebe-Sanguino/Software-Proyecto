@extends('layouts.app')
@section('content')
    <br>
    <br>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background-color: rgb(54, 98, 148)">
                    <h3 class="card-title">Productos</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            
                            <div class="input-group-append">
                                <a class="form-control btn-primary" href="{{route('productos.create')}}">Agregar producto</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th style="width: 20%">Nombre</th>
                                <th style="width: 10%">Descripcion</th>
                                <th style="width: 50%">Precio</th>
                                <th style="width: 10%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{$producto->nombreproducto}}</td>
                                    <td>{{$producto->descripcion}}</td>
                                    <td>{{$producto->precio}}</td>
                                    <td>
                                        <a href="{{ route('productos.edit', ['producto' => $producto]) }}"
                                            class="btn btn-info btn-xs">Editar
                                        </a>
                                        <a href="#"
                                            onclick="event.preventDefault();
                            document.getElementById('delete-producto-{{ $producto->id }}-form').submit();"
                                            class="btn btn-danger btn-xs">Eliminar
                                        </a>
                                        <form id="delete-producto-{{ $producto->id }}-form"
                                            action="{{ route('productos.destroy', ['producto' => $producto]) }}"
                                            method="POST" class="hidden">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
@endsection