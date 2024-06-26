@extends('layouts.plantilla')

@section('content')
    {{-- <h1 class="title is-4">Estamos en el home</h1> --}}
    <div class="box box-principal">
        <div class="columns is-multiline is-mobile">

            @hasrole('escolares')
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-users"></i> Alumnos</h1>
                        <p>Ver, crear, editar alumnos</p><br>
                        <a  class="button is-info" href="{{route('escolaresAlumnos')}}">Acceder</a>
                    </div>
                </div>
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-address-card"></i> Docentes</h1>
                        <p>Ver, crear, editar docentes</p><br>
                        <a  class="button is-info" href="{{route('escolaresDocente')}}">Acceder</a>
                    </div>
                </div>
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-building"></i> Edificios y Salones</h1>
                        <p>Ver, crear, editar alumnos</p><br>
                        <a  class="button is-info" href="{{route('escolaresEdificios')}}">Acceder</a>
                    </div>
                </div>
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-building"></i>Gestión de Periodos</h1>
                        <p>Ver, crear, editar periodos</p><br>
                        <a  class="button is-info" href=" {{route('escolaresPeriodos')}} ">Acceder</a>
                    </div>
                </div>
            @endhasrole

            @hasanyrole('div_estudios')
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-book-open"></i> Materias</h1>
                        <p>Ver, crear, editar materias</p><br>
                        <a  class="button is-info" href="{{route('escolaresMaterias')}}">Acceder</a>
                    </div>
                </div>
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-address-card"></i> Planes de estudio y Especialidades</h1>
                        <p>Ver, crear, editar los planes de estudio</p><br>
                        <a  class="button is-info" href="{{route('escolaresPlanesEstudio')}}">Acceder</a>
                    </div>
                </div>
            @endhasrole

            @hasanyrole('docente') 
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-book-open"></i> Listas</h1>
                        <p>Ver lista de grupos</p><br>
                        <a  class="button is-info" href="{{route('docenteGruposDocente',Auth::user()->docente->id)}}">Acceder</a>
                    </div>
                </div>
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-address-card"></i> Calificaciones</h1>
                        <p>Subir calificaciones</p><br>
                        <a  class="button is-info" href="#{{--route('escolaresPlanesEstudio')--}}">Acceder</a>
                    </div>
                </div>
            @endhasrole

            @hasrole('alumno')
                <div class="column is-4-desktop is-6-mobile">
                    <div class="box">
                        <h1 class="title is-6 "><i class="fa-solid fa-address-card"></i> Materias inscritas</h1>
                        <p>Ver materias</p><br>
                        <a  class="button is-info" href="{{route('alumnoGruposAlumno', Auth::user()->alumno->id)}}">Acceder</a>
                    </div>
                </div>
            @endhasrole
            
        </div>
    </div>
@endsection
