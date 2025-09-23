
<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $fname = htmlspecialchars($_POST['fname']);
//     $email = htmlspecialchars($_POST['email']);
//     $level = htmlspecialchars($_POST['level']);
//     $feedback = htmlspecialchars($_POST['feedback']);

//     echo ("First Name: $fname" . "<br />\n");
//     echo ("Email: $email" . "<br />\n");
//     echo ("Level: $level" . "<br />\n");
//     echo ("Feedback: $feedback" . "<br />\n");
// }

$servername = "localhost";
$username = "gintsbrunovskispt2023";
$password = "gintsbrunovskispt2023";
$dbname = "html_css_javascript_22092025";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $level = htmlspecialchars($_POST['level']);
    $feedback = htmlspecialchars($_POST['feedback']);

    $sql = "INSERT INTO form_table (fname, email, level, feedback) 
          VALUES ('$fname', '$email', '$level', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        echo "created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>


