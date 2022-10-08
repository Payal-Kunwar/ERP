<?php
require 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["review"];
    $rating = $_POST["rating"];

    $sql = "INSERT INTO rating (feedback,rate) VALUES ('$name','$rating')";
    if (mysqli_query($conn, $sql))
    {
        echo "<h5 onsubmit=alert('Your review was successfully submitted.')>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $val1=60;

    header("Location:single.php");
    mysqli_close($conn);
}
?>