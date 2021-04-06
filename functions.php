<?php 

function init_template(){

	add_theme_support('post-thumbnails'); // aceptar imagen destacada
	add_theme_support( 'title-tag'); // poder colocar links en el inicio

	// Agregando menu a nuestro proyecto. 


}

function menus(){
	register_nav_menus(
		array(
				'top_menu' => 'Menú Principal'
		)
	);
}

	add_action( 'init', 'menus');

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
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1842-intro-laravel-2020/diploma/detalle/',
		'img'		=> '/img/certificados/intro-laravel.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-introduccion-laravel-d20f3aa8-53fc-4a0e-aa7f-69c750d4ccbb.png',
		'tech'	=> ['PHP','LARAVEL'],
		'perfil'=> 'BACKEND'
	],
	[
		'title' => 'Curso de API REST',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/api-rest/diploma/',
		'img'		=> '/img/certificados/api-rest.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-api-rest-212c45cd-0b2b-4989-90c5-b489c0627de4.png',
		'tech'	=> ['BACKEND'],
		'perfil'=> 'BACKEND'
	],
	[
		'title' => 'Curso de Gestión de Dependencias y Paquetes con NPM',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/npm/diploma/',
		'img'		=> '/img/certificados/npm.png',
		
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'
	],
	[
		'title' => 'Curso de Manejo de Datos en Laravel con Eloquent ORM',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1920-eloquent-laravel/diploma/detalle/',
		'img'		=> '/img/certificados/orm.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-configurar-eloquent-model-laravel-68179995-fe12-4709-a62e-9a03d1483a20.png',
		'tech'	=> ['PHP','LARAVEL'],
		'perfil'=> 'BACKEND'
	],
	[
		'title' => 'Curso de ECMAScript 6+',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/ecmascript-6/diploma/',
		'img'		=> '/img/certificados/ECMAScript6.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'
	],				
	[
		'title' => 'Curso de PHP con Laravel',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/curso-php-laravel/diploma/',
		'img'		=> '/img/certificados/php-laravel.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-laravel-ed7723f2-1ec9-4e5b-b4b5-ba70548083a5.png',
		'tech'	=> ['PHP','LARAVEL'],
		'perfil'=> 'BACKEND'		
	],
	[
		'title' => 'Curso de Administración de Actividades con Trello',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/trello/diploma/',
		'img'		=> '/img/certificados/trello.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'		
	],	
	[
		'title' => 'Curso de Asincronismo con JavaScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/asincronismo-js/diploma/',
		'img'		=> '/img/certificados/AsincronismoconJavaScript.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'		
	],
	[
		'title' => 'Curso de Ionic 4',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/ionic-avanzado/diploma/',
		'img'		=> '/img/certificados/ionic4.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'		
	],		
	// sep 2020
	[
		'title' => 'Curso de Angular',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/angular/diploma/',
		'img'		=> '/img/certificados/angular.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'				
	],	
	[
		'title' => 'Curso Profesional de Angular',
		'url'		=> ' https://platzi.com/@felix__blanco/curso/angular-profesional/diploma/',
		'img'		=> '/img/certificados/ProfesionaldeAngular.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'		
	],	
	[
		'title' => 'Curso de Progressive Web Apps con Angular',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/pwa-angular/diploma/',
		'img'		=> '/img/certificados/pwa.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'		
	],		
	[
		'title' => 'Curso de Debugging con Chrome DevTools',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/devtools/diploma/ ',
		'img'		=> '/img/certificados/DevTools.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'			
	],		
	[
		'title' => 'Curso de Fundamentos de Ecommerce',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/fundamentos-ecommerce/diploma/',
		'img'		=> '/img/certificados/FundamentosEcommerce.png',
		'tech'	=> ['WORDPRESS'],
		'perfil'=> 'WORDPRESS'			
	],	
	//  Octubre 2020
	[
		'title' => 'Curso de Fundamentos de TypeScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1869-typescript/diploma/detalle/',
		'img'		=> '/img/certificados/FundamentosdeTypeScript.png',
		'tech'	=> ['JS','TYPESCRIPT'],
		'perfil'=> 'FRONTEND'			
	],				
	[
		'title' => 'Curso de Introducción a PHP con Composer',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/2024-php/diploma/detalle/',
		'img'		=> '/img/certificados/FundamentsdePHP.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-intro-php-platzi-3508edb9-2e55-42d9-bbcc-e68bb9f8b78d.png',
		'tech'	=> ['PHP'],
		'perfil'=> 'BACKEND'					
	],	
	[
		'title' => 'Curso de Rendimiento en Angular',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/angular-performance/diploma/',
		'img'		=> '/img/certificados/RendimientoenAngular.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'					
	],	
	[
		'title' => 'Curso de Manejo de Datos en PHP',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/2032-datos-php/diploma/detalle/',
		'img'		=> '/img/certificados/CursodeManejodeDatosenPHP.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-manejodatos-php-f69add33-4465-4457-a81f-5e8dcbe3794c.png',
		'tech'	=> ['PHP'],
		'perfil'=> 'BACKEND'					
	],																		
	[
		'title' => 'Curso de Closures y Scope en JavaScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/scope/diploma/',
		'img'		=> '/img/certificados/CursodeClosuresyScopeenJavaScript.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'			
	],			
	
	// Nov 2020
	[
		'title' => 'Curso de Inglés Básico: Fundamentos',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1358-ingles-basico/diploma/detalle/		',
		'img'		=> '/img/certificados/en-basic-fundamentals.png',
		'tech'	=> ['EN'],
		'perfil'=> 'ENGLISH'			
	],
	[
		'title' => 'Curso de Estrategias para Aprender Inglés Online',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1944-estrategias-ingles/diploma/detalle/',
		'img'		=> '/img/certificados/en-strategies-to-learn.png',
		'tech'	=> ['EN'],
		'perfil'=> 'ENGLISH'			
	],	
	[
		'title' => 'Curso de Ventas con WhatsApp',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/2054-ventas-whatsapp/diploma/detalle/',
		'img'		=> '/img/certificados/ventas-whatsapp.png',
		'tech'	=> ['WORDPRESS'],
		'perfil'=> 'WORDPRESS'			
	],	
	[
		'title' => 'Curso de Inglés para Principiantes',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1945-ingles-principiantes/diploma/detalle/',
		'img'		=> '/img/certificados/en-beginners.png',
		'tech'	=> ['EN'],
		'perfil'=> 'ENGLISH'			
	],			
	[
		'title' => 'Curso de JavaScript Engine (V8) y el Navegador',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1798-javascript-navegador/diploma/detalle/',
		'img'		=> '/img/certificados/js-engine.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'			
	],				
	[
		'title' => 'Curso Básico de JavaScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1814-basico-javascript/diploma/detalle/',
		'img'		=> '/img/certificados/basico-js.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'				
	],		
	[
		'title' => 'Fundamentos de JavaScript',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1339-course/diploma/detalle/',
		'img'		=> '/img/certificados/fund-js.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'				
	],				
	[
		'title' => 'Curso Profesional de Git y GitHub',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/1557-git-github/diploma/detalle/',
		'img'		=> '/img/certificados/git.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'				
	],		
	
	// Dic 2020

	[
		'title' => 'Curso de TypeScript con Angular por Belatrix',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1580-typescript-angular/diploma/detalle/',
		'img'		=> '/img/certificados/Angular-Belatrix.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'				
	],
	[
		'title' => 'Curso de Programación Orientada a Objetos: POO',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1474-oop/diploma/detalle/',
		'img'		=> '/img/certificados/ProgramaciOnOrientadaObjetos.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badges-poo-513deb20-a5bd-40a7-b97a-c36dc772d512.png',
		'tech'	=> ['PHP','COMPLEMENTO'],
		'perfil'=> 'BACKEND'				
	],	
	[
		'title' => 'Curso de Principios de Inversión con Mesfix',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/2119-inversiones-mesfix/diploma/detalle/',
		'img'		=> '/img/certificados/Inversión-Mesfix.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'				
	],		
	[
		'title' => 'Curso de Introducción al Trading con Criptomonedas',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1681-trading-criptomonedas/diploma/detalle/',
		'img'		=> '/img/certificados/TradingCriptomonedas.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'				
	],	
	[
		'title' => 'Curso de Single Page Application con JavaScript Vanilla',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1787-spa-javascript/diploma/detalle/',
		'img'		=> '/img/certificados/JavaScriptVanilla.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'				
	],		
	[
		'title' => 'Curso de Postman',
		'url'		=> 'https://platzi.com/p/felix__blanco/curso/1765-postman/diploma/detalle/',
		'img'		=> '/img/certificados/Postman.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'				
	],
	[
		'title' => 'Curso de Buenas Prácticas para Escritura de Código',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1630-mejor-codigo/diploma/detalle/',
		'img'		=> '/img/certificados/BuenasPracticas.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'				
	],
	[
		'title' => 'Curso de TensorFlow.js',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1963-tensorflow-js/diploma/detalle/',
		'img'		=> '/img/certificados/TensorFlowJs.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'				
	],	
	[
		'title' => 'Curso de Análisis de Negocios para Ciencia de Datos',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/2069-negocios-data-science/diploma/detalle/',
		'img'		=> '/img/certificados/NegociosparaCienciadeDatos.png',
		'tech'	=> ['COMPLEMENTO'],
		'perfil'=> 'COMPLEMENTO'				
	],

	// Ene 2021
	[
		'title' => 'Curso Práctico de React JS',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1651-react-ejs/diploma/detalle/',
		'img'		=> '/img/certificados/reactjs.png',
		'tech'	=> ['JS','REACT'],
		'perfil'=> 'FRONTEND'				
	],
	[
		'title' => 'Curso de React.js',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1548-react/diploma/detalle/',
		'img'		=> '/img/certificados/reactjs-1.png',
		'tech'	=> ['JS','REACT'],
		'perfil'=> 'FRONTEND'				
	],	
	[
		'title' => 'Curso de Angular Forms: Creación y Optimización de Formularios Web',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/2027-angular-forms/diploma/detalle/',
		'img'		=> '/img/certificados/angular-form.png',
		'tech'	=> ['JS','ANGULAR'],
		'perfil'=> 'FRONTEND'				
	],	
	[
		'title' => 'Curso de API REST con Laravel',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/2185-laravel-api/diploma/detalle/',
		'img'		=> '/img/certificados/API-RESP-LARAVEL.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-api-rest-laravel-b7b91364-00ac-4f2b-8b2a-e30a95211d4b.png',
		'tech'	=> ['PHP','LARAVEL'],
		'perfil'=> 'BACKEND'				
	],	
	[
		'title' => 'Curso Profesional de JavaScript',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1642-javascript-profesional/diploma/detalle/',
		'img'		=> '/img/certificados/PROFESIONAL-JS.png',
		'tech'	=> ['JS'],
		'perfil'=> 'FRONTEND'				
	],				
	[
		'title' => 'Curso Básico de Python',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1937-python/diploma/detalle/',
		'img'		=> '/img/certificados/PYTHON-BASICO.png',
		'img_mini' => 'https://static.platzi.com/media/achievements/badge-basico-python-bdcc67b3-031d-4dce-8e78-5699fb243149.png',
		'tech'	=> ['PY'],
		'perfil'=> 'BACKEND'				
	],					
	[
		'title' => 'Curso de SQL y MySQL',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1272-sql-mysql/diploma/detalle/ ',
		'img'		=> '/img/certificados/MYSQL.png',
		'tech'	=> ['MYSQL'],
		'perfil'=> 'COMPLEMENTO'				
	],
	// Feb 2021
	[
		'title' => 'Curso Práctico de WordPress',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1812-fundamentos-wordpress/diploma/detalle/',
		'img'		=> '/img/certificados/PracticoWordPress.png',
		'tech'	=> ['WORDPRESS'],
		'perfil'=> 'WORDPRESS'				
	],
	[
		'title' => 'Curso de Creación de Tiendas en Línea con WooCommerce',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1981-woocommerce/diploma/detalle/ ',
		'img'		=> '/img/certificados/WooCommerce.png',
		'tech'	=> ['WORDPRESS'],
		'perfil'=> 'WORDPRESS'				
	],
	[
		'title' => 'Curso de Unit Testing para MEAN con Jasmine',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1542-pruebas-unitarias/diploma/detalle/',
		'img'		=> '/img/certificados/TestingparaMEANconJasmine.png',
		'tech'	=> ['JS','ANGULAR','TEST'],
		'perfil'=> 'FRONTEND'				
	],
	[
		'title' => 'Curso Profesional de WordPress',
		'url'		=> 'https://platzi.com/p/felix__blanco/course/1779-wordpress-profesional/diploma/detalle/',
		'img'		=> '/img/certificados/ProfesionaWordPress.png',
		'tech'	=> ['WORDPRESS'],
		'perfil'=> 'WORDPRESS'				
	],										
];

