<?php
ob_start();
?>
<div class="container pt-5">
<table class="table table-hover">
  <thead>
    <tr>
        <th class="col">Référence</th>
        <th class="col">Propriétaire</th>
        <th class="col">Localité</th>
        <th class="col">Surface</th>
        <th class="col">Usage</th>
        <th class="col">Nb pièces</th>
        <th class="col">Espace commun</th>
        <th class="col" colspan=2>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($lesappartment as $appartment){        
    ?>
    <tr class="table-active">
      <td><?=$appartment[0]?> </td>
      <td><?=$appartment[1]?> </td>
      <td><?=$appartment[2]?> </td>
      <td><?=$appartment[3]?> </td>
      <td><?=$appartment[4]?> </td>
      <td><?=$appartment[5]?> </td>
      <td><?=$appartment[6]?> </td>
      <td><a href="modifier.php?ref=<?=$appartment[0]?>&prop=<?=$appartment[1]?>
      &loc=<?=$appartment[2]?>&sur=<?=$appartment[3]?>
      &use=<?=$appartment[4]?>
      &nb=<?=$appartment[5]?>
      &ep=<?=$appartment[6]?>"class="badge bg-primary">modifier</td>
      <td><a href="supprimer.php?ref=<?=$appartment[0]?>"class="badge bg-danger">supprimer</td>
    </tr>
    <?php
        }
    ?>
</tbody>
</table>
</div>
<?php
        $contenu=ob_get_clean();
        $titre="liste des appartements";
        include "layout.php";
?>