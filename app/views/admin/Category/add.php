<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новая категория
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/category"></a>Список категорий</li>
        <li class="active"></a>Новая категория</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

                    <form action="<?=ADMIN;?>/category/add" method="post" data-toggle="validator">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <lable for="title">Наименование категории</lable>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" required>
                                <span class="glyphicon form-control-feedback"></span>
                            </div>

                            <div class="form-group">
                                <lable for="parent_id">Родителская категория</lable>
                                    <?php new \app\widgets\menu\Menu([
                                        'tpl' => WWW . '/menu/select.php',
                                        'container' => 'select',
                                        'cache' => 0,
                                        'cacheKey' => 'admin_select',
                                        'class' => 'form-control',
                                        'attrs' => [
                                            'name' => 'parent_id',
                                            'id' => 'parent_id',
                                        ],
                                        'prepend' => '<option value="0">Самостоятельная категория</option>',
                                    ]) ?>
                            </div>

                            <div class="form-group has-feedback">
                                <lable for="keywords">Ключевые слова</lable>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <lable for="description">Описание</lable>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success"> Добавить</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>

</section>
<!-- /.content --><?php
