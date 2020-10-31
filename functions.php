<?php 

$edad = 0;
for ($i=1994; $i <= date('Y') ; $i++) { 
	$edad = $edad + 1;
}

// Sacando a#os de experiencia
$experiencia = 1;
for ($i=2015; $i <+ date('Y'); $i++) { 
	$experiencia = $experiencia + 1;
}

if ( function_exists( 'add_theme_support' ) ){
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size(1200, 628);
}




$certificaciones = [
	[
		'title' => 'Curso de Introducción a Laravel',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/intro-laravel/diploma/',
		'img'		=> '/img/certificados/intro-laravel.png'
	],
	[
		'title' => 'Curso de API REST',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/api-rest/diploma/',
		'img'		=> '/img/certificados/api-rest.png'
	],
	[
		'title' => 'Curso de Gestión de Dependencias y Paquetes con NPM',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/npm/diploma/',
		'img'		=> '/img/certificados/npm.png'
	],
	[
		'title' => 'Curso de Manejo de Datos en Laravel con Eloquent ORM',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/eloquent-laravel/diploma/',
		'img'		=> '/img/certificados/orm.png'
	],
	[
		'title' => 'Curso de ECMAScript 6+',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/ecmascript-6/diploma/',
		'img'		=> '/img/certificados/ECMAScript6.png'
	],				
	[
		'title' => 'Curso de PHP con Laravel',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/curso-php-laravel/diploma/',
		'img'		=> '/img/certificados/php-laravel.png'
	],
	[
		'title' => 'Curso de Administración de Actividades con Trello',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/trello/diploma/',
		'img'		=> '/img/certificados/trello.png'		
	],	
	[
		'title' => 'Curso de Asincronismo con JavaScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/asincronismo-js/diploma/',
		'img'		=> '/img/certificados/AsincronismoconJavaScript.png'
	],
	[
		'title' => 'Curso de Ionic 4',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/ionic-avanzado/diploma/',
		'img'		=> '/img/certificados/ionic4.png'
	],		
	// sep 2020
	[
		'title' => 'Curso de Angular',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/angular/diploma/',
		'img'		=> '/img/certificados/angular.png'
	],	
	[
		'title' => 'Curso Profesional de Angular',
		'url'		=> ' https://platzi.com/@felix__blanco/curso/angular-profesional/diploma/',
		'img'		=> '/img/certificados/ProfesionaldeAngular.png'
	],	
	[
		'title' => 'Curso de Progressive Web Apps con Angular',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/pwa-angular/diploma/',
		'img'		=> '/img/certificados/pwa.png'
	],		
	[
		'title' => 'Curso de Debugging con Chrome DevTools',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/devtools/diploma/ ',
		'img'		=> '/img/certificados/DevTools.png'
	],		
	[
		'title' => 'Curso de Fundamentos de Ecommerce',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/fundamentos-ecommerce/diploma/',
		'img'		=> '/img/certificados/FundamentosEcommerce.png'
	],	
	//  Octubre 2020
	[
		'title' => 'Curso de Fundamentos de TypeScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1869-typescript/diploma/detalle/',
		'img'		=> '/img/certificados/FundamentosdeTypeScript.png'
	],				
	[
		'title' => 'Curso de Fundamentos de PHP',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/introduccion-php-2020/diploma/',
		'img'		=> '/img/certificados/FundamentsdePHP.png'
	],	
	[
		'title' => 'Curso de Rendimiento en Angular',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/angular-performance/diploma/',
		'img'		=> '/img/certificados/RendimientoenAngular.png'
	],	
	[
		'title' => 'Curso de Manejo de Datos en PHP',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/datos-php-2020/diploma/',
		'img'		=> '/img/certificados/CursodeManejodeDatosenPHP.png'
	],							
	[
		'title' => 'Curso de Manejo de Datos en PHP',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/datos-php-2020/diploma/',
		'img'		=> '/img/certificados/CursodeManejodeDatosenPHP.png'
	],												
	[
		'title' => 'Curso de Closures y Scope en JavaScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/scope/diploma/',
		'img'		=> '/img/certificados/CursodeClosuresyScopeenJavaScript.png'
	],									
];

