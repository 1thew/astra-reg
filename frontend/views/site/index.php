<?php

/* @var $this yii\web\View */

use yii\widgets\MaskedInput;

$this->title = 'My Yii Application';
//AppAsset::register($this);  // $this - представляет собой объект представления


?>
<div class="content">
    <div class="container">
        <div class="forma">
            <form id="message-form" action="message" method="post" name="form-add-message" autocomplete="off">
                <input type="hidden" name="<?php echo Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                <h2>Оставьте заявку нашему администратору. Он вам перезвонит в течении 4х часов и уточнит всю необходимую информацию</h2>
                <div class="group">
                    <input type="text" placeholder="Как к Вам обращаться?" name="name" id="name">
                    <label for="name">Имя</label>
                </div>
                <div class="group">
                    <?php echo MaskedInput::widget([
                        'clientOptions'=> [
                            //'type'=>'tel',

                        ],
                    'options'=>[
                        'class'=>'',
                        'placeholder'=>"Ваш мобильный телефон",
                    ],
                    'id'=>'tel',
                    'name' => 'tel',
                    'mask' => '+7 (999) 999-9999',
                    ]);?>
                    <label for="tel">Телефон</label>
                </div>

                <div class="group">
                    <textarea name="message" placeholder="По желанию, можно оставить дополнительную информацию администратору клиники. Это необязательно." id="declaration"></textarea>
                </div>

                <button id="submit_button" type="submit" value="submit-add-message-form" name="send-btn" class="btn btn-primary btn-lg ">Отправить администратору</button>
            </form>
        </div>
    </div>
</div>