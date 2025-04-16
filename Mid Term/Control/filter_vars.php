<?php
//Input Vars
$sort_by = filter_input(INPUT_POST, "sort_type", FILTER_SANITIZE_SPECIAL_CHARS) ?: "price";
$sort_last = filter_input(INPUT_POST, "sort_last", FILTER_SANITIZE_SPECIAL_CHARS) ?: "model";

//Filter Values
$filter_make = filter_input(INPUT_POST, "make", FILTER_SANITIZE_SPECIAL_CHARS) ?: null;
$filter_type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_SPECIAL_CHARS) ?: null;
$filter_class = filter_input(INPUT_POST, "class", FILTER_SANITIZE_SPECIAL_CHARS) ?: null;

$action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_SPECIAL_CHARS) ?: "sort";

//Vars for editing
$extra = filter_input(INPUT_POST, "extra", FILTER_VALIDATE_INT) ?: 0;
$vehicle_id = filter_input(INPUT_POST, "vehicle_id", FILTER_VALIDATE_INT) ?: 0;

$vehicle_make_id = filter_input(INPUT_POST, "vehicle_make", FILTER_VALIDATE_INT) ?: 0;
$vehicle_class_id = filter_input(INPUT_POST, "vehicle_class", FILTER_VALIDATE_INT) ?: 0;
$vehicle_type_id = filter_input(INPUT_POST, "vehicle_type", FILTER_VALIDATE_INT) ?: 0;

$vehicle_price = filter_input(INPUT_POST, "vehicle_price", FILTER_VALIDATE_INT) ?: 0;
$vehicle_model = filter_input(INPUT_POST, "vehicle_model", FILTER_SANITIZE_SPECIAL_CHARS) ?: "";
$vehicle_year = filter_input(INPUT_POST, "vehicle_year", FILTER_VALIDATE_INT) ?: 0;

//Vars for Makes
$make_id = filter_input(INPUT_POST, "make_id", FILTER_VALIDATE_INT) ?: 0;
$make_text = filter_input(INPUT_POST, "make_text", FILTER_SANITIZE_SPECIAL_CHARS) ?: "";

//Vars for Types
$type_id = filter_input(INPUT_POST, "type_id", FILTER_VALIDATE_INT) ?: 0;
$type_text = filter_input(INPUT_POST, "type_text", FILTER_SANITIZE_SPECIAL_CHARS) ?: "";

//Vars for class
$class_id = filter_input(INPUT_POST, "class_id", FILTER_VALIDATE_INT) ?: 0;
$class_text = filter_input(INPUT_POST, "class_text", FILTER_SANITIZE_SPECIAL_CHARS) ?: "";
