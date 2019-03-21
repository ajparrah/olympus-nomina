@extends('menu')
@section('seccion')

 <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">REGISTRO DE DOCENTE</h2>
                    </div>
                    
                </div>
                <div class="container">                    
                <form>
                <br>
                    <div class="col-lg-12">
                        <h4 class="text-center">DATOS LABORALES</h4>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-2">
                            <label class=" col-form-label">Fecha de ingreso:</label>
                        </div>                       
                        <div class="col-lg-2">
                            <input type="date" class="form-control" >
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label">Sede:</label>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Cabudare
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Ujano
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Acarigua
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Portuguesa
                                </label>
                            </div>
                        </div>                    
                        <div class="col-lg-1">
                            <label class="col-form-label ">Escuela:</label>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control">
                            <option> Seleccione</option>
                            <option> 1</option>
                            <option> 2</option>
                            <option> 3</option>
                        </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-lg-2">
                            <label class="col-form-label">Escalafon:</label>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control">
                                <option> Seleccione</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                             </select>
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label">Decanato:</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" placeholder="Nombre del decanato" readonly>
                        </div>                       
                        <div class="col-lg-1">
                            <label class="col-form-label ">Estatus:</label>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control">
                                <option> Seleccione</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                             </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-lg-2">
                            <label class="col-form-label">Grado de instruccion:</label>
                        </div>
                        <div class="col-lg-2">
                            <select class="form-control">
                                <option> Seleccione</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                             </select>
                        </div>
                        <div class="col-lg-1">
                            <label class=" col-form-label">Turno:</label>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Diurno
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Nocturno
                                </label>
                            </div>
                        </div>                        
                        <div class="col-lg-1">
                            <label class="col-form-label ">Modalidad:</label>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Presencial
                                </label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    B-Learning
                                </label>                                
                            </div>
                            <div class="form-check">                                   
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                        SAIA
                                </label>
                            </div>                                 
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-12" align="center">
                            
                                <a href="{{ route('registrof3') }}" class="btn btn-primary">Siguiente</a>
                                                  
                                <button type="submit" class="btn btn-danger">Limpiar</button>
                           
                                <button type="submit" class="btn btn-danger">Guardar</button>                          
                           
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                                <a href="{{ route('registro') }}" class="btn btn-primary">Volver</a>

                        </div>                          
                    </div>  
                    <br>   
             </form>     
            </div>




@endsection