@extends('menu')
@section('seccion')
            <div class="col-lg-10">
                <h1 class="text-center">CIERRE DE NOMINA ESPECIAL</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Escalafon</th>
                            <th scope="col">Trabajos</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Total a Pagar</th>
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
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Trabajos</td>
                            <td>Descripcion</td>
                            <td>Total a Pagar</td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Trabajos</td>
                            <td>Descripcion</td>
                            <td>Total a Pagar</td>
                        </tr>
                        <tr>
                            <td scope="row">Cédula</td>
                            <td>Nombre y Apellido</td>
                            <td>Escalafon</td>
                            <td>Trabajos</td>
                            <td>Descripcion</td>
                            <td>Total a Pagar</td>
                        </tr>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td>Totales:</td>
                            <td>Total Trabajos</td>
                            <td></td>
                            <td>Total General</td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-row">
                    <div class="col-3">
                        <div align="center">
                              <button class="btn btn-danger" id="genera" onClick="alert('El Archivo .txt ha sido Generado Correctamente')" style="width:180px">Generar Archivo (.txt) </button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div align="center">
                            <button class="btn btn-danger btn-block" id="guarda" onClick="alert('La Nómina ha sido Guardada Correctamente')" style="width:180px">Guardar</button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div align="center">
                              <button class="btn btn-danger btn-block" id="envia" onClick="alert('Recibo enviado correctamente')" style="width:180px">Enviar Recibo al Correo</button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div align="center">
                              <a href="{{ route('principal') }}" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>            

@endsection