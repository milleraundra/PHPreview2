<?php

    class CountRepeat {

        private $sentence;
        private $word;

        function trackCount($input_sentence, $input_word)
        {
            $sentence_transform = strtolower($input_sentence);
            $sentence_array = explode(" ", $sentence_transform);
            $word_transform = strtolower($input_word);
            $count = 0;
            foreach ($sentence_array as $index => $word) {
                if ($sentence_array[$index] == $word_transform) {
                    $count += 1;
                }
            }
            return $count;

        }
    }



?>
