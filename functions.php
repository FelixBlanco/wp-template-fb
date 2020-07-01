<?php 

$edad = 1;
for ($i=1994; $i < date('Y') ; $i++) { 
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


$experiencia_slide_uno = [
	[ 'name' => 'ruca', 'url' => '/img/experiencia/ruca.png' ],
	[ 'name' => 'panza', 'url' => '/img/experiencia/panza.png' ],
	[ 'name' => 'caserito', 'url' => '/img/experiencia/palcaserito.png' ],
	[ 'name' => 'ruleta', 'url' => '/img/experiencia/ruleta.png' ]
];

$experiencia_slide_dos = [
	[ 'name' => 'elev', 'url' => '/img/experiencia/elev.png' ],
	[ 'name' => 'deposito-central', 'url' => '/img/experiencia/deposito-central.png' ],
	[ 'name' => 'farmagroup', 'url' => '/img/experiencia/farmagroup.png' ],
	[ 'name' => 'jimenez-puertas', 'url' => '/img/experiencia/jimenez-puertas.png' ],
];

$experiencia_slide_tres = [
	[ 'name' => 'teraima', 'url' => '/img/experiencia/teraima.png' ],
	[ 'name' => 'pdvsa', 'url' => '/img/experiencia/pdvsa.png' ],
	[ 'name' => 'EMJGNR', 'url' => '/img/experiencia/EMJGNR.png' ],
];

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