$backends = [];
$backends_landing = [];

$frontends = [];
$frontends_landing = [];

$complementos = [];
$complementos_landing = [];

$wordpress = [];
$wordpress_landing = [];

$englishs = [];
$englishs_landing = [];


foreach($certificaciones  as $certificacion){

	if($certificacion['perfil'] == 'BACKEND'){
		array_push($backends,$certificacion);
	}
	
	if($certificacion['perfil'] == 'FRONTEND'){		
		array_push($frontends,$certificacion);
	}
	
	if($certificacion['perfil'] == 'COMPLEMENTO'){		
		array_push($complementos,$certificacion);	
	}

	if($certificacion['perfil'] == 'WORDPRESS'){		
		array_push($wordpress,$certificacion);	
	}	

	if($certificacion['perfil'] == 'ENGLISH'){		
		array_push($englishs,$certificacion);	
	}	

	
}

array_push($backends_landing,array_chunk($backends,4));
array_push($frontends_landing,array_chunk($frontends,4));
array_push($complementos_landing,array_chunk($complementos,4));

$proyectos_personales = [
	[
		'empresa' => 'Bodega',
		'img' => '/img/portafolio/bodega.png',
		'width_img' => '200',
		'url' => 'https://bodegave.com/',
		'periodo' => 'Ene 2020 - Actualida',
		'pais' => 'Venezuela',
		'descripcion' => 'Gestiona tu negocio desde tu teléfono, tablet o computador por medio de nuestro sistema online, usando multi-moneda y control de tu inventario.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql']
	],	
	[
		'empresa' => 'Cotoperices',
		'img' => '/img/portafolio/cosecha.png',
		'width_img' => '150',
		'url' => 'https://blancofelix.com/cotoperices',
		'periodo' => 'En 2020 Mar 2020',
		'pais' => 'Venezuela',
		'descripcion' => 'Plataforma de gestion de personal, guardando el personal como los pagos, pagos pendientes y notificando cuando esten pagos.',
		'tags' => ['Angular','Bootstrap','Laravel','Mysql']
	],
	[
		'empresa' => 'Libro Gallero',
		'img' => '/img/portafolio/librogallero.png',
		'width_img' => '155',
		'url' => 'https://librogallero.com/',
		'periodo' => '2020 - Actualidad',
		'pais' => 'Venezuela',
		'descripcion' => 'Plataforma online, orientada a la cria y mantenimiento de ejemplares y gallos de peleas.',
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
