@extends('menu')
@section('seccion')

           <!--COLUMNA A MODIFICAR-->
			<div class="col-lg-10">
				<h2 class="text-center">DETALLES HIJOS</h2>
                <br>
                <div class="container">
                    
                    <form>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Fecha nacimiento</th>
                                    <th scope="col">Mod</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>25.356.765</td>
                                    <td>Pablo Antonio</td>
                                    <td>Perez Xerez</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">15/10/1998</td>
                                    
                                        <td><a href="{{ route('hijosdetalles') }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('hijosdetalles') }}" class="btn btn-primary"><i class="fas fa-times"></i></a></td>
                                    
                                </tr>

                                <tr>
                                    <td>25.356.765</td>
                                    <td>Pablo Antonio</td>
                                    <td>Perez Xerez</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">15/10/1998</td>
                                    <td><a href="{{ route('hijosdetalles') }}" class="btn btn-primary">...</a></td>
                                </tr>

                                <tr>
                                    <td>25.356.765</td>
                                    <td>Pablo Antonio</td>
                                    <td>Perez Xerez</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">15/10/1998</td>
                                    <td><a href="{{ route('hijosdetalles') }}" class="btn btn-primary">...</a></td>
                                </tr>

                                <tr>
                                    <td>25.356.765</td>
                                    <td>Pablo Antonio</td>
                                    <td>Perez Xerez</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">15/10/1998</td>
                                    <td><a href="{{ route('hijosdetalles') }}" class="btn btn-primary">...</a></td>
                                </tr>

                                <tr>
                                    <td>25.356.765</td>
                                    <td>Pablo Antonio</td>
                                    <td>Perez Xerez</td>
                                    <td class="text-center">20</td>
                                    <td class="text-center">15/10/1998</td>
                                    <td><a href="{{ route('hijosdetalles') }}" class="btn btn-primary">...</a></td>
                                </tr>
                            </tbody>

                        </table>

                    </form>
                    	<a href="{{ route('registro') }}" class="btn btn-primary">Atras</a>
                </div>
@endsection