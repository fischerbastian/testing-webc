<?php
// Login as teacher
$I = new AcceptanceTester($scenario);
$I->wantTo('Check attendance by students');
$I->amOnPage('/?lang=es');
$I->click('Entrar', 'div.logininfo');
$I->fillField('username', 'profesor1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('profesor 1');

//Entrar al curso
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id);

// Ver asistencia por alumno
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I->see('Attendance Record');


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

	
