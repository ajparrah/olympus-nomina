@extends('menu')
@section('seccion')
       <div class="col-lg-10">
            <div class="row">
                    <div class="col-lg-12">
                        <h2 align="center">Modificar Pre Nómina Docente</h2>
                    </div>

                    <div class="container">
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-1">
                                <div class="text-center">
                                    <label class="col-form-label">Cedula:</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" placeholder="Cedula" readonly>
                            </div>
                            <div class="col-2">
                                <div class="text-center">
                                    <label class="col-form-label">Nombre y Apellido:</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" placeholder="Nombre y Apellido" readonly>
                            </div>
                            <div class="col-1">
                                <div class="text-center">
                                    <label class="col-form-label">Escalafon:</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" placeholder="Escalafon" readonly>
                            </div> 
                        </div>          
                        <br>
                    <div class="col-lg-12">
                        <h2 align="center">Conceptos:</h2>
                    </div>                    
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <div class="text-center">
                                    <label class="col-form-label">Asignaciones</label>
                                </div>
                            </div>
                               <div class="col-1">
                            <button type="submit" class="btn btn-danger">Agregar</button>
                        </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <label class="col-form-label">Cantidad</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <label class="col-form-label">Monto</label>
                                </div>
                            </div>                   
                        </div> 
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-3">
                            <select class="form-control">
                            <option> Seleccione</option>
                            <option> Horas Diurnas</option>
                            <option> Horas Nocturnas</option>
                            <option> Horas SAIA</option>
                            <option> Guarderia</option>
                        </select>
                    </div>
                            <div class="col-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Monto Asignacion" readonly>
                            </div>
                            <div class="col-1">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>                           
                        </div>
                        <br>
                        <div class="form-row">
                             <div class="col-5"></div>
                            <div class="col-2">
                                <div class="text-right">
                                    <label class="col-form-label">Total</label>
                                </div>
                            </div> 
                              <div class="col-3">
                                <input type="text" class="form-control" placeholder="Total Asignaciones" readonly>
                            </div>                      
                        </div>  
                        <br>                
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <div class="text-center">
                                    <label class="col-form-label">Deducciones</label>
                                </div>
                            </div>
                               <div class="col-1">
                            <button type="submit" class="btn btn-danger">Agregar</button>
                        </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <label class="col-form-label">Cantidad</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <label class="col-form-label">Monto</label>
                                </div>
                            </div>                   
                        </div> 
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-3">
                            <select class="form-control">
                            <option> Seleccione</option>
                            <option> Inasistencia Horas Diurnas</option>
                            <option> Inasistencia Horas Nocturnas</option>
                            <option> Inasistencia Horas SAIA</option>
                        </select>
                    </div>
                            <div class="col-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Monto Deduccion" readonly>
                            </div>
                           <div class="col-1">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        </div>                       
                        <br>
                                                <div class="form-row">
                             <div class="col-5"></div>
                            <div class="col-2">
                                <div class="text-right">
                                    <label class="col-form-label">Total</label>
                                </div>
                            </div> 
                              <div class="col-3">
                                <input type="text" class="form-control" placeholder="Total Deducciones" readonly>
                            </div>                      
                        </div> 
                        <br>
                        <br>
                        <div class="form-row">
                            <div class="col-5"></div>
                           <div class="col-2">
                                <div class="text-right">
                                    <label class="col-form-label">Total a Pagar</label>
                                </div>   
                                </div>                         
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Total a Pagar" readonly>
                            </div>
                        
                        </div>
                        <br>
                    <div class="form-row">
                        <div class="col-3"></div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Guardar</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Limpiar</button>
                        </div>
                        <div class="col-2">
                            <td><a href="{{ route('cargaprenomina') }}" class="btn btn-primary">Atras</a></td>
                        </div>                        
                    </div>
                    <br>
                    <br>                    
@endsection