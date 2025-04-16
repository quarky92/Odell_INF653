<form action="." method="post">
    <select name="class">
        <option value="">Classes</option>
        <?php foreach ($classes as $c) : ?>
            <option value="<?= htmlspecialchars($c['ID']); ?>"><?= htmlspecialchars($c['Class']); ?></option>
        <?php endforeach ?>
    </select>
    <select name="type">
        <option value="">Types</option>
        <?php foreach ($types as $t) : ?>
            <option value="<?= htmlspecialchars($t['ID']); ?>"><?= htmlspecialchars($t['Type']); ?></option>
        <?php endforeach ?>
    </select>
    <select name="make">
        <option value="">Makes</option>
        <?php foreach ($makes as $m) : ?>
            <option value="<?= htmlspecialchars($m['ID']); ?>"><?= htmlspecialchars($m['Make']); ?></option>
        <?php endforeach ?>
    </select>

    <button name="action" value="filter">Filter</button>
</form>