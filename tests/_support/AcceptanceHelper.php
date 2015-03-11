<?php
namespace Codeception\Module;

//============================================================================
// Login 
class IndexPage
{
    // URL of a page
    public static $URL = '/?lang=en';
    // This properties define a UI map for Login Page
    public static $loginField = "div.logininfo";
    public static $usernameField = "username";
    public static $passwordField = "password";
    public static $submitButton = "loginbtn";
    public static $loggedField = "div.logininfo";
}


class UserController
{
	protected $user;

	public function __construct(\AcceptanceTester $I){
		$this->user = $I;
	}

	public function login($username,$password,$name) {
		$this->user->amOnPage(IndexPage::$URL);
		$this->user->click('Log in',IndexPage::$loginField);
		$this->user->fillField(IndexPage::$usernameField, $username);
		$this->user->fillField(IndexPage::$passwordField, $password);
		$this->user->click(IndexPage::$submitButton);
		$this->user->see('You are logged in as', IndexPage::$loggedField);
		$this->user->seeLink($name);
	}
}


//============================================================================

// Reserva de Salas

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

	function mostrar_recursos(){
		for ($i = 0; $i < count($this->recursos); $i++) {
			echo $this->recursos[$i]->nombre_recurso.'<br>';
		}
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
		
		echo array_count_values($tipos)[$tipo_sala];
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

	public function __construct(\AcceptanceTester $I){
		$this->reserva = $I;
	}

	public function crear() {
		
		$plumon = new Recurso('Plumón');
		$borrador = new Recurso('Borrador');
		$proyector = new Recurso('Proyector');
		$sillas = new Recurso('Sillas');
		
		$sala_estudio1 = new Sala('Sala de Estudio 1', 'Estudio', array($plumon, $borrador));
		$sala101A = new Sala('Sala 101A', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala102A = new Sala('Sala 102A', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala103A = new Sala('Sala 103A', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala104A = new Sala('Sala 104A', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala_reunion1A = new Sala('Sala 1A', 'Reunión', array($plumon, $borrador, $proyector));
		
		$edificioA = new Edificio('Edificio A', array($sala_estudio1, $sala101A, $sala102A, $sala103A, $sala104A, $sala_reunion1A));
		
		$sala_estudio2 = new Sala('Sala de Estudio 2', 'Estudio', array($plumon, $borrador));
		$sala101B = new Sala('Sala 101B', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala102B = new Sala('Sala 102B', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala103B = new Sala('Sala 103B', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala104B = new Sala('Sala 104B', 'Clases', array($proyector,$sillas,$plumon, $borrador));
		$sala_reunion1B = new Sala('Sala 1B', 'Reunión', array($plumon, $borrador, $proyector));
		
		$edificioB = new Edificio('Edificio B', array($sala_estudio2, $sala101B, $sala102B, $sala103B, $sala104B, $sala_reunion1B));
		
		$penalolen = new Sede('Peñalolén', array($edificioA, $edificioB));
		$vina = new Sede('Viña del Mar', array($edificioB));
		
		$uai = array($penalolen, $vina);
		
		return $uai;
	}
}
//============================================================================

class AcceptanceHelper extends \Codeception\Module
{

}
