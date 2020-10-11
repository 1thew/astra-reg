<?php
/**
 * Created by PhpStorm.
 * User: derwin
 * Date: 22.09.2018
 * Time: 17:51
 */


namespace common\components;


use common\models\MessageEvent;
use yii\base\Component;
use Yii;
use yii\base\Event;

class EmailService extends Component
{
    /* @param EmailEvent $event */
    public function sendNotifyAdmin(MessageEvent $event){
        Yii::$app->mailer->compose()
            ->setFrom(['site@astra22.ru'])
            ->setTo('derwin@astra22.ru')
            ->setSubject($event->subject)
            ->setTextBody($event->text)
            ->setHtmlBody($event->htmlMessage)
            ->send();
    }
}