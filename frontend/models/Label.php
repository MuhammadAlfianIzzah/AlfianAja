<?php

namespace frontend\models;

use yii\base\Model;

class Label extends Model
{
    public $nama;
    public $email;
    public $no_hp;
    public $file;
    public function rules()
    {
        return [
            [["file"], "file", 'extensions' => 'png, jpg, jpeg, gift'],
            [["nama", "email", "no_hp", "file"], "required"],
            [["email"], "email"]
        ];
    }
}
