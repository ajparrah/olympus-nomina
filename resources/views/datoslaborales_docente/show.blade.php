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

                {!! Form::model($datoslaborales_docente, ['route' => ['datoslaborales_docente.update', $datoslaborales_docente->ced_docente], 'method'=>'PUT']) !!}
                  
                    <div class="form-row">

                        <div class="col-lg-1">
                            {!!Form::label('CEDULA: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('ced_docente',null,['class'=>'form-control', 'placeholder'=>'Cedula del profesor','readonly'])!!}
                        </div>
                           

                            <div class="col-1">
                                {!!Form::label('Escalafon: ')!!}
                            </div>
                            <div class="col-3">                         
                               {!!Form::text('cod_escalafon',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>

                        <div class="col-lg-1">
                            {!!Form::label('Nivel de Instruccion:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('grado_instruccion',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                         <br>
                         <br>     
                        </div>
                        
                          

                    </div>                        


                        <div class="form-row">

                        <div class="col-lg-1" align="center">
                            {!!Form::label('Banco: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('$datoslaborales_docente->banco->nombre',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>



                        <div class="col-lg-1">
                            {!!Form::label('N° de Cuenta: ')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('nro_cuenta',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>


                        <div class="col-lg-1">
                            {!!Form::label('Tipo de Cuenta:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('tipo_cuenta',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>



                    </div>
                    <br>

                    <br>

                    <div class="form-row">
                         <div class="col-lg-1">
                            {!!Form::label('Estatus:')!!}
                        </div>
                        <div class="col-lg-3">
                            {!!Form::text('estatus',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>

                       <div class="col-lg-2" align="center">
                            {!!Form::label('Fecha De Ingreso:')!!}
                        </div>
                        <div class="col-lg-3">
                            <!-- Aca va un campo tipo date, el input es solamente una prueba-->
                        {!!Form::text('fecha_ingreso',null,['class'=>'form-control-plaintext', 'placeholder'=>'Cedula', 'readonly'])!!}
                        </div>
                    </div>

                        <br>
                            <div class="container" align="center">
                                        <a href="{{ route('datoslaborales_docente.index') }}" class="btn btn-danger">Atras</a>

                          
                                    </div>
                           
                    {!! Form::close() !!}  
                </div>  

@endsection
