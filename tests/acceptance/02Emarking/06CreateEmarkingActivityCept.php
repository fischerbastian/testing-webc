<?php

$I = new AcceptanceTester($scenario);


$I->createEmarkingActivity($info= array(
		'name'=>'Tu mami bn bellaka',
		'curse'=>'Test Course Sec.1 2015',
		'totalpages'=>'2',
		'anonymous'=>'0',
		
		'enableduedate'=>true,
		'markingduedateday'=>'01',
		'markingduedatemonth'=>'2',
		'markingduedateyear'=>'2015',
		'markingduedatehour'=>'01',
		'markingduedateminute'=>'05',
		
		'regraderestrictdates'=>true,
		'regradesopendateday'=>'01',
		'regradesopendatemonth'=>'2',
		'regradesopendateyear'=>'2015',
		'regradesopendatehour'=>'01',
		'regradesopendateminute'=>'05',
		'regradesclosedateday'=>'01',
		'regradesclosedatemonth'=>'2',
		'regradesclosedateyear'=>'2015',
		'regradesclosedatehour'=>'01',
		'regradesclosedateminute'=>'10',
		'peervisibility'=>'Yes',
		
		'gradecat'=>'2',
		'grademin'=>'0',
		'grade'=>'7',

		'adjustslope'=>true,
		'adjustslopegrade'=>'1',
		'adjustslopescore'=>'1',
		
		'cmidnumber'=>'',
		'groupmode'=>'0'
		
));?>