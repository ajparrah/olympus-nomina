@extends('menu')
@section('seccion')
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">ESCUELA</h2>
                    </div>
                    
                </div>
                <br>
                <div class="container">
                    <form>
                        <div class="form-row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button type="button" class="btn btn-danger btn-lg btn-block">Listado de Escuelas.</button>
                            </div>
                        </div>
                    <br>
                    <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                <label class="col-form-label">Codigo:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Codigo">
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                <label class="col-form-label">Nombre:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                <label class="col-form-label">Director:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Director">
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-2"></div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Guardar</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Limpiar</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Editar</button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Eliminar</button>
                        </div>
                    </div>

                    </form>

                </div>
                    
                


                </div>           

@endsection