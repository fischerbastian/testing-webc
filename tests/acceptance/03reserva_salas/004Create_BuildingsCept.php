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

$U->login('admin', 'pepito.P0','Admin Usuario');

$I->amOnPage('local/reservasalas/edificios.php?lang=en');

$I->see('Create buildings');

foreach ($uai as $campus => $place){
	foreach ($place as $building => $val) {
		$I->click('Create buildings');
		$I->selectOption('Campus: ', $campus);
		$I->fillField('New Building: ', $building);
		$I->fillField('Modules: ', '#1|A,8:15-9:25
									#1|B,8:30-9:40
									#2,10:00-11:10
									#3,11:30-12:40
									#4|A,13:00-14:10
									#4|B,13:30-14:40
									#5,15:00-16:10
									#6,16:30-17:40
									#7,18:00-19:10
									#8,19:30-20:40');
		$I->click('Create new building');
	}
}


?>