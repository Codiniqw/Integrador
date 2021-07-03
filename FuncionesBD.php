<?php

function connect()
{
    $Server = "localhost";
    $BD = "t_super_refrigeradores";
    $user = "root";

    $conection = mysqli_connect($Server, $user, null, $BD) or die("No se pudo conectar");

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
        return 1;
    } catch (Exception $e) {
        die('Excepcion Capturada: ' . $e->getMessage());
    }
}

function searchOperador($RFC){
    
}