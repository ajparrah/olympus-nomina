<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>OLYMPUS</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    {!!Html::style('css/bootstrap.min.css')!!}
    <!--ESTILOS PROPIOS-->
    {!!Html::style('css/estilos.css')!!}
    {!!Html::favicon('img/UFT.png')!!}
    

    <!--
        <link rel="icon" type="image/png" href="img/UFT.png"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">

    -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                {!!Html::image('img/olimpus.png' , null, ['class'=>'logo'])!!}
                <!--<img class="logo" src="img/olimpus.png" alt="">-->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link mr-5" id="nav-color-wh" href="#">@Administrador</a>
                    <a class="nav-item nav-link mr-1" id="nav-color-wh"href="#"><i class="fas fa-user"></i></a>
                    <a class="nav-item nav-link mr-1" id="nav-color-wh"href="#"><i class="fas fa-cog"></i></a>
                    <a class="nav-item nav-link mr-1" id="nav-color-wh"href="#"><i class="fas fa-power-off"></i></a>
                </div>
            </div>
        </nav>
    </header>



    <div class="container-fluid">
        <div class="row">
            <!--<nav class="col-md-2 d-none d-md-block bg-light sidebar">-->
            <!--MENU IZQUIERDA-->
            <nav class="col-lg-2 col-sm-12 col-xs-12" id="sidebar-nav">
                <div id="sidebar-title">
                    <a href="{{ route('principal') }}">
                        <h3>Menu Principal</h3>
                    </a>
                </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gestion de Datos Básicos</a>
                    <ul class="collapse list-unstyled" id="submenu">
                        <li>
                            <a href="{{ route('datoslaborales_docente.index') }}">Docentes</a>
                        </li>

                        <li>
                             <a href="{{ route('sede.index') }}">Sedes</a>                       
                        </li>

                        <li>
                            <a href="{{ route('decanato.index') }}">Decanatos</a>
                        </li>

                        <li>    
                            <a href="{{ route('escuela.index') }}">Escuelas</a>                 
                        </li>   
                        <li>
                            <a href="{{ route('banco.index') }}">Bancos</a>
                        </li>                      
                        
                    </ul>
                </li>

                <li>
                    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gestion de Nomina</a>
                    <ul class="collapse list-unstyled" id="submenu2">
                        <li>
                            <li>
                                <a href="{{ route('conceptos.index') }}">Conceptos de pago</a>
                            </li>
                                <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nomina Docente</a>
                                    <ul class="collapse list-unstyled" id="submenu3">
                                        <li>
                                            <a href="{{ route('prenomina') }}">Pre Nomina</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('revisiondocentes') }}">Revision de Nomina</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cierredocentes') }}">Cierre de Nomina</a>
                                        </li>
                                    </ul>
                        </li>
                        
                        <li>
                            <a href="#submenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nomina Especial</a>
                            <ul class="collapse list-unstyled" id="submenu4">
                                <li>
                                    <a href="{{ route('prenominaespecial') }}">Pre Nomina</a>
                                </li>
                                <li>
                                    <a href="{{ route('revisionespecial') }}">Revisión de Nomina</a>
                                </li>
                                <li>
                                    <a href="{{ route('cierreespecial') }}">Cierre de Nomina</a>
                                </li>
                            </ul>
                        </li>                        
                    </ul>
                </li>

                <li>
                    <a href="#submenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reportes</a>
                    <ul class="collapse list-unstyled" id="submenu6">
                        <li>
                           <a href="#submenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Área Docente</a>
                            <ul class="collapse list-unstyled" id="submenu7">
                                <li>
                                    <a href="{{ route('reportedocente')}}">Por Lapso</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Área Especial</a>
                            <ul class="collapse list-unstyled" id="submenu8">
                                <li>
                                    <a href="{{ route('reporteespecial')}}">Por Lapso</a>
                                </li>
                            </ul>
                        </li>                     
                    </ul>                        
                </li>

                <li>
                    <a href="https:/www.google.com.ve" >Salir</a>
                </li>
            </ul>
        </nav>


                 @yield('seccion')
          <!--</div>-->
        </div>
    </div>
            

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
            $(document).ready(function() {
             $('#tableSearch').DataTable({
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

        

	<!--
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    -->
</body>
</html>