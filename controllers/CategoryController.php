<?php 
// Logic
include "models/category.php";
switch($action){
    case 'category':
        $categories=getAllCategory();        
        include 'views/category/list.php';
        break;
    case 'postaddcate':
        $name=$_POST['txtName'];
        addCategory($name);
        header("location: $BASE_URL/category");
        break;
    case 'deletecategory':
        $id=$_GET['id'];
        deleteCategory($id);
        header("location: $BASE_URL/category");
        break;
    case 'addcategory':
        include 'views/category/add.php';
        break;
    case 'editcategory':
        $id=$_GET['id'];
        $category=getCategoryById($id);
        include 'views/category/edit.php';
        break;
    case 'updatecate':
        $name=$_POST['txtName'];
        $id=$_GET['id'];
        updateCategory($id, $name);
        header("location: $BASE_URL/category");
        break;
    default:
        $notfound=true;
        break;
}

?>