<?php

	require "../config-be/ClsConexion.php";

	class ClsHabitaciones extends ClsConexion
	{
		function Get_Habitaciones()
		{
			
			$this->query = "SELECT * FROM habitaciones";

			$this->execute_query();
			$data = $this->rows;
			return json_encode($data);

		}

		function enviarEmail($nombres,$correo,$celular,$entrada,$salida,$adultos,$ninos,$id,$tipo,$precio,$cantHab,$descripcion)
		{		
		$destino = "chaponan.yilmer@gmail.com";
                $destino2 = "gerenshotel.reservas@gmail.com";

		$asunto = "Nueva Reserva";
		$desde = "gerenshotel.reservas@gmail.com";

                $cabeceras  = "MIME-Version: 1.0 \r\n";
                $cabeceras .= "Content-type: text/html; charset=utf-8\r\n"; 
                $cabeceras .= 'From: '.$desde."\r\n";

		$table = "<table style='font-size: 12px;margin: 45px;width: 480px;text-align: left;border-collapse: collapse;'>
					<tr>
    					<th style='font-size: 13px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff;color: #039;text-align: center;'>Habitaciones</th>
    					<th style='font-size: 13px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff;color: #039;text-align: center;'>Adultos</th>
    					<th style='font-size: 13px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff;color: #039;text-align: center;'>Niños</th>
    					<th style='font-size: 13px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff;color: #039;text-align: center;'>Cantidad</th>
    					<th style='font-size: 13px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff;color: #039;text-align: center;'>Precio</th>
    					<th style='font-size: 13px;font-weight: normal;padding: 8px;background: #b9c9fe;border-top: 4px solid #aabcfe;border-bottom: 1px solid #fff;color: #039;text-align: center;'>Subtotal</th>
  					</tr>
  					<tr>
    					<td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'>".$tipo."</td>
    					<td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'>".$adultos."</td>
    					<td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'>".$ninos."</td>
    					<td style='padding:8px;background:#d0dafd;border-b1ottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'>".$cantHab."</td>
    					<td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'>".$precio."</td>
    					<td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'>".($precio*$cantHab)."</td>
    					</br>
					</tr>
    				<tr>
				        <td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'></td>
				        <td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'></td>
				        <td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'></td>
				        <td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'></td>
				        <td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'></td>
				        <td style='padding:8px;background:#d0dafd;border-bottom:1px solid #fff;color:#339;border-top:1px solid transparent;text-align:center;'> TOTAL: ".($precio*$cantHab)."</td>
				    </tr>
				    </table>";
            $contenido = "Cliente: ".$nombres."<br> \n";
            $contenido .= "Correo: ".$correo."<br> \n";
            $contenido .= "Celular: ".$celular."<br> \n";
            $contenido .= "Entrada: ".$entrada."<br> \n";
            $contenido .= "Salida: ".$salida."<br> \n";
            $contenido .= $table;

		$correo = mail("$destino,$destino2",$asunto,$contenido,$cabeceras);
           
            if($correo){
               $data = "Ok";
               return json_encode($data); 
            }else{
                $data = "Mensaje no enviado";
                return json_encode($data); 
            }

		}
	}