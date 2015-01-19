<?php 

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Create a 2 test courses');
$U->login('admin', 'pepito.P0', 'Admin Usuario');

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