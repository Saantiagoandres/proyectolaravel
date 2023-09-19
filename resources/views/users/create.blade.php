@extends('layouts.plantilla')

@section('title', 'Registros create')

@section ('content')

    
    <h1>Registrate Aqui</h1>

        <form action="{{ route('users.store') }}" method="POST">

        @csrf

        <label>Nombre: <br> <input type="text" name="name"> </label>
        <br>
        <label>Apellidos: <br> <input type="text" name="lastname"> </label>
        <br>
        <label>Telefono: <br> <input type="number" name="telefono"> </label>
        <br>
        <label>Correo Electronico: <br> <input type="text" name="email"> </label>
        <br>
        <label>Contraseña: <br> <input type="password" name="password"> </label>
        <br>
        <label>Role</label>

        <select name="role_id">
            @foreach ($role as $role)
                <option value="{{$role['id']}}">{{$role['nombre_rol']}}</option>
            @endforeach
        </select>

</label>
<br><br>    


        <button type="submit">Registrate</button>

        </form>

@endsection