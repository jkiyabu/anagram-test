<?php
    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_sortOneWord()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input = "hat";

            //Act
            $result = $test_Anagram->sortOneWord($input);

            //Assert
            $this->assertEquals("aht", $result);
        }

        function test_isAnagram()
        {
            //Arrange
            $test_Anagram = new Anagram;
            $input1 = "bread";
            $input2 = "beard";

            //Act
            $result = $test_Anagram->isAnagram($input1, $input2);

            //Assert
            $this->assertEquals(true, $result);
        }

    }
?>
