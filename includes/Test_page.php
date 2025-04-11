<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){ //checks that we access the page via log In
        echo "this is a test";
        
        // Get variables from form 
        $firstname = $_POST["username"];
        $password = $_POST["password"];

        echo "<br>";
        echo $firstname;
        echo "<br>";
        echo $password;
        echo "<br>";
    }
    else{
        header("Location: ../index.php"); // Sends user back if they enter url directly and didnot signed in
    }

    ?>
    
</body>
</html>