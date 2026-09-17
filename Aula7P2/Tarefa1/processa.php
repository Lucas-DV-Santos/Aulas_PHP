<?php 
$produtos = [
    $_POST['prod1'],
    $_POST['prod2'],
    $_POST['prod3'],
    $_POST['prod4'],
    $_POST['prod5']
]; 

echo "Seus produtos são: <br>"; 
echo "<ol>"; 

foreach ($produtos as $desc) {
    echo "<li>" . $desc . "</li>"; 
} 

echo "</ol>"; 
?>
