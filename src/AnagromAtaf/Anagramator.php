<?php

namespace Jimdo\AnagromAtaf;

class Anagramator
{
    public function isAnagram(string $text1, string $text2)
    {
        $chars1 = str_split(strtolower($text1));
        $chars2 = str_split(strtolower($text2));

        $i = 0;

        foreach ($chars1 as $char) {
            if ($char === " ") {
                unset($chars1[$i]);
            }
            $i++;
        }

        foreach ($chars2 as $char) {
            if ($char === " ") {
                unset($chars2[$i]);
            }
            $i++;
        }

        $res = array_intersect($chars1, $chars2);

        if (count($res) === count($chars1)) {
            return true;
        }
        return false;
    }
}
