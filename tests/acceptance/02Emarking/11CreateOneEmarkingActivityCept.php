<?php

$I = new AcceptanceTester ($scenario);

$I->wantTo('Create a standar Emarking activities');

$I->login('admin', 'pepito.P0', 'Admin User');
$I->amOnPage('/');
$I->createEmarkingActivity ($info = array (
		
			'name' => 'test2',
			'course' => 'Test Course Sec.1 2015',
		
			'totalpages' => 0,
			'anonymous' => 0,
			'enableduedate' => false,
		
			'regraderestrictdates' => null,
			'peervisibility' => 0,
		
			'grademin' => 0,
			'grademax' => 7,
		
			'adjustslope' => false,
			'adjustslopegrade' => null,
			'cmidnumber' => '',
			'groupmode' => ''
	));

?>