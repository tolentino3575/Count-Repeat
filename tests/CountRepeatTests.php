<?php

    require_once 'src/CountRepeat.php';

    class CountRepeatTest extends PHPUNIT_Framework_Testcase
    {
        function test_input_word()
        {
        //Arrange
        $test_CountRepeat = new CountRepeat();
        $input = 'dog';

        //Act
        $result = $test_CountRepeat->singleWord($input);

        //Assert
        $this->assertEquals('dog', $result);
        }
    }







?>
