<?php

    require_once "src/CountRepeat.php";

    class CountRepeatTest extends PHPUnit_Framework_TestCase
    {
        function test_input_word()
        {
        //Arrange
        $test_CountRepeat = new CountRepeat;
        $input = 'burger';

        //Act
        $result = $test_CountRepeat->singleWord($input);

        //Assert
        $this->assertEquals("burger", $result);
        }

        function test_input_multiple_words()
        {
        //Arrange
        $test_CountRepeat = new CountRepeat;
        $input = "delicious burger";

        //Act
        $result = $test_CountRepeat->multipleWords($input);

        //Assert
        $this->assertEquals("delicious burger", $result);
        }

        function test_input_find_word()
        {
        //Arrange
        $test_CountRepeat = new CountRepeat;
        $input_string = "an incredibly delicious burger";
        $input_word = "burger";

        //Act
        $result = $test_CountRepeat->findWord($input_string, $input_word);

        //Assert
        $this->assertEquals("burger", $result);
        }
    }

?>
