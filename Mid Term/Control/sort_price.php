<form action="." method="post">
    <table>
        <tr>
            <input type="hidden" name="sort_last" value="<?= $sort_by != $sort_last ? htmlspecialchars($sort_by) : ""; ?>">
            <input type="hidden" name="action" value="sort">
            <th><button name="sort_type" value="year">Year</button></th>
            <th>Make</th>
            <th>Model</th>
            <th>Type</th>
            <th>Class</th>
            <th><button name="sort_type" value="price">Price</button></th>
        </tr>
        <?php

        include_once(__DIR__ . "/../View/vehicles.php");
        ?>
    </table>
</form>