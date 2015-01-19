<?php

use Codeception\Module\UserController;

$uai = array('Peñalolén' => array('Edificio A' => array('Class' => array('101A','102A'),
														  			  'Reunion' => array('sala1','sala2'),
														  			  'Study' => array('01','02','03')
														  ), 
												'Edificio B' => array('Class' => array('101B','102B'),
														  			  'Reunion' => array('sala3','sala4'),
														  			  'Study' => array()
														  ), 
												'Edificio C' => array('Class' => array('101C','102C'),
														  			  'Reunion' => array('sala5','sala6','sala7'),
														  			  'Study' => array('01','02')
														  ),
												'Edificio D' => array('Class' => array('101D','102D'),
																	  'Reunion' => array('sala8','sala9'),
																	  'Study' => array()
														  ),
		    									'Edificio E' => array('Class' => array('101E','102E'),
														  			  'Reunion' => array('sala10','sala11'),
														  		      'Study' => array()
														  ), 
									) , 
		
			'Viña del Mar' => array('Edificio A' => array('Class' => array('101A','102A'),
														  		'Reunion' => array('sala1','sala2'),
														  		'Study' => array('01','02')
														  ), 
										   'Edificio B' => array('Class' => array('101B','102B'),
														  		'Reunion' => array('sala1','sala2'),
														  		'Study' => array('01','02')
														  ), 
										   'Edificio C' => array('Class' => array('101C','102C'),
														  		'Reunion' => array('sala1','sala2'),
														  		'Study' => array('01','02')
														  ),
										   'Edificio D' => array('Class' => array('101D','102D'),
																 'Reunion' => array('sala1','sala2'),
																 'Study' => array('01','02')
														  )
									) ,
		
        	'Miami' => array('Edificio A' => array('Class' => array('101A','102A'),
														  'Reunion' => array('sala1','sala2'),
														  'Study' => array('01','02')
												  ) 
							 
							)
									
			);

// Log In Admin

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Create UAI Campus');
$U->login('admin', 'pepito.P0','Admin Usuario');

$I->amOnPage('local/reservasalas/sedes.php?lang=en');

$I->see('Create new campus');

//TODO cambiar $uai array por una funcion y crear objeto
foreach ($uai as $campus => $place){
	
	$I->dontSee($campus);
	
	$I->click('Create new campus');
	$I->fillField('sede', $campus);
	$I->click('submitbutton');
	$I->see($campus);
}

?>