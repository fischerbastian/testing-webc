<?php

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/

class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public function login($username,$password,$name){ 
    	$this->amOnPage('/login/index.php');
    	$this->fillField('username', $username);
    	$this->fillField('password', $password);
    	$this->click('loginbtn');
    	$this->seeLink($name);
    }
    
    public function createCategory($categoryname, $categoryparent){
    	$this->amOnPage('/course/editcategory.php?parent=1');
    	$this->selectOption('parent', $categoryparent);
    	$this->fillField('name', $categoryname);
    	$this->click('submitbutton');
    	$this->seeLink($categoryname);
    }
    
    public function createCourse($coursename, $shortname, $category){
    	$this->amOnPage('/course/edit.php?category=1');
    	$this->fillField('fullname', $coursename);
    	$this->fillField('shortname', $shortname);
    	$this->selectOption('category', $category);
    	$this->click('saveanddisplay');
    }
    
    public function createUser($username, $password, $firstname, $lastname, $email){
    	$this->amOnPage('user/editadvanced.php?id=-1');
    	$this->fillField('username', $username);
    	$this->fillField('newpassword', $password);
    	$this->fillField('firstname', $firstname);
    	$this->fillField('lastname', $lastname);
    	$this->fillField('email', $email);
    	$this->click('submitbutton');
    }
    
    public function IdEmarkingActivity($course, $activity){
    	$this->see($course);    	
    	$this->click($course);
    	$this->see($activity);
    	$this->click($activity);
    	$activityId = $this->grabFromCurrentUrl('/id=(\d+)/');
    	return $activityId;
    }
    
    public function IdEmarkingRubric($activityId){
    	$this->amOnPage('/mod/emarking/view.php?id='.$activityId);
    	$contextid = $this->grabValueFrom(['css' => 'input[type=hidden][name=contextid]']);
    	$component = $this->grabValueFrom(['css' => 'input[type=hidden][name=component]']);
    	$area = $this->grabValueFrom(['css' => 'input[type=hidden][name=area]']);
    	$sesskey = $this->grabValueFrom(['css' => 'input[type=hidden][name=sesskey]']);
    	
    	$this->amOnPage('/grade/grading/manage.php?id='.$activityId.'&contextid='.$contextid.'&component='.$component.'&area='.$area.'&sesskey='.$sesskey);

    	/**
    	 * Because we couldn't click the SRC about the picture associated,
    	 * we decided to use the xpath ubication
    	 */
    	$this->click('//section[@id="region-main"]/div/div[2]/a');
    	$rubricId = $this->grabFromCurrentUrl('/areaid=(\d+)/');
    	return $rubricId;
    }
    
    public function grabStudentId(){
    	$this->amOnPage('/');
    	$this->click('Mi perfil');
    	$this->click('Ver perfil');
    	$studentId = $this->grabFromCurrentUrl('/id=(\d+)/');
    	return $studentId;
    }

}

