<?php

    class CountRepeat {

        private $sentence;
        private $word;

        function trackCount($input_sentence, $input_word)
        {
        //Sentence adjustments
            $sentence_transform = strtolower($input_sentence);
            $sentence_punctuation = preg_replace('/[^a-z0-9\s]+/i', '', $sentence_transform);
            $sentence_array = explode(" ", $sentence_punctuation);
        //Word adjustments
            $word_transform = strtolower($input_word);
            $final_word = preg_replace('/[^a-z0-9\s]+/i', '', $word_transform);
        //Other Resources
            $return_sentence = array();
            $final_array = array();
            $count = 0;
            foreach ($sentence_array as $index => $word) {
                if ($sentence_array[$index] == $final_word) {
                    if ($index == 0) {
                        $sentence_array[$index] = ucfirst($sentence_array[$index]);
                    }
                        $count += 1;
                        array_push($return_sentence, "<span class='match'>$sentence_array[$index]</span>");
                } else {
                    if ($index == 0) {
                        $sentence_array[$index] = ucfirst($sentence_array[$index]);
                    }
                        array_push($return_sentence, $sentence_array[$index]);
                }
            }
            $return_sentence = implode(" ", $return_sentence);
            array_push($final_array, $count, $return_sentence);
            return $final_array;
        }
    }

?>
