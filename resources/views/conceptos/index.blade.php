@extends('menu')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('seccion')

           <!--COLUMNA A MODIFICAR-->
           
			<div class="col-lg-10">
				<h2 class="text-center">LISTADO DE CONCEPTOS</h2>
                <br>
                <div class="container">
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" align="right">
                                    <a href="{{ route('conceptos.create') }}" class="btn btn-danger">Agregar</a>
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
                    
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" width="25%">Nombre</th>
                                    <th scope="col" width="15%">Tipo</th>
                                    <th scope="col" width="30%">Descripcion</th>
                                    <th scope="col" width="15%">Costo</th>
                                    <th scope="col" width="15%"><i class="fas fa-cog"></i></th>                                     
                                </tr>
                            </thead>
                            <!--Recorriendo la base de datos-->
                            
                            <tbody>
                            @foreach ($conceptos as $concepto)    
                                <tr>
                                    <th scope="row">{{$concepto->nombre}}</th>
                                    <td>{{$concepto->tipo_concepto}}</td>
                                    <td>{{$concepto->descripcion}}</td>
                                    <td>{{$concepto->costo}}</td>
                                    <td>    
                                        
                                        {!! Form::open(['route' => ['conceptos.destroy', $concepto->cod], 'method'=>'DELETE']) !!}
                                            {!!Html::decode(link_to_route('conceptos.edit', '<i class="fas fa-pencil-alt"></i>', $concepto -> cod, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}

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