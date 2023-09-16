<?php

session_start();
if(!isset($_SESSION["user_id"]))
{
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['name'];

// $user_id = $_POST['user_id'];
$height = $_POST['height'] / 100; // Convert height to meters
$weight = $_POST['weight'];

// Calculate BMI
$bmi = $weight / ($height * $height);

// Connect to the database and insert BMI data
$mysqli = new mysqli("localhost", "root", "", "Aahar");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Replace with the actual user ID
$insert_query = "INSERT INTO bmi_data (height, weight, bmi) VALUES ('$height', '$weight', '$bmi')";
if ($mysqli->query($insert_query) === TRUE) {
    // Determine the BMI category
    $bmiCategory = '';

    if ($bmi < 18.5) {
        $bmiCategory = 'weight_under';
    } elseif ($bmi >= 18.5 && $bmi < 24) {
        $bmiCategory = 'weight_healthy';
    } elseif ($bmi >= 24 && $bmi < 27.9) {
        $bmiCategory = 'weight_over';
    } elseif ($bmi >= 28) {
        $bmiCategory = 'weight_excessive';
    }

    // Redirect to the appropriate page
    header("Location: $bmiCategory.php?bmi=" . round($bmi, 2));
    exit();
} else {
    echo "Error: " . $insert_query . "<br>" . $mysqli->error;
}

$mysqli->close(); // Close the database connection
?>


