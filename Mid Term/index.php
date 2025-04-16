<?php
require_once(__DIR__ . "/Model/database.php");
require_once(__DIR__ . "/Model/vehicles_db.php");
require_once(__DIR__ . "/Model/class_db.php");
require_once(__DIR__ . "/Model/make_db.php");
require_once(__DIR__ . "/Model/type_db.php");

require_once(__DIR__ . "/Control/filter_vars.php");
?>

<?php include(__DIR__ . "/View/header.php"); ?>

<body>
    <?php include(__DIR__ . "/View/sell_table.php"); ?>
    </div>
    <?php include(__DIR__ . "/View/bottom_pad.php"); ?>
</body>

<?php include(__DIR__ . "/View/footer.php"); ?>