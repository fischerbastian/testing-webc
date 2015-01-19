<?php

use Codeception\Module\UserController;

// Loguear como Profesor

$I = new AcceptanceTester($scenario);
$u = new UserController($I);

$I->wantTo('Check attendance by session');
$I->amOnPage('/?lang=es');
$U->login('profesor1', 'pepito.P0','PROFESOR 1');
$I->click('Entrar', 'div.logininfo');
$I->fillField('username', 'profesor1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('profesor 1');


// Ver asistencia por Sesi�n
$I->see('Ver por sesión','');	//ingresar direccion del div en el cual se encuentra la frase
$I->click('Ver por sesión','');		//ingresar direccion del div(pestana) en el cual se encuentra la frase
$I->amOnPage('');	//direcccion de la pagina a la que se deberia redirigir luego del click
$I->see('Fecha');
//Falta por terminar
?>