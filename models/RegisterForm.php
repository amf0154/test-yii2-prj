<?php
namespace app\models;
use Yii;
use yii\base\Model;

/**
 * Description of RegisterForm
 *
 * @author Gleb
 */
class RegisterForm extends Model {
    public $login;
    public $email;
    public $password;
    
    public function rules(){
        return [
            [['login','email','password'],'required','message'=>'Empty form'],  // required = обязательно к заполнению.
            ['email','email','message'=>'Incorrect email']
        ];
    }
    
    
    
}
