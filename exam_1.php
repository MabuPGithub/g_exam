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

    echo whileFunc();
?>