@extends('layouts.app')

@section('template_title')
    Create Materia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Registro</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('materias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('materia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
