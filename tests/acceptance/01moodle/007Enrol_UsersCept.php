<?php

// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Enroll created users');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

// Enrol "Profesor1" user in "Test Course A"

$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('enrol/users.php/?lang=en&id='.$course_id);
//TODO revisar este paso, ya que no se verifica si se abre el popup
$I->click('//input[@value="Enrol users"]');


/**
$I->see('Administration');
$I->click('Users');
$I->click('Enrolled users');
$I->click('Enrol users');
$I->see('Enrol users','div.uep-wrap');
$I->selectOption('Assign roles ','Teacher');
$I->fillField('input#enrolusersearch', 'profesor 1');
$I->click('Search');
$I->waitForElement('PROFESOR 1', 10); // secs
$I->click('Enrol');
$I->click('Finish enrolling users');
$I->waitForElement('div.subfield subfield_firstname', 10); // secs
$I->see('PROFESOR 1','div.subfield subfield_firstname');

 */


?>