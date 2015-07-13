<?php 
$I = new AcceptanceTester($scenario);

$I->wantTo('Create an Emarking Activity');
$I->login('admin', 'pepito.P0','Admin User');
$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'tu papi');

$I->amOnPage('/');
$I->see('Test Course Sec.1 2015');
$I->click('Test Course Sec.1 2015');

//falta hacer grabber para id de actividad

$I->amOnPage('/mod/emarking/view.php?id='.$activityId);


$contextid = $I->grabValueFrom(['css' => 'input[type=hidden][name=contextid]']);
$component = $I->grabValueFrom(['css' => 'input[type=hidden][name=component]']);
$area = $I->grabValueFrom(['css' => 'input[type=hidden][name=area]']);
$sesskey = $I->grabValueFrom(['css' => 'input[type=hidden][name=sesskey]']);

$I->amOnPage('/grade/grading/manage.php?id='.$activityId.'&contextid='.$contextid.'&component='.$component.'&area='.$area.'&sesskey='.$sesskey);

$I->see('Define new grading form from scratch');

$rubricId = $I->IdEmarkingRubric($activityId);

$I->amOnPage('/grade/grading/form/rubric/edit.php?areaid='.$rubricId);

$I->fillField('name', 'Rubrica de prueba 1');
$I->fillField('rubric[criteria][NEWID1][description]', 'Criterio 1');
$I->fillField('rubric[criteria][NEWID1][levels][NEWID0][definition]', 'Nada');
$I->fillField('rubric[criteria][NEWID1][levels][NEWID1][definition]', 'Casi');
$I->fillField('rubric[criteria][NEWID1][levels][NEWID2][definition]', 'Todo');

$I->click('saverubric');


?>