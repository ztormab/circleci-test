<?php
class FirstTest  extends PHPUnit_Framework_TestCase
{
  public function testSomething()
  {
    echo "Running a dummy test", PHP_EOL;
    
    $pdo = new \PDO('mysql:dbname=circle_test;host=localhost', 'ubuntu', '');
  }
}

