<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>pasakumi</h1>

<ul>
<?php foreach($pasakumi as $pasak) { ?>
<li>
  <a href="/show?id=<?= $pasak["id"] ?>"><?= htmlspecialchars($pasak["Nosaukums"])?></a>
  
  </li>
<?php } ?>
</ul>
<?php require "views/components/footer.php" ?>