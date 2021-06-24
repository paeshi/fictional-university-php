<?php 
    function greet($name, $color) {
        echo "<p>Hello, my name is $name and my favorite color is $color </p>";
    }
    greet("Steve", "Blue");
    greet("Gorilla", "Orange");
    
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?> </p>