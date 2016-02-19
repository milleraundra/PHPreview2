<?php

    require_once __DIR__."/../src/CountRepeat.php";

    class CountRepeatTest extends PHPUnit_Framework_TestCase
    {
        function test_oneWord()
        {
            $new_CountRepeat = new CountRepeat;
            $input_sentence = "Mary";
            $input_word = "mary";

            $result = $new_CountRepeat->trackCount($input_sentence, $input_word);

            $this->assertEquals(1, $result);
        }

        function test_noMatch()
        {
            $new_CountRepeat = new CountRepeat;
            $input_sentence = "Mary Poppins";
            $input_word = "Pop";

            $result = $new_CountRepeat->trackCount($input_sentence, $input_word);

            $this->assertEquals(0, $result);
        }

        function test_multipleWords()
        {
            $new_CountRepeat = new CountRepeat;
            $input_sentence = "To don't have to be great to start, but you have to be start to be great";
            $input_word = "to";

            $result = $new_CountRepeat->trackCount($input_sentence, $input_word);

            $this->assertEquals(5, $result);
        }
    }







 ?>
