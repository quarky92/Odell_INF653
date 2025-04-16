<?php
//Makes sure we have access to the database
require_once(__DIR__ . "/database.php");
$dir = false;

function get_vehicles()
{
    global $db;
    $query = "SELECT * FROM vehicles";
    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();

    return $vehicles;
}

function vehicle_sort($sort, $sort_last)
{
    global $db;
    //Make sure sort is a valid column
    $valid = ['year', 'price'];
    $sort = in_array($sort, $valid) ? $sort : 'price';

    if ($sort == $sort_last) {
        $query = "SELECT * from vehicles ORDER BY $sort";
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    } else {
        $query = "SELECT * from vehicles ORDER BY $sort DESC";
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }
}

function vehicle_filter($make, $class, $type)
{
    if ($make == "" && $class == "" && $type == "") {
        return vehicle_sort("price", "year");
    }

    global $db;
    //Crazy Query
    $query = "SELECT * from vehicles WHERE " . ($make != "" ? "make_id = :make"   : "") . ($class != "" ? ($make != "" ? " AND " : "") . "class_id = :class" : "") . ($type != "" ? ($class != "" || $make != "" ? " AND " : "") . "type_id = :type" : "");
    _log($query);
    $statement = $db->prepare($query);
    if ($make != "")
        $statement->bindValue(":make", $make, PDO::PARAM_INT);
    if ($class != "")
        $statement->bindValue(":class", $class, PDO::PARAM_INT);
    if ($type != "")
        $statement->bindValue(":type", $type, PDO::PARAM_INT);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
}

function vehicle_update($id, $year, $model, $price, $type_id, $class_id, $make_id)
{
    global $db;
    $query = "UPDATE vehicles SET year = :year , model = :model , price = :price , type_id = :type_id , class_id = :class_id , make_id = :make_id WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->bindValue(":year", $year, PDO::PARAM_INT);
    $statement->bindValue(":model", $model, PDO::PARAM_STR);
    $statement->bindValue(":price", $price, PDO::PARAM_INT);
    $statement->bindValue(":type_id", $type_id, PDO::PARAM_INT);
    $statement->bindValue(":class_id", $class_id, PDO::PARAM_INT);
    $statement->bindValue(":make_id", $make_id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}

function vehicle_delete($id)
{
    global $db;
    $query = "DELETE FROM vehicles WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}


function vehicle_add($year, $model, $price, $type_id, $class_id, $make_id)
{
    global $db;
    $query = "INSERT INTO vehicles (year,model,price,type_id,class_id,make_id) VALUES ( :year ,:model , :price , :type_id , :class_id , :make_id )";
    $statement = $db->prepare($query);
    $statement->bindValue(":year", $year, PDO::PARAM_INT);
    $statement->bindValue(":model", $model, PDO::PARAM_STR);
    $statement->bindValue(":price", $price, PDO::PARAM_INT);
    $statement->bindValue(":type_id", $type_id, PDO::PARAM_INT);
    $statement->bindValue(":class_id", $class_id, PDO::PARAM_INT);
    $statement->bindValue(":make_id", $make_id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}
