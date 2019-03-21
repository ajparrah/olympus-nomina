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
                    <div class="col-lg-12">
                        <h4 class="text-center">DATOS BANCARIOS</h4>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-1">
                            <label class="col-form-label">Banco:</label>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control">
                                <option> Seleccione</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                             </select>
                        </div>
                        <div class="col-lg-2">
                            <label class=" col-form-label">Tipo de cuenta:</label>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control">
                                <option> Seleccione</option>
                                <option> Corriente</option>
                                <option> Ahorro</option>
                             </select>
                        </div>
                        <div class="col-lg-2">
                            <label class="col-form-label ">Nro de cuenta:</label>
                        </div>
                        <div class="col-lg-3">
                            
                            <input type="text" class="form-control" placeholder="01xx-xxxx-xx-xxxxxxxxxx">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-12" align="center">
                            
                                <a href="{{ route('registro') }}" class="btn btn-primary">Guardar</a>
                                                  
                                <button type="submit" class="btn btn-danger">Limpiar</button>
                                                       
                                <button type="submit" class="btn btn-danger">Editar</button>                          
                           
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                                <a href="{{ route('registrof2') }}" class="btn btn-primary">Volver</a>

                        </div>                          
                    </div>  
                    <br>   
             </form>     
            </div>
@endsection