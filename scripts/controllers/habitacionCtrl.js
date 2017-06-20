'use strict';
app.factory('Seleccionados', function(){
    return [];
})

.controller('habitacionCtrl',['$scope','$http','$location','Seleccionados',function($scope,$http,$location,Seleccionados) 
	{
		
        $scope.Titulo="HABITACIONES";
        $scope.mensajes = ""; // Variable que almacena los mensajes que se van a mostrar --validar

        //rango de fechas
            var fecha = new Date();
            var now = new Date(fecha.getFullYear(), fecha.getMonth(), fecha.getDate(), 0, 0, 0, 0);

            var checkin = $('#fecha1').datepicker({
            onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
            }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
            }
            checkin.hide();
            $('#fecha2')[0].focus();
            }).data('datepicker');
            var checkout = $('#fecha2').datepicker({
            onRender: function(date) {
            return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
            }
            }).on('changeDate', function(ev) {
            checkout.hide();
            }).data('datepicker');
        //fin de rango de fechas
        
        $scope.habitaciones = []; //vector para almacenar los datos de habitacoiones
        //Funcion de listar habitaciones
        $scope.listarHabitaciones = function()
		{
			var resultado = $http.post('controller-be/HabitacionCtrl.php',{accion:'listar'});
			resultado.success(function(data)
			{
				//alert(data);
				$scope.habitaciones = data;

			});
		}
		$scope.listarHabitaciones();
        //Fin de la Funcion de listar habitaciones
        var id,tipoHab,descripcion,precio;
        //Codigo cuando se selecciona una habitacion
        $scope.seleccion= Seleccionados;
        $scope.seleccionado = function(habitacion){
            
            for(var i = $scope.habitaciones.length-1; i >= 0; i--){
                    if($scope.habitaciones[i].id_habitacion == habitacion.id_habitacion){
                        $scope.seleccion.push($scope.habitaciones[i]);
                }
            }
            for(var j = 0; j < $scope.seleccion.length; j++){
                   id = $scope.seleccion[j].id_habitacion;
                   tipoHab = $scope.seleccion[j].tipo_habitacion;
                   descripcion = $scope.seleccion[j].descripcion;
                   precio = $scope.seleccion[j].precio
            }
        };
        
        //Calculo del precios sub total y total
        $scope.InputCantidad;
        $scope.subtotal = 0;
       // var cant_hab;
		$scope.calcularSubTotal = function (precio,cantidad) {
			$scope.subtotal = 0;
			//for (var i = 0; i < $scope.InputCantidad.length; i++) {
				if (cantidad != undefined) {
					$scope.subtotal += parseFloat(precio) * parseInt(cantidad);
                    $scope.InputCantidad = cantidad;
				};
			//};

		}
        //Eliminar pedidos
        $scope.eliminar = function(room){
            for(var i = $scope.seleccion.length - 1; i >= 0;i--){
                if($scope.seleccion[i].id_habitacion == room.id_habitacion){
                    $scope.subtotal = 0;
                    $scope.seleccion.splice(i,1);
                }
            }
        }
        
        
        /*Validar datos*/
         $scope.validar = function() {
             var div     = document.getElementById("msj");
             var nombres = $scope.nombres;
             var correo  = $scope.correo;
             var celular = $scope.celular;
             var entrada = document.getElementById("fecha1").value;
             var salida  = document.getElementById("fecha2").value;
             var adultos = $scope.adultos;
             var ninos   = $scope.ninos;
             var total   = $scope.subtotal;

             if(nombres =="" || nombres == undefined){
                 $scope.mensajes = "*Ingrese sus nombres completos porfavor";
                 div.style.display= "block";
                 return false;
             }
             if(correo =="" || correo == undefined){
                 $scope.mensajes = "*Ingrese un correo valido porfavor";
                 div.style.display= "block";
                 return false;
             }
              if(celular =="" || celular == undefined){
                 $scope.mensajes = "*Ingrese su numero de celular porfavor";
                 div.style.display= "block";
                 return false;
             } 
                 else if( celular.toString().length <= 8 || celular.toString().length > 9 ){
                    $scope.mensajes="*El N° de celular debe contener 9 caracteres"; 
                     div.style.display= "block";
                     return false;
                 }
             if(entrada =="" || entrada == undefined){
                 $scope.mensajes = "*Ingrese su fecha de ingreso porfavor";
                 div.style.display= "block";
                 return false;
             }
             if(salida =="" || salida == undefined){
                 $scope.mensajes = "*Ingrese su fecha de salida porfavor";
                 div.style.display= "block";
                 return false;
             }
             if(adultos =="" || adultos == undefined){
                 $scope.mensajes = "*Ingrese cantidad de adultos porfavor";
                 div.style.display= "block";
                 return false;
             }
             if(ninos =="" || ninos == undefined){
                 $scope.mensajes = "*Ingrese cantidad de adultos porfavor";
                 div.style.display= "block";
                 return false;
             }
             if( isNaN(total) || total <= 0 ){
                $scope.mensajes = "*Seleccione habitaciones o cantidad de habitaciones";
                 div.style.display= "block";
                 return false; 
                 //Ver error cuando el subtotal se hace negativo -- error de angular?
             }
             if($scope.seleccion.length > 1){
                $scope.mensajes = "*Solo hasta 1 tipo de habitacion, si desea mas habitaciones contactenos porfavor";
                 div.style.display= "block";
                 return false; 
             }
              return true;
         }
        
        //Guardar pedido
         
        $scope.registrarPedido = function(){
            if ($scope.validar()==true){
               // alert(tipoHab+" "+id+" "+precio+" "+descripcion);
                //alert($scope.InputCantidad);
               var newReserva = $http.post('controller-be/HabitacionCtrl.php',
                            {accion:'reservar',
			                reserva_nombres:$scope.nombres,
                            reserva_correo: $scope.correo,
                            reserva_celular:$scope.celular,
                            reserva_entrada:document.getElementById("fecha1").value,
                            reserva_salida: document.getElementById("fecha2").value,
                            reserva_adultos:$scope.adultos,
                            reserva_ninos:  $scope.ninos,
                            reserva_idHabitacion: id,
                            reserva_tipo:tipoHab,
                            reserva_precio:precio,
                            reserva_cantHab: $scope.InputCantidad,
                            reserva_descripcion:descripcion,
                            });
            
            newReserva.success(function(data)
             {
                if(data=='"Ok"'){
                   alert("Su reserva se registro exitosamente");
                      location.reload();
                      $location.path('/inicio');
                } 
                
             }); 
                
            }
        }
        
        
        //Funcion al presionar el boton de reserva en la pagina principal
      /*  $scope.reservar = function(reserva){
            reserva.accion="mostrar";
            var $result = $http.post('views/habitacion.php',reserva);
            alert("Se envio a habitacion.php");
           // $scope.Datos = [reserva.entrada,reserva.salida,reserva.cboAdultos,reserva.cboNinos];
            //$scope.A = reserva.entrada;
            $result.success(function(data)
			{
				alert(data);
                $location.path('/habitaciones'); 
			});
            
            //$scope.Datos = reserva;
            //$location.path('/habitaciones'); 
         }*/

        
        
         //
	}
	]);