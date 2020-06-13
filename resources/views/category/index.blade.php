@extends('layouts.app')

@section('title', 'Table Categories')

@section('content')
    <a href="/"><i title="Regresar" class="small material-icons left">arrow_back</i></a>
    <a href="/category/create" title="Agregar Categoria" class="waves-effect waves-light btn-floating btn-large blue lighten-1 right">
        <i class="material-icons">add</i>
    </a>

    <h2 class="header center-align">Categorias</h2>
    <div class="row">
        <table class="striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Prioridad</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->priority}}</td>
                        <td>
                            <a href="/category/show/tables/{{$category->id}}" title="Mostrar"
                            class="waves-effect waves-light btn-floating btn-large green darken-3">
                                <i class="material-icons">remove_red_eye</i>
                            </a>
                        </td>
                        <td>
                            <a href="/category/{{$category->id}}/edit" title="Editar"
                            class="waves-effect waves-light btn-floating btn-large amber accent-3">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                        <td>
                            <strong id="{{$category->id}}">
                                <button data-target="eliminar" class="waves-effect waves-light btn modal-trigger btn-floating btn-large deep-orange darken-4 modal-trigger">
                                    <i class="material-icons">delete</i>
                                </button>
                            </strong>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Modal --}}
        @include('custom.categorymodals.deletecategory')
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/openmodal.js')}}"></script>
@endsection
