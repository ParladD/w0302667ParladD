
<!DOCTYPE html>
<html>
    <head>
        <title>HTML AND PHP</title>
    </head>
    <body>
        <section>
            <article>
                <?php
                    echo "<h1>Greetings from Lab1</h1>";//html code in php
                ?>
                <!-- Adding html tag  -->
                <p>
                    Php is fun, Php is awesome and exciting
                    to learn, here and there, Php everywhere.
                </p>
                <?php
                 echo "<h3>This is a h3 HTML tag</h3>";//html h3 tag inside php
                ?>
            </article>
            <section> <!-- STEP TWO -->
                <article>
                    <?php
                    //step 2
                        echo "<h3>String Variable</h3>";
                        $Name = "Parlad Dhungana";
                        echo $Name;
                    //-- Step 3 --//
                        echo "<h3>Concatenation Operator</h3>";

                        $hello = "Hello World!";
                        $message = "From Php";

                        echo "<p> ".$hello." ".$message." </p>";
                    //-- Step 4--//
                        echo "<h3>Arithmetic Operator</h3>";

                        $a = 32; $b = 14; $c = 83; //asg variables
                        $ans = $a * $b + $c; //result
                        echo "<p>The result of ( ".$a." * ".$b." ) + ".$c." equals ".$ans." </p>";

                        //part b
                        $d = 1024; $e = 128; $f = 7;
                        $totAns = $d / $e - $f;
                        echo "<p>The result of ( ".$d." / ".$e." ) - ".$f." equals ".$totAns." </p>";

                        //part c
                        $x = 769; $y = 6;
                        $z = $x % $y;

                        echo "<p>The reminder of ( ".$x." % ".$y." ) equals ".$z." </p>";

                       // Step 5
                        echo "<h3>LOOP</h3>";

                        $loopArray = array("10...","9...","8...","7...","6...","5...","4...","3...","2...","1...","Blast Off");
                        foreach ($loopArray as $loop){
                               echo $loop;
                        } //done with loops

                        $colourArray = array("Green","Red","White","Orange","Yellow","Blue","Cyan");

                        echo "<h3>For Loop</h3>";

                        for($x = 0; $x < count($colourArray); $x++){
                            echo $colourArray[$x]." </br></br>";
                        } // done with for loops

                        echo "<h3>Foreach Loop</h3>";

                        foreach ($colourArray as $Cloop){
                           echo "<pre>".$Cloop."</pre>";
                         } //done with foreach loops

                    echo "<h3>while Loop</h3>";
                        $colourA = 0;
                        while ($colourA < count($colourArray)){
                            echo "<li>".$colourArray[$colourA]."</li>";
                            $colourA++;
                        }
                    ?>
                </article>
            </section>
        </section>
    </body>
</html>
