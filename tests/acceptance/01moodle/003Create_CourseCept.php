<?php 

// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Create a 2 test courses');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

// Add course
$I->click('Add a new course');
$I->amOnPage('course/edit.php?category=1&lang=en');
$I->fillField('fullname', 'Test Course A');
$I->fillField('shortname', 'test1');
$I->selectOption('Course category ','Pregrado / Pregrado Santiago / .2014 / SEGUNDO SEMESTRE .2014 / EDIFICIO .A');
$I->click('submitbutton');

$I->amOnPage('/?lang=en');
$I->amOnPage('course/edit.php?category=1&lang=en');
$I->fillField('fullname', 'Test Course D');
$I->fillField('shortname', 'test2');
$I->selectOption('Course category ','Pregrado / Pregrado Santiago / .2014 / SEGUNDO SEMESTRE .2014 / EDIFICIO .D');
$I->click('submitbutton');
?>