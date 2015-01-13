<?php
// Loguear como Profesor
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as a teacher and check block uai');
$I->amOnPage('/?lang=es');
$I->click('Entrar', 'div.logininfo');
$I->fillField('username', 'profesor1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('profesor 1');

//Entrar al curso
$I->amOnPage('/?lang=es');
$I->see('Test Course A');
$I->click('Test Course A');
$I->amOnPage('/course/view.php?id=4'); // Id sujeta a cambio debido a la ejecucion del script
$I->seeLink('News forum');

// Checkear Block UAI
$I->see('UAI','div.block_uai.block.block_navigation');
$I->click('Asistencias');
$I->see('Pasar lista');

// Ver asistencias
$I->click('Ver asistencias');
$I->amOnPage(''); 	//Rellenar con la direccion de la pagina 
$I->see('Ver asistencias');

?>