<?php
/**
 * This is a itzy pagecontroller.
 *
 */

// Include the essential config-file which also creates the $itzy variable with its defaults.
include(__DIR__.'/config.php');

// Do it and store it all in variables in the itzy container.
$itzy['title'] = "Hem";


$itzy['main'] = <<<EOD
<h1>Hem</h1>
<p>
Det här kommer att vara min me-sida under kursens gång. Den kommer byggas ut och ändras om (förhoppningsvis till det bättre).<br>
Så ja, nu kör vi: Databas och objektorienterad PHP-programmering.
</p>
<p>
/ Julia

</p>
<p>

ps. Ni kanske undrar varför jag döpt den här sidan till itzy. Det ska jag berätta!<br>
Jag ville bygga den utifrån något personligt, men ändå inte mitt eget namn, så, det blev mitt nickname.<br>
Jag har länge varit en spelnörd och under CS (counter strike) åren skulle man ha ett coolt nickname, och det blev Itzy för mig,
det kommer från den tecknade barnfilmen Änglahund som jag ÄLSKAR.<br>
Namnet har liksom fastnat och många av mina kompisar idag kallar mig för itzy, vilket jag personligen inte har någonting alls emot.

</p>
EOD;



// Finally, leave it all to the rendering phase of itzy.
include(ITZY_THEME_PATH);
