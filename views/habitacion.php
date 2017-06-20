<div class="section secondary-section">
   <div class="container">
        <div class="title">
            <h1>{{Titulo}}</h1>
        </div>
            <!--Motor de reservas -->
        <div class="span4 price-column posicion">
            <h3>Reserva!!!</h3>
            <form class="form-horizontal formulario" name="form" action="" method="" ng-submit="validar()">
             
            <div class="span4 margin"> 
                  <label class="etiqueta span1" for="">Nombres</label>
                  <input class="input span3" type="text" placeholder="Ingrese nombres y apellidos" id="nombre"  name="nombre" ng-model="nombres" required ng-required="true"> 
                  <span class="group-icon">
                       <i class="icon icon-user"></i>
                   </span>  
             </div>
              <div class="span4 margin">
                  <label class="etiqueta span1 " for="">Email</label>
                  <input class="input span3" type="email" placeholder="example@gmail.com" ng-model="correo" required ng-required="true">
                   <span class="group-icon">
                       <i class="icon icon-email"></i>
                   </span>     
              </div>
              <div class="span4 margin">
                  <label class="etiqueta span1 " for="">Celular</label>
                  <input class="input span3" type="number" placeholder="Ingrese N° celular" ng-model="celular" required ng-required="true">
                   <span class="group-icon" >
                       <i class="icon icon-phone"></i>
                   </span>     
              </div>
              <div class="span4 margin">
                   <label class="etiqueta span1">Entrada</label>
                   <input class="input span3 add-on" type="text"  value="" name="entrada" id="fecha1" ng-model="entrada" placeholder="Ingrese fecha de entrada" required ng-required="true">
                   <span class="group-icon">
                       <i class="icon icon-calendar"></i>
                   </span>   
              </div>
              <div class="span4 margin">
                   <label class="etiqueta span1">Salida</label>
                   <input class="input span3" type="text" value="" id="fecha2" ng-model="salida" placeholder="Ingrese fecha de salida" required ng-required="true">
                   <span class="group-icon">
                       <i class="icon icon-calendar"></i>
                   </span>   
              </div>
              
               <div class="span4 margin">
                    <label class="etiqueta span1">Adultos</label>
                    <select class="select span3" id="cboAdultos" ng-model="adultos" name="cboAdultos" required ng-required="true"
                       ng-init="adultos='1'">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="span4 margin">
                    <label class="etiqueta span1">Niños</label>
                    <select class="select span3" id="cboNinos" ng-model="ninos" name="cboNinos" required ng-required="true" ng-init="ninos='0'">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>    
                </div>
                <!-- <div ng-repeat="row in [1,1,1] track by $index,track by room['id_habitacion']"> --> 
                   <div class="form-group span4 margin inline">
                    <label class="etiqueta span1 inline" for="">Habitacion</label>
                    <div class="tipo-habitacion inline">
                       <ul>
                           <li class="fila quitar-estilo" ng-repeat="room in seleccion track by $index" >
                            <!-- <label class="span1 lbl">{{room.id_habitacion}}</label>-->
                            <label class="lbl">{{room.tipo_habitacion}}</label>
                            <strong class="precio">S/.{{room.precio}}</strong>
                             <select class="s" name="" id=""  ng-model="InputCantidad" ng-change="calcularSubTotal(room.precio,InputCantidad);">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                             <button ng-click="eliminar(room)" class="btn btn-danger btn-mini icon icon-cancel"></button>
                           </li>
                        </ul> 
                       <div class="total fila">
                           <label class="label etique span1">TOTAL:</label>
                           <h4 class="price span1 precio"> S/.{{subtotal}}</h4>
                       </div>
                    </div>
                  </div>
                 <div class="span4 mensaje alert alert-error" id="msj" style="display:none;line-height:1;" >
                  {{mensajes}}
                </div>
                <div class="span4 margin">
                  <button class="botom btn btn-success" ng-click="registrarPedido(pedido)" ngdisabled="form.$invalid">Reservar</button>
                </div>
            </form>
            
        </div>
        <!-- fin Motor de reservas -->
        <!-- Habitaciones a detalle -->           
<div class="anchos row-fluid single-project offset4 ">
    <div class="habitacion" ng-repeat="rooms in habitaciones">
        <div class="span6">
            <div class="project-description">
                <div class="project-title clearfix">
                    <h3 class="titulo text-center">Habitacion {{rooms.tipo_habitacion}} </h3>
                    <button id="btnAgregar" class="btn-large icon icon-plus btn-agregar"  ng-click="seleccionado(rooms)"></button>
                </div>                                                    
                <div class="project-info">
                    <div class="spa hab_price ">
                         <span>S/.{{rooms.precio}}</span>
                    </div>
                    <div>
                        <span>Cama</span>{{rooms.cant_cama}}</div>
                    <div>
                        <span>Tv</span>23 canales cable</div>
                    <div>
                        <span>WiFi</span>Gratis</div>
                    <div>
                        <span>Fono</span>1 telefono</div>
                </div>
                <p style="text-align: justify;">{{rooms.descripcion}}</p>
            </div>
        </div>
         <ul class="contenedor-img content margen span5">
           <!--
            <li ng-if="rooms.imagen==='habitacion-simple.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-simple2.jpg"/>
            </li>
            <li ng-if="rooms.imagen==='habitacion-doble.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-doble2.jpg"/>
            </li>
            <li ng-if="rooms.imagen==='habitacion-matrimonial.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-matrimonial2.jpg"/>
            </li>
             <li ng-if="rooms.imagen==='habitacion-triple.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-triple2.jpg"/>
            </li>
             <li ng-if="rooms.imagen==='habitacion-suite.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-suite2.jpg"/>
            </li> 
             -->
            <!-- -->
            <li ng-if="rooms.imagen==='habitacion-simple.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-simple.jpg"/>
            </li>
            <li ng-if="rooms.imagen==='habitacion-doble.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-doble.jpg"/>
            </li>
            <li ng-if="rooms.imagen==='habitacion-matrimonial.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-matrimonial.jpg"/>
            </li>
           <li ng-if="rooms.imagen==='habitacion-triple.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-triple.jpg"/>
            </li>
            <li ng-if="rooms.imagen==='habitacion-suite.jpg'" >
                <img class="imagen"  src="images/habitaciones/habitacion-suite.jpg"/>
            </li>
         </ul>
        <div class="project-title clearfix"></div>
    </div>
       
</div>
