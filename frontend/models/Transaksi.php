<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int|null $id_barang
 * @property int|null $id_pembeli
 * @property string|null $tanggal
 * @property string|null $keterangan
 *
 * @property Pembayaran[] $pembayarans
 * @property Barang $barang
 * @property Pembeli $pembeli
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'id_pembeli'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 100],
            [['id_barang'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id_barang' => 'id_barang']],
            [['id_pembeli'], 'exist', 'skipOnError' => true, 'targetClass' => Pembeli::className(), 'targetAttribute' => ['id_pembeli' => 'id_pembeli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_barang' => 'Id Barang',
            'id_pembeli' => 'Id Pembeli',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Pembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::className(), ['id_transaksi' => 'id_transaksi']);
    }

    /**
     * Gets query for [[Barang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarang()
    {
        return $this->hasOne(Barang::className(), ['id_barang' => 'id_barang']);
    }

    /**
     * Gets query for [[Pembeli]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembeli()
    {
        return $this->hasOne(Pembeli::className(), ['id_pembeli' => 'id_pembeli']);
    }
}
