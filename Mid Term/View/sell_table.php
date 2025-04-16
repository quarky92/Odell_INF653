    <div class="sell_table">
        <?php
        switch ($action) {

            case "sort":
                $vehicles = vehicle_sort($sort_by, $sort_last);
                break;

            case "filter":
                $vehicles = vehicle_filter($filter_make, $filter_class, $filter_type);
                break;
        }
        include(__DIR__ . "/../Control/sort_price.php");
        $classes = get_classes();
        $types = get_types();
        $makes = get_makes();
        ?>
        <div class="css-filter">
            <?php
            include(__DIR__ . "/../Control/filter_cars.php");
            ?>
        </div>