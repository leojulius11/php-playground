<?php

namespace Jimdo\AnagromAtaf;

use PHPUnit\Framework\TestCase;

class AnagramatorTest  extends TestCase
{
    /**
     * @test
     */
    public function itShouldReturnIfStringIsAnagramOrNot()
    {
        $anagramator = new Anagramator();

        $source = 'Wandern im Wald';

        $this->assertTrue($anagramator->isAnagram(
            $source,
            'Waldarm winden'
        ));

        $this->assertFalse($anagramator->isAnagram(
            $source,
            'Mandel war Wind'
        ));

        $this->assertFalse($anagramator->isAnagram(
            $souece,
            'Wann man Wilden'
        ));

        $this->assertTrue($anagramator->isAnagram(
            $source,
            'Wann war dem Lid'
        ));
    }
}
