<?php
function connect()
{
    $Server = "localhost";
    $BD = "t_super_refrigeradores";
    $user = "root";
    $pwd = "";

    $conection = mysqli_connect($Server, $user, $pwd, $BD) or die("No se pudo conectar");

    return $conection;
}


function ValidateUser($user, $password)
{
    $conex = connect(); //Guarda la conexion con la base de datos
    $query = "select password from Admin where RFC = '$user' "; //consulta a relizar

    try { // intenta realizar el processo
        $validation = mysqli_query($conex, $query); //gaurda los datos obtenidos de la consulta
        $numReg = mysqli_num_rows($validation); //Consulta el numero de registros obtenidos
        $arrayBD = mysqli_fetch_array($validation); //Convierte los datos obtenidos en cadena de texto
        mysqli_close($conex); //Termina la conexion con la BD

        if (($numReg == 1) && ($password == $arrayBD['password'])  && (count_chars($password) >= 8)) { //if que valida que los datos sean iguales
            session_start();
            $_SESSION['user'] = $user;
            $status = 1;
        } else {
            $status = 0;
        }
        return $status; // regresa validacion 0 no es correcto y 1 es correcto
    } catch (Exception $e) {
        die('Exception capturada: ' . $e->getMessage()); //atrapa el error en caso de que no se pueda realizar
    }
}

function addOperador($RFC, $nombre, $Apellidos, $NSS, $Num_Licencia, $Vigencia, $tipo_licencia, $password, $foto)
{
    $insert = "insert into operador(RFC,Foto,NSS,password,nombre,apellidos,tipo_licencia,numero_licencia,vigencia) values ('$RFC','$foto','$NSS','$password','$nombre','$Apellidos','$tipo_licencia','$Num_Licencia','$Vigencia')";
    $conection = connect();
    try {
        mysqli_query($conection, $insert);
        mysqli_close($conection);
        return 1;
    } catch (Exception $e) {
        die('Excepcion Capturada: ' . $e->getMessage());
    }
}

function addUnidad($marca, $modelo, $placa, $Num_serie, $ejes, $largo, $ancho, $alto, $peso, $refrigerado, $foto)
{
    $insert = "insert into unidad values ('$marca','$modelo','$Num_serie','$ejes','$largo','$alto','$ancho','$peso',$refrigerado,'$foto','$placa')";
    $conection = connect();
    try {
        mysqli_query($conection, $insert);
        mysqli_close($conection);
        return 1;
    } catch (Exception $e) {
        die('Excepcion Capturada: ' . $e->getMessage());
    }
}
//viajes
function consultarviaje()
{
    $conex = connect();
    $select = "select * from  viajes";
    try {
        $rsViaje = mysqli_query($conex, $select);
        mysqli_close($conex);
        return $rsViaje;
    } catch (Exception $e) {
        die('Exepcion capturada: ' . $e->getMessage());
    }
}
// validar Operador
function ValidateOPerator($user, $password)
{
    $conex = connect(); //Guarda la conexion con la base de datos
    $query = "select password from operador where RFC = '$user' "; //consulta a relizar

    try { // intenta realizar el processo
        $validation = mysqli_query($conex, $query); //gaurda los datos obtenidos de la consulta
        $numReg = mysqli_num_rows($validation); //Consulta el numero de registros obtenidos
        $arrayBD = mysqli_fetch_array($validation); //Convierte los datos obtenidos en cadena de texto
        mysqli_close($conex); //Termina la conexion con la BD

        if (($numReg == 1) && ($password == $arrayBD['password'])  && (count_chars($password) >= 8)) { //if que valida que los datos sean iguales
            session_start();
            $_SESSION['user'] = $user;
            $status = 1;
        } else {
            $status = 0;
        }
        return $status; // regresa validacion 0 no es correcto y 1 es correcto
    } catch (Exception $e) {
        die('Exception capturada: ' . $e->getMessage()); //atrapa el error en caso de que no se pueda realizar
    }
}

