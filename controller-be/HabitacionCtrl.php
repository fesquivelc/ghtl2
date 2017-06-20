<?php
	
	require "../models-be/ClsHabitacion.php";

	$ObjHabitacion = new ClsHabitaciones();

	/****
		Esta variable va a recibir las indicaciones para
		realizar ciertas acciones.
	****/

	$objDatos = json_decode(file_get_contents("php://input"));
	$cAccion = $objDatos->accion;

	if($cAccion=='mostrar')
	{
		$usuario_user = $objDatos->entrada;
		$usuario_clave = $objDatos->salida;

		//$Result = $ObjHabitacion->Validar_Usuario($usuario_user,$usuario_clave);
		//echo $Result;
		//echo json_encode($Result);
        echo $usuario_user;
	}
 
    //Listar Habitaciones
    if($cAccion=='listar')
	   {
		$Result = $ObjHabitacion->Get_Habitaciones();
		echo $Result;
		//echo json_encode($Result);
	}
    //Reservar en BD,enviar correo de reserva de Habitaciones.
    if($cAccion=='reservar')
	   {
        $nombres = $objDatos->reserva_nombres;
		$correo  = $objDatos->reserva_correo;
        $celular = $objDatos->reserva_celular;
        $entrada = $objDatos->reserva_entrada;
        $salida  = $objDatos->reserva_salida;
        $adultos = $objDatos->reserva_adultos;
        $ninos   = $objDatos->reserva_ninos;
        //detalle habitacion
        $id = $objDatos->reserva_idHabitacion;
        $tipo = $objDatos->reserva_tipo;
        $precio = (double)($objDatos->reserva_precio);
        $cantHab = (int)($objDatos->reserva_cantHab);
        $descripcion = $objDatos->reserva_descripcion;

		$Result = $ObjHabitacion->enviarEmail($nombres,$correo,$celular,$entrada,$salida,$adultos,$ninos,$id,$tipo,$precio,$cantHab,$descripcion);
		echo $Result;
	}

    ?>