<?php
ob_start();
?>
   
<form action="../controler/ajouter.php" method="post" class="mt-4">    
    <div class="mb-3">
        <label for="ref" class="form-label">Référence</label>
        <input type="number" class="form-control" id="ref" name="ref" placeholder="Enter reference">
    </div>
    <div class="mb-3">
        <label for="prop" class="form-label">Propriétaire</label>
        <input type="text" class="form-control" id="prop" name="prop" placeholder="Enter le propriétaire">
    </div>
    <div class="mb-3">
        <label for="loc" class="form-label">Localité</label>
        <input type="text" class="form-control" id="loc" name="loc" placeholder="Enter localité">
    </div>
    <div class="mb-3">
        <label for="sur" class="form-label">Surface</label>
        <input type="number" step="0.01" class="form-control" id="sur" name="sur" placeholder="Enter surface">
    </div>
    <div class="mb-3">
        <label for="dom" class="form-label">Usage</label>
        <input type="text" class="form-control" id="dom" name="dom" placeholder="Enter usage">
    </div>
    <div class="mb-3">
        <label for="nbp" class="form-label">Nombre de pièces</label>
        <input type="number" class="form-control" id="nbp" name="nbp" placeholder="Enter le nombre de pièces">
    </div>
    <div class="mb-3">
        <label for="surface" class="form-label">Surface de l'espace commun</label>
        <input type="number" step="0.01" class="form-control" id="surface" name="surface" placeholder="Enter la surface commune">
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="ok">Submit</button>
    </div>
</form>

<?php
$contenu = ob_get_clean();
$titre = "Ajouter un appartement";
include "layout.php";
?>
