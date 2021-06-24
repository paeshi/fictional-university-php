<?php 
$names = array("Steve", "Jane", "Bob");
$count = 0;
while($count < count($names)){
    echo "<li> Hi, I'm $names[$count]</li>";
    $count++;
}
    
?>
<p>Hi, I'm <?php echo $names[1]; ?>.</p>

