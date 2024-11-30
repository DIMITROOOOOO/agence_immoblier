<?php
ob_start();
?>
<div class="container">

            <p>reference: <?=$res[0]?> </p>
            <p>Propriétaire: <?=$res[1]?> </p>
            <p>Localité: <?=$res[2]?> </p>
            <p>Surface: <?=$res[3]?> </p>
            <p>Usage: <?=$res[4]?> </p>
            <p>Nb pièces: <?=$res[5]?> </p>

</div>
<?php
$contenu=ob_get_clean();
$titre="Apartemnt:";
include "layout.php";
?>