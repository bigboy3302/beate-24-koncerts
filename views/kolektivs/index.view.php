<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>
<h1>Kolektivi</h1>
<br>

<table>
  <tr>
    <th>Name</th>
    <th>Description</th>
  </tr>
  <?php foreach($kolektivi as $kolek): ?>
    <tr>
      <td><?php echo $kolek["name"]; ?></td>
      <td><?php echo $kolek["description"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<?php require "views/components/footer.php" ?>
