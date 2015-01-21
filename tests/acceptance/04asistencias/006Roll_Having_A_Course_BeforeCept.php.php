<?php

use Codeception\Module\UserController;

// Loguear como Profesor

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Roll having a course before');
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

// Pasar lista teniendo una sesion ya creada
$I->click('Pasar lista');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
$I->see('Tienes una sesi�n abierta del curso:');
$I->see('Continuar esta sesi�n');
$I->see('Cerrar esta sesi�n');
$I->click('Continuar esta sesi�n');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
$I->see('Pasando lista...');

//Falta por terminar
?>


