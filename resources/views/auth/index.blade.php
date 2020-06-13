@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <a href="/"><i title="Regresar" class="small material-icons left">arrow_back</i></a>
    <a href="/users/create" title="Agregar Categoria" class="waves-effect waves-light btn-floating btn-large blue lighten-1 right">
        <i class="material-icons">add</i>
    </a>

    <h2 class="header center-align">Usuarios</h2>
    <div class="row">
        <table class="striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="/users/{{$user->id}}/edit" title="Editar"
                            class="waves-effect waves-light btn-floating btn-large amber accent-3">
                                <i class="material-icons">edit</i>
                            </a>
                        </td>
                        <td>
                            <strong id="{{$user->id}}">
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
        @include('custom.usermodals.deleteuser')
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/openmodal.js')}}"></script>
@endsection
