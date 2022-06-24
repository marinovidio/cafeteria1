<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $referencia
 * @property int $precio
 * @property int $peso
 * @property string $categoría
 * @property int $stock
 * @property string $fecha
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'referencia', 'precio', 'peso', 'categoría', 'stock', 'fecha'], 'required'],
            [['precio', 'peso', 'stock'], 'integer'],
            [['fecha'], 'safe'],
            [['nombre', 'referencia', 'categoría'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'referencia' => 'Referencia',
            'precio' => 'Precio',
            'peso' => 'Peso',
            'categoría' => 'Categoría',
            'stock' => 'Stock',
            'fecha' => 'Fecha',
        ];
    }
}
