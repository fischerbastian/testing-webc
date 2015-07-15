<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Grab id from Rubric');

$I->login('admin','pepito.P0','Admin User');

$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'test5');

$rubricId = $I->IdEmarkingRubric($activityId);

$I->amOnPage('/grade/grading/form/rubric/edit.php?areaid='.$rubricId);

$I->autofillRubric($info = array(
		'name' => 'pedro',
		'cantPreguntas' => 2,
		
		'crit1' => 'juan',
		'quantLvls1' => 5,
		'critinfo1.1' => 'test1',
		'critval1.1' => '1',
		'critinfo1.2' => 'test2',
		'critval1.2' => '2',
		'critinfo1.3' => 'test3',
		'critval1.3' => '3',
		'critinfo1.4' => 'test4',
		'critval1.4' => '4',
		'critinfo1.5' => 'test5',
		'critval1.5' => '5',
		'critinfo1.6' => 'test6',
		'critval1.6' => '6',
		'critinfo1.7' => 'test7',
		'critval1.7' => '7',
		'critinfo1.8' => 'test8',
		'critval1.8' => '8',
		'critinfo1.9' => 'test9',
		'critval1.9' => '9',
		'critinfo1.10' => 'test10',
		'critval1.10' => '10',
		
		'crit2' => 'y diego',
		'quantLvls2' => 6,
		'critinfo2.1' => 'test1',
		'critval2.1' => '1',
		'critinfo2.2' => 'test2',
		'critval2.2' => '2',
		'critinfo2.3' => 'test3',
		'critval2.3' => '3',
		'critinfo2.4' => 'test4',
		'critval2.4' => '4',
		'critinfo2.5' => 'test5',
		'critval2.5' => '5',
		'critinfo2.6' => 'test6',
		'critval2.6' => '6',
		'critinfo2.7' => 'test7',
		'critval2.7' => '7',
		'critinfo2.8' => 'test8',
		'critval2.8' => '8',
		'critinfo2.9' => 'test9',
		'critval2.9' => '9',
		'critinfo2.10' => 'test10',
		'critval2.10' => '10',
						           )
					);
?>