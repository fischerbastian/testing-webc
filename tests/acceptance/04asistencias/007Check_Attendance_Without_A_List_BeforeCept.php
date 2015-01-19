<?php
// Loguear como Alumno
// Loguear como Alumno
$I = new AcceptanceTester($scenario);
$I->wantTo('Attendance history');
$I->amOnPage('/?lang=en');
$I->click('Log in');
$I->fillField('username', 'alumno1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as ');
$I->seeLink('ALUMNO 1');

$I->amOnPage('/?lang=en');

// Ver historial de asistencias
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/markattendance.php?courseid=1"]');
$I->amOnPage('/local/attendance/markattendance.php');	
$I->see('No sessions open');

?>