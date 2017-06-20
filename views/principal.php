  <div id="home">

        <div id="da-slider" class="container" style="width:100%; min-width: 320px; height:auto; position: relative; margin:0 auto;">

            <div class="triangle" style="clear: none; top:0; z-index:999;"></div>
            <!-- mask elemet use for masking background image -->
            
            <!-- All slides centred in container element -->
              
                <!-- Inicio carrusel -->
                
                    <!-- Start first slide -->

                <div id="wowslider-container1" style="margin-top:-35px;">

                    <div class="ws_images">
                        <ul>
                            <li>
                                
                                    <span style="transform: translate3d(10%, -50%, 0px);">
                                        <img style=" width:30%;" src="images/check-gerens1.png" alt="">
                                            <h2>DOMINGOS Y LUNES</h2>
                                            <h2>GRANDES DESCUENTOS</h2>
                                        <img style="width:30%;" src="images/check-gerens2.png" alt="">
                                    </span>
                                
                                <img class="img-responsive" src="data1/images/slide01.jpg" alt="" title="" id="wows1_0"/>
                            </li>
                            <li><img src="data1/images/slide02.jpg" alt="" title="" id="wows1_1"/></li>
                            <li><img src="data1/images/slide03.jpg" alt="" title="" id="wows1_2"/></li>
                        </ul>
                    </div>
                    <div class="ws_bullets">
                        <div>
                            <a title=""><span><img src="data1/tooltips/slide01.jpg" alt=""/>1</span></a>
                            <a title=""><span><img src="data1/tooltips/slide02.jpg" alt=""/>2</span></a>
                            <a title=""><span><img src="data1/tooltips/slide03.jpg" alt=""/>3</span></a>
                        </div>
                    </div>

                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <script type="text/javascript" src="engine1/jquery.js"></script>

                </div> 

                
                <!-- Fin carrusel -->
            
            
        </div>
            
                <!-- End home section -->
        <div class="motor">
            <form class="form-inline" role="form" action="post" >

                <div class="row">

                    <h4 class="alinear mayusculas" style="color:#000;">Reserva</h4>

                     <div class="form-group alinear" >
                        <label class="alinear" for="entrada" style="color:#000;">Entrada:</label>
                        <input class="form-control ancho" type="date" id="fecha1">
                    </div>
                    <div class="form-group alinear">
                        <label class="alinear" style="color:#000;">Salida:</label>
                        <input class="form-control ancho" type="date" value="<?php echo date("d-m-y");?>">
                    </div>
                    
                    <div class="form-group alinear">
                        <label class="alinear" style="color:#000;">Adultos:</label>
                        <select class="form-control ancho" name="cboAdultos" id="cboAdultos">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group alinear">
                        <label class="alinear" style="color:#000;">Niños:</label>
                        <select class="form-control ancho" name="cboNinos" id="cboninos">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group alinear">
                        <a href="#habitaciones">
                            <input type="image" src="images/check.png" width="40" height="40" >
                        </a> 
                    </div>
                    
                </div>
                
            </form>
        </div>
        
        <!-- Price section start -->
        <div id="price" class="section secondary-section" style="background:#e16a19;">
            <div class="container">
                
                <div class="price-table row-fluid">

                    <div class="span4 price-column" style="background-color: #000; height:300px;">

                        <h3 style="color: #e26b1a; padding-bottom:1%;">Servicios</h3>
                        <ul class="list" >

                            <form action="#servicios" method="post">

                                <input type=image src="images/servicios.png" style="padding:16%;" width="60" height="60">

                             </form>
                        </ul>      

                    </div>

                    <div class="span4 price-column" style="background-color: #000; height:300px;">
                        <h3 style="color: #e26b1a; padding-bottom:1%;" >Habitaciones</h3>
                        <ul class="list">

                        <br/>

                            <form action="#habitaciones" method="post">

                                <input type=image src="images/habitaciones.png" style="padding:16%;" width="60" height="60">

                            </form>
                        </ul> 
                    </div>

                    <div class="span4 price-column" style="background-color: #000; height:300px;">
                        <h3 style="color: #e26b1a; padding-bottom:1%;">Ubicacion</h3>
                        <ul class="list">

                        <br/>

                            <form action="#contacto" method="post">

                                <input type=image src="images/ubicacion.png" style="padding:16%;" width="60" height="60">

                            </form>
                        </ul>
                    </div>

                    

                </div>
                
            </div>
        </div>

         <div id="footer" class="section secondary-section" style="background-color: #000">
            <div class="container">
                
                <div class="price-table row-fluid">
                    <div class="span3 price-column" style="background-color: #000">
                        
                        
                    </div>
                    <div class="span6 price-column" style="background-color: #000">
                        <h2 style="color: #e26b1a">INFORMATE:</h2>
                        <ul class="list">
                            <p style="color: #e26b1a">Tel: +51-74-652788</p>
                            <p style="color: #e26b1a">RPM: *262362</p>
                            <p style="color: #e26b1a">RPC: 961829534</p>
                            <p style="color: #e26b1a">gerenshotel.reservas@gmail.com</p>
                            <p style="color: #e26b1a">Leoncio Prado 919 - Chiclayo</p>
                        </ul>

                        <div class="row">
                            <div class="span4">

                                <a href="https://www.tripadvisor.com.pe/Hotel_Review-g298439-d3165331-Reviews-Gerens_Hotel-Chiclayo_Lambayeque_Region.html">
                                    <img class="img-responsive" src="images/tripadvisor.png"/></a>

                            </div>

                            <div class="span4">

                                <a href="http://www.booking.com/hotel/pe/gerens.es.html?aid=7344241;label=metatripad-link-dmetalatam-hotel-1181069_xqdz-ad59d0c28d583bcf74b57f803a269680_los-03_bw-022_dom-compe_curr-PEN_gst-02_nrm-01_clkid-VkP8SQokIRoAABqrtbAAAAAk_tst-0;sid=8358c8ae4e47a03921a55147cdac8f6d;dcid=12;dest_id=-342011;dest_type=city;dist=0;room1=A%2CA;sb_price_type=total;srfid=41dca153cb581ec8a4eafe7821040303f762f6beX1;type=total;ucfs=1&">
                                    <img class="img-responsive" src="images/booking.png"/></a>
                            </div>

                            <div class="span4">

                                <a href="http://www.despegar.com.pe/hoteles/h-487319/gerens-hotel-chiclayo?standard=true&from=SB">
                                    <img class="img-responsive" src="images/despegar.com.png"/></a>

                            </div>
                        </div>
                        
                    </div>

                    <div class="span3 price-column" style="background-color: #000">
                        
                        
                    </div>
                </div>
                
            </div>
        </div>