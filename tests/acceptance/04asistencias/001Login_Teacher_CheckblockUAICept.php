<?php
// Loguear como Profesor
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as a teacher and check block uai with all attendance functions');
$I->amOnPage('/?lang=en');
$I->click('Log in');
$I->fillField('username', 'profesor1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as ');
$I->seeLink('PROFESOR 1');

//Entrar al curso
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id);


// Ir a pasar lista
$I->amOnPage('/course/view.php?id='.$course_id);
$I->see('UAI','#inst51');
$I->see('Asistencias');
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/attendance.php?courseid=3"]');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->see('Check Attendance');

// ir a ver asistencias
$I->amOnPage('/course/view.php?id='.$course_id);
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/viewstudentrecord.php?courseid=3"]');
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id); 	
$I->see('Attendance record');

?>