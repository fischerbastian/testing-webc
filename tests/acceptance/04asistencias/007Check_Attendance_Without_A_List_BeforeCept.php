<?php

use Codeception\Module\UserController;
// Loguear como Alumno
$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Attendance history');
$U->login('alumno1', 'pepito.P0','ALUMNO 1');

$I->amOnPage('/?lang=en');

// Ver historial de asistencias

$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/markattendance.php?courseid=1"]');
$I->amOnPage('/local/attendance/markattendance.php');	
$I->see('No sessions open');

?>