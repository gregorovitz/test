<?php

namespace Testsunit;

use PHPUnit\Framework\TestCase;
require 'includes/function.php'

/**
 * Class functionTest.
 */
class functionTest extends TestCase{
	
	public function testverif_pwd(){
		private $mdp='pomme';
		private $hashedPwd ;
		$hashedPwd = password_hash($mdp, PASSWORD_DEFAULT);
		$value =verif_pwd($mdp,$hashedPwd);
		assertTrue($value);
	
	}
   
}
