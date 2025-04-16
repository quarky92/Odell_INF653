<?php
//Makes sure we have access to the database
require_once("database.php");

function get_classes()
{
    global $db;
    $query = "SELECT * FROM class";
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();

    return $classes;
}

function Get_class_id($id)
{
    global $db;
    $query = "SELECT Class from class WHERE ID = :id";
    $sql = $db->prepare($query);
    $sql->bindValue(":id", $id, PDO::PARAM_INT);
    $sql->execute();
    $class = $sql->fetch();
    $sql->closeCursor();

    return $class['Class'];
}


function add_class($class)
{
    global $db;
    $query = "INSERT INTO class (Class) VALUES (:class)";
    $statement = $db->prepare($query);
    $statement->bindValue(":class", $class, PDO::PARAM_STR);
    $statement->execute();
    $statement->closeCursor();
}

function update_class($id, $class)
{
    global $db;
    $query = "UPDATE class SET Class = :class WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":class", $class, PDO::PARAM_STR);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}

function delete_class($id)
{
    global $db;
    $query = "DELETE FROM class WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}
