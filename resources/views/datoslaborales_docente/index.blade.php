@extends('menu')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('seccion')

           <!--COLUMNA A MODIFICAR-->
           
            <div class="col-lg-10">
                <h2 class="text-center">LISTADO DE DOCENTES</h2>
                <br>
                <div class="container">
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" align="right">
                                    <a href="{{ route('docente.create') }}" class="btn btn-danger">Agregar</a>
                                </div>                               
                            </div>
                            
                        </div> 

                        <br>
                        @if($confirmacion == 'cambio')
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>MENSAJE:</strong> Su operación ha sido procesada satisfactoriamente
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                    
                        <table class="table table-striped table-bordered" id="tableSearch">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" width="15%">Cedula</th>
                                    <th scope="col" width="25%">Nombre</th> 
                                    <th scope="col" width="25%">Email</th>
                                    <th scope="col" width="10%">Grado</th>
                                    <th scope="col" width="10%">Escalafon</th>
                                    <th scope="col" width="15%"><i class="fas fa-cog"></i></th>                                     
                                </tr>
                            </thead>
                            <!--Recorriendo la base de datos-->
                            
                            <tbody>
                            @foreach ($datoslaborales_docentes as $datoslaborales_docente)    
                                <tr>
                                    <th scope="row">{{$datoslaborales_docente->ced_docente}}</th>
                                    <td>{{$datoslaborales_docente->docente->nombres}} {{$datoslaborales_docente->docente->apellidos}}</td>                       
                                    <td>{{$datoslaborales_docente->docente->email}}</td>
                                    <td>{{$datoslaborales_docente->grado_instruccion}}</td>
                                    <td>{{$datoslaborales_docente->escalafon}}</td>
                                    <td>    

                                        
                                        {!! Form::open(['route' => ['docente.destroy',$datoslaborales_docente->docente->cedula], 'method'=>'DELETE']) !!}

                                        {!!Html::decode(link_to_route('docente.show', '<i class="fas fa-eye"></i>', $datoslaborales_docente->docente->cedula, ['class' => 'btn btn-success' ,'title'=>'Ver']))!!}

                                         {!!Html::decode(link_to_route('docente.edit', '<i class="fas fa-pencil-alt"></i>', $datoslaborales_docente->docente->cedula, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}

                                            {!!Form::submit('X',['class'=>'btn btn-danger'])!!}
                                        {!! Form::close()!!} 

                                    </td>
                                </tr> 
                            @endforeach                           
                            </tbody>
                            

                        </table>

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12" align="left">
                                        <a href="{{ route('principal') }}" class="btn btn-danger">Atras</a>
                                    </div>                               
                                                                    
                                </div>
                                
                            </div>                       

                    
                        
                        
                         </div>

@endsection