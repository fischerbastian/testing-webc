<?php

require_once 'tests/_data/data.php';
ini_set ('memory_limit', '170M');

$I = new AcceptanceTester ($scenario);

$I->wantTo('Create' .count($new_combos) .'Emarking activities');

$I->login('admin', 'pepito.P0', 'Admin User');
$I->amOnPage('/');

$id = 1;
foreach($new_combos as $combo){
	$info = array (
			'name' => 'Activity #' . $id,
			'course' => 'Test Course Sec.1 2015',
			'totalpages' => $combo[0],
			'anonymous' => $combo[1],
			'enableduedate' => $combo[2],
			//'markingduedateday' => 1,
			'markingduedatemonth' => 1,
			'markingduedateyear' => 2016,
			'markingduedatehour' => 1,
			'markingduedateminute' => 0,
			'regraderestrictdates' => true,
			'regradesopendateday' => 1,
			'regradesopendatemonth' => 1,
			'regradesopendateyear' => 2016,
			'regradesopendatehour' => 1,
			'regradesopendateminute' => 0,
			'regradesclosedateday' => 1,
			'regradesclosedatemonth' => 2,
			'regradesclosedateyear' => 2016,
			'regradesclosedatehour' => 1,
			'regradesclosedateminute' => 0,
			'regraderestrictdates' => $combo[3],
			'peervisibility' => $combo[4],
			'grademin' => $combo[5],
			'grademax' => $combo[6],
			'adjustslope' => false,
			'adjustslopegrade' => $combo[7],
			'cmidnumber' => '',
			'groupmode' => ''
	);
	
	$I->createEmarkingActivity ($info);
	$id ++;
	$I->amOnPage('/');

}

?>