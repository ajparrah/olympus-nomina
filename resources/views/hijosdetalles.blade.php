@extends('menu')
@section('seccion')
			<div class="col-lg-10">
				<h1 class="text-center">DETALLE HIJO</h1>

                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-6">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Cedula:</label>
                                    <input type="text" class="form-control" placeholder="Nro.cedula">                               
                                </div>

                                <div class="form-group">
                                    <label for="">Nombres:</label>
                                    <input type="text" class="form-control" placeholder="Nombres"> 

                                </div>

                                <div class="form-group">
                                    <label for="">Apellidos:</label>
                                    <input type="text" class="form-control" placeholder="Apellidos">                             
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" placeholder="Nombres">                             
                                </div>
                                <div class="form-row">
                                    <div class="col-4" align="center">
                                        <button class="btn btn-danger" type="submit">Guardar</button>
                                    </div>
                                    <div class="col-4" align="center">
                                        <button class="btn btn-danger" type="submit">Limpiar</button>
                                    </div>
                                    <div class="col-4" align="center">
                                        <a href="{{ route('hijos') }}" class="btn btn-primary">Atras</a>
                                    </div>                        
                                </div>
                            </form>
                        </div>                        
                        
                    </div>
                </div>

                <br>
                <br>
                <br>
             
                

@endsection