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

                    {!! Form::model($docente, ['route' => ['docente.update', $docente->cedula], 'method'=>'PUT']) !!}  
                        <div class="form-row">                       
                        <div class="col-lg-1">
                            {!!Form::label('Cedula: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('cedula',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>                        
                        <div class="col-lg-1">
                            {!!Form::label('Direccion: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('direccion',null,['class'=>'form-control-plaintext', 'placeholder'=>'Direccion', 'readonly'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('C.Familiar: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('carga_familiar',null,['class'=>'form-control-plaintext', 'placeholder'=>'Carga Familiar', 'readonly'])!!}
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            {!!Form::label('Nombres: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('nombres',null,['class'=>'form-control-plaintext', 'placeholder'=>'Nombres', 'readonly'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Telf.Movil: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('tlf_movil',null,['class'=>'form-control-plaintext', 'placeholder'=>'Ej: 0412-4444444', 'readonly'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Hijos: ')!!}
                        </div>
                        <div class="col-lg-2">
                            {!!Form::text('cantidad_hijos',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cant. Hijos', 'readonly'])!!}
                        </div>
                        {{--}}
                        <div class="col-lg-1" align="center">
                            <a href="{{ route('hijos') }}" class="btn btn-primary">...</a>
                        </div>--}}
                    </div>
                    <br>

                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            {!!Form::label('Apellidos: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('apellidos',null,['class'=>'form-control-plaintext', 'placeholder'=>'Apellidos', 'readonly'])!!}
                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Telf. Fijo: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('tlf_local',null,['class'=>'form-control-plaintext', 'placeholder'=>'Ej: 0251-2222222', 'readonly'])!!}
                        </div>
                    </div>
                    <br>
                    
                    <div class="form-row">
                       
                        <div class="col-lg-2">
                            {!!Form::label('Fecha de Nacimiento:')!!}
                        </div>
                        <div class="col-lg-2">
                            <!-- Aca va un campo tipo date, el input es solamente una prueba-->
                            {!!Form::text('fecha_nacimiento',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}

                        </div>
                        <div class="col-lg-1">
                            {!!Form::label('Edo. Civil:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('edo_civil',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                            
                        </div>
                         
                       
                        <div class="col-lg-1">
                            {!!Form::label('Correo:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('email',null,['class'=>'form-control-plaintext', 'placeholder'=>'example@example.com', 'readonly'])!!}
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-lg-1">
                            <label class=" col-form-label">Sexo:</label>
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('sexo',null,['class'=>'form-control-plaintext', 'placeholder'=>'example@example.com', 'readonly'])!!}
                            
                        </div>
                    </div>
                    <br>

                        <div class="form-row">
                            <div class="col-12" align="center">
                                {!!Form::submit('Atras',['class'=>'btn btn-danger'])!!}
                                {!!Html::decode(link_to_route('datoslaborales_docente.show', '<button type="button" class="btn btn-danger btn">Datos Laborales</button>', $docente->cedula))!!}
                            </div>
                        </div>                          
                    {!! Form::close() !!}

@endsection