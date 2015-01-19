<?php
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
