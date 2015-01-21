<?php

use Codeception\Module\UserController;

// Loguear como Profesor

$I = new AcceptanceTester($scenario);
$u = new UserController($I);

$I->wantTo('Check attendance by session');
$I->amOnPage('/?lang=es');
$U->login('profesor1', 'pepito.P0','PROFESOR 1');

//Entrar al curso
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id);

// Ver asistencia por Sesi�n
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/viewsessionrecord.php?courseid=3"]');
$I->amOnPage('/local/attendance/viewsessionrecord.php?courseid='.$course_id);	
$I->see('Attendance Record');

//Falta por terminar
?>