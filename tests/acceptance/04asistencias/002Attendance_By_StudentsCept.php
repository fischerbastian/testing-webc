<?php

use Codeception\Module\UserController;

// Login as teacher

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Check attendance by students');
$U->login('profesor1', 'pepito.P0','PROFESOR 1');


//Entrar al curso
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id);

// Ver asistencia por alumno
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I->see('Attendance Record');

// Alumno 1
$I-> seeElement('//section[@id="region-main"]/div[2]/table/tbody/tr/td[4]/a/img');
$I->amOnPage("/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=3");
$I->see('Total');
// $token = $I->grabTextFrom('#yui_3_17_2_2_1421700648904_11');  ++ no existe forma de hacer grab al texto por el momento
$I->checkoption('//td[3]/input');		 
$I->selectOption('#id_action_for_checked','Mark as absent');
$I->click('Apply');
// $I->dontsee($token);

// Alumno 2
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I-> seeElement('//tr[2]/td[4]/a/img');
$I->amOnPage("/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=4");
$I->see('Total');
// $token = $I->grabTextFrom('#yui_3_17_2_2_1421700648904_11');  ++ no existe forma de hacer grab al texto por el momento
$I->checkoption('//td[3]/input');		
$I->selectOption('#id_action_for_checked','Mark as absent');
$I->click('Apply');
// $I->dontsee($token);

// Alumno 3
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I-> seeElement('//a[@href="http://localhost/moodle/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=5"]');
$I->amOnPage("/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=5");
$I->see('Total');
// $token = $I->grabTextFrom('#yui_3_17_2_2_1421700648904_11');  ++ no existe forma de hacer grab al texto por el momento
$I->checkoption('//td[3]/input');		

$I->selectOption('#id_action_for_checked','Mark as absent');
$I->click('Apply');
// $I->dontsee($token);

// Alumno 4
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I-> seeElement('//section[@id="region-main"]/div[2]/table/tbody/tr[4]/td[4]/a/img');
$I->amOnPage("/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=6");
$I->see('Total');
// $token = $I->grabTextFrom('#yui_3_17_2_2_1421700648904_11');  ++ no existe forma de hacer grab al texto por el momento 
$I->checkoption('//td[3]/input');		
$I->selectOption('#id_action_for_checked','Mark as absent');
$I->click('Apply');
// $I->dontsee($token);

// Alumno 5
$I->amOnPage('/local/attendance/viewstudentrecord.php?courseid='.$course_id);
$I-> seeElement('//a[@href="http://localhost/moodle/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=7"]');
$I->amOnPage("/local/attendance/viewstudentrecord.php?action=view_student_details&courseid=3&userid=7");
$I->see('Total');
// $token = $I->grabTextFrom('#yui_3_17_2_2_1421700648904_11');  ++ no existe forma de hacer grab al texto por el momento
$I->checkoption('//td[3]/input');
$I->selectOption('#id_action_for_checked','Mark as absent');
$I->click('Apply');
// $I->dontsee($token);










/**
 * 
 * $I->amOnPage("/cart/");
    $table = $I->grabTextFrom(".//*[@id='cart']/table");
    $rows = explode("<tr>", $table);
    $rcount = count($rows);
    while ($rcount >= 0) {
        $I->click(".remove");
        $rcount--;
    }
    $I->see("Your shopping cart is empty.");
 */



// FALTA POR TERMINAR ALGUNAS COSAS

?>

	
