<?php
namespace Helper;

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
		$this->user->click(StandardForm::$submitbutton);
		$this->user->seeLink($categoryname);
	}

	public function createCourse($coursename, $shortname, $category){
		$this->user->amOnPage(CoursePage::$addcourseurl);
		$this->user->fillField(CoursePage::$coursename, $coursename);
		$this->user->fillField(CoursePage::$shortname, $shortname);
		$this->user->selectOption(CoursePage::$coursecategory, $category);
		$this->user->click(StandardForm::$submitbutton);
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

class Unit extends \Codeception\Module
{

}
