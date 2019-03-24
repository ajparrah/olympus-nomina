@extends('menu')

@section('seccion')

            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">ESCUELA</h2>
                    </div>
                    
                </div>
                <br>
                <div class="container">


                    {!! Form::open(['route' => 'escuela.store', 'method'=>'POST']) !!}
                        
                        <div class="form-row">
                                <div class="col-4"></div>
                                    <div class="col-1">
                                        {!!Form::label('Nombre: ')!!}
                                    </div>
                                <div class="col-3">
                                    {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Escuela'])!!}
                                </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Director: ')!!}
                            </div>
                            <div class="col-3">
                                {!!Form::text('director',null,['class'=>'form-control', 'placeholder'=>'Director'])!!}
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Decanato: ')!!}
                            </div>
                            <div class="col-3">
                                
                                    
                               {!!Form::select('decanato_cod',$decanatos->pluck('nombre', 'cod'))!!}
                                

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