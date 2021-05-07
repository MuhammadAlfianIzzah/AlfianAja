<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id_supplier
 * @property string $nama_supplier
 * @property string|null $no_telp
 * @property string|null $alamat
 *
 * @property Barang[] $barangs
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_supplier'], 'required'],
            [['nama_supplier'], 'string', 'max' => 30],
            [['no_telp'], 'string', 'max' => 13],
            [['alamat'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'nama_supplier' => 'Nama Supplier',
            'no_telp' => 'No Telp',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Barangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_supplier' => 'id_supplier']);
    }
}
