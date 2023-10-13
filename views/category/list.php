<?php include 'views/layout/admin/header.php'?>
<h3>Danh mục</h3>
<a href="<?php echo $BASE_URL ?>/addcategory">Add</a>
<ul>
    <?php foreach($categories as $category) {?>
        <li><?php echo $category['name']?>
            <a href="<?php echo $BASE_URL ?>/editcategory/<?php echo $category['id']?>" class="btn btn-primary">Sửa</a>
            <a href="<?php echo $BASE_URL ?>/deletecategory/<?php echo $category['id']?>" class="btn btn-danger">Xóa</a>
        </li>
    <?php }?>
</ul>
<?php include 'views/layout/admin/footer.php'?>