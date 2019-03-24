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
                       <h4 class="text-center">DATOS PERSONALES</h4>
                   </div>
                </div>
                <div class="container">                    
                <form>
                    <div class="form-row">                       
                        <div class="col-lg-1">
                            <label class="col-form-label">Cedula:</label>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder="Cedula">
                        </div>
                        <div class="col-lg-1">
                            <input type="button" name="Submit32" button="" class="btn btn-danger" onclick="location='docenlist.html'" value="...">
                        </div>
                        <div class="col-lg-1">
                            <label class="col-form-label">Direccion:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Direccion">
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label ">C.Familiar:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Carga Familiar">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            <label class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Nombres">
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label">Telf. Movil:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control
                            "placeholder="Ej: 0412-4444444">
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label ">Hijos:</label>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" placeholder="Cant. Hijos">
                        </div>
                        <div class="col-lg-1" align="center">
                        	<a href="{{ route('hijos') }}" class="btn btn-primary">...</a>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                       
                        <div class="col-lg-1">
                            <label class="col-form-label">Apellidos:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Apellidos">
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label">Telf. Fijo:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control"
                            placeholder="Ej: 0251-2222222">
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label ">RIF:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="V-xxxxxxxx-0">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                       
                       	<div class="col-lg-2">
                            <label class=" col-form-label">Fecha de Nacimiento:</label>
                        </div>
                        <div class="col-lg-2">
                            <input type="date" class="form-control" >
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label">Edo. Civil:</label>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control">
                                <option> Seleccione</option>
                                <option> Soltero(a)</option>
                                <option> Casado(a)</option>
                                <option> Divorciado(a)</option>
                                <option> Viudo(a)</option>
                            </select>
                        </div>
                         
                       
                        <div class="col-lg-1">
                            <label class=" col-form-label ">Correo:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="example@example.com">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-lg-1">
                            <label class=" col-form-label">Sexo:</label>
                        </div>
                        <div class="col-lg-3">
                                <select class="form-control">
                                <option> Seleccione</option>
                                <option> Masculino</option>
                                <option> Femenino</option>
                                </select>
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-12" align="center">
                            
                                <a href="{{ route('registrof2') }}" class="btn btn-primary">Siguiente</a>
                                                  
                                <button type="submit" class="btn btn-danger">Limpiar</button>
                                                       
                                <button type="submit" class="btn btn-danger">Editar</button>                          
                           
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                        </div>                          
                    </div>  
                    <br>   
             </form>   


@endsection