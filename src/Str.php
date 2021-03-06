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
  // Workshop Exercice 5
  public function testExo5()
  {
    $this->assertSame(Str::toStudlyCase('my_string'), 'MyString'); // true
    $this->assertSame(Str::toStudlyCase('myString'), 'MyString'); // true
    $this->assertSame(Str::toStudlyCase('my-string'), 'MyString'); // true
    $this->assertSame(Str::toStudlyCase('my string'), 'MyString'); // true
    $this->assertSame(Str::toStudlyCase('My String'), 'MyString'); // true
  }
  // Workshop Exercice 6
  public function testExo6()
  {
    $str = Str::on('mY StrIng');
    $this->assertSame($str->camelCase()->toString(), 'myString'); // true
    $this->assertSame($str->snakeCase()->toString(), 'my_string'); // true
    $this->assertSame($str->studlyCase()->toString(), 'MyString'); // true
    $this->assertSame($str->titleCase()->toString(), 'MyString'); // true
    $this->assertSame($str->slugCase()->toString(), 'my-string'); // true
    $this->assertSame($str->kebabCase()->toString(), 'my-string'); // true
    $this->assertSame($str->toString(), 'mY StrIng'); // true
    $this->assertSame((string)$str, 'mY StrIng'); // true
  }

}
