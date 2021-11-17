<?php require "views/partials/heading.php" ?>
    <h1>Usernames</h1>
    <ul>
        <?php foreach ($users as $user):?>
            <li><?= $user->name ?> <a href="/edit?id=<?=$user->id?>">edit</a> <a href="/delete?id=<?=$user->id?>">delete</a></li>
        <?php endforeach ?>
    </ul>
    <h1>Tasks</h1>
        <ul>
        <?php foreach ($tasks as $task):?>
            <?php if ($task->complete === true):?>
                <li><strike><?= $task->description?></strike></li>
            <?php else: ?>
                <li><?= $task->description?></li>
            <?php endif?>
        <?php endforeach ?>
        </ul>

    <h1>Submit your name</h1>
        <form action="/names" method="POST">
            <input type="name" name="name">
            <input type="submit" value="submit">
        </form>
<?php require "views/partials/footer.php" ?>