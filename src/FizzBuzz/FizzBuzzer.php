<?php

namespace Jimdo\FizzBuzz;

class FizzBuzzer
{
    /**
     * Returns 'Fizz' if $value is a multiple of 3.
     * Returns 'Buzz' if $value is a multiple of 5.
     * Returns 'FizzBuzz' if $value is a multiple of 3 and 5
     *
     * @return int | string
     */
    public function fizzIt(int $value)
    {
        if (($value%3) === 0 && ($value%5) === 0) {
            return "FizzBuzz";
        }
        if (($value%3) === 0) {
            return "Fizz";
        }
        if (($value%5) === 0) {
            return "Buzz";
        }
        return $value;
    }
}
