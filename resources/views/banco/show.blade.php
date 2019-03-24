@extends('menu')

@section('seccion')

<div class="col-lg-10">
				<h1 class="text-center">BANCOS</h1>

                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6">
                            {!! Form::open(['route' => 'banco.store', 'method'=>'POST']) !!}
                            <form action="">
                                <div class="form-group">
                                    {!!Form::label('Codigo: ')!!}
                                        <div class="form-row">
                                            <div class="col-lg-12">
                                                {!!Form::text('cod',null,['class'=>'form-control-plaintext', 'placeholder'=>'Codigo: Ej. 01xx'])!!}
                                            </div>
                                        </div>                    
                                </div>
                                <div class="form-group">
                                    {!!Form::label('Nombre: ')!!}
                                    {!!Form::text('nombre',null,['class'=>'form-control-plaintext', 'placeholder'=>'Nombre del Banco', 'readonly'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::label('Contacto: ')!!}
                                    {!!Form::text('contacto',null,['class'=>'form-control-plaintext', 'placeholder'=>'Contacto dentro del banco', 'readonly'])!!}
                                </div>                               
                                <div class="form-group">
                                    {!!Form::label('Descripcion: ')!!}
                                    {!!Form::text('descripcion',null,['class'=>'form-control-plaintext', 'placeholder'=>'Detalles del banco', 'readonly'])!!} 
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-3" align="center">
                                        <a href="{{ route('banco.index') }}" class="btn btn-danger">Atras</a>
                                    </div>
                                    <div class="col-lg-3" align="center">
                                        {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                    </div>                                                          
                                </div>
                            </form>

                            {!! Form::close() !!}
                        </div>                        
                        
                    </div>
                </div>
                <br>
                <br>
                <br>   
                
                
			</div>
@endsection

