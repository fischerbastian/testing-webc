<?php 

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Create Webcursos categories');
$U->login('admin', 'pepito.P0', 'Admin Usuario');

// Category "Pregrado" is created
$I->amOnPage('course/management.php/?lang=en');
$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('parent','0');
$I->fillField('name', 'Pregrado');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');
$I->seeLink('Pregrado');



// Subcategory "Pregrado Santiago" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado');
$I->fillField('name', 'Pregrado Santiago');
$I->click('submitbutton');

$I->amOnPage('course/management.php/?lang=en');

// Subcategory "Pregrado Vi�a" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado');
$I->fillField('name', 'Pregrado Vina');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');

// Subcategory "Deportes UAI" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado');
$I->fillField('name', 'Deportes UAI');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');

// Subcategory ".2014" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado / Pregrado Santiago');
$I->fillField('name', '.2014');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');

// Subcategory "SEGUNDO SEMESTRE .2014" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado / Pregrado Santiago / .2014');
$I->fillField('name', 'SEGUNDO SEMESTRE .2014');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');

// Subcategory "EDIFICIO A" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado / Pregrado Santiago / .2014 / SEGUNDO SEMESTRE .2014');
$I->fillField('name', 'EDIFICIO .A');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');

// Subcategory "EDIFICIO .D" is created

$I->seeLink('Create new category');
$I->click('Create new category');
$I->amOnPage('course/editcategory.php?parent=0&lang=en');
$I->selectOption('Parent category ','Pregrado / Pregrado Santiago / .2014 / SEGUNDO SEMESTRE .2014');
$I->fillField('name', 'EDIFICIO .D');
$I->click('submitbutton');
$I->amOnPage('course/management.php/?lang=en');


?>