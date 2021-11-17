<?php require "views/partials/heading.php" ?>
<h1>Edit your name</h1>
<form action="/edit" method="POST">
    <input type="text" name="editname">
    <input type="text" name="id" value="<?=$_GET['id']?>" style="display: none">
    <input type="submit" value="edit">
</form>
<?php require "views/partials/footer.php" ?>

