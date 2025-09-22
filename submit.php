
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $level = htmlspecialchars($_POST['level']);
    $feedback = htmlspecialchars($_POST['feedback']);

    echo ("First Name: $fname" . "<br />\n");
    echo ("Email: $email" . "<br />\n");
    echo ("Level: $level" . "<br />\n");
    echo ("Feedback: $feedback" . "<br />\n");
}

?>


