@extends('menu')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('seccion')

            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">ESCUELA</h2>
                    </div>
                    
                </div>
                <br>
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

                    {!! Form::model($escuela, ['route' => ['escuela.update', $escuela->cod],
                     'method'=>'PUT']) !!}
                        
                        <div class="form-row">
                                <div class="col-4"></div>
                                    <div class="col-1">
                                        {!!Form::label('Nombre: ')!!}
                                    </div>
                                <div class="col-3">
                                    {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Escuela','required'])!!}
                                </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Director: ')!!}
                            </div>
                            <div class="col-3">
                                {!!Form::text('director',null,['class'=>'form-control', 'placeholder'=>'Director','required'])!!}
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Decanato: ')!!}
                            </div>
                            <div class="col-3">
                                
                                    
                               {!!Form::select('decanato_cod',$decanatos->pluck('nombre', 'cod'),null,['class'=>'form-control','required'])!!}
                                

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