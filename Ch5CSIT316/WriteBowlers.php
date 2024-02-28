<!--//5-3-->

<html>
    <head>
        <title>CS316 5-3 Assignment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Enter your name, age, and average separated by commas.</h2>
        <form method="POST" action="WriteBowlers.php">
            <p>First Name <input type="text" name="first_name"  /></p>
            <p>Last Name <input type="text" name="last_name"  /></p>
            <p>Age <input type="text" name="age"  /></p>
            <p>Average <input type="text" name="average"  /></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
        <p><a href="ShowBowlers.php">Show Bowlers  </a></p> 

        <?php
            if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['age']) || empty($_POST['average']))
                echo "<p>You must enter all valid data. Click your browser's Back button to  return to the page.</p>\n"; 
            else {
                $FirstName = addslashes($_POST['first_name']);
                $LastName = addslashes($_POST['last_name']);
                $Age = addslashes($_POST['age']);
                $Average = addslashes($_POST['average']);
                $Bowlers = fopen("bowlers.txt", "ab");
                if (is_writeable("bowlers.txt"))
                {
                    if (fwrite($Bowlers, $LastName . ", " .  $FirstName . "\n" . $Age . "\n" . $Average . "\n"))
                            echo "<p>Data recorded!</p>\n";
                    else
                        echo "<p>Cannot add your name to bowler list.</p>\n";                     
            }
            else
            echo "<p>Cannot write to the file.</p>\n";
            fclose($Bowlers);
            }
        ?>
    </body>
</html>  
