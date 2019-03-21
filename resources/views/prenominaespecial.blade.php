@extends('menu')
@section('seccion')

		<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
				<h1 class="text-center">PRE NOMINA ESPECIAL</h1>
			         </div>
                </div>
                <br>

                <div class="container">
                    <form>
                    <div class="form-row">
                        <div class="col-4"></div>
                    <div class="col-4">
                    <button type="button" class="btn btn-danger btn-lg btn-block">Ver Pre Nómina Existente.</button>
                    </div>
                    </div>
                </div>
                <br>

                    <div class="form-row">
                    <div class="col-lg-12">
                    <h5><strong>Generar Datos de Pre Nómina:</strong></h5>
                    <div>
            <br>

                     <div class="form-row">
                      <div class="col-1"></div> 
                    <div class="col-2.5">
                        <label class="col-form-label">Fecha Desde:</label>
                    </div>
                    <div class="col-1.5">
                        <input type="date" class="form-control" >
                    </div>
                    <div class="col-0.5"></div>
                    <div class="col-2.5">
                            <label class="col-form-label">Fecha Hasta:</label>
                        </div>
                        <div class="col-1.5">
                            <input type="date" class="form-control" >
                        </div>
                        <div class="col-0.5"></div> 
                        <div class="col-1">
                            <a href="{{ route('cargaprenominaespecial') }}" class="btn btn-primary">Generar</a>
                            
                        </div>
		             </div>
@endsection