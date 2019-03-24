@extends('header')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('lista')

    <body>
    <br>
           <h2 class="text-center">LISTA DE CONCEPTOS</h2>
        <div class="container">
 


                                <div class="container" align="center">
                                    <a href="{{ route('conceptos.create') }}" class="btn btn-danger" style="width:180px">Agregar</a>
                                </div>                               
                            </div>
                            
                        </div> 

                        <br>
                        @if($confirmacion == 'cambio')
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>MENSAJE:</strong> Su operación ha sido procesada satisfactoriamente
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif






            <table id="conceptos" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripcion</th>    
                        <th class="text-center">Unidad</th>  
                        <th class="text-center">Valor</th>            
                        <th width="160px" class="text-center"><i class="fas fa-cog"></i></th>  
                    </tr>
                </thead>

                <tbody>
                    @foreach ($conceptos as $concepto)
                        <tr>
                        	<td class="text-center">{{$concepto->tipo_concepto}}</td>
                            <td class="text-center">{{$concepto->nombre}}</td>    
                            <td class="text-center">{{$concepto->descripcion}}</td>
                            <td class="text-center">{{$concepto->unidad}}</td>
                            <td class="text-center">{{$concepto->costo}}</td>
                         <td>                              
                                        {!! Form::open(['route' => ['conceptos.destroy', $concepto->cod], 'method'=>'DELETE']) !!}
                                            {!!Html::decode(link_to_route('conceptos.edit', '<i class="fas fa-pencil-alt"></i>', $concepto -> cod, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}

                                            {!!Form::submit('X',['class'=>'btn btn-danger'])!!}
                                        {!! Form::close()!!}

                
                                    </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <br>
        
        <div class="container">
            <a href="{{ route('principal') }}" class="btn btn-primary">Atras</a>
        </div>

        <script>
            $(document).ready(function() {
             $('#conceptos').DataTable({
                "language": {
                "info": "_TOTAL_ registros",
                "search": "Buscar",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },
                "lengthMenu": 'Mostrar <select>'+
                '<option value="10">10</option>'+
                '<option value="50">50</option>'+
                '<option value="100">100</option>'+
                '</select> registros',
                "loadingRecords":"Cargando...",
                "processing":"Cargando...",
                "emptyTable": "No hay datos",
                "zeroRecords": "No hay coincidencia",
                "infoEmpty": "",
                "infoFiltered": "",
             }});
             
            });

        </script>

@endsection