<?php
// Loguear como Profesor
$I = new AcceptanceTester($scenario);
$I->wantTo('Log In Admin');
$I->amOnPage('/?lang=es');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'profesor1');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como', 'div.logininfo');
$I->seeLink('profesor 1');

// Ver asistencia por Sesión
$I->see('Ver por sesión','');	//ingresar direccion del div en el cual se encuentra la frase
$I->click('Ver por sesión','');		//ingresar direccion del div(pestana) en el cual se encuentra la frase
$I->amOnPage('');	//direcccion de la pagina a la que se deberia redirigir luego del click
$I->see('Fecha');
//Falta por terminar
?>