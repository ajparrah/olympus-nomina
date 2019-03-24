@extends('header')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('lista')

    <body>
    <br>
           <h2 class="text-center">LISTA DE DECANATOS</h2>
        <div class="container">
 


                                <div class="container" align="center">
                                    <a href="{{ route('decanato.create') }}" class="btn btn-danger" style="width:180px">Agregar</a>
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






            <table id="decanatos" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Decano</th>
                        <th class="text-center">Sede</th>               
                        <th width="160px" class="text-center"><i class="fas fa-cog"></i></th>  
                    </tr>
                </thead>

                <tbody>
                    @foreach ($decanatos as $decanato)
                        <tr>
                            <td class="text-center">{{$decanato->nombre}}</td>
                            <td class="text-center">{{$decanato->nombre_decano}}</td> 
                            <td class="text-center">{{$decanato->sede->nombre}}</td>
                            <td>    
                                        
                                        {!! Form::open(['route' => ['decanato.destroy', $decanato->cod], 'method'=>'DELETE']) !!}
                                            {!!Html::decode(link_to_route('decanato.edit', '<i class="fas fa-pencil-alt"></i>', $decanato -> cod, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}

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
             $('#decanatos').DataTable({
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