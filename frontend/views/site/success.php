<?php
/* @var $this yii\web\View */
/* @var $errors array */
use yii\helpers\Html;
?>
<div class="content">
    <div class="container">
        <?php if (is_array($errors)) {
            foreach ($errors as $error) : ?>
                <div class="alert">
                    <strong>Ошибка! </strong>
                    <?php echo $error[0] ?>
                </div>

            <?php endforeach;
            echo Html::a('Вернуться назад', ['/'], ['class'=> 'btn btn-primary btn-large'])
            ?>
        <?php
        } else { ?>
        <div class="alert success">
            <strong>Ваш запрос обработан! </strong>
            Скоро с Вами свяжется администратор клиники! ожидайте звонка!
            <p>Заявки обрабатываются в рабочее время (с 8 до 20 часов)</p>
        </div>
        <?php } ?>
    </div>
</div>