$proyectos_personales = [
	[
		'empresa' => 'Bodega',
		'img' => '/img/portafolio/bodega.png',
		'url' => 'https://bodega.blancofelix.com/',
		'periodo' => 'Ene 2020 - Actualida',
		'pais' => 'Venezuela',
		'descripcion' => 'Bodega es una plataforma web orientada a la gestión y administración de inventarios de pequeños y medianos negocios, enfocado a gestionar el inventario y a realizar ventas usando el precio del Dolar del dia, del cual puedes cambiar periódicamente.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql']
	],	
	[
		'empresa' => 'Cotoperices',
		'img' => '/img/portafolio/cosecha.png',
		'url' => 'https://blancofelix.com/cotoperices',
		'periodo' => 'En 2020 Mar 2020',
		'pais' => 'Venezuela',
		'descripcion' => 'Cotoperices es una aplicación web usando Laravel 5.8, Angular CLI 9 y Bootstrap 4, está orientada a gestionar y llevar el control de los empleados,  integrando una nominas de pagos, que nos permitirá contar con un historial de cada uno de los empleados registrados dentro de la misma.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'Libro Gallero',
		'img' => '/img/portafolio/librogallero.png',
		'url' => 'https://librogallero.com/',
		'periodo' => '2020 - Actualidad',
		'pais' => 'Venezuela',
		'descripcion' => 'Comunidad de Galleros para galleros.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql']
	]		
];

