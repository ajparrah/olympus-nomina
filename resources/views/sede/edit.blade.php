@extends('menu')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('seccion')
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">SEDES</h2>
                    </div>
                    
                </div>
                <br>
                <div class="container">

                    {!!Form::model($sede, ['route' => ['sede.update', $sede->cod], 'method'=>'PUT'])!!}
                        

                        <div class="form-row">
                            <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Nombre: ')!!}
                                
                            </div>
                            <div class="col-3">
                                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                                
                                
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-4"></div>
                                <div class="col-1">
                                    {!!Form::label('Direccion: ')!!}
                                </div>
                                <div class="col-3">
                                    {!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'placeholder'=>'Direccion']) !!}
                                </div>
                        </div> 
                        <br>
                        <div class="form-row">
                                <div class="col-12" align="center">
                                    {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                </div>
                        </div>                         
                    {!! Form::close() !!}


                </div>
                    
                


                </div>           
				

@endsection