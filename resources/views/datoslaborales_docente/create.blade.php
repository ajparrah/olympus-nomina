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
                       <h4 class="text-center">DATOS LABORALES</h4>
                   </div>
                </div>
                <br>
                <div class="container"> 

                {!! Form::open(['route' => 'datoslaborales_docente.store', 'method'=>'POST']) !!}
                  
                        </div>
                        <div class="form-row">

                        <div class="col-lg-1" align="center">
                            {!!Form::label('Banco: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::select('cod_banco',$bancos->pluck('nombre', 'cod'),null,['class'=>'form-control'])!!}
                        </div>



                        <div class="col-lg-1">
                            {!!Form::label('N° de Cuenta: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('nro_cuenta',null,['class'=>'form-control', 'placeholder'=>'N° de Cuenta'])!!}
                        </div>


                        <div class="col-lg-1">
                            {!!Form::label('Tipo de Cuenta:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::select('tipo_cuenta',['Ahorro' => 'Ahorro', 'Corriente' => 'Corriente'],null, ['class'=>'form-control'])!!}
                        </div>



                    </div>
                    <br>
                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            {!!Form::label('Estatus:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::select('estatus',['Contratado' => 'Contratado', 'No Contratado' => 'No Contratado'],null, ['class'=>'form-control'])!!}
                        </div>
                            <div class="col-1">
                                {!!Form::label('Escalafones: ')!!}
                            </div>
                            <div class="col-3">                         
                               {!!Form::select('cod_escalafon',$escalafones->pluck('nombre', 'cod'),null,['class'=>'form-control'])!!}
                        </div>

                        <div class="col-lg-1">
                            {!!Form::label('Nivel de Instruccion:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::select('grado_instruccion',['Bachiller' => 'Bachiller', 'Universitario' => 'Universitario','Magister' => 'Magister','Doctorado' => 'Doctorado'],null, ['class'=>'form-control'])!!}
                        </div>


                    </div>
                    <br>

                    <div class="form-row">
                       
                       <div class="col-lg-2">
                            {!!Form::label('Fecha De Ingreso:')!!}
                        </div>
                        <div class="col-lg-3">
                            <!-- Aca va un campo tipo date, el input es solamente una prueba-->
                        {{ Form::date('fecha_ingreso', new \DateTime(), ['class' => 'form-control']) }}
                        </div>
                    </div>

                        <br>
                            <div class="container" align="center">
                                        <a href="{{ route('docente.index') }}" class="btn btn-danger">Atras</a>

                            {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                    </div>
                           
                    {!! Form::close() !!}  


@endsection
