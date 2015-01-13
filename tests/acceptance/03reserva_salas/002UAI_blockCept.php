<?php 

// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Check if UAI block is enabled');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

// Check UAI block
$I->see('UAI', 'div.title');
$I->click('Study Rooms', 'div.content');
$I->see('Settings', 'div.content');



?>