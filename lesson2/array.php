<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 9/14/17
 * Time: 11:11 AM
 */

$Provinces = array(
    "Nova Scotia",
    "New Brunswick",
    "PEI"
); ?>

<!DOCTYPE html>

<html>
    <head>
        <title>
            Fun with Arrays
        </title>
    </head>
    <body>
        <section>
            <article>
                <pre>
                    <?php print_r($Provinces);?>
                </pre>
            </article>
        </section>
        <section>
            <article>

                <?php
                    $Provinces[] = "Quebec";
                    for ($x = 0; $x <= count($Provinces); $x++)
                        echo "<li> $Provinces[$x]</li>";
                ?>

             </article>

            <article>
                <ul>
                    <?php
                         $Provinces[] = "Newfoundland";
                         foreach ($Provinces as $index => $item){
                             echo "<li>".($index +1).":$item</li>";
                         }
                    ?>
                </ul>
            </article>

        </section>
        <?php

        ?>

    </body>
</html>
