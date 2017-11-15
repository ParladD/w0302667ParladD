
<?php
    date_default_timezone_set("America/Halifax");

?>


<!DOCTYPE html>

<html>
    <head>
        <title>Today's date is.....</title>
    </head>
    <body>
        <h1>The date is
            <?php
                echo date("y/m/d");
            ?>
        </h1>
        <hr/>
        <h1>
            The date and time is
            <?php
            echo date("y/m/d h:m:i e");

            ?>
        </h1>
        <hr/>
        <h1>
            The server time zone is
            <?php
            echo date_default_timezone_get();

            ?>
        </h1>
    </body>
</html>