<?php
//Makes sure we have access to the database
require_once("database.php");

function Get_Make($id)
{
    global $db;
    $query = "SELECT Make from make WHERE ID = :id";
    $sql = $db->prepare($query);
    $sql->bindValue(":id", $id, PDO::PARAM_INT);
    $sql->execute();
    $make = $sql->fetch();
    $sql->closeCursor();

    return $make['Make'];
}

function get_makes()
{
    global $db;
    $query = "SELECT * FROM make";
    $statement = $db->prepare($query);
    $statement->execute();
    $makes = $statement->fetchAll();
    $statement->closeCursor();

    return $makes;
}

function add_make($make)
{
    global $db;
    $query = "INSERT INTO make (Make) VALUES (:make)";
    $statement = $db->prepare($query);
    $statement->bindValue(":make", $make, PDO::PARAM_STR);
    $statement->execute();
    $statement->closeCursor();
}

function update_make($id, $make)
{
    global $db;
    $query = "UPDATE make SET Make = :make WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":make", $make, PDO::PARAM_STR);
    $statement->bindValue("id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}

function delete_make($id)
{
    global $db;
    $query = "DELETE FROM make WHERE ID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id, PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor();
}
