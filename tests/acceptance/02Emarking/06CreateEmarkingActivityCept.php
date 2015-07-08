<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create ');
$I->login('admin', 'pepito.P0','Admin User');

$I->amOnPage('/');
$I->see('Test Course Sec.1 2015');
$I->click('Test Course Sec.1 2015');
$courseid = $I->grabFromCurrentUrl('/id=(\d+)/'); 

$I->amOnPage('/course/modedit.php?add=emarking&type=&course='.$courseid.'&section=0&return=0&sr=0');

// General
$I->fillField('name','tu papi');
// falta description

// Marking
$I->selectOption('totalpages','2');
$I->selectOption('anonymous','0');
// falta custom marks
$I->checkOption('enableduedate');

// Dates and Regrades
$I->selectOption('markingduedate[day]','01');
$I->selectOption('markingduedate[month]','February');
$I->selectOption('markingduedate[year]','2015');
$I->selectOption('markingduedate[hour]','01');
$I->selectOption('markingduedate[minute]','05');

$I->checkOption('regraderestrictdates');

$I->selectOption('regradesopendate[day]','01');
$I->selectOption('regradesopendate[month]','February');
$I->selectOption('regradesopendate[year]','2015');
$I->selectOption('regradesopendate[hour]','01');
$I->selectOption('regradesopendate[minute]','05');
	
$I->selectOption('regradesclosedate[day]','01');
$I->selectOption('regradesclosedate[month]','February');
$I->selectOption('regradesclosedate[year]','2015');
$I->selectOption('regradesclosedate[hour]','01');
$I->selectOption('regradesclosedate[minute]','10');
	
$I->selectOption('peervisibility','1');

//Grade
$I->selectOption('gradecat','1');
$I->selectOption('grademin','0');
$I->selectOption('grade','7');

$I->checkOption('adjustslope');

$I->fillField('adjustslopegrade','1');
$I->fillField('adjustslopescore','1');

//Common module settings
$I->fillField('cmidnumber','');
$I->selectOption('groupmode','0');

$I->click('id_submitbutton2');

$I->seeLink('tu papi');

?>