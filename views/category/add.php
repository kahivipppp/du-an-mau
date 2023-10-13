<?php include 'views/layout/admin/header.php'?>
<h3>Thêm danh mục</h3>
<form action="<?php echo $BASE_URL ?>/postaddcate" method='post'>
    <input type="text" name='txtName'>
    <button>Add</button>
</form>
<?php include 'views/layout/admin/footer.php'?>