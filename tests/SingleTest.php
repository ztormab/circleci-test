<?php
class SingleTest  extends PHPUnit_Framework_TestCase
{
	public function testSomething()
	{
		$pdo = new \PDO('mysql:host=localhost;dbname=circle_test', 'ubuntu', '');
	}
}
