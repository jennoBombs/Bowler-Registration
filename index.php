<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowler Registration</title>
</head>
<body>
    <h4>Jennifer Reisinger CS316</h4>
    <h4>Assignment 5-3</h4>
    <h4>Bowler Registration</h4><hr />

    <h2>Enter your name to sign our guestbook</h2>
    <form method="POST" action="index.php">
    <p>First Name <input type="text" name="first_name"/></p>
    <p>Last Name <input type="text" name="last_name"/></p>
    <p>Age <input type="text" name="age"/></p>
    <p>Average <input type="text" name="avg"/></p>
    <p><input type="submit" value="Submit"/></p>
    </form>
    <p><a href="ShowBowlerRegistration.php">Show Bowler Registration</a></p>

    <?php
                if(empty($_POST['first_name']) || empty($_POST['last_name']))
                echo "<p>You must enter your first and last name. Click your browser's Back button to return
                    to the Bowler Registration. </p>\n";
            else{
                $FirstName = addslashes($_POST['first_name']);
                $LastName = addslashes($_POST['last_name']);
                $Age = addslashes($_POST['age']);
                $Average = addslashes($_POST['avg']);
                $BowlerRegistration = fopen("registration.txt", "ab");
                if (is_writable("registration.txt")){
                    if (fwrite($BowlerRegistration, $LastName . ", " . $FirstName . ", " . $Age .", " . $Average ."\n"))
                        echo "<p>Thank you for signing up!!</p>\n";
                    else
                        echo "<p>Cannot add your name to the registration list.</p>\n";
                }
                else
                    echo "<p>Cannot write to the file.</p>\n";
                        fclose($BowlerRegistration);
            }
    ?>

    
</body>
</html>