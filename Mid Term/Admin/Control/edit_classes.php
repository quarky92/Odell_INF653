<?php if (sizeof($classes) != 0) : ?>
    <?= sizeof($classes) > 1 ? "<h2>Edit Classes</h2>" : "<h2>Edit Class</h2>" ?>
    <div id="class_edit">
        <?php foreach ($classes as $c) : ?>
            <form action="." method="post">
                <input type="hidden" name="class_id" value="<?= htmlspecialchars($c['ID']); ?>" required>
                <input type="text" name="class_text" value="<?= htmlspecialchars($c['Class']); ?>" required>
                <button name="action" value="update_class">Update</button>
                <button name="action" value="delete_class">Delete</button>
            </form>
        <?php endforeach ?>
    <?php endif ?>
    </div>
    <h2>Add New Class</h2>
    <div id="class_edit">
        <form action="." method="post">
            <input type="text" name="class_text" required placeholder="Class">
            <button name="action" value="add_class">Add</button>
        </form>

        <form action="." method="post">
            <button name="action" value="sort">Back</button>
        </form>
    </div>
    <?php include(__DIR__ . "/../../View/bottom_pad.php"); ?>
    <?php include(__DIR__ . "/../View/admin_footer_classes.php"); ?>