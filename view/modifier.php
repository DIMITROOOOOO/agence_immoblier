<?php
include "liste.php";
$ref=$_GET['ref'];
$prop=$_GET['prop'];
$loc=$_GET['loc'];
$sur=$_GET['sur'];
$use=$_GET['use'];
$nb=$_GET['nb'];
$ep=$_GET['ep'];
ob_start();

?>
   
<form action="../controler/modifier.php" method="post" class="mt-4">    
    <div class="mb-3">
        <label for="ref" class="form-label">Référence</label>
        <input type="number" class="form-control" id="ref" name="ref"  value='<?=$ref?>' >
    </div>
    <div class="mb-3">
        <label for="prop" class="form-label">Propriétaire</label>
        <input type="text" class="form-control" id="prop" name="prop" value='<?=$prop?>'>
    </div>
    <div class="mb-3">
        <label for="loc" class="form-label">Localité</label>
        <input type="text" class="form-control" id="loc" name="loc" value='<?=$loc?>'>
    </div>
    <div class="mb-3">
        <label for="sur" class="form-label">Surface</label>
        <input type="float" step="0.01" class="form-control" id="sur" name="sur" value='<?=$sur?>'>
    </div>
    <div class="mb-3">
        <label for="dom" class="form-label">Usage</label>
        <input type="text" class="form-control" id="dom" name="dom" value='<?=$use?>'>
    </div>
    <div class="mb-3">
        <label for="nbp" class="form-label">Nombre de pièces</label>
        <input type="number" class="form-control" id="nbp" name="nbp" value='<?=$nb?>'>
    </div>
    <div class="mb-3">
        <label for="surface" class="form-label">Surface de l'espace commun</label>
        <input type="float" step="0.01" class="form-control" id="surface" name="surface" value='<?=$ep?>'>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="ok">modifier</button>
    </div>
</form>

<?php
$contenu = ob_get_clean();
$titre = "modifier un appartement";
include "layout.php";
?>
