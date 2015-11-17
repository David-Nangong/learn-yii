<?php
/**
 * Created by PhpStorm.
 * User: ysyc
 * Date: 2015/11/16
 * Time: 17:24
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}