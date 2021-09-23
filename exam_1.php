<?php
    # Loops

    # this function will return the sum of all even numbers up to 10 using a while loop.
    function whileFunc(){
        # set number from 0.
        $x = 0;
        # the final sum.
        $sum = 0;

        # Will do the loop as long as it is less than or equal to 10.
        while($x <= 10) {
            # The if statement will check if it's an even number and will be able to add.
            if ($x % 2 == 0) {
                $sum = $sum + $x;
            }
            # increment value for loop
            $x++;
        }

        # will return the final sum.
        return $sum;
    }

    # This function will display all odd numbers with the use of a do while loop
    function doWhileFunc(){
        # set number from 0.
        $x = 0;

        # the loop that handles the checking and displaying the odd numbers from 0 to 10.
        do {
            # if statement that wll check if the number is an odd number. Will display if the number is odd
            if ($x % 2 == 1){
                echo $x . ", ";
            }
            # increment value for loop
            $x++;
        } while ($x <= 10);

    }

    # function that will display 10 numbers in the fibonacci sequence
    function forFunc(){
        #set the F0
        $x = 0;
        #set the F1    
        $y = 1; 

        # will echo the 1st 2 digits of the sequence
        echo $x . ", " . $y . ", ";

        # the for loop that will handle the sequence
        for ($i = 1; $i < 9; $i++) { 
            # $z is the result and will be displayed
            $z = $x + $y;    
            echo $z . ", ";
            # interchanging the values for the next sequence         
            $x = $y;       
            $y = $z;   
        }
    }


    # Arrays

    # this function return the most recurring value
    function mostNumberOfOccurence($array){

        # sort the array's contents
        sort($array);
        # set array length to iterate in the for loop
        $arrayLength = count($array);

        # set the the first value as the default answer
        $result = $array[0];

        # set a count for basis
        $baseCount = 1;
        # set the counter
        $counter = 1;

        # the for loop that will handle the checking
        for ($i = 1; $i < $arrayLength; $i++) { 
            # this will check if the current item is equal to the previous item. If it is equal, the counter will be incremented.
            if ($array[$i] == $array[$i - 1]) {
                $counter++;
            }
            # the else statement will reset the counter for the next check for the next item.
            else {
                # this condition will set the most recurring item if the counter is greater than the baseCount
                if ($counter > $baseCount) {
                    $baseCount = $counter;
                    $result = $array[$i - 1];
                }
                $counter = 1;
            }
        }
        # this will check if the last item is the most recurring item
        if ($counter > $baseCount) {
            $baseCount = $counter;
            $result = $array[$arrayLength - 1];
        }
        # will return the final result
        return $result;
    }

    # this sort the passed array in the ascending order with odd numbers rounded off to the nearest tens
    function sortNumber($array){
        # set the array length
        $arrayLength = count($array);
        # this array will contain the old array items w/ the rounded off odd numbers
        $newArr = array();

        # for the loop that will check if the number is odd and will push to the new array
        for ($i = 0; $i < $arrayLength; $i++) {
            if ($array[$i] % 2 == 1) {
                array_push($newArr, round($array[$i], -1));
            }
            else {
                array_push($newArr, $array[$i]);
            }
            
        }
        
        sort($newArr);
        print_r ($newArr);
    }

    $arr = array("Marvin", "Marco", "Marvin", "Marco", "Marvin", "Christian");

    $numArr = array(333, 111, 222, 555, 695);

    echo whileFunc() . "<br>";

    echo doWhileFunc()  . "<br>";

    echo forFunc() . "<br>";

    echo mostNumberOfOccurence($arr) . "<br>";

    echo sortNumber($numArr) . "<br>";
?>