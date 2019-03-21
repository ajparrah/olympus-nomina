@extends('menu')
@section('seccion')

           <!--COLUMNA A MODIFICAR-->
			<div class="col-lg-10">
				<h2 class="text-center">LISTADO DE SEDES</h2>
                <br>
                <div class="container">
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" align="right">
                                    <a href="{{ route('sede.create') }}" class="btn btn-primary">Agregar</a>
                                </div>                               
                            </div>
                            
                        </div> 

                        <br>
                    
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col" align="center"><i class="fas fa-cog"></i></th>                                    
                                </tr>
                            </thead>
                            <!--Recorriendo la base de datos-->
                            @foreach ($sedes as $sede)           
                            <tbody>
                                <tr>
                                    <td>{{$sede->nombre}}</td>
                                    <td>{{$sede->direccion}}</td>
                                    <td><a href="#" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-times"></i></a></td>
                                    
                                </tr>                            
                            </tbody>
                            @endforeach

                        </table>

                        <div class="row">

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12" align="left">
                                    <a href="{{ route('principal') }}" class="btn btn-primary">Atras</a>
                                </div>                               
                                                                
                            </div>
                            
                        </div>                       

                    
                    	
                        
                         </div>

@endsection