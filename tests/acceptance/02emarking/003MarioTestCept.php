<?php
use Codeception\Module\LoginController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);

$I->wantTo('');
$U->login('admin', 'pepito.P0','Admin User');

$I->click('Turn editing on');
$I->amOnPage('course/modedit.php?add=emarking&type=&course=2&section=0&return=0&sr=0');


/////////


$I->fillField('name','tu mama');
//$I->fillField('','');

$I->selectOption('totalpages','2');
$I->selectOption('anonymous','0');
//$I->fiilField('','');

$I->checkOption('enableduedate');


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

$I->selectOption('gradecat','1');
$I->selectOption('grademin','0');
$I->selectOption('grade','7');

$I->checkOption('adjustslope');

	$I->fillField('adjustslopegrade','1');
	$I->fillField('adjustslopescore','1');
	

$I->fillField('cmidnumber','');
$I->selectOption('groupmode','0');


$I->click('id_submitbutton2');

////////

$I->seeLink('tu mama');
?>