function busquedaOperador($RFC)
{
    $conex = connect();
    $select = "select * from operador where RFC='$RFC';";
    try {
        $registro = mysqli_query($conex, $select);
        mysqli_close($conex);
        return $registro;
    } catch (Exception $e) {
        die('Exepcion capturada: ' . $e->getMessage());
    }
}
function deleteOperador($RFC){
    $conex = connect();
    $delete = "delete from operador where RFC='$RFC'";
    try{
        mysqli_query($conex,$delete);
        mysqli_close($conex);
        return 1;
    }catch (Exception $e) {
        die('Exepcion capturada: ' . $e->getMessage());
    }
}
function updateOperador($RFC, $nombre, $Apellidos, $NSS, $Num_Licencia, $Vigencia, $tipo_licencia, $password, $foto)
{
    if ($foto==null||$foto== " "|| $foto==""){
        $cambio="";
    }
    else{
        $cambio=",foto='$foto'";
    }
    $update = "update operador set RFC='$RFC', nombre='$nombre', apellidos='$Apellidos', NSS='$NSS', numero_licencia='$Num_Licencia', vigencia='$Vigencia', password='$password',tipo_licencia='$tipo_licencia' $cambio where RFC='$RFC' ";
    $conection = connect();
    try {
        mysqli_query($conection, $update);
        mysqli_close($conection);
        return 1;
    } catch (Exception $e) {
        die('Excepcion Capturada: ' . $e->getMessage());
    }
}

function busquedaUnidad($NumSerie)
{
    $conex = connect();
    $select = "select * from unidad where numero_serie='$NumSerie';";
    try {
        $registro = mysqli_query($conex, $select);
        mysqli_close($conex);
        return $registro;
    } catch (Exception $e) {
        die('Exepcion capturada: ' . $e->getMessage());
    }
}

function deleteUnidad($NumSerie){
    $conex = connect();
    $delete = "delete from unidad where numero_serie='$NumSerie'";
    try{
        mysqli_query($conex,$delete);
        mysqli_close($conex);
        return 1;
    }catch (Exception $e) {
        die('Exepcion capturada: ' . $e->getMessage());
    }
}

function updateUnidad($marca, $modelo, $placa, $Num_serie, $ejes, $largo, $ancho, $alto, $peso, $refrigerado, $foto){
    $conex = connect();
    if ($foto==null||$foto== " "|| $foto==""){
        $cambio="";
    }
    else{
        $cambio=",foto='$foto'";
    }
    $update = "update unidad set  marca= '$marca', modelo= '$modelo', placas='$placa', numero_serie='$Num_serie', ejes='$ejes', largo='$largo',alto='$alto',ancho='$ancho',Carga_maxima='$peso',Refrigerado='$refrigerado'$cambio,placas='$placa' where numero_serie='$Num_serie'";

    try{
        mysqli_query($conex,$update);
        mysqli_close($conex);
        return 1;
    }catch (Exception $e) {
        die('Exepcion capturada: ' . $e->getMessage());
    }

}

//Consultar Viajes en BD
function consultaViajes(){
    $conex=connect();
    $selectUsu="select * from viaje";

    try {
        $rsViajes = mysqli_query($conex,$selectUsu);
        mysqli_close($conex);

        return $rsViajes;

    } catch (Exception $e) {
        die('Excepcion al consultar viajes:'.$e->getMessage());
    }

}
//Consultar Operadores en BD
function consultaOperadores(){
    $conex=connect();
    $selectUsu="select * from operador";

    try {
        $rsViajes = mysqli_query($conex,$selectUsu);
        mysqli_close($conex);

        return $rsViajes;

    } catch (Exception $e) {
        die('Excepcion al consultar Operadores:'.$e->getMessage());
    }

}
//Consultar Operadores en BD
function consultaUnidades(){
    $conex=connect();
    $selectUsu="select * from unidad";

    try {
        $rsViajes = mysqli_query($conex,$selectUsu);
        mysqli_close($conex);

        return $rsViajes;

    } catch (Exception $e) {
        die('Excepcion al consultar Unidades:'.$e->getMessage());
    }

}