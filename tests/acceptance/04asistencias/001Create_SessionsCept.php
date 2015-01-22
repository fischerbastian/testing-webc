<?php


use Codeception\Module\UserController;
$I = new AcceptanceTester($scenario);
$U = new UserController($I);
$I->wantTo('Create 5 attendance sessions');
// FIRST ATTENDANCE SESSION

				// Log in as Teacher and start a new session attendance
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id); // esto comprueba que tomo la id satisfactoriamente
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/attendance.php?courseid=3"]');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->fillField('comment','Session 1');
$I->click('Open session');
$I->see('Close this session');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 1 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno1','pepito.P0','ALUMNO 1');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 2 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno2','pepito.P0','ALUMNO 2');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 3 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno3','pepito.P0','ALUMNO 3');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 4 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno4','pepito.P0','ALUMNO 4');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 5 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno5','pepito.P0','ALUMNO 5');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Log in as a teacher and close this session
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->see('Close this session');
$I->click('Close this session');
$I->see('The session was closed');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// SECOND ATTENDANCE SESSION

				// Log in as Teacher and start a new session attendance
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id); // esto comprueba que tomo la id satisfactoriamente
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/attendance.php?courseid=3"]');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->fillField('comment','Session 2');
$I->click('Open session');
$I->see('Close this session');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 2 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno2','pepito.P0','ALUMNO 2');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

			// Login in as alumno 3 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno3','pepito.P0','ALUMNO 3');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 4 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno4','pepito.P0','ALUMNO 4');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 5 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno5','pepito.P0','ALUMNO 5');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Log in as a teacher and close this session
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->see('Close this session');
$I->click('Close this session');
$I->see('The session was closed');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// THIRD ATTENDANCE SESSION

				// Log in as Teacher and start a new session attendance
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id); // esto comprueba que tomo la id satisfactoriamente
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/attendance.php?courseid=3"]');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->fillField('comment','Session 1');
$I->click('Open session');
$I->see('Close this session');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 1 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno1','pepito.P0','ALUMNO 1');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 3 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno3','pepito.P0','ALUMNO 3');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 4 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno4','pepito.P0','ALUMNO 4');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Log in as a teacher and close this session
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->see('Close this session');
$I->click('Close this session');
$I->see('The session was closed');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// FOURTH ATTENDANCE SESSION

// Log in as Teacher and start a new session attendance
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id); // esto comprueba que tomo la id satisfactoriamente
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/attendance.php?courseid=3"]');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->fillField('comment','Session 4');
$I->click('Open session');
$I->see('Close this session');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// Login in as alumno 1 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno1','pepito.P0','ALUMNO 1');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// Login in as alumno 2 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno2','pepito.P0','ALUMNO 2');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// Log in as a teacher and close this session
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->see('Close this session');
$I->click('Close this session');
$I->see('The session was closed');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

// FIFTH ATTENDANCE SESSION

				// Log in as Teacher and start a new session attendance
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$course_id = $I->grabFromCurrentUrl('/id=(\d+)/');
$I->amOnPage('/course/view.php?id='.$course_id); // esto comprueba que tomo la id satisfactoriamente
$I->seeElement('//a[@href="http://localhost/moodle/local/attendance/attendance.php?courseid=3"]');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->fillField('comment','Session 5');
$I->click('Open session');
$I->see('Close this session');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Login in as alumno 1 a mark attendance and log out
$I->amOnPage('/login/index.php?lang=en');
$I->seeElement('input#username');
$U->login('alumno1','pepito.P0','ALUMNO 1');
$I->amOnPage('/?lang=en');										// Mark attendance
$I->seeElement('//a[contains(text(),"Mark Attendance")]');
$I->amOnPage('/local/attendance/markattendance.php?courseid=1"');
$I->see('Mark Attendance');
$I->click('//input[@value="Mark Attendance"]');
$I->see('Attendance marked');
$I->amOnPage('/login/index.php?lang=en');					// Log out
$I->click('//input[@value="Log out"]');
$I->see('Log in');

				// Log in as a teacher and close this session
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->amOnPage('/?lang=en');
$I->click('Test Course A');
$I->amOnPage('/local/attendance/attendance.php?courseid='.$course_id);
$I->see('Close this session');
$I->click('Close this session');
$I->see('The session was closed');
$I->amOnPage('/login/index.php?lang=en');
$I->click('//input[@value="Log out"]');
$I->see('Log in');
?>

