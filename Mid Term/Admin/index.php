<?php
require_once(__DIR__ . "/../Model/database.php");
require_once(__DIR__ . "/../Model/vehicles_db.php");
require_once(__DIR__ . "/../Model/class_db.php");
require_once(__DIR__ . "/../Model/make_db.php");
require_once(__DIR__ . "/../Model/type_db.php");

require_once(__DIR__ . "/../Control/filter_vars.php");


include(__DIR__ . "/View/admin_header.php");

//Switch to the different editing scenes
switch ($action) {
    case "edit_vehicles":
        $vehicles = get_vehicles();
        $classes = get_classes();
        $types = get_types();
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_vehicles.php");
        break;

    case "add_new_vehicle":
        vehicle_add($vehicle_year, $vehicle_model, $vehicle_price, $vehicle_type_id, $vehicle_class_id, $vehicle_make_id);
        $vehicles = get_vehicles();
        $classes = get_classes();
        $types = get_types();
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_vehicles.php");
        break;


    case "edit_types":
        $types = get_types();
        include(__DIR__ . "/Control/edit_types.php");
        break;

    case "edit_classes":
        $classes = get_classes();
        include(__DIR__ . "/Control/edit_classes.php");
        break;

    case "edit_makes":
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_makes.php");
        break;


    //Edit Makes
    case "add_make":
        add_make($make_text);
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_makes.php");
        break;

    case "update_make":
        update_make($make_id, $make_text);
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_makes.php");
        break;

    case "delete_make":
        delete_make($make_id);
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_makes.php");
        break;


    //Edit Types
    case "add_type":
        add_type($type_text);
        $types = get_types();
        include(__DIR__ . "/Control/edit_types.php");
        break;

    case "update_type":
        update_type($type_id, $type_text);
        $types = get_types();
        include(__DIR__ . "/Control/edit_types.php");
        break;

    case "delete_type":
        delete_type($type_id);
        $types = get_types();
        include(__DIR__ . "/Control/edit_types.php");
        break;


    //Edit Classes
    case "add_class":
        add_class($class_text);
        $classes = get_classes();
        include(__DIR__ . "/Control/edit_classes.php");
        break;

    case "update_class":
        update_class($class_id, $class_text);
        $classes = get_classes();
        include(__DIR__ . "/Control/edit_classes.php");
        break;

    case "delete_class":
        delete_class($class_id);
        $classes = get_classes();
        include(__DIR__ . "/Control/edit_classes.php");
        break;


    //Edit Vehicles
    case "update":
        vehicle_update($vehicle_id, $vehicle_year, $vehicle_model, $vehicle_price, $vehicle_type_id, $vehicle_class_id, $vehicle_make_id);
        $vehicles = get_vehicles();
        $classes = get_classes();
        $types = get_types();
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_vehicles.php");
        break;

    case "delete":
        vehicle_delete($vehicle_id);
        $vehicles = get_vehicles();
        $classes = get_classes();
        $types = get_types();
        $makes = get_makes();
        include(__DIR__ . "/Control/edit_vehicles.php");
        break;

    default:
?>
        <h2>Sample Table</h2>
<?php
        include(__DIR__ . "/../View/sell_table.php");
        include(__DIR__ . "/View/start_add_form.php");
        echo "</div>";
        include(__DIR__ . "/../View/bottom_pad.php");
        include(__DIR__ . "/View/admin_footer_table.php");
}
