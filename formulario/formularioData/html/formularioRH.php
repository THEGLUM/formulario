<!-- 
    COMIENZO DEL HTML DEL FORMULARIO DE LA GENTE DE RECUSOS HUMANOS
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de recusos humanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- conexion con los estilos de boostrap y los Javascripts -->
    <link rel="stylesheet" href="../css/formularioRH.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <!-- ESTE PEDAZO DE CODIGO ES LA PARTE MENU  -->
        <div class="navegator">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="../../../index.php">Almacontact</a>
            <a href="../../../index.php">
                <img src="../img/logo.png" alt="" width="30px" height="30px">
            </a>
            </div>
        </nav>
        </div>
    </header>

    <!-- ESTO ES EL CONTENEDOR QUE TIENE TODO EL APARTADO DEL FORMULARIO DE LOS DE RECUSOS HUMANOS -->
    <section class='contenedor'>
        <div class="img">
            <img src="../img/formularioRH.svg" alt="">
        </div>
        <form action="../../formularioPR.php" method="post">
            <!-- ACA LO SECCIONO POR UNOS DIV QUE ME VAN A DAR MEJOR ESTRUCTURA Y LEGIBILIDAD AL PROYECTO -->
            <div class="cajaPadre"> <!-- ACA COMIENZA LA CAJA PADRE Y QUE LA ESTRUCTURA COMO TAL -->
                <div class= 'cajaHija'><!-- ESTA ES LA CLASE QUE PUEDE TENER UN DIV Y SE PUEDE DUPLICAR LA CLASE PARA TENER UNA INFOMACION QUE SE LE INDIQUE -->

                <!-- 
                    ----------------------------
                        PREGUNTA DE TRANSPORTE
                    ---------------------------
                 -->
                <label for="medioTransporte">¿Cual es el medio de transporte que utilizas para ir a  tu trabjo?</label>
                <select name="medioTransporte" id="medioTransporte" class = 'form-select form-select-mb 2'>
                    <option slected value="">seleccione un medio de transporte</option>
                    <!-- EN ESTE TROZO DE CODIGO HAGO UNA CONSULTA PARA QUE ME TRAIGA TODO LO QUE SERIA LA INFOMACION SEGUN LO QUE SE NECESITE -->
                    <?php
                        $select = include_once ('../../conexion.php');
                        $select = $conn -> prepare('SELECT * FROM Transporte');
                        $select ->execute();
                        $datos =  $select -> fetchAll();
                        foreach ($datos as $valores):
                            echo '<option value="'.$valores["Id_Transporte"].'">'.$valores["Id_NombreTransporte"].'</option>';
                        endforeach;
                    ?>
                </select>
                </div>
                <!-- 
                    ----------------------------
                        PREGUNTA DE CONSUMO
                    ---------------------------
                 -->
                <div class= 'cajaHija'>
                <label for="frecuenciaFumar">¿Con que frecuencia fumas?</label>
                <select name="frecuenciaFumar" id="frecuenciaFumar" class = 'form-select form-select-mb'>
                    <option slected value="">seleccione la frecuencia con la que fumas</option>
                    <!-- EN ESTE TROZO DE CODIGO HAGO UNA CONSULTA PARA QUE ME TRAIGA TODO LO QUE SERIA LA INFOMACION SEGUN LO QUE SE NECESITE -->
                    <?php
                        $select = include_once ('../../conexion.php');
                        $select = $conn -> prepare('SELECT * FROM Frecuencia');
                        $select ->execute();
                        $datos =  $select -> fetchAll();
                        foreach ($datos as $valores):
                            echo '<option value="'.$valores["Id_frecuencia"].'">'.$valores["Id_nombreFrecuencia"].'</option>';
                        endforeach;
                    ?>
                </select>
                </div>
                <div class= 'cajaHija'>
                <label for="frecuenciaBebes">¿Con que frecuencia bebes?</label>
                <select name="frecuenciaBebes" id="frecuenciaBebes" class = 'form-select form-select-mb'>
                    <option slected value="">seleccione la frecuencia con la que bebes</option>
                    <!-- EN ESTE TROZO DE CODIGO HAGO UNA CONSULTA PARA QUE ME TRAIGA TODO LO QUE SERIA LA INFOMACION SEGUN LO QUE SE NECESITE -->
                    <?php
                        $select = include_once ('../../conexion.php');
                        $select = $conn -> prepare('SELECT * FROM Frecuencia');
                        $select ->execute();
                        $datos =  $select -> fetchAll();
                        foreach ($datos as $valores):
                            echo '<option value="'.$valores["Id_frecuencia"].'">'.$valores["Id_nombreFrecuencia"].'</option>';
                        endforeach;
                    ?>
                </select>
                </div>

                <div class= 'cajaHijaMulti'>
                <label for="enfermedad">¿Actualmente tienes alguna enfermedad?</label>
                <select name="enfermedad" id="enfermedad" class = 'form-select form-select-mb'>
                    <option slected value="">Seleccione una</option>
                    <?php
                        $select = include_once ('../../conexion.php');
                        $select = $conn -> prepare('SELECT * FROM PreguntaBool');
                        $select ->execute();
                        $datos =  $select -> fetchAll();
                        foreach ($datos as $valores):
                            echo '<option value="'.$valores["Id_Pregunta"].'">'.$valores["Id_RespuestaPregunta"].'</option>';
                        endforeach;
                    ?>
                </select>
                <label for="repuesEnfermedad">Si tu repuesta fue es afirmativa, ¿Que enfermedad te fue diagnosticada?</label>
                <input type="text" name="repuesEnfermedad" id="repuesEnfermedad" class='Control form-control'>
                </div>

                <div class= 'cajaHijaMulti'>
                <label for="medicamento">¿Tomas algun medicamento ?</label>
                <select name="medicamento" id="medicamento" class = 'form-select form-select-mb'>
                    <option slected value="">Seleccione una</option>
                    <?php
                        $select = include_once ('../../conexion.php');
                        $select = $conn -> prepare('SELECT * FROM PreguntaBool');
                        $select ->execute();
                        $datos =  $select -> fetchAll();
                        foreach ($datos as $valores):
                            echo '<option value="'.$valores["Id_Pregunta"].'">'.$valores["Id_RespuestaPregunta"].'</option>';
                        endforeach;
                    ?>
                </select>
                <label for="repuesMedicamento">Si tu repuesta fue es afirmativa, ¿Que medicamento tomas?</label>
                <input type="text" name="repuesMedicamento" id="repuesMedicamento" class='Control form-control'>
                </div>

                <div class= 'cajaHija'>
                <label for="discapacidad">¿Presentas algún tipo de incapacidad o discapacidad?</label>
                <select name="discapacidad" id="discapacidad" class = 'form-select form-select-mb'>
                    <option slected value="">Seleccione una</option>
                    <?php
                        $select = include_once ('../../conexion.php');
                        $select = $conn -> prepare('SELECT * FROM PreguntaBool');
                        $select ->execute();
                        $datos =  $select -> fetchAll();
                        foreach ($datos as $valores):
                            echo '<option value="'.$valores["Id_Pregunta"].'">'.$valores["Id_RespuestaPregunta"].'</option>';
                        endforeach;
                    ?>
                </select>
                </div>
                <button type="submit" class = 'bntEnviar btn btn-outline-success'>enviar</button>
            </div>
        </form>
</div>
    </section>
    <footer class = 'piePagina'>

    </footer>
</body>
</html>