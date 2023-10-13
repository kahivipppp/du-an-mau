<?php 
// Viết CRUD database
function getAllCategory(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM categories");
    $stmt->execute();   
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function deleteCategory($id){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM categories WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();   
}

function addCategory($name){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO categories (name) VALUES (:name)");
    $stmt->bindParam(":name", $name);
    $stmt->execute();   
}

function getCategoryById($id){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM categories WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();   
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function updateCategory($id,$name){
    global $conn;
    $stmt = $conn->prepare("UPDATE categories set name=:name WHERE id=:id");
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":id", $id);
    $stmt->execute();   
}
?>