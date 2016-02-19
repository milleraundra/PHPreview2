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
        //Count function
            if ($sentence_array == array("")) {
                $count = 0;
                $return_sentence = implode($return_sentence);
                array_push($final_array, $count, $return_sentence);
                return $final_array;
            } else {
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

        function partialMatch($input_sentence, $input_search)
        {
        //Sentence adjustments
            $sentence_transform = strtolower($input_sentence);
            $final_sentence = preg_replace('/[^a-z0-9\s]+/i', '', $sentence_transform);
        //Word adjustments
            $search_transform = strtolower($input_search);
            $final_search = preg_replace('/[^a-z0-9\s]+/i', '', $search_transform);
        //Other Resources
            $final_array = array();
            $count = 0;
        //Begin Functionality
            if ($final_sentence == "") {
                $count = 0;
                array_push($final_array, $count, $final_sentence);
                return $final_array;
            } else {
                $sentence_edit = str_replace($final_search, "<span class='match'>$final_search</span>", $final_sentence);
                $count = substr_count($sentence_edit, "<span class='match'>");
                array_push($final_array, $count, $sentence_edit);
                return $final_array;
            }
        }


    }
//Random response sentence
// $result_sentences = array("Check it out! Your word apperas {{count}} times!", "Your word appears {{count}} times in your sentence. Neat!", "I am Yoda! {{count}} times, your word appears.");
// $random_result_sentence = $result_sentences[array_rand($result_sentences, 1)];
?>
