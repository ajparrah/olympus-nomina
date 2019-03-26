@extends('header')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('lista')

    <body>
    <br>
           <h2 class="text-center">LISTA DE HIJOS DE PROFESORES</h2>
        <div class="container">
 


                                <div class="container" align="center">
                                    <a href="{{ route('datos_hijo.create') }}" class="btn btn-danger" style="width:180px">Agregar</a>
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






            <table id="datos_hijos" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Cedula de Padres</th>
                        <th class="text-center">Nombre de Padres</th>
                        <th class="text-center">Cedula</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Fecha de Nacimiento</th>               
                        <th width="160px" class="text-center"><i class="fas fa-cog"></i></th>  
                    </tr>
                </thead>

                <tbody>
                    @foreach ($datos_hijos as $datos_hijo)
                        <tr>
                            <td class="text-center">{{$datos_hijos->docente->cedula}}</td>
                            <td class="text-center">{{$datos_hijos->docente->nombres}}{{$datos_hijos->docente->apellidos}}</td> 
                            <td class="text-center">{{$datos_hijos->cedula}}</td>
                            <td class="text-center">{{$datos_hijos->nombres}}{{$datos_hijos->apellidos}}</td>
                            <td class="text-center">{{$datos_hijos->fecha_nacimiento}}</td>
                            <td>    
                                        
                                        {!! Form::open(['route' => ['datos_hijo.destroy', $datos_hijo->cedula], 'method'=>'DELETE']) !!}
                                            {!!Html::decode(link_to_route('decanato.edit', '<i class="fas fa-pencil-alt"></i>', $datos_hijo -> cedula, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}

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
             $('#datos_hijos').DataTable({
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