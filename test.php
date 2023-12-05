<?php
// Comment
echo "Test<br>";
# Comment 2
print "Test2<br>";

/*
comment
for many strings 
 */
$firstName = "Alexey";

$firstName = "Oleksii";


$lastName = "Kochurov";

$fullName = "$firstName $lastName";

// echo 'My name is: ' . $name;


echo "My full name is: $fullName<br>";


define("AGE", 29);

echo "I'm " . AGE . " years old<br>";

define("echo", "some text");

echo constant("echo");
