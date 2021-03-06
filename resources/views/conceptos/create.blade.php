@extends('menu')

@section('seccion')

<div class="col-lg-10">
				<h1 class="text-center">CONCEPTOS DE PAGO</h1>

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

                    <div class="row justify-content-center">

                        <div class="col-lg-6">


						{!! Form::open(['route' => 'conceptos.store', 'method'=>'POST']) !!}
                                
                                <div class="form-group">
									{!!Form::label('Nombre: ')!!}
									{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre del concepto de pago','required'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::label('Descripcion: ')!!}
                                    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'placeholder'=>'Descripcion','required']) !!}
                                </div>
                                <div class="form-group">
                                	{!!Form::label('Tipo de Concepto: ')!!}

									{!!Form::select('tipo_concepto',['NULL' => '','Asignacion' => 'Asignacion', 'Deduccion' => 'Deduccion'],null, ['class'=>'form-control','required'])!!}                                                               
                                </div>
                                <div class="form-group">
                                	{!!Form::label('Unidad: ')!!}

                                    <div class="form-row">
                                        <div class="col-9">

                                        	{!!Form::select('unidad',['NULL' => '','Hora' => 'Hora', 'Porcentaje' => 'Porcentaje', 'Otros'=>'Otros'],null, ['class'=>'form-control','required'])!!} 
                                        </div> 
                                        <div class="col-1">
                                            <label class="col-form-label">%:</label>
                                        </div>
                                        <div class="col-2">
                                        	{!!Form::text('porc_cant',null,['class'=>'form-control', 'placeholder'=>'0.0','maxlength'=>'3'])!!}
                                        </div>
                                    </div>                                
                                </div>                               
                                <div class="form-group">

                                	{!!Form::label('Costo: ')!!}
									{!!Form::text('costo',null,['class'=>'form-control', 'placeholder'=>'Costo de unidad','required','maxlength'=>'5'])!!} 
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-3" align="center">
                                        <a href="{{ route('conceptos.index') }}" class="btn btn-danger">Atras</a>
                                    </div>
                                    <div class="col-lg-3" align="center">
                                        {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                    </div>        
                                </div>
                             {!! Form::close() !!}
                        </div>                        
                        
                    </div>
                </div>
                <br>
                <br>
                <br>   
                
                
			</div>

@endsection