$proyectos_empresas = [	
	[
		'empresa' => 'Voltarys',
		'img' => '/img/experiencia/voltarys.png',
		'url' => 'https://blancofelix.com/voltarys',
		'periodo' => 'En 2020 Mar 2020',
		'pais' => 'Argentina',
		'descripcion' => '	Voltarys, orientado a gestionar y administrar los los voluntarios de los diferentes hostales, permitiendo que cada hostal pueda ver el perfil de los voluntarios y consultar como los comentarios. calificaciones entre otras acciones.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql','Zoom']
	],	
	[
		'empresa' => 'Ruleta Activa',
		'img' => '/img/experiencia/ruleta.png',
		'url' => 'https://blancofelix.com/loteria-oriente',
		'periodo' => 'Dic 2019 En 2020',
		'pais' => 'Venezuela',
		'descripcion' => 'Loteria de Oriente es una empresa de ventas de loterías a nivel oriental en Venezuela, su producto más grande son las ventas de loterías como Ruleta Activa, La Panza, La Ruca, Pal Caserito, dado que están autorizados para dicha venta del mismo a nivel nacional. ',
		'tags' => ['Vuejs','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'La Panza',
		'img' => '/img/experiencia/panza.png',
		'url' => 'https://blancofelix.com/loteria-oriente',
		'periodo' => 'Dic 2019 En 2020',
		'pais' => 'Venezuela',
		'descripcion' => 'Loteria de Oriente es una empresa de ventas de loterías a nivel oriental en Venezuela, su producto más grande son las ventas de loterías como Ruleta Activa, La Panza, La Ruca, Pal Caserito, dado que están autorizados para dicha venta del mismo a nivel nacional. ',
		'tags' => ['Vuejs','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'Pal Caserito',
		'img' => '/img/experiencia/palcaserito.png',
		'url' => 'https://blancofelix.com/loteria-oriente',
		'periodo' => 'Dic 2019 En 2020',
		'pais' => 'Venezuela',
		'descripcion' => 'Loteria de Oriente es una empresa de ventas de loterías a nivel oriental en Venezuela, su producto más grande son las ventas de loterías como Ruleta Activa, La Panza, La Ruca, Pal Caserito, dado que están autorizados para dicha venta del mismo a nivel nacional. ',
		'tags' => ['Vuejs','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'La Ruca',
		'img' => '/img/experiencia/ruca.png',
		'url' => 'https://blancofelix.com/loteria-oriente',
		'periodo' => 'Dic 2019 En 2020',
		'pais' => 'Venezuela',
		'descripcion' => 'Loteria de Oriente es una empresa de ventas de loterías a nivel oriental en Venezuela, su producto más grande son las ventas de loterías como Ruleta Activa, La Panza, La Ruca, Pal Caserito, dado que están autorizados para dicha venta del mismo a nivel nacional. ',
		'tags' => ['Vuejs','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'Elev',
		'img' => '/img/experiencia/elev.png',
		'url' => 'https://blancofelix.com/elev',
		'periodo' => 'Ago 2018 Jul 2019',
		'pais' => 'Chile',
		'descripcion' => 'Desarrolle una plataforma web utilizando Angular integrando Dynamic Form, Angular Material en el área del Frontend y enlaces de Apis con Laravel 5.4 y Mysql como bases de datos. Mi desarrollo se ubicó en áreas de Recursos Humanos, dado que el sistema cubría varias áreas, conjuntamente con un equipo de trabajo usábamos Angular Dynamic From ayudando a el ahorro de trabajo al hacer los CRUD y diferentes tareas básicas.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql','Angular Material','Slack']
	],		
	[
		'empresa' => 'DEPOSITO CENTRAL ',
		'img' => '/img/experiencia/deposito-central.png',
		'url' => 'https://blancofelix.com/deposito-central',
		'periodo' => 'Sept 2018 Febrero 2019',
		'pais' => 'Argentina',
		'descripcion' => 'Empresa Argentina orientada a el comercio de alimentos y artículos para mascotas, desarrolle distintos módulos usando Laravel, Angular y Bootstrap, el primer módulo se enfoca en llevar la administración de la página principal como también llevar el inventario, blogs, entre otras configuraciones que se reflejarán en el primer proyecto.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql','Trello']
	],	
	[
		'empresa' => 'FARMAGROUP',
		'img' => '/img/experiencia/farmagroup.png',
		'url' => 'https://blancofelix.com/farmagroup',
		'periodo' => 'Agt 2017 Feb 2018',
		'pais' => 'Venezuela',
		'descripcion' => 'Plataforma orientada a la distribución de fármacos en Venezuela, mi objetivo fue dar mantenimiento y desarrollo nuevos módulos para los clientes. usando Laravel, Jquery, Bootstrap, Mysql.',
		'tags' => ['Jquery','Bootstrap','Laravel','Mysql','Trello']
	],
	[
		'empresa' => 'JIMÉNEZ PUERTAS',
		'img' => '/img/experiencia/jimenez-puertas.png',
		'url' => 'https://blancofelix.com/jimenez-puertas',
		'periodo' => 'Dic 2016 Ene 2017',
		'pais' => 'Colombia',
		'descripcion' => 'Firma de abogados ubicados en Bogotá, Colombia, mi participación se dio con la colaboración creativa de @laboratorioB3, el mismo se encargaba de hacer la parte creativa con los diseños y toda área de marca personal para el cliente, posteriormente yo comenzaba el desarrollo de usando Bootstrap, Jquery y animaciones con Jquery',
		'tags' => ['Jquery','Bootstrap','Html\Css']
	],
	[
		'empresa' => 'TERAIMA',
		'img' => '/img/experiencia/teraima.png',
		'url' => 'https://blancofelix.com/teraima',
		'periodo' => 'Ags 2017 Dic 2018',
		'pais' => 'Venezuela',
		'descripcion' => 'Empresa mixta orientada a dar servicios como desarrollo de páginas web entre otros servicios, mi rol dentro de la misma, fue dar mantenimiento a diferentes web que usaban wordpress y laravel.',
		'tags' => ['Jquery','Bootstrap','Laravel','Wordpress','Mysql']
	],		
	[
		'empresa' => 'PDVSA',
		'img' => '/img/experiencia/pdvsa.png',
		'url' => 'https://blancofelix.com/pdvsa',
		'periodo' => '',
		'pais' => 'Venezuela',
		'descripcion' => 'Con el objetivo de terminar mis pasantías para optar por mi título de Licenciado en Informática, fui parte de la empresa petrolera más grande de venezuela desarrollando una plataforma llamada APONWAO. Dicha aplicación iba dirigida a las diferentes instituciones escolares que PDVSA ayudaba con aportes y demás, la plataforma tenía como objetivo concentrar la información y poder ayudar, fortalecer la calidad de de todos los estudiantes. Mi rol en la misma fue desarrollar diferentes módulos como, plan de evaluaciones, lapsos, notas, entre otras áreas usando Laravel, Bootstrap, Jquery y Mysql.',
		'tags' => ['Jquery','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'Jose Gabriel Nuñez Romberg',
		'img' => '/img/experiencia/EMJGNR.png',
		'url' => 'https://blancofelix.com/EMJGNR',
		'periodo' => 'Sep 2015 - 2017',
		'pais' => 'Venezuela',
		'descripcion' => 'Jose Gabriel Nuñez Romberg, institución orientada a dar educación a los niños, adolescentes y adultos sobre música y convertirlos en grandes artistas musicales. Dicha institución contaba con diferentes problemas entre uno de ellos era al momento de las inscripción y la solicitud de información a el personal, los interesados en estudiar no tenían la información precisa y por otra parte al momento de hacer las inscripción la cantidad de personas que deseaban aspirar un cupo en la institución era mayor de 200 personas, logrando con eso un colapso entre duas e información. Nos juntamos un grupo de estudiantes ( Geraldo Gonzales, Fernando Rosillo ) aspirantes a obtener un título de TSU en Informática, a dar una solución, la cual fue desarrollar una aplicación web que permitirá a las personas entrar desde un dominio público consultar información y de igual forma hacer una preinscripción o inscripción, de igual forma la aplicación se ocupa de asignar por edades y niveles a los estudiantes con sus profesores',
		'tags' => ['Jquery','Bootstrap','HTML\Css','PHP','Mysql']
	],						
];