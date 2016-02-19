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

            $this->assertEquals(array(1, "<span class='match'>Mary</span>"), $result);
        }

        function test_noMatch()
        {
            $new_CountRepeat = new CountRepeat;
            $input_sentence = "Mary Poppins";
            $input_word = "Pop";

            $result = $new_CountRepeat->trackCount($input_sentence, $input_word);

            $this->assertEquals(array(0, "Mary poppins"), $result);
        }

        function test_multipleWords()
        {
            $new_CountRepeat = new CountRepeat;
            $input_sentence = "You don't have to be great to start, but you have to be start to be great";
            $input_word = "to";

            $result = $new_CountRepeat->trackCount($input_sentence, $input_word);

            $this->assertEquals(array(4, "You dont have <span class='match'>to</span> be great <span class='match'>to</span> start but you have <span class='match'>to</span> be start <span class='match'>to</span> be great"), $result);
        }

        function test_punctuationinWords()
        {
            $new_CountRepeat = new CountRepeat;
            $input_sentence = "You don't have to be great to start, but you have to be start to be great";
            $input_word = "don't";

            $result = $new_CountRepeat->trackCount($input_sentence, $input_word);

            $this->assertEquals(array(1, "You <span class='match'>dont</span> have to be great to start but you have to be start to be great"), $result);
        }
    }







 ?>
