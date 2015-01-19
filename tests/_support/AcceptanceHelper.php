<?php
namespace Codeception\Module;

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


class AcceptanceHelper extends \Codeception\Module
{

}
