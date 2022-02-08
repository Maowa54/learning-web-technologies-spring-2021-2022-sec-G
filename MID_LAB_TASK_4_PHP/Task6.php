<?php
echo "Task 6:";
echo "<br>";
echo "Search an element from an array";
echo "<br>";
$letters = array("a", "b", "c", "d");
if (in_array("c", $letters)) {
    echo "Item found in array";
} else {
    echo "Item not found";
}
?>