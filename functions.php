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
		'url'		=> 'https://platzi.com/@felix__blanco/curso/intro-laravel/diploma/'
	],
	[
		'title' => 'Curso de API REST',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/api-rest/diploma/'
	],
	[
		'title' => 'Curso de Gestión de Dependencias y Paquetes con NPM',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/npm/diploma/'
	],
	[
		'title' => 'Curso de Manejo de Datos en Laravel con Eloquent ORM',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/eloquent-laravel/diploma/'
	],
	[
		'title' => 'Curso de ECMAScript 6+',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/ecmascript-6/diploma/'
	],				
	[
		'title' => 'Curso de Estrategias para Aprender en Línea Efectivamente',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/aprender/diploma/ '
	],
	[
		'title' => 'Curso de Administración de Actividades con Trello',
		'url'		=> 'https://platzi.com/@felix__blanco/curso/trello/diploma/'
	],
];

$proyectos_personales = [
	[
		'title' => 'cotoperices',
		'img' => '/img/portafolio/cosecha.png',
		'url' => 'https://blancofelix.com/cotoperices/'
	]
];

$proyectos_empresas = [
	[
		'empresa' => 'x',
		'img' => '/img/portafolio/cosecha.png',
		'url' => 'https://blancofelix.com/',
		'periodo' => '2020 2020',
		'pais' => 'venezuela',
		'descripcion' => 'lorem xxxx',
		'tags' => ['laravel','otro']
	],
	[
		'empresa' => 'y',
		'img' => '/img/portafolio/cosecha.png',
		'url' => 'https://blancofelix.com/',
		'periodo' => '2020 2020',
		'pais' => 'venezuela',
		'descripcion' => 'lorem xxxx',
		'tags' => ['laravel','otro']
	],	
];