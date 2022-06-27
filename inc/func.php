<?php

function delete_object(): void
{
    if(isset($_GET['del']))
    {
        $id = $_GET['del'];
        global $pdo;
        $pdo->query("DELETE FROM objects WHERE id=".$id);
       // header('Location: /admin.php');
    }    
}


function debug(array $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function get_objects(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM objects");
    return $res->fetchAll();
}

function get_object()
{
    if(isset($_GET['editid']))
    {
        global $pdo;
        $id = $_GET['editid'];
        $res = $pdo->query("SELECT * FROM objects WHERE id=".$id);
        return $res->fetch();
    }
}

function get_categorys(): array
{
    global $pdo;
    $res = $pdo->query("SELECT * FROM categorys");
    return $res->fetchAll();
}

function get_category(int $id): string
{
    global $pdo;
    $res = $pdo->query("SELECT name FROM categorys WHERE id=".$id);
    return $res->fetchColumn();

}

function add_object(): void
{
    if(isset($_POST['button_add']) and isset($_POST['name']) and isset($_POST['img']) and isset($_POST['category'])){
        global $pdo;
        $name = $_POST['name'];
        $img = $_POST['img'];
        $categoryName = $_POST['category'];
        $categoryId = $pdo->query("SELECT id FROM categorys WHERE name ='$categoryName'");
        $categoryId= $categoryId->fetchColumn();
        $pdo->query("INSERT INTO objects (name, img, categoryId) VALUES ('$name', '$img', '$categoryId')");
    }
}

function update_object(): void
{
    if(isset($_POST['button_up'])){
        global $pdo;
        $id=$_GET['editid'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        var_dump($img);
        $categoryName = $_POST['category'];
        $categoryId = $pdo->query("SELECT id FROM categorys WHERE name ='$categoryName'");
        $categoryId= $categoryId->fetchColumn();
        $pdo->query("UPDATE objects SET name='$name', categoryId='$categoryId' WHERE id='$id'");
        if($_POST['img']!="") $pdo->query("UPDATE objects SET img='$img'WHERE id='$id'");
        header('Location: /admin.php');
    }
}