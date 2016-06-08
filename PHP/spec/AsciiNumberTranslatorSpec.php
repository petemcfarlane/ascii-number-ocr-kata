<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class AsciiNumberTranslatorSpec extends ObjectBehavior
{
    public function it_can_translate_an_ascii_number()
    {
        $this->translate(
            " _ \n" .
            "| |\n" .
            "|_|\n" .
            "   ")->shouldBe("0");
        $this->translate(
            "   \n" .
            "  |\n" .
            "  |\n" .
            "   ")->shouldBe("1");
        $this->translate(
            " _ \n" .
            " _|\n" .
            "|_ \n" .
            "   ")->shouldBe("2");
        $this->translate(
            " _ \n" .
            " _|\n" .
            " _|\n" .
            "   ")->shouldBe("3");
        $this->translate(
            "   \n" .
            "|_|\n" .
            "  |\n" .
            "   ")->shouldBe("4");
        $this->translate(
            " _ \n" .
            "|_ \n" .
            " _|\n" .
            "   ")->shouldBe("5");
        $this->translate(
            " _ \n" .
            "|_ \n" .
            "|_|\n" .
            "   ")->shouldBe("6");
        $this->translate(
            " _ \n" .
            "  |\n" .
            "  |\n" .
            "   ")->shouldBe("7");
        $this->translate(
            " _ \n" .
            "|_|\n" .
            "|_|\n" .
            "   ")->shouldBe("8");
        $this->translate(
            " _ \n" .
            "|_|\n" .
            " _|\n" .
            "   ")->shouldBe("9");
    }

    public function it_should_translate_a_sequence_of_characters_to_a_number()
    {
        $this->translate(
            " _     _  _ \n" .
            "| |  | _| _|\n" .
            "|_|  ||_  _|\n" .
            "            ")->shouldBe("0123");

        $this->translate(
            " _  _  _  _ \n" .
            "|_||_|  ||_ \n" .
            " _||_|  | _|\n" .
            "            ")->shouldBe("9875");
    }
}
