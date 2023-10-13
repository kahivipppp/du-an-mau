<?php include 'views/layout/admin/header.php'?>
<h3>Sửa danh mục</h3>
<form action="<?php echo $BASE_URL ?>/updatecate/<?php echo $category['id'] ?>" method='post'>
    <input type="text" name='txtName' value="<?php echo $category['name'] ?>">
    <button>Update</button>
</form>
<?php include 'views/layout/admin/footer.php'?>