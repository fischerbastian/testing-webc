<?php
// Loguear como Alumnmo
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as a student and check attendance');
$I->amOnPage('/?lang=es');
$I->click('Entrar', 'div.logininfo');
$I->fillField('username', 'alumno1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('Alumno 1');

// Checkear Block UAI
$I->see('UAI','div.block_uai.block.block_navigation');
$I->click('Asistencias');
$I->see('Marcar asistencia');

// Marcar asistencia
$I->click('Marcar asistencia');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
$I->see('Se registró tu asistencia a');
$I->click('Volver');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
?>