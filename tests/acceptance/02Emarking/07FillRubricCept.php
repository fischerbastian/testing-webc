<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Fill rubric criterions');

$I->login('admin','pepito.P0','Admin User');

$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'Actividad rikolina2');

$rubricId = $I->IdEmarkingRubric($activityId);

$I->amOnPage('/grade/grading/form/rubric/edit.php?areaid='.$rubricId);

$I->autofillRubric($info = array(
		'draft' => true,
		'name' => 'Rubric test',
		'cantPreguntas' => 2,
		
		'crit1' => 'informacion criterio 1',
		'quantLvls1' => 5,
		'critinfo1.1' => 'informacion nivel 1 criterio 1',
		'critval1.1' => '1',
		'critinfo1.2' => 'informacion nivel 2 criterio 1',
		'critval1.2' => '2',
		'critinfo1.3' => 'informacion nivel 3 criterio 1',
		'critval1.3' => '3',
		'critinfo1.4' => 'informacion nivel 4 criterio 1',
		'critval1.4' => '4',
		'critinfo1.5' => 'informacion nivel 5 criterio 1',
		'critval1.5' => '5',
		'critinfo1.6' => 'informacion nivel 6 criterio 1',
		'critval1.6' => '6',
		'critinfo1.7' => 'informacion nivel 7 criterio 1',
		'critval1.7' => '7',
		'critinfo1.8' => 'informacion nivel 8 criterio 1',
		'critval1.8' => '8',
		'critinfo1.9' => 'informacion nivel 9 criterio 1',
		'critval1.9' => '9',
		'critinfo1.10' => 'informacion nivel 10 criterio 1',
		'critval1.10' => '10',
		
		'crit2' => 'informacion criterio 2',
		'quantLvls2' => 4,
		'critinfo2.1' => 'informacion nivel 1 criterio 2',
		'critval2.1' => '1',
		'critinfo2.2' => 'informacion nivel 2 criterio 2',
		'critval2.2' => '2',
		'critinfo2.3' => 'informacion nivel 3 criterio 2',
		'critval2.3' => '3',
		'critinfo2.4' => 'informacion nivel 4 criterio 2',
		'critval2.4' => '4',
		'critinfo2.5' => 'informacion nivel 5 criterio 2',
		'critval2.5' => '5',
		'critinfo2.6' => 'informacion nivel 6 criterio 2',
		'critval2.6' => '6',
		'critinfo2.7' => 'informacion nivel 7 criterio 2',
		'critval2.7' => '7',
		'critinfo2.8' => 'informacion nivel 8 criterio 2',
		'critval2.8' => '8',
		'critinfo2.9' => 'informacion nivel 9 criterio 2',
		'critval2.9' => '9',
		'critinfo2.10' => 'informacion nivel 10 criterio 2',
		'critval2.10' => '10',
						           )
					);
?>