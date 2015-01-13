<?php
// Loguear como Alumno
$I = new AcceptanceTester($scenario);
$I->wantTo('Check attendance without a list before');
$I->amOnPage('/?lang=es');
$I->click('Entrar', 'div.logininfo');
$I->fillField('username', 'alumno1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('alumno 1');

// Checkear Block UAI
$I->see('UAI','div.block_uai.block.block_navigation');
$I->click('Asistencias');
$I->see('Marcar asistencia');

// Marcar asistencia sin tener ningun curso con lista
$I->click('Marcar asistencia');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
$I->see('No hay ninguna sesión abierta en tus cursos.');
$I->click('Volver');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
?>