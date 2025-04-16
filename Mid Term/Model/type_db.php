<?php
//Makes sure we have access to the database
require_once("database.php");

function get_types()
{
    global $db;
    $query = "SELECT * FROM type";
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();

    return $types;
}

function get_type($id)
{
    global $db;
    $query = "SELECT Type from type WHERE ID = :id";
    $sql = $db->prepare($query);
    $sql->bindValue(":id", $id, PDO::PARAM_INT);
    $sql->execute();
    $type = $sql->fetch();
    $sql->closeCursor();

    return $type['Type'];
}

function add_type($type)
{
    global $db;
    $query = "INSERT INTO type (Type) VALUES (:type)";
    $statement = $db->prepare($query);
    $statement->bindValue(":type", $type, PDO::PARAM_STR);
    $statement->execute();
    $statement->closeCursor();
}

function update_type($id, $type)
{
    global $db;
    $query = "UPDATE type SET Type = :type WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":type", $type, PDO::PARAM_STR);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}

function delete_type($id)
{
    global $db;
    $query = "DELETE FROM type WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}
