<?php
// Login as teacher
$I = new AcceptanceTester($scenario);
$I->wantTo('Log In Admin');
$I->amOnPage('/?lang=es');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'profesor1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('profesor 1');

// Ver asistencia por alumno

// change attendance state
$I->amOnPage('');	//rellenar con direccion de pagina
$token = $I->grabTextFrom(''); //rellenar con informacion del div en donde aparece porcentaje
$I->see('Asistencias de');
$I->checkoption('');	//insertar direccion de los checkbox
$I->checkoption('');	//insertar direccion de los checkbox
$I->checkselectOption('Elija una acción','Marcar presente');
$I->click('Aplicar');
$I->see('Confirmación');
$I->click('Si');
$I->dontsee($token);

//Falta por terminar
?>

	
