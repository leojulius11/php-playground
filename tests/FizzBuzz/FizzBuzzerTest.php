<?php

namespace Jimdo\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzerTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldFizzBuzz()
    {
        $fizzBuzzer = new FizzBuzzer();

        $this->assertEquals(1, $fizzBuzzer->fizzIt(1));
        $this->assertEquals(2, $fizzBuzzer->fizzIt(2));
        $this->assertEquals('Fizz', $fizzBuzzer->fizzIt(3));
        $this->assertEquals(4, $fizzBuzzer->fizzIt(4));
        $this->assertEquals('Buzz', $fizzBuzzer->fizzIt(5));
        $this->assertEquals('Fizz', $fizzBuzzer->fizzIt(6));
        $this->assertEquals(7, $fizzBuzzer->fizzIt(7));
        $this->assertEquals(8, $fizzBuzzer->fizzIt(8));
        $this->assertEquals('Fizz', $fizzBuzzer->fizzIt(9));
        $this->assertEquals('Buzz', $fizzBuzzer->fizzIt(10));
        $this->assertEquals(11, $fizzBuzzer->fizzIt(11));
        $this->assertEquals('Fizz', $fizzBuzzer->fizzIt(12));
        $this->assertEquals(13, $fizzBuzzer->fizzIt(13));
        $this->assertEquals(14, $fizzBuzzer->fizzIt(14));
        $this->assertEquals('FizzBuzz', $fizzBuzzer->fizzIt(15));
        $this->assertEquals(16, $fizzBuzzer->fizzIt(16));
        $this->assertEquals(17, $fizzBuzzer->fizzIt(17));
        $this->assertEquals('Fizz', $fizzBuzzer->fizzIt(18));
        $this->assertEquals(19, $fizzBuzzer->fizzIt(19));
        $this->assertEquals('Buzz', $fizzBuzzer->fizzIt(20));
    }
}
