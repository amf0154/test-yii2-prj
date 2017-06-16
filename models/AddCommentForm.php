<?php
namespace app\models;
use Yii;
use yii\base\Model;

/**
 * Description of AddCommentForm
 *
 * @author Gleb
 */
class AddCommentForm extends Model{
    public $login;
    public $comment;
    
        public function rules()
    {
        return [
            [['login', 'comment'], 'required','message'=>'Empty form']
            // email has to be a valid email address
        ];
    }
}
