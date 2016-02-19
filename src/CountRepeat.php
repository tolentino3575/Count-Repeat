<?php

    class CountRepeat
    {
        function singleWord($input)
        {
            return $input;
        }

        function multipleWords($input)
        {
            return $input;
        }

        function findWord($input_string, $input_word)
        {
            $string_words = explode(" ", $input_string);

            foreach($string_words as $word) {
                if ($word = $input_word);
            }
                return $input_word;
        }

        function countWord($input_string, $input_word)
        {
            $string_words = explode(" ", $input_string);
            $word_counter = 0;

            foreach($string_words as $word) {
                if ($word == $input_word) {
                    $word_counter += 1;
                }
            }
                    return $word_counter;
        }
    }

?>
