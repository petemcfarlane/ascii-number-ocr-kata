<?php

use function PeteMc\Transpose\transpose;

class AsciiNumberTranslator
{
    public function translate($ascii)
    {
        $asciiMap = [
            " _ | ||_|   ",
            "     |  |   ",
            " _  _||_    ",
            " _  _| _|   ",
            "   |_|  |   ",
            " _ |_  _|   ",
            " _ |_ |_|   ",
            " _   |  |   ",
            " _ |_||_|   ",
            " _ |_| _|   ",
        ];

        if (false !== $i = array_search($ascii, $asciiMap)) {
            return $i;
        }

        $lines = explode("\n", $ascii);

        $chunksOf3 = array_map(function ($line) {
            return str_split($line, 3);
        }, $lines);

        $transposed = transpose($chunksOf3);

        $characters = array_map('implode', $transposed);

        $numbers = array_map(function ($char) {
            return $this->translate($char);
        }, $characters);

        return implode($numbers);

        /*
        The above could be written in one line, but I don't think
        this is very clear to read in PHP because of the syntax,
        so I chose to introduce intermediary local variables.
         */
        return implode(array_map(function ($char) {
            return $this->translate($char);
        }, array_map('implode', transpose(array_map(function ($line) {
            return str_split($line, 3);
        }, explode("\n", $ascii))))));
    }
}
