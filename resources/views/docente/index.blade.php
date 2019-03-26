@extends('header')
<?php $confirmacion=Session::get('confirmacion') ?>
@section('lista')

    <body>
    <br>
           <h2 class="text-center">LISTA DE DOCENTES</h2>
        <div class="container">
 


                                <div class="container" align="center">
                                    <a href="{{ route('docente.create') }}" class="btn btn-danger" style="width:180px">Agregar</a>
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


                    <div class="container" align="center">
                        <h2 class="text-center">DATOS PERSONALES</h2>
                    </div>  

            <table id="tableSearch" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="15%">Cedula</th>
                        <th scope="col" width="40%">Nombre Completo</th>
                        <th scope="col" width="30%">Email</th>            
                        <th scope="col" width="15%"><i class="fas fa-cog"></i></th>  
                    </tr>
                </thead>

                <tbody>
                    @foreach ($docentes as $docente)
                        <tr>
                            <td>{{$docente->cedula}}</td>
                            <td>{{$docente->nombres}} {{$docente->apellidos}}</td> 
                            <td>{{$docente->email}}</td>
                         <td>                              
                                        
                                        {!! Form::open(['route' => ['docente.destroy', $docente->cedula], 'method'=>'DELETE']) !!}
                                            {!!Html::decode(link_to_route('docente.show', '<i class="fas fa-eye"></i>', $docente -> cedula, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}
                                            {!!Html::decode(link_to_route('docente.edit', '<i class="fas fa-pencil-alt"></i>', $docente -> cedula, ['class' => 'btn btn-primary' ,'title'=>'Editar']))!!}


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

        

@endsection