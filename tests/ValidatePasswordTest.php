<?php

class ValidatePasswordTest extends PHPUnit_Framework_TestCase{
    public function TestValidLength(){
        $valPass= new ValidatePassword();
        $this->assertFalse($valPass->validLength('1234'));
    }
}