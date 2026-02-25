<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['username'];
    $birth_year = $_POST['year'];

    
    $current_year = 2026;
    $age = $current_year - $birth_year;

    
    if ($age < 50) {
        
        header("Location: below_Fifty.php");
        exit();
    } else {
        
        header("Location: above_Fifty.php");
        exit();
    }
}
