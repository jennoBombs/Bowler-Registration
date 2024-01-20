<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Bowler Registration</title>
</head>
<body>
    
    <?php
        $Bowlers = "registration.txt";

        if(file_exists($Bowlers)){
            echo '<pre>';
            readfile($Bowlers);
            echo '</pre>';
        }
        else{
            echo "File does not exist";
        }
           
  ?>
</body>
</html>