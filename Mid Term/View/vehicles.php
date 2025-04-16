<?php foreach ($vehicles as $v) : ?>
    <tr>
        <td><?= htmlspecialchars($v['year']); ?></td>
        <td><?= htmlspecialchars(Get_Make($v['make_id'])); ?></td>
        <td><?= htmlspecialchars($v['model']); ?></td>
        <td><?= htmlspecialchars(get_type($v['type_id'])); ?></td>
        <td><?= htmlspecialchars(get_class_id($v['class_id'])); ?></td>
        <td><?= htmlspecialchars("$" . $v['price']); ?></td>

    </tr>
<?php endforeach ?>
<?php if (sizeof($vehicles) == 0) { ?>
    <tr>
        <td colspan="6"><b>No Vehicles with current filters</b></td>
    </tr>
<?php } ?>