<?php

use Codeception\Module\UserController;

// Loguear como Alumno

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Attendance history');
$U->login('alumno1', 'pepito.P0','ALUMNO 1');

//Entrar al curso

$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id);

// Ver historial de asistencias

$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/studentrecord.php?courseid=3"]');
$I->amOnPage('/local/attendance/studentrecord.php?courseid='.$course_id);	
$I->see('Attendance Record');

?>
