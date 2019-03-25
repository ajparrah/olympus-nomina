@extends('menu')
@section('seccion')
			<div class="col-lg-10">
				<h1 class="text-center">DETALLE HIJO</h1>

                <div class="container">
                    {!! Form::open(['route' => 'datos_hijo.store', 'method'=>'POST']) !!}
                    <div class="row justify-content-center">

                        <div class="col-lg-6">
                            <form action="">
                                 <div class="form-group">
                                    {!!Form::label('Cedula del PADRE(DOCENTE): ')!!}
                                    {!!Form::text('ced_docente',null,['class'=>'form-control', 'placeholder'=>'Cedula PADRE(DOCENTE)'])!!}                          
                                </div>
                                <div class="form-group">
                                    {!!Form::label('Cedula: ')!!}
                                    {!!Form::text('cedula',null,['class'=>'form-control', 'placeholder'=>'Cedula'])!!}                          
                                </div>
 
                                <div class="form-group">
                                    {!!Form::label('Nombres: ')!!}
                                    {!!Form::text('nombres',null,['class'=>'form-control', 'placeholder'=>'Nombres'])!!}

                                </div>

                                <div class="form-group">
                                    {!!Form::label('Apellidos: ')!!}
                                    {!!Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}                            
                                </div>
                                <div class="form-group">
                                    {!!Form::label('Fecha de Nacimiento:')!!}
                                    {{ Form::date('fecha_nacimiento', new \DateTime(), ['class' => 'form-control']) }}                           
                                </div>
                                <div class="form-row">
                                    {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                    <div class="col-4" align="center">
                                        <a href="{{ route('datos_hijo.index') }}" class="btn btn-primary">Atras</a>
                                    </div>                        
                                </div>
                            </form>
                        </div>                        
                        {!! Form::close() !!}
                    </div>
                </div>

                <br>
                <br>
                <br>
             
                

@endsection