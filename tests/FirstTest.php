<?php
class FirstTest  extends PHPUnit_Framework_TestCase
{
  public function testSomething()
  {
    $pdo = new \PDO('mysql:dbname=circle_test;host=localhost', 'ubuntu', '');
  }
}

