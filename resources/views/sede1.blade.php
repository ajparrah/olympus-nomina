@extends('menu')

@section('seccion')
			<div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-center">SEDES</h2>
                    </div>
                    
                </div>
                <br>
                <div class="container">
                    <!--Form::model($user, ['route' => ['user.update', $user->id]])-->
                    {!!Form::model($sede, ['route' => ['sede.update', $sede->cod], 'method'=>'PUT'])!!}

                    
                        

                        <div class="form-row">
                            <div class="col-4"></div>
                            <div class="col-1">
                                {!!Form::label('Nombre: ')!!}
                                
                            </div>
                            <div class="col-3">
                                {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
                                
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-4"></div>
                                <div class="col-1">
                                    {!!Form::label('Direccion: ')!!}
                                </div>
                                <div class="col-3">
                                    {!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'placeholder'=>'Direccion']) !!}
                                </div>
                        </div> 
                        <br>
                        <div class="form-row">
                                <div class="col-12" align="center">
                                    {!!Form::submit('Guardar',['class'=>'btn btn-danger'])!!}
                                </div>
                        </div>                         
                    {!! Form::close() !!}

                    <!--
                    <form method="POST" action="">

                    <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                <label class="col-form-label">Codigo:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Codigo" name="codigo">
                            </div>
                    </div>
                    <br>
                    
                    <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                <label class="col-form-label">Nombre:</label>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Direccion" name="nombre">
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-4"></div>
                            <div class="col-1">
                                <label class="col-form-label">Direccion:</label>
                            </div>
                            <div class="col-3">
                                <textarea class="form-control" rows="3" id="comment" placeholder="Descripcion" name="direccion"></textarea>
                            </div>
                    </div>
                    <br>
                    <div class="form-row">
                        
                        <div class="col-2" align="center">
                            <input type="submit" value="Guardar">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Guardar</button>
                        </div>
                        
                    </div>

                    </form>
                    -->

                </div>
                    
                


                </div>           
				

@endsection