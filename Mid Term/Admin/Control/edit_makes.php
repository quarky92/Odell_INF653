<?php if (sizeof($makes) != 0) : ?>
    <?= sizeof($makes) > 1 ? "<h2>Edit Makes</h2>" : "<h2>Edit Make</h2>" ?>
    <div id="make_edit">
        <?php foreach ($makes as $m) : ?>
            <form action="." method="post">
                <input type="hidden" name="make_id" value="<?= htmlspecialchars($m['ID']); ?>">
                <input type="text" name="make_text" value="<?= htmlspecialchars($m['Make']); ?>">
                <button name="action" value="update_make">Update</button>
                <button name="action" value="delete_make">Delete</button>
            </form>
        <?php endforeach ?>
    <?php endif ?>
    </div>
    <h2>Add New Make</h2>
    <div id="make_edit">
        <form action="." method="post">
            <input type="text" name="make_text" required placeholder="Make">
            <button name="action" value="add_make">Add</button>
        </form>

        <form action="." method="post">
            <button name="action" value="sort">Back</button>
        </form>
    </div>
    <?php include(__DIR__ . "/../../View/bottom_pad.php"); ?>
    <?php include(__DIR__ . "/../View/admin_footer_makes.php"); ?>