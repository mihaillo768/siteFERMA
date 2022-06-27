<?php
error_reporting(-1);
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/func.php';
$objects = get_objects();
$categorys = get_categorys();

?>
<!DOCTYPE html>
<html>
<head>	
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="utf-8" />		
    <meta name="keywords" content="" />	
    <meta name="description" content="" />	
	<meta content="width=960" name="viewport">
	<meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="/favicon.png">
	<title>Продукт</title>
	
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
    <div style="margin: 10px">Все объекты:</div>
    <table style="margin: 10px" class="table table-bordered">
    <thead>
        <tr>        
        <th scope="col">Объект</th>
        <th scope="col">Изображение</th>
        <th scope="col">Категория</th>
        </tr>
    </thead>
    <tbody>
            <?php if(!empty($objects)): ?>
                <?php foreach ($objects as $object): ?>
                    <tr>
                        <td><?= $object['name'] ?></td>
                        <td><img width="100" height="100" src="img/<?php echo $object['img']; ?>"></td>
                        <td>
                            <?= get_category($object['categoryId']) ?>
                            <div class="d-flex flex-row-reverse">
                                <a style="margin-right:10px" href="?del=<?= $object['id']?>">
                                <?php delete_object(); ?>
                                Удалить
                                </a>
                                <a style="margin-right:10px" href="?editid=<?= $object['id']?>">
                                <?php get_object(); ?>
                                Редактировать
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>        
            <?php endif; ?>
    </tbody>
    </table>

    <div class="d-flex justify-content">
        <div style="margin: 10px">Добавление объекта:
            <form method="POST" style="margin: 10px" action="/admin.php/?add">
                <a>Введите название</a>
                <input name="name" class="form-control" type="text" value="" aria-label="readonly input example">
                <div style="margin-top: 10px" class="mb-3">
                    <label for="formFile" class="form-label">Выберите изображение для объекта из окружения site/img</label>
                    <input name="img" class="form-control" type="file" id="formFile">
                </div>
                <a>Введите категорию</a>
                <input name="category" style="margin-top: 10px" class="form-control" type="text" aria-label="readonly input example">
                <input name="button_add" type="submit" style="margin-top: 10px" type="button" class="btn btn-primary" onclick="location.href='/admin.php'" value="Добавить"<?php add_object(); ?>>
            </form>
        </div>
        <div style="margin: 10px">Редактирование объекта:
        <?php 
            $object = get_object();
            if($object){
                $name = $object['name'];
                $img = $object['img'];
                $category = get_category($object['categoryId']);
            }
        ?>
            <form method="POST" style="margin: 10px">
                <input name="name" class="form-control" type="text" value="<?php if(isset($_GET['editid'])){ echo $object['name']; }?>" aria-label="input example">
                <div style="margin-top: 10px" class="d-flex justify-content-between">
                    <div>
                        <img width="100" height="100" src="img/<?php if(isset($_GET['editid'])){ echo $object['img']; }?>">
                        <label for="formFile" class="form-label">Текущее изображение</label>
                    </div>
                    <div style="margin-left: 10px">
                        <label for="formFile" class="form-label">Выберите изображение для объекта из окружения site/img</label>
                        <input name="img" class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <input name="category" style="margin-top: 10px" class="form-control" type="text" value="<?php if(isset($_GET['editid'])){ echo get_category($object['categoryId']);} ?>" aria-label="input example">
                <input name="button_up" type="submit" style="margin-top: 10px" type="button" class="btn btn-primary" value="Редактировать"<?php update_object(); ?>>
            </form>
        </div>
    </div>

</body>
</html>