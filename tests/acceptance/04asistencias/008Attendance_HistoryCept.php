<?php
// Loguear como Alumno
$I = new AcceptanceTester($scenario);
$I->wantTo('Attendance history');
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
$I->see('Historial de asistencias');

// Ver historial de asistencias
$I->click('Historial de asistencias');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
$I->see('Historial de asistencias');
$I->see('Volver');
$I->click('Volver');
$I->amOnPage('');	// insertar direccion de pagina a la cual se redirige
?>
