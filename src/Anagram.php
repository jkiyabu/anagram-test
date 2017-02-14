<?php
    class Anagram
    {
        function sortOneWord($input_word)
        {
            $input_array_of_letters1 = str_split($input_word);
            $output_sorted1 = array();
            sort($input_array_of_letters1);

            return implode("", $input_array_of_letters1);


        }
        function isAnagram($input_word1, $input_word2)
        {
            $input_array_of_letters1 = str_split($input_word1);
            $output_sorted1 = array();
            sort($input_array_of_letters1);

            $input_array_of_letters2 = str_split($input_word2);
            $output_sorted2 = array();
            sort($input_array_of_letters2);

            if ($input_array_of_letters1 == $input_array_of_letters2) {
                return true;
            }
        }
    }

?>
