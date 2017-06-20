'use strict';

var app = angular.module('HotelApp',['ngRoute']);

app.config(function($routeProvider) 
	{
		$routeProvider
			.when("/",
			{
				redirectTo: "/inicio",
			})
			.when("/inicio",
			{
				templateUrl: "views/principal.php",
               // controller: "habitacionCtrl"
			})
			.when("/habitaciones",
			{
				templateUrl: "views/habitacion.php",
				controller: "habitacionCtrl"
			})
            .when("/promociones",
			{
				templateUrl: "views/promociones.html",
                controller: "habitacionCtrl"
			})
			.when("/servicios",
			{
				templateUrl: "views/servicios.html",
                controller: "habitacionCtrl"
			})
            .when("/contacto",
			{
				templateUrl: "views/contacto.html",
                controller: "habitacionCtrl"
			})
			.otherwise(
			{
				redirectTo: "/"
			});
	});