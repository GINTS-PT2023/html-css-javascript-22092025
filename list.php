 <?php
    $servername = "localhost";
    $username = "gintsbrunovskispt2023";
    $password = "gintsbrunovskispt2023";
    $dbname = "html_css_javascript_22092025";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, fname, email, level, feedback FROM form_table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["fname"] . " " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LIST</title>
 </head>

 <body>

     <a href="/">Home</a>

 </body>

 </html>