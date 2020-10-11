<?php
namespace frontend\controllers;

use app\models\MessageModel;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMessage()
    {
        $request = \Yii::$app->request->post();
        if ($request['send-btn'] == 'submit-add-message-form') {
            $message = new MessageModel();
            $message->message = $request['message'];
            $tel = $request['tel'];
            $tel = preg_replace('![^0-9]+!', '', $tel);
            $message->tel =$tel;

            $message->name = $request['name'];
            $message->ip = \Yii::$app->request->userIP;
            if ($message->save() === false) {
                $errors = $message->errors;
//                Array
//                (
//                    [tel] => Array
//                    (
//                        [0] => Необходимо заполнить «телефон».
//                    )
//
//                    [name] => Array
//                    (
//                        [0] => Необходимо заполнить «имя».
//                    )
//
//                    [message] => Array
//                    (
//                        [0] => Необходимо заполнить «сообщение».
//                    )
//
//                )
            }
            return $this->render('success', ['errors' => $errors]);
        }
    }
}
