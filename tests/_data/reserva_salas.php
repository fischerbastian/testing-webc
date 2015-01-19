<?php

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


foreach ($uai as $key => $place){
	foreach ($place as $building => $value) {
		foreach ($value as $type => $content) {
			echo $key." - ".$building;
			echo $type;
			echo count($content);
			echo "<br>";
		}
	}
}
?>