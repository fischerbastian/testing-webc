<?php

use Codeception\Module\UserController;

// Loguear como Profesor

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Roll by teacher');
$U->login('profesor1', 'pepito.P0','PROFESOR 1');


// Entrar al curso
$I->amOnPage('/?lang=es');
$I->see('Test Course A');
$I->click('Test Course A');
$I->amOnPage('/course/view.php?id=4');
$I->seeLink('News forum');

// Checkear Block UAI
$I->see('UAI','div.block_uai.block.block_navigation');
$I->click('Asistencias');
$I->see('Pasar lista');

// Pasar lista sin tener otras sesiones abiertas
$I->click('Pasar lista');
$I->amOnPage('');	//insertar direccion de pagina a la que se redirige
$I->see('Pasar lista');
$I->see('Abrir una sesi�n');
$I->click('Abrir una sesi�n','');	//rellenar direccion del div(boton) en el cual se encuentra la frase
$I->amOnPage('');	//ingresar la direccion de la pagina a la cual se redirige
$I->see('Pasando lista...');

//falta por terminar
?>
