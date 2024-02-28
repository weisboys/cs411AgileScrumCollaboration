<!--//5-2-->

<html>
    <head>
        <title>CS316 5-2 Assignment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Enter your name to sign our guest book</h2>
        <form method="POST" action="SignGuestBook.php">
            <p>First Name <input type="text" name="first_name"  /></p>
            <p>Last Name <input type="text" name="last_name"  /></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
        <p><a href="ShowBowlers.php">Show Guest Book  </a></p> 

        <?php
            if (empty($_POST['first_name']) || empty($_POST['last_name']))
                echo "<p>You must enter your first and last  name. Click your browser's Back button to  return to the Guest Book.</p>\n"; 
            else {
                $FirstName = addslashes($_POST['first_name']);
                $LastName = addslashes($_POST['last_name']);
                $GuestBook = fopen("guestbook.txt", "ab");
                if (is_writeable("guestbook.txt"))
                {
                    if (fwrite($GuestBook, $LastName . ", " .  $FirstName . "\n"))
                            echo "<p>Thank you for signing our  guest book!</p>\n";
                    else
                        echo "<p>Cannot add your name to the  guest book.</p>\n";                     
            }
            else
            echo "<p>Cannot write to the file.</p>\n";
            fclose($GuestBook);
            }
        ?>
    </body>
</html>  