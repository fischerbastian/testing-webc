<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Log in as a student and check attendance');

//Entrar como profesor y empezar a pasar lista

$U->login('profesor1', 'pepito.P0','PROFESOR 1');


$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id); // esto comprueba que tomo la id satisfactoriamente
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->click('//section[@id="region-main"]/div[2]/div/form/div/input');
$I->see('Close this session');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// Loguear como Alumnmo
$I->amOnPage('/login/index.php?lang=en');

$I->seeElement('input#username');
$I->fillField('username', 'alumno1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as ');
$I->seeLink('ALUMNO 1');

// Marcar asistencia
$I->amOnPage('/?lang=en');
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');	
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');

?>