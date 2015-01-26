<?php


class Recurso{
	 
	public $nombre_recurso;
	
	public function __construct($nombre){
		
		/**
		 * @param string $nombre
		 */
		
		$this->nombre_recurso = $nombre;
	}
}

class Sala {
	
	public $nombre_sala;
	public $recursos = array();
	public $tipo;
	
	function __construct($nombre, $tipo, $recursos){
		
		/**
		 * @param string $nombre
		 * @param string $tipo
		 * @param array $recursos
		 */
		
		$this->nombre_sala = $nombre;
		$this->tipo = $tipo;
		$this->recursos = $recursos;
	}

	function contar_recursos(){
		for ($i = 0; $i < count($this->recursos); $i++) {
			 $contar[] = $this->recursos[$i]->nombre_recurso.'<br>';
		}
		$contar = array_count_values($contar);
		return $contar;
	}
}

class Horario{
	
	public static $modulo = "#1|A,8:15-9:25
			#1|B,8:30-9:40
			#2,10:00-11:10
			#3,11:30-12:40
			#4|A,13:00-14:10
			#4|B,13:30-14:40
			#5,15:00-16:10
			#6,16:30-17:40
			#7,18:00-19:10
			#8,19:30-20:40";
}

class Edificio {
	
	public $nombre_edificio;
	public $salas = array();
	public $modulo;
	
	function __construct($nombre, $salas_asociadas){
		
		/**
		 * @param string $nombre
		 * @param array $salas_asociadas
		 */
		
		$this->nombre_edificio = $nombre;
		$this->salas = $salas_asociadas;
		$this->modulo = Horario::$modulo;	
	}
	
	function contar_tipo_sala($tipo_sala){
		for ($i = 0; $i < count($this->salas); $i++) {
			 $tipos[] =  $this->salas[$i]->tipo;
		}
		
		return array_count_values($tipos)[$tipo_sala];
	}
} 

class Sede {
	
	public $nombre_sede;
	public $edificios = array();
	
	function __construct($nombre, $edificios_asociados) {
		
		/**
		 * @param string $nombre
		 * @param array $edificios_asociados
		 */
		
		$this->nombre_sede = $nombre;
		$this->edificios = $edificios_asociados;
	}
	
	function mostrar_edificios(){
		for ($i = 0; $i < count($this->edificios); $i++) {
			echo $this->edificios[$i]->nombre_edificio->nombre_salas.'<br>';
		}
	}
}


class ReservaController
{
	protected $reserva;

	public function __construct(){
		$this->reserva;
	}

	public function crear() {
		
		$plumon = new Recurso('Plumón');
		$borrador = new Recurso('Borrador');
		$proyector = new Recurso('Proyector');
		$sillas = new Recurso('Sillas');
		
		$sala_estudio1 = new Sala('Sala de Estudio 1', 'Study', array($plumon, $borrador));
		$sala101A = new Sala('Sala 101A', 'Class', array($proyector,$sillas,$plumon, $borrador));
		$sala102A = new Sala('Sala 102A', 'Class', array($proyector,$sillas,$plumon, $borrador));
		$sala103A = new Sala('Sala 103A', 'Class', array($proyector,$sillas,$plumon, $borrador));
		$sala104A = new Sala('Sala 104A', 'Class', array($proyector,$sillas,$plumon, $borrador));
		$sala_reunion1A = new Sala('Sala 1A', 'Reunion', array($plumon, $borrador, $proyector));
		
		$edificioA = new Edificio('Edificio A', array($sala_estudio1, $sala101A, $sala102A, $sala103A, $sala104A, $sala_reunion1A));
		
		$sala_estudio2 = new Sala('Sala de Estudio 2', 'Study', array($plumon, $borrador));
		$sala101B = new Sala('Sala 101B', 'Study', array($proyector,$sillas,$plumon, $borrador));
		$sala102B = new Sala('Sala 102B', 'Study', array($proyector,$sillas,$plumon, $borrador));
		$sala103B = new Sala('Sala 103B', 'Class', array($proyector,$sillas,$plumon, $borrador));
		$sala104B = new Sala('Sala 104B', 'Class', array($proyector,$sillas,$plumon, $borrador));
		$sala_reunion1B = new Sala('Sala 1B', 'Reunion', array($plumon, $borrador, $proyector));
		
		$edificioB = new Edificio('Edificio B', array($sala_estudio2, $sala101B, $sala102B, $sala103B, $sala104B, $sala_reunion1B));
		
		$penalolen = new Sede('Peñalolén', array($edificioA, $edificioB));
		$vina = new Sede('Viña del Mar', array($edificioB));
		
		$uai = array($penalolen, $vina);
		
		return $uai;
	}
}

$R = new ReservaController();

for ($i = 0; $i < count($R->crear()); $i++) {
	for ($u = 0; $u < count($R->crear()[$i]->edificios); $u++) {

		echo $R->crear()[$i]->nombre_sede."-".$R->crear()[$i]->edificios[$u]->nombre_edificio;
		echo "<br>";
		echo $R->crear()[$i]->edificios[$u]->contar_tipo_sala('Study');
		echo "<br>";
		echo "Click sig";
		echo "<br>";
		for ($y = 0; $y < count($R->crear()[$i]->edificios[$u]->salas); $y++) {
			if($R->crear()[$i]->edificios[$u]->salas[$y]->tipo == 'Study'){
				echo $R->crear()[$i]->edificios[$u]->salas[$y]->nombre_sala;
			}
		}
		echo "<br>";
		
	}
}


?>
