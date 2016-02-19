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

        // function test_noMatch()
        // {
        //     $new_CountRepeat = new CountRepeat;
        //     $input_sentence = "Mary Poppins";
        //     $input_word = "Pop";
        //
        //     $result = $new_CountRepeat->trackCount($input_sentence, $input_word);
        //
        //     $this->assertEquals(0, $result);
        // }
    }







 ?>
