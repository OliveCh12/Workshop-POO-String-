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

}
