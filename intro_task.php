<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        echo($i);
        echo(" Fizz\n");
    } else if ($i % 5 === 0) {
        echo($i);
        echo(" Buzz\n");
    } else if ($i % 15 === 0) {
        echo($i);
        echo(" FizzBuzz\n");
    } else {
        continue;
    }
}
