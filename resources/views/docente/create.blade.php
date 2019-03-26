@extends('menu')

@section('seccion')
            <!--MAIN-->
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">REGISTRO DE DOCENTE</h2>
                    </div>
                    
                </div>
                <br>
                <div class="row">
                   <div class="col-lg-12">
                       <h4 class="text-center">DATOS PERSONALES</h4>
                   </div>
                </div>
                <div class="container"> 

                    @if( count($errors) )
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>ERROR:</strong> @foreach ( $errors->all() as $error)
                                    [{{$error}}],
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                 {!! Form::open(['route' => 'docente.store', 'method'=>'POST']) !!}
                        
                        <div class="form-row">                       
                        <div class="col-lg-1">
                            {!!Form::label('Cedula: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('cedula',null,['class'=>'form-control', 'placeholder'=>'Cedula','required'])!!}
                        </div>

                        <div class="col-lg-1">
                            {!!Form::label('Direccion: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Direccion','required'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('C.Familiar: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('carga_familiar',null,['class'=>'form-control', 'placeholder'=>'Carga Familiar','required'])!!}
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            {!!Form::label('Nombres: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Nombres','required'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Telf.Movil: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('tlf_movil',null,['class'=>'form-control', 'placeholder'=>'Ej: 0412-4444444','required','maxlength'=>'12'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Hijos: ')!!}
                        </div>
                        <div class="col-lg-2">
                            {!!Form::text('cantidad_hijos',null,['class'=>'form-control', 'placeholder'=>'Cant. Hijos','required'])!!}
                        </div>
                        <div class="col-lg-1" align="center">
                            <a href="{{ route('datos_hijo.index') }}" class="btn btn-primary">...</a>
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            {!!Form::label('Apellidos: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Apellidos','required'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Telf. Fijo: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('tlf_local',null,['class'=>'form-control', 'placeholder'=>'Ej: 0251-2222222','required','maxlength'=>'12'])!!}
                        </div>
                    </div>
                    <br>
                    
                    <div class="form-row">
                       
                        <div class="col-lg-2">
                            {!!Form::label('Fecha de Nacimiento:')!!}
                        </div>
                        <div class="col-lg-2">
                            <!-- Aca va un campo tipo date, el input es solamente una prueba-->
                        {{ Form::date('fecha_nacimiento', new \DateTime(), ['class' => 'form-control','required']) }}


                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Edo. Civil:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::select('edo_civil',['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Divorciado' => 'Divorciado', 'Viudo' => 'Viudo'],null, ['class'=>'form-control','required'])!!}
                        </div>
                         
                       
                        <div class="col-lg-1">
                            {!!Form::label('Correo:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'example@example.com','required'])!!}
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-lg-1">
                            <label class=" col-form-label">Sexo:</label>
                        </div>
                        <div class="col-lg-3">
                            {!!Form::select('sexo',['Masculino' => 'Masculino', 'Femenino' => 'Femenino'],null, ['class'=>'form-control','required'])!!}
                        </div>
                    </div>
                    <br>
                            <div class="container" align="center">
                                        <a href="{{ route('datoslaborales_docente.index') }}" class="btn btn-danger">Atras</a>

                            {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                    </div>
                           
                    {!! Form::close() !!}  


@endsection