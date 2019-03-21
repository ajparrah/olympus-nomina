@extends('menu')
@section('seccion')

            <div class="col-lg-10">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">CONCEPTOS</h2>
                    </div>

                </div>
                <br>
                <div class="container">
                    <form>
                    <div class="form-row">
                       
                        <div class ="col-2"></div>
                        <div class="col-0.5">
                            <label class="col-form-label">Codigo:</label>
                        </div>
                        <div class="col-1.5">
                            <input type="text" class="form-control" placeholder="Codigo">
                        </div>
                        <div class="col-1">
                            <button type="submit" class="btn btn-danger">...</button>
                        </div>
                        <div class="col-1">
                            <label class="col-form-label">Descripcion:</label>
                        </div>

                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Descripcion">
                        </div>
                        </div>
                        <br>
                        <div class="form-row">
                       
                        <div class ="col-2"></div>
                        <div class="col-0.5">
                        <label class=" col-form-label">T. de Conceptos:</label>
                        </div>
                        <div class="col-2">
                            <select class="form-control">
                            <option> Tipos</option>
                            <option> Asignacion</option>
                            <option> Deduccion</option>
                        </select></div>

                        <div class ="col-1"></div>

                        <div class="col-1">
                        <label class=" col-form-label">Unidad:</label>
                        </div>
                        <div class="col-3">
                            <select class="form-control">
                            <option> Seleccione</option>
                            <option> Hora</option>
                            <option> Porcentaje</option>
                            <option> Otros</option>
                        </select></div>

                                               <div class ="col-0.5"></div>
                        <div class="col-0.5">
                            <label class="col-form-label">%:</label>
                        </div>
                        <div class="col-1">
                            <input type="text" class="form-control" placeholder="0.0">
                        </div> 
                        </div>

    

                        </div>
                        <br>
                        <div class="form-row">
                       
                        <div class ="col-2"></div>
                        <div class="col-0.5">
                            <label class="col-form-label">Nombre:</label>
                        </div>
                        <div class="col-1.5">
                            <input type="text" class="form-control" placeholder="Nombre de Concepto">
                        </div>
                    
                        <div class ="col-1"></div>

                        <div class="col-1">
                            <label class="col-form-label">Costo:</label>
                        </div>

                        <div class="col-3">
                            <input type="text" class="form-control" placeholder="Costo Unidad">
                        </div>
                        </div>
                        <br>
                        <div class="form-row">

                        <div class ="col-2"></div>

                        <div class="col-2">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-danger">Limpiar</button>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-danger">Editar</button>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        </div>
                        </form>



                </div>
            
                </div>
@endsection