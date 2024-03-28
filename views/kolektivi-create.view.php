<?php require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<h1>Create a Post</h1>

<form method="POST">
  <label>Title:
    <input name="title" value="<?= $_POST["title"] ?? "" ?>"/>
    <?php if (isset($errors["title"])) {?>
    <p class="invalid-date"><?= $errors["title"] ?></p>
    <?php } ?>
  </label>
  <label>Category ID:
    <select name="category-id">
    <option value="1">pasakumi</options>
    <option value="2">kolektivi</options>
    </select>
    <?php if (isset($errors["title"])) {?>
    <p class="invalid-date"><?= $errors["title"] ?></p>
    <?php } ?>
  </label>
  <button>Save</button>
</form>


<?php require "components/footer.php" ?>