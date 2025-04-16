<?php if (sizeof($types) != 0) : ?>
    <?= sizeof($types) > 1 ? "<h2>Edit Types</h2>" : "<h2>Edit Type</h2>" ?>
    <div id="type_edit">
        <?php foreach ($types as $m) : ?>
            <form action="." method="post">
                <input type="hidden" name="type_id" value="<?= htmlspecialchars($m['ID']); ?>">
                <input type="text" name="type_text" value="<?= htmlspecialchars($m['Type']); ?>">
                <button name="action" value="update_type">Update</button>
                <button name="action" value="delete_type">Delete</button>
            </form>
        <?php endforeach ?>
    <?php endif ?>
    </div>

    <h2>Add New type</h2>
    <div id="type_edit">
        <form action="." method="post">
            <input type="text" name="type_text" required placeholder="type">
            <button name="action" value="add_type">Add</button>
        </form>

        <form action="." method="post">
            <button name="action" value="sort">Back</button>
        </form>
    </div>
    <?php include(__DIR__ . "/../../View/bottom_pad.php"); ?>
    <?php include(__DIR__ . "/../View/admin_footer_types.php"); ?>