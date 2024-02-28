<!--//5-1-->

<html>
    <head>
        <title>CS316 5-1 Assignment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $CounterFile = "hitcount.txt";
            
            if (file_exists($CounterFile)) {
                $Hits = file_get_contents($CounterFile);
                ++$Hits;  } 
            echo "<h1>There have been $Hits hits to this page.  </h1>\n";
            if (file_put_contents($CounterFile, $Hits))
                    echo "<p>The counter file has been updated.  </p>\n"; 

        ?>
    </body>
</html>  
