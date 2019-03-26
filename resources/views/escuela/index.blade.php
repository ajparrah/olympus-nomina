@extends('menu')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('seccion')

           <!--COLUMNA A MODIFICAR-->
           
            <div class="col-lg-10">
                <h2 class="text-center">LISTADO DE ESCUELAS</h2>
                <br>
                <div class="container">
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" align="right">
                                    <a href="{{ route('escuela.create') }}" class="btn btn-danger">Agregar</a>
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
                                    <th scope="col" width="25%">Nombre</th>
                                    <th scope="col" width="20%">Director</th> 
                                    <th scope="col" width="20%">Decanato</th>
                                    <th scope="col" width="20%">Sede</th>
                                    <th scope="col" width="15%"><i class="fas fa-cog"></i></th>                                     
                                </tr>
                            </thead>
                            <!--Recorriendo la base de datos-->
                            
                            <tbody>
                            @foreach ($escuelas as $escuela)    
                                <tr>
                                    <th scope="row">{{$escuela->nombre}}</th>
                                    <td>{{$escuela->director}}</td>                       
                                    <td>{{$escuela->decanato->nombre}}</td>
                                    <td>{{$escuela->decanato->sede->nombre}}</td>
                                    <td>    
                                        
                                        {!! Form::open(['route' => ['escuela.destroy', $escuela->cod], 'method'=>'DELETE']) !!}
                                            {!!Html::decode(link_to_route('escuela.edit', '<i class="fas fa-pencil-alt"></i>', $escuela -> cod, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}

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