@extends('menu')
@section('seccion')
			<div class="col-lg-10">
				<h1 class="text-center">REVISION DE NOMINA ESPECIAL</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Escalafon</th>
                            <th scope="col">Trabajos</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Total a Pagar</th>
                            <th scope="col">Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Trabajos</td>
                            <td>Descripcion</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpreespecial') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpreespecial') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpreespecial') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Asignanciones</td>
                            <td>Deducciones</td>
                            <td>Total a Pagar</td>
                            <td><a href="{{ route('modificarpreespecial') }}" class="btn btn-primary">...</a></td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td>Totales:</td>
                            <td>Total Asignanciones</td>
                            <td>Total Deduciones</td>
                            <td>Total General</td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-row">
                    <div class="col-6">
                        <div align="center">
                              <button class="btn btn-danger" id="solicita" onClick="alert('La Pre Nómina ha sido Aprobada')" style="width:180px">Aprobar Pre Nómina </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div align="center">
                            <a href="{{ route('principal') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>                            
@endsection