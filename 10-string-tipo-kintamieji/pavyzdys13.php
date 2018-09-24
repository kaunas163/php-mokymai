<?php

/*
This function returns:
    0 - if the two strings are equal
    < 0 - if string1 is less than string2
    > 0 - if string1 is greater than string2
*/

echo strcmp("Hello world!", "Hello world!"); // the two strings are equal
echo "<br>";

echo strcmp("Hello world!", "Hello"); // string1 is greater than string2
echo "<br>";

echo strcmp("Hello world!", "Hello world! Hello!"); // string1 is less than string2
echo "<br>";
