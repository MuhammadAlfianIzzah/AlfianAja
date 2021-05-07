<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembeli".
 *
 * @property int $id_pembeli
 * @property string $nama_pembeli
 * @property string|null $jk
 * @property string|null $no_telp
 * @property string|null $alamat
 *
 * @property Transaksi[] $transaksis
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pembeli'], 'required'],
            [['nama_pembeli'], 'string', 'max' => 30],
            [['jk'], 'string', 'max' => 1],
            [['no_telp'], 'string', 'max' => 14],
            [['alamat'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembeli' => 'Id Pembeli',
            'nama_pembeli' => 'Nama Pembeli',
            'jk' => 'Jk',
            'no_telp' => 'No Telp',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_pembeli' => 'id_pembeli']);
    }
}
