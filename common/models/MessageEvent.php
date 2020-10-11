<?php
/**
 * Created by PhpStorm.
 * User: derwin
 * Date: 22.09.2018
 * Time: 18:09
 */

namespace  common\models;

class MessageEvent extends \yii\base\Event{
    public $subject;
    public $text;
    public $htmlMessage;
}