<!--Edit vehicles -->
<?php if (sizeof($makes) != 0) : ?>
    <?= sizeof($makes) > 1 ? "<h2>Edit Vehicles</h2>" : "<h2>Edit Vehicle</h2>" ?>
    <div id="vehicle_edit">
        <?php foreach ($vehicles as $v) : ?>
            <form action="." method="post">
                <input type="hidden" name="vehicle_id" value="<?= htmlspecialchars($v['ID']); ?>">

                <select name="vehicle_make" required>
                    <?php foreach ($makes as $m) : ?>
                        <option value="<?= htmlspecialchars($m['ID']); ?>" <?= $m['ID'] == $v['make_id'] ? "selected=selected" : ""; ?>><?= htmlspecialchars($m['Make']); ?></option>
                    <?php endforeach ?>
                </select>

                <label for="vehicle_year">Year:</label>
                <input type="text" name="vehicle_year" value="<?= htmlspecialchars($v['year']); ?>" required>

                <label for="vehicle_model">Model:</label>
                <input type="text" name="vehicle_model" value="<?= htmlspecialchars($v['model']); ?>" required>

                <label for="vehicle_price">Price: $</label>
                <input type="text" name="vehicle_price" value="<?= htmlspecialchars($v['price']); ?>" required>

                <select name="vehicle_type" required>
                    <?php foreach ($types as $t) : ?>
                        <option value="<?= htmlspecialchars($t['ID']); ?>" <?= $t['ID'] == $v['type_id'] ? "selected=selected" : ""; ?>><?= htmlspecialchars($t['Type']); ?></option>
                    <?php endforeach ?>
                </select>

                <select name="vehicle_class" required>
                    <?php foreach ($classes as $c) : ?>
                        <option value="<?= htmlspecialchars($c['ID']); ?>" <?= $c['ID'] == $v['class_id'] ? "selected=selected" : ""; ?>><?= htmlspecialchars($c['Class']); ?></option>
                    <?php endforeach ?>
                </select>




                <button name="action" value="update">Update</button>
                <button name="action" value="delete">Delete</button>
                <br>
            </form>
        <?php endforeach ?>
    <?php endif ?>
    </div>

    <!--Add vehicles -->
    <h2>Add Vehicle</h2>
    <div id="vehicle_edit">
        <form action="." method="post">
            <select name="vehicle_make" required>
                <option value="" disabled selected>Make</option>
                <?php foreach ($makes as $m) : ?>
                    <option value="<?= htmlspecialchars($m['ID']); ?>"><?= htmlspecialchars($m['Make']); ?></option>
                <?php endforeach ?>
            </select>

            <label for="vehicle_year">Year:</label>
            <input type="text" name="vehicle_year" value="" required>

            <label for="vehicle_model">Model:</label>
            <input type="text" name="vehicle_model" value="" required>

            <label for="vehicle_price">Price: $</label>
            <input type="text" name="vehicle_price" value="" required>

            <select name="vehicle_type" required>
                <option value="" disabled selected>Type</option>
                <?php foreach ($types as $t) : ?>
                    <option value="<?= htmlspecialchars($t['ID']); ?>"><?= htmlspecialchars($t['Type']); ?></option>
                <?php endforeach ?>
            </select>

            <select name="vehicle_class" required>
                <option value="" disabled selected>Class</option>
                <?php foreach ($classes as $c) : ?>
                    <option value="<?= htmlspecialchars($c['ID']); ?>"><?= htmlspecialchars($c['Class']); ?></option>
                <?php endforeach ?>
            </select>

            <button name="action" value="add_new_vehicle">Add</button>
            <br>
        </form>
        <form action="." method="post">
            <button name="action" value="sort">Back</button>
        </form>
    </div>
    <?php include(__DIR__ . "/../../View/bottom_pad.php"); ?>
    <?php include(__DIR__ . "/../View/admin_footer_vehicle.php"); ?>