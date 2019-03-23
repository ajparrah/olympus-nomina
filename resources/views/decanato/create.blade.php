@extends('menu')

@section('seccion')

            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">DECANATO</h2>
                    </div>
                    
                </div>
                <br>
                <div class="container">


                    {!! Form::open(['route' => 'decanato.store', 'method'=>'POST']) !!}
                        
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
                                {!!Form::label('Decano: ')!!}
                            </div>
                            <div class="col-3">
                                {!!Form::text('decano',null,['class'=>'form-control', 'placeholder'=>'Decano'])!!}
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Sede: ')!!}
                            </div>
                            <div class="col-3">
                                
                                    
                               {!!Form::select('cod_sede',$sedes->pluck('nombre', 'cod'),null,['class'=>'form-control'])!!}
                                

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