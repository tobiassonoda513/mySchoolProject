<?php
    function getRandomNumber($min = 0, $max = 100) {
        return rand($min, $max);
    }

    echo "Random number between 0 and 100: " . getRandomNumber();
?>
