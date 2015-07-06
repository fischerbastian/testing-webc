<?php
namespace Codeception\Module;

class StandardForm
{
	public static $submitbutton = 'submitbutton';
}

class LoginPage
{
	public static $url = '/login/index.php';
	public static $usernamefield = 'username';
	public static $passwordfield = 'password';
	public static $submitbutton = 'loginbtn';
}

class CategoryPage
{
	public static $editcategoryurl = '/course/editcategory.php?parent=1';
	public static $categoryparent = 'parent';
	public static $categorynamefield = 'name';
}

class CoursePage
{
	public static $addcourseurl = '/course/edit.php?category=1';
	public static $coursename = 'fullname';
	public static $shortname = 'shortname';
	public static $coursecategory = 'category';
}

class CreateUserPage
{
	public static $createuserurl = 'user/editadvanced.php?id=-1';
	public static $userlisturl = 'admin/user.php?perpage=1000';
}

class MoodleController
{
	protected $user;
	
	public function __construct(\AcceptanceTester $I){
		$this->user = $I;
	}
	
	public function login($username,$password,$name){
		$this->user->amOnPage(LoginPage::$url);
		$this->user->fillField(LoginPage::$usernamefield, $username);
		$this->user->fillField(LoginPage::$passwordfield, $password);
		$this->user->click(LoginPage::$submitbutton);
		$this->user->seeLink($name);
	}
	
	public function createCategory($categoryname, $categoryparent){
		$this->user->amOnPage(CategoryPage::$editcategoryurl);
		$this->user->selectOption(CategoryPage::$categoryparent, $categoryparent);
		$this->user->fillField(CategoryPage::$categorynamefield, $categoryname);
		$this->user->click(CreateUserPage::$userlisturl);
	}
	
	public function createCourse($coursename, $shortname, $category){
		$this->user->amOnPage(CoursePage::$addcourseurl);
		$this->user->fillField(CoursePage::$coursename, $coursename);
		$this->user->fillField(CoursePage::$shortname, $shortname);
		$this->user->selectOption(CoursePage::$coursecategory, $category);
		$this->user->click(CreateUserPage::$userlisturl);
	}
	
	public function createUser($username, $password, $firstname, $lastname, $email){
		$this->user->amOnPage(CreateUserPage::$createuserurl);
		$this->user->fillField('username', $username);
		$this->user->fillField('newpassword', $password);
		$this->user->fillField('firstname', $firstname);
		$this->user->fillField('lastname', $lastname);
		$this->user->fillField('email', $email);
		$this->user->click(StandardForm::$submitbutton);
		$this->user->amOnPage(CreateUserPage::$userlisturl);
		$this->user->seeLink($firstname.' '.$lastname);
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

class AcceptanceHelper extends \Codeception\Module
{

}
