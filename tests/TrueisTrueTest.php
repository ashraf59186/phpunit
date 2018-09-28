<?php
use PHPUnit\Framework\TestCase;
use PhpDemo\User;

class TrueisTrueTest extends TestCase {
  private $user;

  public function setup(){
    $this->user = new User();
    $this->user->setFirstName('Ashraf');
    $this->user->setLastName('Mazumder');
  }
  public function test_TrueIsTrue() {
    $this->assertTrue(true);
  }
  public function test_GivenSetFirstName_ReturnFirstName() {
    //$user = new User();
    //$user->setFirstName('Ashraf');

    $this->assertEquals('Ashraf', $this->user->getFirstName());
  }
  public function test_GivenSetLastName_ReturnLastName() {
    //$user = new User();
    //$user->setLastName('Mazumder');

    $this->assertEquals('Mazumder', $this->user->getLastName());
  }
  public function test_GivenSetFullName_ReturnFullName() {
    //$user = new User();
    //$user->setFirstName('Ashraf');
    //$user->setLastName('Mazumder');

    $this->assertEquals('Ashraf Mazumder', $this->user->getFullName());
  }
}
