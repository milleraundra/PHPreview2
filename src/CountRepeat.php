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
            $return_sentence = array();
            $count = 0;
            foreach ($sentence_array as $index => $word) {
                if ($sentence_array[$index] == $final_word) {
                    $count += 1;
                }
            }
            if($count == 1) {
                return "Aha! That word occurs only $count time in your sentence.";
            } elseif ($count > 0){
                return "Your selected word appears $count times in your sentence.";
            } else {
                return "That word never occurs in your sentence. Try another word!";
            }
            // return $count;

        }
    }
//if match, array_push($return_sentence, "<span class='match'>$sentence_array[$index]</span>";


?>
