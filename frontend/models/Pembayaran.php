<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property string|null $tgl_bayar
 * @property int|null $total_bayar
 * @property int|null $id_transaksi
 *
 * @property Transaksi $transaksi
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_bayar'], 'safe'],
            [['total_bayar', 'id_transaksi'], 'integer'],
            [['id_transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksi::className(), 'targetAttribute' => ['id_transaksi' => 'id_transaksi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'tgl_bayar' => 'Tgl Bayar',
            'total_bayar' => 'Total Bayar',
            'id_transaksi' => 'Id Transaksi',
        ];
    }

    /**
     * Gets query for [[Transaksi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id_transaksi' => 'id_transaksi']);
    }
}
