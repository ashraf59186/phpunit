<?php

namespace PhpDemo;

class User {
  private $firstname;

  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }
  public function getFirstName() {
    return $this->firstName;
  }
  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }
  public function getLastName() {
    return $this->lastName;
  }
  public function getFullName(){
    return $this->firstName . ' ' . $this->lastName;
  }
}
