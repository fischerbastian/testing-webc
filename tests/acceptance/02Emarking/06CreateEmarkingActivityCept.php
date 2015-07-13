<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create a Rubirc for a Emarking activiy');

$I->login('admin','pepito.P0','Admin User');
$I->amOnPage('/');

$I->createEmarkingActivity($info= array(
		'name' => 'Test1',
		'curse' => 'Test Course Sec.1 2015',
		'totalpages' => '2',
		'anonymous' => '0',
		
		'enableduedate' => true,
		'markingduedateday' => '01',
		'markingduedatemonth' => '2',
		'markingduedateyear' => '2015',
		'markingduedatehour' => '01',
		'markingduedateminute' => '05',
		
		'regraderestrictdates' => true,
		'regradesopendateday' => '01',
		'regradesopendatemonth' => '2',
		'regradesopendateyear' => '2015',
		'regradesopendatehour' => '01',
		'regradesopendateminute' => '05',
		'regradesclosedateday' => '01',
		'regradesclosedatemonth' => '2',
		'regradesclosedateyear' => '2015',
		'regradesclosedatehour' => '01',
		'regradesclosedateminute' => '10',
		'peervisibility' => 'Yes',
		
		'grademin' => '0',
		'grade' => '7',

		'adjustslope' => true,
		'adjustslopegrade' => '1',
		'adjustslopescore' => '1',
		
		'cmidnumber' => '',
		'groupmode' => '0'
		
										)
		
							);
?>