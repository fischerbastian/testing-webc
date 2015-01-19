<?php

use Codeception\Module\UserController;

// Login as teacher

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Check attendance by students');
$U->login('profesor1', 'pepito.P0','PROFESOR 1');

//Entrar al curso
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/user/index.php?id='.$course_id);
$table = $I->grabTextFrom(".//*[@id='participants']/table");

// Ver asistencia por alumno
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I->see('Attendance Record');

/**
 * 
 * $I->amOnPage("/cart/");
    $table = $I->grabTextFrom(".//*[@id='cart']/table");
    $rows = explode("<tr>", $table);
    $rcount = count($rows);
    while ($rcount >= 0) {
        $I->click(".remove");
        $rcount--;
    }
    $I->see("Your shopping cart is empty.");
 */


// change attendance state

$I->amOnPage('');	//rellenar con direccion de pagina
$token = $I->grabTextFrom(''); //rellenar con informacion del div en donde aparece porcentaje
$I->see('Asistencias de');
$I->checkoption('');	//insertar direccion de los checkbox
$I->checkoption('');	//insertar direccion de los checkbox
$I->checkselectOption('Elija una acci�n','Marcar presente');
$I->click('Aplicar');
$I->see('Confirmaci�n');
$I->click('Si');
$I->dontsee($token);

//Falta por terminar
?>

	
