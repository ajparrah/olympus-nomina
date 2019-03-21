@extends('menu')
@section('seccion')

           <div class="col-lg-10">
                <h1 class="text-center">PRE NOMINA DOCENTE</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Escalafon</th>
                            <th scope="col">Asignanciones</th>
                            <th scope="col">Deducciones</th>
                            <th scope="col">Total a Pagar</th>
                            <th scope="col">Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpre') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpre') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpre') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpre') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="form-row">
                    <div class="col-4">
                        <div align="center">
                              <button class="btn btn-danger" id="agrega" style="width:180px">Agregar</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div align="center">
                              <button class="btn btn-danger" id="elimina"  style="width:180px">Eliminar</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div align="center">
                            <a href="{{ route('prenomina') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>                       
@endsection