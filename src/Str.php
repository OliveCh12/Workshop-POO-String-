<?php
namespace Strings;
use PHPUnit\Runner\Exception;
class Str{

  // Workshop Exercice 1
  public function testEssai()
  {
    $string = (string)Str::on('my_string')
    ->replace('_', ' ')
    ->ucwords()
    ->replace(' ', '')
    ->lcfirst();
    $this->assertSame('myString', $string);
  }
  // Workshop Exercice 2
  public function testExo2()
  {
    $this->assertSame(Str::toCamelCase('my_string'), 'myString'); // true
    $this->assertSame(Str::toCamelCase('myString'), 'myString'); // true
    $this->assertSame(Str::toCamelCase('my-string'), 'myString'); // true
    $this->assertSame(Str::toCamelCase('my string'), 'myString'); // true
    $this->assertSame(Str::toCamelCase('My String'), 'myString'); // true
  }
  // Workshop Exercice 3
  public function testExo3()
  {
    $this->assertSame(Str::toSnakeCase('my_string'), 'my_string'); // true
    $this->assertSame(Str::toSnakeCase('myString'), 'my_string'); // true
    $this->assertSame(Str::toSnakeCase('my-string'), 'my_string'); // true
    $this->assertSame(Str::toSnakeCase('my string'), 'my_string'); // true
    $this->assertSame(Str::toSnakeCase('My String'), 'my_string'); // true
  }

}
