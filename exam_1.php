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

    echo whileFunc() . "<br>";

    echo doWhileFunc()  . "<br>";
?>